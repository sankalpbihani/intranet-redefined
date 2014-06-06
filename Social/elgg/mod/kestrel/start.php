<?php

function kestrel_theme_init() {
	/**
	 * Customize pages
	 */
	elgg_register_plugin_hook_handler('index', 'system', 'kestrel_theme_index_handler');
	elgg_register_page_handler('profile', 'kestrel_theme_profile_page_handler');
	elgg_register_page_handler('dashboard', 'kestrel_theme_dashboard_handler');
	
	//What a hack!  Overriding groups page handler without blowing away other plugins doing the same
	global $CONFIG, $kestrel_theme_original_groups_page_handler;
	$kestrel_theme_original_groups_page_handler = $CONFIG->pagehandler['groups'];
	elgg_register_page_handler('groups', 'kestrel_theme_groups_page_handler');
	
	elgg_register_ajax_view('thewire/composer');
	elgg_register_ajax_view('messageboard/composer');
	elgg_register_ajax_view('blog/composer');
	elgg_register_ajax_view('file/composer');
	elgg_register_ajax_view('bookmarks/composer');
	
	/**
	 * Customize menus
	 */
	elgg_unregister_plugin_hook_handler('register', 'menu:river', 'likes_river_menu_setup');
	elgg_unregister_plugin_hook_handler('register', 'menu:river', 'elgg_river_menu_setup');
	
	elgg_register_plugin_hook_handler('register', 'menu:river', 'kestrel_theme_river_menu_handler');
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'kestrel_theme_owner_block_menu_handler', 600);
	elgg_register_plugin_hook_handler('register', 'menu:composer', 'kestrel_theme_composer_menu_handler');
	
	elgg_register_event_handler('pagesetup', 'system', 'kestrel_theme_pagesetup_handler', 1000);
	
	/**
	 * Customize permissions
	 */
	elgg_register_plugin_hook_handler('permissions_check:annotate', 'all', 'kestrel_theme_annotation_permissions_handler');
	elgg_register_plugin_hook_handler('container_permissions_check', 'all', 'kestrel_theme_container_permissions_handler');
	
	/**
	 * Miscellaneous customizations
	 */
	//Small "correction" to groups profile -- brief description makes more sense to come first!
	elgg_register_plugin_hook_handler('profile:fields', 'group', 'kestrel_theme_group_profile_fields', 1);
	//@todo report some of the extra patterns to be included in Elgg core
	elgg_extend_view('css/elgg', 'kestrel_theme/css');
	elgg_extend_view('js/elgg', 'js/topbar');
	
	//Likes summary bar -- "You, John, and 3 others like this"
	if (elgg_is_active_plugin('likes')) {
		elgg_extend_view('river/elements/responses', 'likes/river_footer', 1);
	}
	
	elgg_extend_view('river/elements/responses', 'discussion/river_footer');
	
	//Elgg only includes the search bar in the header by default,
	//but we usually don't show the header when the user is logged in
	if (elgg_is_active_plugin('search')) {
		elgg_extend_view('page/elements/topbar', 'search/search_box');
		elgg_unextend_view('page/elements/header', 'search/search_box');
		
		if (!elgg_is_logged_in()) {
			elgg_unextend_view('page/elements/header', 'search/header');
		}
	}
}

if (elgg_is_active_plugin('messages')) {
	elgg_unextend_view('css/elgg', 'messages/css');
	elgg_extend_view('css/elgg', 'messages/css');
}

if (elgg_is_active_plugin('tinymce')) {
	elgg_unregister_js('elgg.tinymce');
	elgg_register_simplecache_view('js/tinymce');
	elgg_register_js('elgg.tinymce', elgg_get_simplecache_url('js', 'tinymce'));
	elgg_unextend_view('css/elgg', 'tinymce/css');

	elgg_unregister_plugin_hook_handler('register', 'menu:longtext', 'tinymce_longtext_menu');
	function tinymce_longtext_menu2($hook, $type, $items, $vars) {
	
	$items[] = ElggMenuItem::factory(array(
		'name' => 'tinymce_toggler',
		'link_class' => 'tinymce-toggle-editor elgg-longtext-control',
		'href' => "#{$vars['id']}",
		'text' => elgg_echo('tinymce:addorremove'),
	));
	
	return $items;
}
	elgg_register_plugin_hook_handler('register', 'menu:longtext', 'tinymce_longtext_menu2');
}
if (elgg_is_active_plugin('thewire')) {
	elgg_unextend_view('css/elgg', 'thewire/css');
	elgg_extend_view('css/elgg', 'thewire/css');

	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'thewire_owner_block_menu');
	function thewire_owner_block_menu2($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "thewire/owner/{$params['entity']->username}";
		$item = new ElggMenuItem('thewire', elgg_view_icon('share') . elgg_echo('item:object:thewire'), $url);
		$return[] = $item;
	}

	return $return;
}
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'thewire_owner_block_menu2');

	elgg_unregister_action("thewire/add");
	$action_base = elgg_get_plugins_path() . 'kestrel/actions';
	elgg_register_action("thewire/add", "$action_base/add.php");
	function thewire_save_post2($text, $userid, $access_id, $parent_guid = 0, $method = "site") {
	$post = new ElggObject();

	$post->subtype = "thewire";
	$post->owner_guid = $userid;
	$post->access_id = $access_id;

	// only 200 characters allowed
	$text = elgg_substr($text, 0, 200);

	// no html tags allowed so we escape
	$post->description = htmlspecialchars($text, ENT_NOQUOTES, 'UTF-8');

	$post->method = $method; //method: site, email, api, ...

	$tags = thewire_get_hashtags($text);
	if ($tags) {
		$post->tags = $tags;
	}

	// must do this before saving so notifications pick up that this is a reply
	if ($parent_guid) {
		$post->reply = true;
	}

	$guid = $post->save();

	// set thread guid
	if ($parent_guid) {
		$post->addRelationship($parent_guid, 'parent');
		
		// name conversation threads by guid of first post (works even if first post deleted)
		$parent_post = get_entity($parent_guid);
		$post->wire_thread = $parent_post->wire_thread;
	} else {
		// first post in this thread
		$post->wire_thread = $guid;
	}

	if ($guid) {
		add_to_river('river/object/thewire/create', 'create', $post->owner_guid, $post->guid);

		// let other plugins know we are setting a user status
		$params = array(
			'entity' => $post,
			'user' => $post->getOwnerEntity(),
			'message' => $post->description,
			'url' => $post->getURL(),
			'origin' => 'thewire',
		);
		elgg_trigger_plugin_hook('status', 'user', $params);
	}
	
	return $guid;
}

}

if (elgg_is_active_plugin('pages')) {
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'pages_owner_block_menu');
	function pages_owner_block_menu2($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "pages/owner/{$params['entity']->username}";
		$item = new ElggMenuItem('pages', elgg_view_icon('list') . elgg_echo('pages'), $url);
		$return[] = $item;
	} else {
		if ($params['entity']->pages_enable != "no") {
			$url = "pages/group/{$params['entity']->guid}/all";
			$item = new ElggMenuItem('pages', elgg_view_icon('list') . elgg_echo('pages:group'), $url);
			$return[] = $item;
		}
	}

	return $return;
	}
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'pages_owner_block_menu2');
}
if (elgg_is_active_plugin('file')) {

	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'file_owner_block_menu');

	function file_owner_block_menu2($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "file/owner/{$params['entity']->username}";
		$item = new ElggMenuItem('file', elgg_view_icon('clip') . elgg_echo('file'), $url);
		$return[] = $item;
	} else {
		if ($params['entity']->file_enable != "no") {
			$url = "file/group/{$params['entity']->guid}/all";
			$item = new ElggMenuItem('file', elgg_view_icon('clip') . elgg_echo('file:group'), $url);
			$return[] = $item;
		}
	}

	return $return;
	}

	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'file_owner_block_menu2');
}

if (elgg_is_active_plugin('blog')) {

	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'blog_owner_block_menu');
	function blog_owner_block_menu2($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "blog/owner/{$params['entity']->username}";
		$item = new ElggMenuItem('blog', elgg_view_icon('speech-bubble-alt') . elgg_echo('blog'), $url);
		$return[] = $item;
	} else {
		if ($params['entity']->blog_enable != "no") {
			$url = "blog/group/{$params['entity']->guid}/all";
			$item = new ElggMenuItem('blog', elgg_view_icon('speech-bubble-alt') . elgg_echo('blog:group'), $url);
			$return[] = $item;
		}
	}

	return $return;
	}
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'blog_owner_block_menu2');
}

if (elgg_is_active_plugin('bookmarks')) {
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'bookmarks_owner_block_menu');

	function bookmarks_owner_block_menu2($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "bookmarks/owner/{$params['entity']->username}";
		$item = new ElggMenuItem('bookmarks', elgg_view_icon('link') . elgg_echo('bookmarks'), $url);
		$return[] = $item;
	} else {
		if ($params['entity']->bookmarks_enable != 'no') {
			$url = "bookmarks/group/{$params['entity']->guid}/all";
			$item = new ElggMenuItem('bookmarks', elgg_view_icon('link') . elgg_echo('bookmarks:group'), $url);
			$return[] = $item;
		}
	}

	return $return;
	}

	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'bookmarks_owner_block_menu2');
}

function kestrel_theme_groups_page_handler($segments, $handle) {
	$pages_dir = dirname(__FILE__) . '/pages';

	switch ($segments[0]) {
		case 'profile':
			elgg_set_page_owner_guid($segments[1]);
			require_once "$pages_dir/groups/wall.php";
			break;
			
		case 'info':
			elgg_set_page_owner_guid($segments[1]);
			require_once "$pages_dir/groups/info.php";
			break;
			
		case 'discussion':
			elgg_set_page_owner_guid($segments[1]);
			require_once "$pages_dir/groups/discussion.php";
			break;
			
		default:
			global $kestrel_theme_original_groups_page_handler;
			return call_user_func($kestrel_theme_original_groups_page_handler, $segments, $handle);
	}
	return true;
}

function kestrel_theme_pagesetup_handler() {
	$owner = elgg_get_page_owner_entity();

	if (elgg_is_logged_in()) {
		$user = elgg_get_logged_in_user_entity();
		elgg_register_menu_item('page', array(
			'name' => 'news',
			'text' => elgg_view_icon('push-pin') . elgg_echo('newsfeed'),
			'href' => '/dashboard',
			'priority' => 100,
			'contexts' => array('dashboard'),
		));
		
		if (elgg_is_active_plugin('messages')) {
			elgg_register_menu_item('page', array(
				'name' => 'messages',
				'text' => elgg_view_icon('mail') . elgg_echo('messages'),
				'href' => "/messages/inbox/$user->username",
				'contexts' => array('dashboard'),
			));
		}
		
		elgg_register_menu_item('page', array(
			'name' => 'friends',
			'text' => elgg_view_icon('users') . elgg_echo('friends'),
			'href' => "/friends/$user->username",
			'priority' => 500,
			'contexts' => array('dashboard'),
		));
	
		if ($owner instanceof ElggUser && $owner->guid != $user->guid) {
			
			if (check_entity_relationship($user->guid, 'friend', $owner->guid)) {
				elgg_register_menu_item('extras', array(
					'name' => 'removefriend',
					'text' => elgg_echo('friend:remove'),
					'href' => "/action/friends/remove?friend=$owner->guid",
					'is_action' => TRUE,
					'contexts' => array('profile'),
				));
			} else {
				elgg_register_menu_item('title', array(
					'name' => 'addfriend',
					'text' => elgg_view_icon('addfriend') . elgg_echo('friend:add'),
					'href' => "/action/friends/add?friend=$owner->guid",
					'is_action' => TRUE,
					'link_class' => 'elgg-button elgg-button-special',
					'contexts' => array('profile'),
					'priority' => 1,
				));
			}
			
			if (elgg_is_active_plugin('messages')) {
				elgg_register_menu_item('title', array(
					'name' => 'message',
					'text' => elgg_view_icon('mail') . elgg_echo('messages:message'),
					'href' => "/messages/compose?send_to=$owner->guid",
					'link_class' => 'elgg-button elgg-button-info',
					'contexts' => array('profile'),
				));
			}
		}
		
		if ($owner->guid == $user->guid) {
			elgg_register_menu_item('title', array(
				'name' => 'editprofile',
				'href' => "/profile/$user->username/edit",
				'text' => elgg_echo('profile:edit'),
				'link_class' => 'elgg-button elgg-button-info',
				'contexts' => array('profile'),
			));
		}
		
		if (elgg_is_active_plugin('groups')) {
			$groups = $user->getGroups('', 4);
			
			foreach ($groups as $group) {
				elgg_register_menu_item('page', array(
					'section' => 'groups',
					'name' => "group-$group->guid",
					'text' => elgg_view_icon('groups') . $group->name,
					'href' => $group->getURL(),
					'contexts' => array('dashboard'),
				));
			}
			
			elgg_register_menu_item('page', array(
				'name' => 'groups-add',
				'section' => 'groups',
				'text' => elgg_view_icon('group') . elgg_echo('groups:add'),
				'href' => "/groups/add",
				'contexts' => array('dashboard'),
				'priority' => 499,
			));
			
			elgg_register_menu_item('page', array(
				'section' => 'groups',
				'name' => 'groups',
				'text' => elgg_view_icon('groups') . elgg_echo('see:all'),
				'href' => "/groups/member/$user->username",
				'contexts' => array('dashboard'),
				'priority' => 500,
			));
		}
		if (elgg_is_active_plugin('bookmarks')) {
			elgg_register_menu_item('page', array(
				'section' => 'more',
				'name' => 'bookmarks',
				'text' => elgg_view_icon('link') . elgg_echo('bookmarks'),	
				'href' => "/bookmarks/friends/$user->username",
				'contexts' => array('dashboard'),
			));
		}
		
		if (elgg_is_active_plugin('blog')) {
			elgg_register_menu_item('page', array(
				'section' => 'more',	
				'name' => 'blog',
				'text' => elgg_view_icon('speech-bubble-alt') . elgg_echo('blog'),
				'href' => "/blog/friends/$user->username",
				'contexts' => array('dashboard'),
			));
		}
		
		if (elgg_is_active_plugin('pages')) {
			elgg_register_menu_item('page', array(
				'section' => 'more',	
				'name' => 'pages',
				'text' => elgg_view_icon('list') . elgg_echo('pages'),
				'href' => "/pages/friends/$user->username",
				'contexts' => array('dashboard'),
			));
		}
		
		if (elgg_is_active_plugin('file')) {
			elgg_register_menu_item('page', array(
				'section' => 'more',	
				'name' => 'files',
				'text' => elgg_view_icon('clip') . elgg_echo('files'),
				'href' => "/file/friends/$user->username",
				'contexts' => array('dashboard'),
			));
		}

		if (elgg_is_active_plugin('thewire')) {
			elgg_register_menu_item('page', array(
				'section' => 'more',
				'name' => 'thewire',
				'text' => elgg_view_icon('share') . elgg_echo('Wire'),
				'href' => "/thewire/friends/$user->username",
				'contexts' => array('dashboard'),
			));
		}
		
		$address = urlencode(current_page_url());
		
		if (elgg_is_active_plugin('bookmarks')) {
			elgg_register_menu_item('extras', array(
				'name' => 'bookmark',
				'text' => elgg_view_icon('link') . elgg_echo('bookmarks:this'),
				'href' => "bookmarks/add/$user->guid?address=$address",
				'title' => elgg_echo('bookmarks:this'),
				'rel' => 'nofollow',
			));
		}
		
		if (elgg_is_active_plugin('reportedcontent')) {
			elgg_unregister_menu_item('footer', 'report_this');
		
			$href = "javascript:elgg.forward('reportedcontent/add'";
			$href .= "+'?address='+encodeURIComponent(location.href)";
			$href .= "+'&title='+encodeURIComponent(document.title));";
				
			elgg_register_menu_item('extras', array(
				'name' => 'report_this',
				'href' => $href,
				'text' => elgg_view_icon('report-this') . elgg_echo('reportedcontent:this'),
				'title' => elgg_echo('reportedcontent:this:tooltip'),
				'priority' => 500,
			));
		}
		
		/**
		 * TOPBAR customizations
		 */
		//Want our logo present, not Elgg's
		$site = elgg_get_site_entity();
		elgg_unregister_menu_item('topbar', 'elgg_logo');
		elgg_register_menu_item('topbar', array(
			'href' => '/',
			'name' => 'logo',
			'priority' => 1,
			'text' => "<h1 id=\"kestrel-topbar-logo\">$site->name</h1>",
		));
		elgg_register_menu_item('topbar', array(
			'href' => '/dashboard',
			'name' => 'home',
			'priority' => 1,
			'section' => 'alt',
			'text' => elgg_view_icon('home') . elgg_echo('home'),
		));
		if (elgg_is_active_plugin('profile')) {
			elgg_unregister_menu_item('topbar', 'profile');
			elgg_register_menu_item('topbar', array(
				'name' => 'profile',
				'section' => 'alt',
				'text' => "<img src=\"{$user->getIconURL('topbar')}\" class=\"elgg-icon elgg-inline-block\" alt=\"$user->name\"/> " . $user->name,
				'href' => "/profile/$user->username",
				'priority' => 2,
			));
		}
		
		elgg_register_menu_item('topbar', array(
			'href' => "#",
			'name' => 'account',
			'priority' => 1000,
			'section' => 'alt',
			'text' => '',
		));

		elgg_unregister_menu_item('topbar', 'usersettings');
		elgg_register_menu_item('topbar', array(
			'href' => "/settings/user/$user->username",
			'name' => 'usersettings',
			'parent_name' => 'account',
			'section' => 'alt',
			'text' => elgg_echo('settings:user'),
		));

		elgg_unregister_menu_item('topbar', 'administration');
		if (elgg_is_admin_logged_in()) { 
                    elgg_register_menu_item('topbar', array(
                            'href' => '/admin',
                            'name' => 'administration',
                            'parent_name' => 'account',
                            'section' => 'alt',
                            'text' => elgg_echo('admin'),
                    ));
                }
		
		if (elgg_is_active_plugin('notifications')) {
			elgg_register_menu_item('topbar', array(
				'href' => "/notifications/personal",
				'name' => 'notifications',
				'parent_name' => 'account',
				'section' => 'alt',
				'text' => elgg_echo('notifications:personal'),
			));
		}
		
		elgg_unregister_menu_item('topbar', 'logout');
		elgg_register_menu_item('topbar', array(
			'href' => '/action/logout',
			'is_action' => TRUE,
			'name' => 'logout',
			'parent_name' => 'account',
			'priority' => 1000, //want this to be at the bottom of the list no matter what
			'section' => 'alt',
			'text' => elgg_echo('logout'),
		));
	}
	
	elgg_register_menu_item('extras', array(
		'name' => 'rss',
		'text' => elgg_view_icon('rss') . elgg_echo("rss:subscribe"),
		'href' => '?view=rss',
	));
elgg_register_menu_item('footer', ElggMenuItem::factory(array(
		'name' => 'powered',
		'text' => 'Powered by Kestrel and Elgg',
		'href' => 'http://kestrel.wisb.me',
		'title' => 'Kestrel',
		'section' => 'meta',
	)));
}

function kestrel_theme_dashboard_handler() {
	require_once dirname(__FILE__) . '/pages/dashboard.php';
	return true;
}

function kestrel_theme_index_handler() {
	if (elgg_is_logged_in()) {
		forward('/dashboard');
	}
}

function kestrel_theme_container_permissions_handler($hook, $type, $result, $params) {
	$container = $params['container'];
	$subtype = $params['subtype'];
	
	if ($container instanceof ElggGroup) {
		if ($subtype == 'thewire') {
			return false;
		}
	}
}

function kestrel_theme_annotation_permissions_handler($hook, $type, $result, $params) {
	$entity = $params['entity'];
	$user = $params['user'];
	$annotation_name = $params['annotation_name'];
	
	//Users should not be able to post on their own message board
	if ($annotation_name == 'messageboard' && $user->guid == $entity->guid) {
		return false;
	}
	
	//No "commenting" on users, must use messageboard
	if ($annotation_name == 'generic_comment' && $entity instanceof ElggUser) {
		return false;
	}
	
	//No "commenting" on forum topics, must use special "reply" annotation
	if ($annotation_name == 'generic_comment' && elgg_instanceof($entity, 'object', 'groupforumtopic')) {
		return false;
	}
	if ($annotation_name == 'generic_comment' && elgg_instanceof($entity, 'object', 'thewire')) {
		return false;
	}
	//Definitely should be able to "like" a forum topic!
	if ($annotation_name == 'likes' && elgg_instanceof($entity, 'object', 'groupforumtopic')) {
		return true;
	}
	
	if ($annotation_name == 'group_topic_post' && !elgg_instanceof($entity, 'object', 'groupforumtopic')) {
		return false;
	}
}

/**
 * Adds menu items to the "composer" at the top of the "wall".  Need to also add
 * the forms that these items point to.
 * 
 * @todo Get the composer concept integrated into core
 */
function kestrel_theme_composer_menu_handler($hook, $type, $items, $params) {
	$entity = $params['entity'];
	
	if (elgg_is_active_plugin('thewire') && $entity->canWriteToContainer(0, 'object', 'thewire')) {
		$items[] = ElggMenuItem::factory(array(
			'name' => 'thewire',
			'href' => "/ajax/view/thewire/composer?container_guid=$entity->guid",
			'text' => elgg_view_icon('share') . elgg_echo("composer:object:thewire"),
			'priority' => 100,
		));
		
		//trigger any javascript loads that we might need
		elgg_view('thewire/composer');
	}
	
	if (elgg_is_active_plugin('messageboard') && $entity->canAnnotate(0, 'messageboard')) {
		$items[] = ElggMenuItem::factory(array(
			'name' => 'messageboard',
			'href' => "/ajax/view/messageboard/composer?entity_guid=$entity->guid",
			'text' => elgg_view_icon('speech-bubble-alt') . elgg_echo("composer:annotation:messageboard"),
			'priority' => 200,
		));
		
		//trigger any javascript loads that we might need
		elgg_view('messageboard/composer');
	}
	
	if (elgg_is_active_plugin('bookmarks') && $entity->canWriteToContainer(0, 'object', 'bookmarks')) {
		$items[] = ElggMenuItem::factory(array(
			'name' => 'bookmarks',
			'href' => "/ajax/view/bookmarks/composer?container_guid=$entity->guid",
			'text' => elgg_view_icon('link') . elgg_echo("composer:object:bookmarks"),
			'priority' => 300,
		));
		
		//trigger any javascript loads that we might need
		elgg_view('bookmarks/composer');
	}
	
	if (elgg_is_active_plugin('blog') && $entity->canWriteToContainer(0, 'object', 'blog')) {
		$items[] = ElggMenuItem::factory(array(
			'name' => 'blog',
			'href' => "/ajax/view/blog/composer?container_guid=$entity->guid",
			'text' => elgg_view_icon('speech-bubble') . elgg_echo("composer:object:blog"),
			'priority' => 600,
		));
		
		//trigger any javascript loads that we might need
		elgg_view('blog/composer');
	}
	
	if (elgg_is_active_plugin('file') && $entity->canWriteToContainer(0, 'object', 'file')) {
		$items[] = ElggMenuItem::factory(array(
			'name' => 'file',
			'href' => "/ajax/view/file/composer?container_guid=$entity->guid",
			'text' => elgg_view_icon('clip') . elgg_echo("composer:object:file"),
			'priority' => 700,
		));
		
		//trigger any javascript loads that we might need
		elgg_view('file/composer');
	}
	
	return $items;
}

function kestrel_theme_group_profile_fields($hook, $type, $fields, $params) {
	return array(
		'briefdescription' => 'text',
		'description' => 'longtext',
		'interests' => 'tags',
	);
}

function kestrel_theme_owner_block_menu_handler($hook, $type, $items, $params) {
	$owner = elgg_get_page_owner_entity();
	
	if ($owner instanceof ElggGroup) {
		$items['info'] = ElggMenuItem::factory(array(
			'name' => 'info', 
			'text' => elgg_view_icon('info') . elgg_echo('profile:info'), 
			'href' => "/groups/info/$owner->guid/" . elgg_get_friendly_title($owner->name),
			'priority' => 2,
		));
		
		$items['profile'] = ElggMenuItem::factory(array(
			'name' => 'profile',
			'text' => elgg_view_icon('wall') . elgg_echo('profile:wall'),
			'href' => "/groups/profile/$owner->guid/" . elgg_get_friendly_title($owner->name),
			'priority' => 1,
		));
	}
	
	if ($owner instanceof ElggUser) {
		$items['info'] = ElggMenuItem::factory(array(
			'name' => 'info', 
			'text' => elgg_view_icon('info') . elgg_echo('profile:info'), 
			'href' => "/profile/$owner->username/info",
			'priority' => 2,
		));
		
		$items['profile'] = ElggMenuItem::factory(array(
			'name' => 'profile',
			'text' => elgg_view_icon('wall') . elgg_echo('profile:wall'),
			'href' => "/profile/$owner->username",
			'priority' => 1,
		));
		
		$items['friends'] = ElggMenuItem::factory(array(
			'name' => 'friends',	
			'text' => elgg_view_icon('users') . elgg_echo('friends'),
			'href' => "/friends/$owner->username"
		));
	}
	
	$top_level_pages = elgg_get_entities(array(
		'type' => 'object',
		'subtype' => 'page_top',
		'container_guid' => $owner->guid,
		'limit' => 0,
	));
	
	foreach ($top_level_pages as $page) {
		$items["pages-$page->guid"] = ElggMenuItem::factory(array(
			'name' => "pages-$page->guid",
			'href' => $page->getURL(),
			'text' => elgg_view_icon('list') . elgg_view('output/text', array('value' => $page->title)),
		));
	}
	
	return $items;
	
}

function kestrel_theme_river_menu_handler($hook, $type, $items, $params) {
	$item = $params['item'];

	$object = $item->getObjectEntity();
	if (!elgg_in_context('widgets') && !$item->annotation_id && $object instanceof ElggEntity) {
		
		if (elgg_is_active_plugin('likes') && $object->canAnnotate(0, 'likes')) {
			if (!elgg_annotation_exists($object->getGUID(), 'likes')) {
				// user has not liked this yet
				$options = array(
					'name' => 'like',
					'href' => "action/likes/add?guid={$object->guid}",
					'text' => elgg_echo('likes:likethis'),
					'is_action' => true,
					'priority' => 100,
				);
			} else {
				// user has liked this
				$options = array(
					'name' => 'like',
					'href' => "action/likes/delete?guid={$object->guid}",
					'text' => elgg_echo('likes:remove'),
					'is_action' => true,
					'priority' => 100,
				);
			}
			
			$items[] = ElggMenuItem::factory($options);
		}
		
		if ($object->canAnnotate(0, 'generic_comment')) {
			$items[] = ElggMenuItem::factory(array(
				'name' => 'comment',
				'href' => "#comments-add-$object->guid",
				'text' => elgg_echo('comment'),
				'title' => elgg_echo('comment:this'),
				'rel' => "toggle",
				'priority' => 50,
			));
		}
		
		if ($object instanceof ElggUser && !$object->isFriend() && $object->guid != $user->guid) {
			$items[] = ElggMenuItem::factory(array(
				'name' => 'addfriend',
				'href' => "/action/friends/add?friend=$object->guid",
				'text' => elgg_echo('friend:user:add', array($object->name)),
				'is_action' => TRUE,
			));
		}
		
		if (elgg_instanceof($object, 'object', 'groupforumtopic')) {
			$items[] = ElggMenuItem::factory(array(
				'name' => 'reply',
				'href' => "#groups-reply-$object->guid",
				'title' => elgg_echo('reply:this'),
				'text' => elgg_echo('reply'),
			));
		}
	}

	return $items;
}

/**
 * Profile page handler
 *
 * @param array $page Array of page elements, forwarded by the page handling mechanism
 */
function kestrel_theme_profile_page_handler($page) {
	if (isset($page[0])) {
		$username = $page[0];
		$user = get_user_by_username($username);
		elgg_set_page_owner_guid($user->guid);
	}

	// short circuit if invalid or banned username
	if (!$user || ($user->isBanned() && !elgg_is_admin_logged_in())) {
		register_error(elgg_echo('profile:notfound'));
		forward();
	}

	$action = NULL;
	if (isset($page[1])) {
		$action = $page[1];
	}

	switch ($action) {
		case 'edit':
			// use for the core profile edit page
			global $CONFIG;
			global $autofeed;
			$autofeed = false;
			require $CONFIG->path . 'pages/profile/edit.php';
			break;
		
		case 'info':
			require dirname(__FILE__) . '/pages/profile/info.php';
			break;
			
		case 'wall':
			require dirname(__FILE__) . '/pages/profile/wall.php';
			break;
			
		default:
			if (elgg_is_logged_in()) {
				require dirname(__FILE__) . '/pages/profile/wall.php';
			} else {
				require dirname(__FILE__) . '/pages/profile/info.php';
			}
			break;
	}
	
	return true;
}

elgg_register_event_handler('init', 'system', 'kestrel_theme_init');
