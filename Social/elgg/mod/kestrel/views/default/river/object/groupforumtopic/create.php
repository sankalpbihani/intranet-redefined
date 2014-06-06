<?php
/**
 * Group discussion topic river view.
 */

$object = $vars['item']->getObjectEntity();
        if ($object->canEdit()) {

            echo "<div class='delete_note' style='float:right;'>" . elgg_view("output/confirmlink",array(
            'href' => $vars['url'] . "/action/discussion/delete?guid=" . $vars['item']->object_guid,
            'title' => elgg_echo('delete'),
            'text' => elgg_view_icon('delete'),
            'confirm' => elgg_echo('deleteconfirm'),
            'is_action' => true,
            'priority' => 200,

            )) . "</div>";

        }
echo elgg_view('river/item', array(
    'item' => $vars['item'],
    'attachments' => elgg_view('object/groupforumtopic/river', array('entity' => $object)),
));
