<?php

global $CONFIG;
global $plugin;
$plugin = elgg_get_plugin_from_id('openmeetings');

$guid = (int) get_input('room_id');
$room = get_entity($guid);
$user = elgg_get_logged_in_user_entity();

if (!$room || !$room->getGUID()) {
	if (!$user) {
		forward("/");
	} else {
		forward("pg/openmeetings");
	}
}


require_once $CONFIG->pluginspath . '/openmeetings/openmeetings_gateway.php';
$openmeetings_gateway = new openmeetings_gateway();

$becomemoderator = elgg_is_admin_logged_in();
if ($room->room_is_moderated == 2) $becomemoderator = true;

if ($openmeetings_gateway->openmeetings_loginuser()) {

	if ($user) {

		// get name
		$fname = $lname = '';
		$names = explode(' ', $user->name);		
		if (sizeof($names) == 1) { 
			$lname = $names[0];
		} else if (sizeof($names) == 2) {
			$lname = $names[0]; $fname = $names[1];
		} else if (sizeof($names) == 3) {
			$fname = $names[2]; $lname = $names[0];
		} else {
			$lname = $user->name;
		}
		//

		if ($room->room_type != 0){
			$returnVal = $openmeetings_gateway->openmeetings_setUserObjectAndGenerateRoomHashByURL($user->username,$fname,
							$lname,$user->getIcon('medium'),$user->email,$user->getGUID(),$plugin->module_key,$room->room_id, intval($becomemoderator));
		} else {
			$returnVal = $openmeetings_gateway->openmeetings_setUserObjectAndGenerateRecordingHashByURL($user->username,$fname,
							$lname,$user->getGUID(),$plugin->module_key,$room->room_recording_id);
		}
	} else {
		if ($room->room_type != 0){
			$returnVal = $openmeetings_gateway->openmeetings_setUserObjectAndGenerateRoomHashByURL('guest','Guest',
							'Guest','','','0',$plugin->module_key,$room->room_id, intval($becomemoderator));
		} else {
			$returnVal = $openmeetings_gateway->openmeetings_setUserObjectAndGenerateRecordingHashByURL('guest','Guest',
							'Guest',0,$plugin->module_key,$room->room_recording_id);
		}
	}
}		

$scope_room_id = $room->room_id;
if ($scope_room_id == 0) {
	$scope_room_id = "hibernate";
}

$iframe_d = "http://".$plugin->red5host . ":" . $plugin->red5port .
	 	"/" . "openmeetings/?" .
		"secureHash=" . $returnVal . 
		"&scopeRoomId=" . $scope_room_id .
		//"&swf=maindebug.swf8.swf" .
		"&language=" . $room->room_language . 
		//"&language_id=" . $room->room_language . 
		//"&picture=" . ($user ? $user->getIcon('icon') : '') . 
		//"&user_id=". ($user ? $user->getGUID() : 0)  . 
		"&elggRoom=1" .   
		"&wwwroot=". $CONFIG->wwwroot;                                                                                                

$area1 = sprintf("<iframe src='%s' width='%s' height='%s'></iframe>",$iframe_d,"100%",640);		

$body = elgg_view_layout("one_column", $area1);
page_draw(elgg_echo('openmeetings:rooms'),$body);

