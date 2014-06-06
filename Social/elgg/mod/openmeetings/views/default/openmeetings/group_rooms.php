<?php

$group = elgg_get_page_owner_entity();

$all_link = elgg_view('output/url', array(
	'href' => "openmeetings/group/$group->guid/all",
	'text' => elgg_echo('link:view:all'),
	'is_trusted' => true,
));


$new_link = elgg_view('output/url', array(
	'href' => "openmeetings/add/$group->guid",
	'text' => elgg_echo('openmeetings:add'),
	'is_trusted' => true,
));

elgg_push_context('widgets');
$options = array(
	'type' => 'object',
	'subtype' => 'openmeetings_room',
	'container_guid' => elgg_get_page_owner_guid(),
	'limit' => 6,
	'full_view' => false,
	'pagination' => false,
);

$content = elgg_list_entities($options);
elgg_pop_context();

if (!$content) {
	$content = '<p>' . elgg_echo('openmeetings:not_found') . '</p>';
}

echo elgg_view('groups/profile/module', array(
		'title' => elgg_echo('openmeetings:group_rooms'),
		'content' => $content,
		'all_link' => $all_link,
		'add_link' => $new_link,
	));