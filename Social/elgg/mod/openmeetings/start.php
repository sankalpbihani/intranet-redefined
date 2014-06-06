<?php

/**
 * Openmeetings integration
 * 
 * @author Krasi <krasi.zlatev@activesolutions.bg>
 */

/**
 * Init module
 *
 */
function openmeetings_init() {

	// handlers
	register_page_handler('openmeetings', 'openmeetings_page_handler');

    // Register a URL handler for rooms
	register_entity_url_handler('openmeetings_room_url','object','openmeetings_room');

	// Room page
	elgg_extend_view('groups/tool_latest', 'openmeetings/group_rooms');
}

/**
 * Menu
 *
 */
function openmeetings_pagesetup(){
	global $CONFIG;
	if (elgg_get_context() == 'admin' && elgg_is_admin_logged_in()) {

    elgg_register_menu_item('page', array(
                'name' => 'openmeetings',
                'href' => $CONFIG->wwwroot . 'admin/settings/openmeetings',
                'text' => elgg_echo("admin:settings:openmeetings"),
                'context' => 'admin',
                'parent_name' => 'settings',
                'priority' => 100,
                'section' => 'configure',
        ));

		
		
	} else if (elgg_is_logged_in()) {
		elgg_register_menu_item('site',
			new ElggMenuItem('openmeetings', elgg_echo('openmeetings'), 'openmeetings/all')
		);

		if (elgg_get_context() == "openmeetings") {
			
			$page_owner = elgg_get_page_owner_entity();
			if (get_class($page_owner) == 'ElggGroup') {
				elgg_register_menu_item('page',
					new ElggMenuItem(elgg_echo('openmeetings:rooms'), elgg_echo('openmeetings:rooms'), "openmeetings/group/$page_owner->guid/all")
				);
			} else {
				elgg_register_menu_item('page',
					new ElggMenuItem(elgg_echo('openmeetings:rooms'), elgg_echo('openmeetings:rooms'), "openmeetings/")
				);
			}
			if (elgg_is_admin_logged_in()) {
				elgg_register_menu_item('page',
					new ElggMenuItem(elgg_echo('openmeetings:add'), elgg_echo('openmeetings:add'), "openmeetings/create_room")
				);
			}

		}
	}		
}

/**
 * Creating friendly URLs using the page handler
 * 
 */
function openmeetings_page_handler($page) {

	switch ($page[0]) {
		case 'admin_settings':
	        include 'pages/admin_settings.php';
			break;
		case 'add':
		case 'create_room':
	        include 'pages/create_room.php';
			break;
		case 'edit':
		case 'edit_room':
			if (is_numeric($page[1]))
				set_input('room_id', $page[1]);
		    include 'pages/edit_room.php';
			break;
		case 'group':
			group_gatekeeper();
			include "pages/owner.php";
			break;
		case 'all':
		    include 'pages/all.php';
			break;
		case 'owner':
		    include 'pages/owner.php';
			break;
		case "friends":
			include "pages/friends.php";
			break;
		default:
			if (is_numeric($page[0])) {
				set_input('room_id', $page[0]);
		        include 'pages/view.php';
			} else {
		        include 'pages/index.php';
			}
			break;
	}
}

/**
 * Populates the ->getUrl() method for openmeetings_room objects
 */
function openmeetings_room_url($room) {
	global $CONFIG;
	$title = $room->title;
	$title = friendly_title($title);
	return $CONFIG->url . "openmeetings/" . $room->getGUID() . "/" . urlencode($title);
}

// register actions
elgg_register_action("openmeetings/admin_settings", $CONFIG->pluginspath . "openmeetings/actions/admin_settings.php", "admin");

register_action("openmeetings/save_room", false, $CONFIG->pluginspath . "openmeetings/actions/save_room.php");
register_action("openmeetings/delete", false, $CONFIG->pluginspath . "openmeetings/actions/delete_room.php");

// init
register_elgg_event_handler('init','system','openmeetings_init');
register_elgg_event_handler('pagesetup','system','openmeetings_pagesetup');
