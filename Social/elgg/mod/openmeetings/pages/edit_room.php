<?php

if (!elgg_is_logged_in()) forward();
$title = elgg_echo('openmeetings:rooms:edit');
elgg_push_breadcrumb(elgg_echo('openmeetings'), "openmeetings/all");
elgg_push_breadcrumb($title);

$area2 = elgg_view_title($title);
$area2 .= elgg_view('openmeetings/room_form');
$body = elgg_view_layout("two_column_left_sidebar", '', $area2);
page_draw($title, $body);
