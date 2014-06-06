<?php

if (isset($vars['entity'])) {
	$object = $vars['entity'];
	$icon = elgg_view_entity_icon($object->getOwnerEntity(), 'small');

	$metadata = elgg_view_menu('entity', array(
		'entity' => $vars['entity'],
		'handler' => 'openmeetings',
		'sort_by' => 'priority',
		'class' => 'elgg-menu-hz',
	));

	$params = array(
		'entity' => $object,
		'subtitle' => $object->room_comment,
		'metadata' => $metadata,
	);

	$list_body = elgg_view('object/elements/summary', $params);

	echo elgg_view_image_block($icon, $list_body);
}
?>




