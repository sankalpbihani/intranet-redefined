<?php

$english = array(
	'openmeetings' => 'OpenMeetings',
	'item:object:openmeetings_room' => 'OpenMeetings rooms',
    'openmeetings:owner' => "%s's rooms",
	'openmeetings:friends' => "Friends\' Rooms",
	'openmeetings:none' => 'No rooms',

	'admin:settings:openmeetings' => 'OpenMeetings Settings',
	'openmeetings:settings:red5host' => 'OpenMeetings Server Host or IP',
	'openmeetings:settings:red5port' => 'OpenMeetings Server Port',
	'openmeetings:settings:default_red5port' => 'Default: 5080',
	'openmeetings:settings:admin_user' => 'OpenMeetings Admin User',
	'openmeetings:settings:admin_password' => 'OpenMeetings Admin User Password',
	'openmeetings:settings:module_key' => 'OpenMeetings Module key (vary for multiple instances using same OpenMeetings Server)',
	'openmeetings:settings:save:ok' => 'Successfully saved the OpenMeetings settings',

	'openmeetings:rooms' => 'OpenMeetings Rooms',
	'openmeetings:add' => 'Create a new room',
	'openmeetings:rooms:edit' => 'Edit room',

	'openmeetings:room:name' => 'Room name',
	'openmeetings:room:type' => 'Room type',
	'openmeetings:room:type:conference' => 'Conference Room',
	'openmeetings:room:type:audience' => 'Audience Room',
	'openmeetings:room:type:restricted' => 'Restricted Room',
	'openmeetings:room:type:show_recording' => 'Show Recording',
	'openmeetings:room:recording_id' => 'Available Recordings',
	'openmeetings:room:max_users' => 'Max users',
	'openmeetings:room:is_moderated' => 'Moderation modus',
	'openmeetings:room:is_moderated_1' => 'Participants need to wait till the teacher enters the room',
	'openmeetings:room:is_moderated_2' => 'Participants can already start (first User in Room becomes Moderator)',
	'openmeetings:room:language' => 'Language',
	'openmeetings:room:comment' => 'Comment',
	'openmeetings:room:group' => 'Group',
	'openmeetings:room:save:ok' => 'Successfully saved the OpenMeetings room',
	'openmeetings:room:save:fail' => 'Error saving the OpenMeetings room',
	'openmeetings:room:error:required_name' => 'Please fill in a name for the room',

	'openmeetings:room:delete:ok' => 'Successfully deleted the OpenMeetings room',
	'openmeetings:room:delete:fail' => 'Error deleting the OpenMeetings room',

	'openmeetings:group_rooms' => 'OpenMeetings Group Rooms',
	'openmeetings:all_rooms' => 'All OpenMeetings Rooms',
	'openmeetings:not_found' => 'No rooms found.',
);

					
add_translation("en",$english);
