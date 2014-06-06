<?php

elgg_register_title_button();

$content = elgg_list_entities(array(
        'types' => 'object',
        'subtypes' => 'openmeetings_room',
        'limit' => 10,
        'full_view' => FALSE
));

if (!$content) {
        $content = elgg_echo('openmeetings:none');
}

$title = elgg_echo('openmeetings:rooms');

$body = elgg_view_layout('content', array(
        'filter_context' => 'all',
        'content' => $content,
        'title' => $title,                      
        'sidebar' => elgg_view('openmeetings/sidebar'),
));

echo elgg_view_page($title, $body);
