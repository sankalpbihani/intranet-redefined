<?php
/**
 * File river view.
 */

$object = $vars['item']->getObjectEntity();
$excerpt = strip_tags($object->description);
$excerpt = thewire_filter($excerpt);

$subject = $vars['item']->getSubjectEntity();
$subject_link = elgg_view('output/url', array(
    'href' => $subject->getURL(),
    'text' => $subject->name,
    'class' => 'elgg-river-subject',
    'is_trusted' => true,
));

$object_link = elgg_view('output/url', array(
    'href' => "thewire/owner/$subject->username",
    'text' => elgg_echo('thewire:wire'),
    'class' => 'elgg-river-object',
    'is_trusted' => true,
));

$summary = elgg_echo("river:create:object:thewire", array($subject_link, $object_link));
        if ($object->canEdit()) {

            echo "<div class='delete_note' style='float:right;'>" . elgg_view("output/confirmlink",array(
            'href' => $vars['url'] . "action/thewire/delete?guid=" . $vars['item']->object_guid,
             'title' => elgg_echo('delete'),
            'text' => elgg_view_icon('delete'),  
            'confirm' => elgg_echo('deleteconfirm'),
            'is_action' => true,
            'priority' => 200,

            )) . "</div>";

        }
echo elgg_view('river/elements/layout', array(
    'item' => $vars['item'],
    'message' => $excerpt,
    'summary' => $summary,
));




?>