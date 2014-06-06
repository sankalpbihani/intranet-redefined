<?php
/**
 * news river view.
 */

$object = $vars['item']->getObjectEntity();
$excerpt = strip_tags($object->excerpt);
$excerpt = elgg_get_excerpt($excerpt);

if (elgg_get_plugin_setting('admin_anon', 'news') == yes){
    echo elgg_view('news/item', array(
	'item' => $vars['item'],
	'message' => $excerpt,
));
} else if(elgg_get_plugin_setting('admin_anon', 'news') == no){
    echo elgg_view('river/elements/layout', array(
	'item' => $vars['item'],
	'message' => $excerpt,
));
}
?>