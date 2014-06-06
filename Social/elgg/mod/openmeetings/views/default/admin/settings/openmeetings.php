<?php

$plugin = elgg_get_plugin_from_id('openmeetings');

$action = $vars['url'] . 'action/openmeetings/admin_settings';
	
$form_body .= "<div><label>" . elgg_echo('openmeetings:settings:red5host') . "</label><br />";
$form_body .= elgg_view("input/text",array('name' => 'params[red5host]', 'value' => $plugin->red5host)) . "</div>";

$form_body .= "<div><label>" . elgg_echo('openmeetings:settings:red5port') . "</label><br />";
$form_body .= elgg_view("input/text",array('name' => 'params[red5port]', 'value' => $plugin->red5port)) . "<small>" . elgg_echo('openmeetings:settings:default_red5port') . "</small></div>";

$form_body .= "<div><label>" . elgg_echo('openmeetings:settings:admin_user') . "</label><br />";
$form_body .= elgg_view("input/text",array('name' => 'params[admin_user]', 'value' => $plugin->admin_user)) . "</div>";

$form_body .= "<div><label>" . elgg_echo('openmeetings:settings:admin_password') . "</label><br />";
$form_body .= elgg_view("input/text",array('name' => 'params[admin_password]', 'value' => $plugin->admin_password)) . "</div>";

$form_body .= "<div><label>" . elgg_echo('openmeetings:settings:module_key') . "</label><br />";
$form_body .= elgg_view("input/text",array('name' => 'params[module_key]', 'value' => $plugin->module_key)) . "</div>";

$form_body .= elgg_view('input/submit', array('value' => elgg_echo("save")));

?>
<div>	
<?php
	echo elgg_view('input/form', array('action' => $action, 'body' => $form_body));
?>
</div>

