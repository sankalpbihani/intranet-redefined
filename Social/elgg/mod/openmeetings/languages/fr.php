<?php

$french = array(
	'openmeetings' => 'Vidéoconférence',
	'item:object:openmeetings_room' => 'OpenMeetings salles',
    'openmeetings:owner' => "Salles de %s",
	'openmeetings:friends' => "Salles des contacts",
	'openmeetings:none' => 'Pas de salles',

	'admin:settings:openmeetings' => "Paramètres d'OpenMeetings",
	'openmeetings:settings:red5host' => 'OpenMeetings serveur ou adresse IP',
	'openmeetings:settings:red5port' => 'OpenMeetings port',
	'openmeetings:settings:default_red5port' => 'Défaut : 5080',
	'openmeetings:settings:admin_user' => 'OpenMeetings administrateur',
	'openmeetings:settings:admin_password' => 'OpenMeetings mot de passe',
	'openmeetings:settings:module_key' => 'OpenMeetings clé de module',
	'openmeetings:settings:save:ok' => 'Les paramètres one été enregistrée avec succès',

	'openmeetings:rooms' => 'OpenMeetings Salles',
	'openmeetings:add' => 'Créer une salle',
	'openmeetings:rooms:edit' => 'Modifer une salle',

	'openmeetings:room:name' => 'Nom',
	'openmeetings:room:type' => 'Type',
	'openmeetings:room:type:conference' => 'Conference',
	'openmeetings:room:type:audience' => 'Audience',
	'openmeetings:room:type:restricted' => 'Confidentielle',
	'openmeetings:room:type:show_recording' => 'Enregistrement vidéo',
	'openmeetings:room:recording_id' => 'Enregistrements',
	'openmeetings:room:max_users' => 'Participants',
	'openmeetings:room:is_moderated' => 'Moderation',
	'openmeetings:room:is_moderated_1' => 'Les participants doivent attendre le professeur',
	'openmeetings:room:is_moderated_2' => 'Les participants peuvent commencer (premier utilisateur devient modérateur)',
	'openmeetings:room:language' => 'Langue',
	'openmeetings:room:comment' => 'Commentaire',
	'openmeetings:room:group' => 'Groupe',
	'openmeetings:room:save:ok' => 'La salle a été enregistrée avec succès',
	'openmeetings:room:save:fail' => "Désolé, la salle n'a pas pu être enregistrée",
	'openmeetings:room:error:required_name' => 'Merci de remplir le nom du groupe',

	'openmeetings:room:delete:ok' => 'La salle a été supprimée avec succès',
	'openmeetings:room:delete:fail' => "La salle n'a pas été supprimée",

	'openmeetings:group_rooms' => 'OpenMeetings salles du groupe',
	'openmeetings:all_rooms' => 'Toutes salles',
	'openmeetings:not_found' => 'Pas de salles trouvées.',
);

add_translation("fr",$french);
