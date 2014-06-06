<?php

$main = elgg_extract('default', $vars['menu'], array());
$dropdown = elgg_extract('dropdown', $vars['menu'], array());


if (sizeof($dropdown) > 0) {
	$id = "entitynewsmenu" . rand(100, 9999);

	echo '<div class="hover-menu-block">';
	echo '<a class="hover-menu-toggler" rel="popup" href="#' . $id . '">' . elgg_view_icon('toggler-down') . '</a>';

	echo '<ul id="' . $id . '" class="elgg-menu entity-news-menu">';

	echo '<li>';

	echo elgg_view('navigation/menu/elements/section', array(
		'class' => 'elgg-menu entity-news-menu-default',
		'items' => $dropdown,
	));

	echo '</li>';

	echo '</ul>';
	echo '</div>';

	unset($vars['menu']['dropdown']);
}

if (sizeof($main) > 0) {
	echo elgg_view('navigation/menu/default', $vars);
}