<?php

namespace hypeJunction\Gallery;

$guid = get_input('guid');
$entity = get_entity($guid);

if (!elgg_instanceof($entity) || !$entity->canEdit()) {
	return false;
}

$ancestry = get_ancestry($entity->guid);

foreach ($ancestry as $ancestor) {
	if (elgg_instanceof($ancestor, 'site')) {
		// do nothing
	} else if (elgg_instanceof($ancestor, 'group')) {
		elgg_set_page_owner_guid($ancestor->guid);
		elgg_push_breadcrumb($ancestor->name, $ancestor->getURL());
	} else if (elgg_instanceof($ancestor, 'object')) {
		elgg_push_breadcrumb($ancestor->title, $ancestor->getURL());
	}
}

$type = $entity->getType();
$subtype = $entity->getSubtype();

$title = elgg_echo("gallery:edit:$type:$subtype");

elgg_push_breadcrumb($entity->title, $entity->getURL());
elgg_push_breadcrumb($title);

$content = elgg_view_form("edit/$type/$subtype", array(
	'enctype' => 'multipart/form-data',
		), array(
	'entity' => $entity,
		));

$layout = elgg_view_layout('one_sidebar', array(
	'title' => $title,
	'content' => $content,
		));

echo elgg_view_page($title, $layout);

