<?php

if (!elgg_is_logged_in()) forward();

$title = elgg_echo('openmeetings:add');

elgg_push_breadcrumb(elgg_echo('openmeetings'), "openmeetings/all");
elgg_push_breadcrumb($title);

$area2 = elgg_view_title($title);
$area2 .= elgg_view('openmeetings/room_form');
$body = elgg_view_layout("two_column_left_sidebar", array('area2' => $area2));
echo elgg_view_page($title, $body);
