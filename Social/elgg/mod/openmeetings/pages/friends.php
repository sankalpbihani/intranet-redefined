<?php

$owner = elgg_get_page_owner_entity();
if (!$owner) {
	forward('openmeetings/all');
}

elgg_push_breadcrumb(elgg_echo('openmeetings'), "openmeetings/all");
elgg_push_breadcrumb($owner->name, "openmeetings/owner/$owner->username");
elgg_push_breadcrumb(elgg_echo('friends'));

elgg_register_title_button();

$title = elgg_echo("openmeetings:friends");

// offset is grabbed in list_user_friends_objects
$content = list_user_friends_objects($owner->guid, 'openmeetings_room', 10, false);
if (!$content) {
	$content = elgg_echo("openmeetings:none");
}

$body = elgg_view_layout('content', array(
	'filter_context' => 'friends',
	'content' => $content,
	'title' => $title,
	'sidebar' => elgg_view('openmeetings/sidebar'),
));

echo elgg_view_page($title, $body);
