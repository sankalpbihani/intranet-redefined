<?php

global $CONFIG;
require_once $CONFIG->pluginspath . '/openmeetings/openmeetings_gateway.php';
$openmeetings_gateway = new openmeetings_gateway();

global $plugin;
$plugin = elgg_get_plugin_from_id('openmeetings');
$recordings = array('' => '---');
if ($openmeetings_gateway->openmeetings_loginuser()) {
	$recordingsArray = $openmeetings_gateway->openmeetings_getRecordingsByExternalRooms();
	foreach ($recordingsArray as $key => $value) {
		//there is a bug, if a List has the length of 1 the type is wrong
		if (is_array($value)) {
			$recordings[$value["flvRecordingId"]] = $value["fileName"];
		} else {
			$recordings[$recordingsArray["flvRecordingId"]] = $recordingsArray["fileName"];
			break;
		}
	}
}

$form_body = '';

// Get input data
$guid = (int) get_input('room_id');
if ($guid) {
	$form_body .= elgg_view('input/hidden',array('name' => 'room_id', 'value' => $guid));
	$room = get_entity($guid);
	$room_name = $room->title;
	$room_type = $room->room_type;
	$room_recording_id = $room->room_recording_id;
	$room_max_users = $room->room_max_users;
	$room_is_moderated = $room->room_is_moderated;
	$room_language = $room->room_language;
	$room_comment = $room->room_comment;
	$access_id = $room->access_id;
	$container_guid = $room->container_guid;
} else {
	$page_owner = elgg_get_page_owner_entity();
	if (get_class($page_owner) == 'ElggGroup') {
		$container_guid = $page_owner->guid;
	}
}

if (isset($_SESSION['openmeetings_room'])) {
	foreach (array('room_name', 'room_type', 'room_recording_id', 'room_max_users', 'room_is_moderated', 'room_language', 'room_comment', 'access_id', 'container_guid') as $f) {
		$$f = isset($_SESSION['openmeetings_room'][$f]) ? $_SESSION['openmeetings_room'][$f] : '';
	}
}

// default values for a new room
if (!$guid && !isset($_SESSION['openmeetings_room'])) {
	$room_type = 1;
}

$action = $vars['url'] . 'action/openmeetings/save_room';

if (!$plugin->red5host) {
	if (elgg_is_admin_logged_in()) {
		$form_body .= '<p><a href="'.$CONFIG->wwwroot . 'admin/settings/openmeetings'.'">'.elgg_echo("admin:settings:openmeetings").'</a></p>';
	}
}
	
$form_body .= "<div><label>" . elgg_echo('openmeetings:room:name') . "</label><br />";
$form_body .= elgg_view("input/text",array('name' => 'room_name', 'value' => $room_name)) . "</div>";

$form_body .= '<div><label>' . elgg_echo('openmeetings:room:type') .  '</label><br />' . elgg_view('input/pulldown', array(
									'name' => 'room_type',
									'options_values' => array( '1' => elgg_echo('openmeetings:room:type:conference'),
															   '2' => elgg_echo('openmeetings:room:type:audience'),
															   '3' => elgg_echo('openmeetings:room:type:restricted'),
						                                 	   '0' => elgg_echo('openmeetings:room:type:show_recording'),
									                         ),
									'value' => $room_type
								)) . '</div>';

$form_body .= '<div><label>' . elgg_echo('openmeetings:room:recording_id') .  '</label><br />' . elgg_view('input/pulldown', array(
									'name' => 'room_recording_id',
									'options_values' => $recordings,
									'value' => $room_recording_id
								)) . '</div>';

$form_body .= '<div><label>' . elgg_echo('openmeetings:room:max_users') .  '</label><br />' . elgg_view('input/pulldown', array(
									'name' => 'room_max_users',
									'options_values' => array(
										"2" => "2",
										"4" => "4",
										"8" => "8",
										"16" => "16",
										"24" => "24",
										"36" => "36",
										"50" => "50",
										"100" => "100",
										"200" => "200",
										"500" => "500",
										"1000" => "1000",
									),
									'value' => $room_max_users
								)) . '</div>';

$form_body .= '<div><label>' . elgg_echo('openmeetings:room:is_moderated') .  '</label><br />' . elgg_view('input/pulldown', array(
									'name' => 'room_is_moderated',
									'options_values' => array( '1' => elgg_echo('openmeetings:room:is_moderated_1'),
															   '2' => elgg_echo('openmeetings:room:is_moderated_2'),
									                         ),
									'value' => $room_type
								)) . '</div>';

$form_body .= '<div><label>' . elgg_echo('openmeetings:room:language') .  '</label><br />' . elgg_view('input/pulldown', array(
									'name' => 'room_language',
									'options_values' => array (
										"1" => "english",
										"2" => "deutsch",
										"3" => "deutsch (studIP)",
										"4" => "french",
										"5" => "italian",
										"6" => "portugues",
										"7" => "portugues brazil",
										"8" => "spanish",
										"9" => "russian",
										"10" => "swedish",
										"11" => "chinese simplified",
										"12" => "chinese traditional",
										"13" => "korean",
										"14" => "arabic",
										"15" => "japanese",
										"16" => "indonesian",
										"17" => "hungarian",
										"18" => "turkish",
										"19" => "ukrainian",
										"20" => "thai",
										"21" => "persian",
										"22" => "czech",
										"23" => "galician",
										"24" => "finnish",
										"25" => "polish",
										"26" => "greek",
										"27" => "dutch",
										"28" => "hebrew",
										"29" => "catalan",
										"30" => "bulgarian",
										"31" => "danish",
										"32" => "slovak",
									),
									'value' => $room_language
								)) . '</div>';


$form_body .= "<div><label>" . elgg_echo('openmeetings:room:comment') . "</label><br />";
$form_body .= elgg_view("input/longtext",array('name' => 'room_comment', 'value' => $room_comment)) . "</div>";

$objects = elgg_get_entities(array(
	'type' => 'group', 
	'limit' => 0,
));
$groups_menu = array('' => '---');
foreach ($objects as $g) {
	$groups_menu[$g->guid] = $g->name;
}
$form_body .= '<div><label>' . elgg_echo('openmeetings:room:group') .  '</label><br />' . elgg_view('input/pulldown', array(
									'name' => 'container_guid',
									'options_values' => $groups_menu,
									'value' => $container_guid
								)) . '</div>';

$form_body .= '<div><label>' . elgg_echo('access') . '</label><br />' . elgg_view('input/access', array('name' => 'access_id','value' => $access_id)) . '</div>';
$form_body .= elgg_view('input/submit', array('value' => elgg_echo("save")));

if (isset($_SESSION['openmeetings_room'])) {
	unset($_SESSION['openmeetings_room']);
}

?>
<div class="contentWrapper">	

<?php
	echo elgg_view('input/form', array('action' => $action, 'body' => $form_body));
?>
</div>

