<?php

$page_owner = elgg_get_page_owner_entity();
if (!$page_owner) {
	forward('openmeetings/all');
}

elgg_push_breadcrumb(elgg_echo('openmeetings'), "openmeetings/all");
elgg_push_breadcrumb($page_owner->name);

elgg_register_title_button();
if (get_class($page_owner) == 'ElggGroup') {
	$content = elgg_list_entities(array(
			'types' => 'object',
			'subtypes' => 'openmeetings_room',
			'container_guid' => $page_owner->guid,
			'limit' => 10,
			'full_view' => FALSE
	));
} else {
	$content = elgg_list_entities(array(
			'types' => 'object',
			'subtypes' => 'openmeetings_room',
			'owner_guid' => $page_owner->guid,
			'limit' => 10,
			'full_view' => FALSE
	));
}

if (!$content) {
        $content = elgg_echo('openmeetings:none');
}

$title = elgg_echo('openmeetings:owner', array($page_owner->name));

$filter_context = '';
if ($page_owner->getGUID() == elgg_get_logged_in_user_guid()) {
	$filter_context = 'mine';
}

$body = elgg_view_layout('content', array(
        'filter_context' => $filter_context,
        'content' => $content,
        'title' => $title,                      
        'sidebar' => elgg_view('openmeetings/sidebar'),
));

echo elgg_view_page($title, $body);
