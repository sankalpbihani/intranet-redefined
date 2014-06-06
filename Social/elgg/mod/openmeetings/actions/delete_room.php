<?php

global $CONFIG;
require_once $CONFIG->pluginspath . '/openmeetings/openmeetings_gateway.php';
$openmeetings_gateway = new openmeetings_gateway();

global $plugin;
$plugin = elgg_get_plugin_from_id('openmeetings');

// Make sure we're logged in (send us to the front page if not)
if (!elgg_is_logged_in()) forward();

// Get input data
$guid = (int) get_input('guid');

// Make sure we actually have permission to edit
$room = get_entity($guid);
if ($room->getSubtype() == "openmeetings_room" && $room->canEdit()) {

	// Delete it!
	$openmeetings_room_id = $room->room_id;
	$rowsaffected = $room->delete();

	if ($openmeetings_room_id) {
		if ($openmeetings_gateway->openmeetings_loginuser()) {
			$openmeetings_gateway->openmeetings_deleteRoom($openmeetings_room_id);
		}
	}

	if ($rowsaffected > 0) {
		// Success message
		system_message(elgg_echo('openmeetings:room:delete:ok'));	
	} else {
		register_error(elgg_echo('openmeetings:room:delete:fail'));	
	}

	// Forward to the main page
	forward(REFERER);
}
