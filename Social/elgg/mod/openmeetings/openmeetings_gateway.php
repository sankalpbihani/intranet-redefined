<?php 

require_once(dirname(__FILE__) . '/lib/nusoap.php');

class openmeetings_gateway {
	
	var $session_id = "";

	/**
	 * TODO: Get Error Service and show detailed Error Message
	 */
	function openmeetings_loginuser() {
		global $plugin;

		$client_userService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/UserService?wsdl", "wsdl");
		$client_userService->setUseCurl(true);
		//echo "Client inited"."<br/>";
		$err = $client_userService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
	
		$result = $client_userService->call('getSession');
		if ($client_userService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_userService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
				$this->session_id = $result["return"]["session_id"];
				//echo '<h2>Result</h2><pre>'; printf(); echo '</pre>';
				$params = array(
	    			'SID' => $this->session_id,
	    			'username' => $plugin->admin_user,
	    			'userpass' => $plugin->admin_password
				);
				
				//$params = array();
				
				$result = $client_userService->call('loginUser',$params);
				//echo '<h2>Params</h2><pre>'; print_r($params); echo '</pre>';
				if ($client_userService->fault) {
					echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
				} else {
					$err = $client_userService->getError();
					if ($err) {
						echo '<h2>Error</h2><pre>' . $err . '</pre>';
					} else {
						//echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
						$returnValue = $result["return"];	
						//echo '<h2>returnValue</h2><pre>'; printf($returnValue); echo '</pre>';		
					}
				}
			}
		}   
		if ($returnValue>0){
	    	return true;
		} else {
			return false;
		}
	}

	function openmeetings_createRoomWithModAndType($room) {
		global $plugin;
	    
	 	$client_roomService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/RoomService?wsdl", true);
		
		$err = $client_roomService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
		
		$params = array(
			'SID' => $this->session_id,
			'name' => $room->title,
			'roomtypes_id' => $room->room_type,
			'comment' => strip_tags($room->room_comment),
			'numberOfPartizipants' => $room->room_max_users,
			'ispublic' => true,
			'appointment' => false, 
			'isDemoRoom' => false, 
			'demoTime' => 0, 
			'isModeratedRoom' => $room->room_is_moderated ? true : false,
			'externalRoomType' => 'elgg'
		);

		$result = $client_roomService->call('addRoomWithModerationAndExternalType',$params);
		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_roomService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result["return"]); echo '</pre>';
				return $result["return"];
			}
		}   
		return -1;
	}

	// TODO - this doesn't yet work (might be an Openmeetings issue)
	function openmeetings_updateRoomWithModeration($room) {

		//return -1;		

		global $plugin;
	    
	 	$client_roomService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/RoomService?wsdl", true);
	
		$err = $client_roomService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
		
		$params = array(
			'SID' => $this->session_id,
			'room_id' => $room->room_id,
			'name' => $room->title,
			'roomtypes_id' => $room->room_type,
			'comment' => strip_tags($room->room_comment),
			'numberOfPartizipants' => $room->room_max_users,
			'ispublic' => true,
			'appointment' => false, 
			'isDemoRoom' => false, 
			'demoTime' => 0, 
			'isModeratedRoom' => $room->room_is_moderated ? true : false,
		);

		$result = $client_roomService->call('updateRoomWithModeration',$params);

		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_roomService->getError();
			if ($err) {
				//echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result["return"]); echo '</pre>';
				return $result["return"];
			}
		}   

		return -1;
	}

	function openmeetings_deleteRoom($room_id) {
		global $plugin;
	    
	 	$client_roomService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/RoomService?wsdl", true);
	
		$err = $client_roomService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
		
		$params = array(
			'SID' => $this->session_id,
			'rooms_id' => $room_id,
		);

		$result = $client_roomService->call('deleteRoom',$params);

		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_roomService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				echo '<h2>Result</h2><pre>'; print_r($result["return"]); echo '</pre>';
				return $result["return"];
			}
		}   
		return -1;
	}
		
	function openmeetings_getRecordingsByExternalRooms(){
		global $plugin;
		
		$client_roomService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/RoomService?wsdl", true);
		
		$err = $client_roomService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
		$params = array(
			'SID' => $this->session_id,
//			'externalRoomType' => 'moodle',
			'externalRoomType' => 'elgg',
			);
		//We prefer the List ?!
		$result = $client_roomService->call('getFlvRecordingByExternalRoomTypeByList',$params);
		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_roomService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
				return $result["return"];
			}
		}   
		return -1;
	}
	
	/*
	 * Usage if this Method will work if you have no need to simulate always the same user in 
	 * OpenMeetings, if you want to do this check the next method that also remembers the 
	 * ID of the external User
	 * 
	 * 
	 */
	function openmeetings_setUserObject($username, $firstname, $lastname, 
			$profilePictureUrl, $email) {
	    global $plugin;
	 	$client_userService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/UserService?wsdl", true);
		
		$err = $client_userService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
		$params = array(
			'SID' => $this->session_id,
			'username' => $username,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'profilePictureUrl' => $profilePictureUrl,
			'email' => $email
		);
		$result = $client_userService->call('setUserObject',$params);
		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_userService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result["return"]); echo '</pre>';
				return $result["return"];
			}
		}   
		return -1;
	}
	
	/**
	 * Sets the User Id and remembers the User, 
	 * the value for $systemType is any Flag but usually should always be the same, 
	 * it only has a reason if you have more then one external Systems, so the $userId will not 
	 * be unique, then you can use the $systemType to give each system its own scope
	 * 
	 * so a unique external user is always the pair of: $userId + $systemType
	 * 
	 * in this case the $systemType is 'moodle'
	 * 
	 */
	function openmeetings_setUserObjectWithExternalUser($username, $firstname, $lastname, 
			$profilePictureUrl, $email, $userId, $systemType) {
	    global $plugin;
	 	$client_userService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/UserService?wsdl", true);
		
		$err = $client_userService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
		$params = array(
			'SID' => $this->session_id,
			'username' => $username,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'profilePictureUrl' => $profilePictureUrl,
			'email' => $email,
			'externalUserId' => $userId,
			'externalUserType' => $systemType
		);
		$result = $client_userService->call('setUserObjectWithExternalUser',$params);
		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_userService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result["return"]); echo '</pre>';
				return $result["return"];
			}
		}   
		return -1;
	}
	
	/*
	
	public String setUserObjectAndGenerateRoomHashByURL(String SID, String username, String firstname, String lastname, 
			String profilePictureUrl, String email, Long externalUserId, String externalUserType,
			Long room_id, int becomeModeratorAsInt, int showAudioVideoTestAsInt)
			
			Array ( 
			[SID] => b46c5537c94f5bd0df4664edd3d471a1 
			[username] => admin 
			[firstname] => Sebastian 
			[lastname] => Wagner 
			[profilePictureUrl] => 1 
			[email] => seba.wagner@gmail.com 
			[externalUserId] => 2 
			[externalUserType] => moodle 
			[room_id] => 8 
			[becomeModeratorAsInt] => 
				[showAudioVideoTestAsInt] => 1 )
	
	*/
	function openmeetings_setUserObjectAndGenerateRoomHashByURL($username, $firstname, $lastname, 
			$profilePictureUrl, $email, $userId, $systemType, $room_id, $becomeModerator) {
		    global $plugin;
	 	$client_userService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/UserService?wsdl", true);

		$err = $client_userService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  

		$params = array(
			'SID' => $this->session_id,
			'username' => $username,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'profilePictureUrl' => $profilePictureUrl ? $profilePictureUrl : '0',
			'email' => $email,
			'externalUserId' => $userId,
			'externalUserType' => $systemType,
			'room_id' => $room_id,
			'becomeModeratorAsInt' => $becomeModerator,
			'showAudioVideoTestAsInt' => 1
		);

		$result = $client_userService->call('setUserObjectAndGenerateRoomHashByURL',$params);

		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_userService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result["return"]); echo '</pre>';
				return $result["return"];
			}
		}   
		return -1;
	}
	
	/*
	 * public String setUserObjectAndGenerateRecordingHashByURL(String SID, String username, String firstname, String lastname,
					Long externalUserId, String externalUserType, Long recording_id)
	 */
	 function openmeetings_setUserObjectAndGenerateRecordingHashByURL($username, $firstname, $lastname, 
						$userId, $systemType, $recording_id) {
	    global $plugin;
	 	$client_userService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/UserService?wsdl", true);
		
		$err = $client_userService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
		$params = array(
			'SID' => $this->session_id,
			'username' => $username,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'externalUserId' => $userId,
			'externalUserType' => $systemType,
			'recording_id' => $recording_id
		);
		
		$result = $client_userService->call('setUserObjectAndGenerateRecordingHashByURL',$params);
		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_userService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result["return"]); echo '</pre>';
				return $result["return"];
			}
		}   
		return -1;
	}
	
	function openmeetings_getInvitationHash($room_id, $username = 'Guest') {
		global $plugin;
	    
	 	$client_roomService = new nusoap_client("http://".$plugin->red5host.":".$plugin->red5port."/openmeetings/services/RoomService?wsdl", true);
		
		$err = $client_roomService->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
			echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
			exit();
		}  
		
		$params = array(
			'SID' => $this->session_id,
			'username' => $username,
			'room_id' => $room_id,
			'isPasswordProtected' => false,
			'invitationpass' => '',
			'valid' => 1
		);

		$result = $client_roomService->call('getInvitationHash',$params);
		if ($client_roomService->fault) {
			echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
		} else {
			$err = $client_roomService->getError();
			if ($err) {
				echo '<h2>Error</h2><pre>' . $err . '</pre>';
			} else {
				//echo '<h2>Result</h2><pre>'; print_r($result["return"]); echo '</pre>';
				return $result["return"];
			}
		}   
		return -1;
	}
}

?>
