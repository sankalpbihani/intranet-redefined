<?php

admin_gatekeeper();
set_context('admin');
$page_owner = page_owner_entity();
$title = elgg_echo('openmeetings:settings');
$area2 = elgg_view_title($title);
$area2 .= elgg_view('openmeetings/admin/settings/form');
$body = elgg_view_layout("two_column_left_sidebar", '', $area2);
page_draw($title, $body);
