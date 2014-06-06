<?php

global $CONFIG;
require_once $CONFIG->pluginspath . '/openmeetings/openmeetings_gateway.php';
$openmeetings_gateway = new openmeetings_gateway();

global $plugin;
$plugin = elgg_get_plugin_from_id('openmeetings');

// Make sure we're logged in (send us to the front page if not)
if (!elgg_is_logged_in()) forward();

// Get input data
$guid = (int) get_input('room_id');
$room_name = get_input('room_name');
$access_id = get_input('access_id');

if (!$room_name) {
	foreach (array('room_name', 'room_type', 'room_recording_id', 'room_max_users', 'room_is_moderated', 'room_language', 'room_comment', 'access_id', 'container_guid') as $f) {
		$_SESSION['openmeetings_room'][$f] = get_input($f);
	}
	register_error(elgg_echo("openmeetings:room:error:required_name"));
	forward($guid ? ("openmeetings/edit_room?room_id=" . $guid) : "pg/openmeetings/create_room");	
}

// save the room

// Initialise a new ElggObject
$room = $guid ? get_entity($guid) : new ElggObject();

$room->subtype = "openmeetings_room";

if (!$guid)
	$room->owner_guid = elgg_get_logged_in_user_guid();
$room->container_guid = get_input('container_guid');
if (!$room->container_guid)
	$room->container_guid = $room->owner_guid;

$room->access_id = $access_id;

$room->title = $room_name;
$room->description = $room_name;

$room->room_type = get_input('room_type');
$room->room_recording_id = get_input('room_recording_id');
$room->room_max_users = get_input('room_max_users');
$room->room_is_moderated = get_input('room_is_moderated');
$room->room_language = get_input('room_language');
$room->room_comment = get_input('room_comment');

$res = $room->save();

if ((!$guid || !$room->room_id || $room->room_id == '-1') && $res) {
// save the new room in openmeetings
	if ($room->room_type != 0) {
		if ($openmeetings_gateway->openmeetings_loginuser()) {
			$room->room_id = $openmeetings_gateway->openmeetings_createRoomWithModAndType($room);
			$res = $room->save();
		}
	}
} else if ($guid && $room->room_id && $room->room_id > 0 && $res) {
// update room in openmeetings
	if ($openmeetings_gateway->openmeetings_loginuser()) {
		$openmeetings_gateway->openmeetings_updateRoomWithModeration($room);
	}
}

if ($res) {
	system_message(elgg_echo('openmeetings:room:save:ok'));	
} else {
	system_message(elgg_echo('openmeetings:room:save:fail'));	
}

$loggedin_user = elgg_get_logged_in_user_entity();
if ($room->container_guid == elgg_get_logged_in_user_guid())
	forward("openmeetings/owner/".urlencode($loggedin_user->username));
else
	forward("openmeetings/all");
