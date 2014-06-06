<?php
	if (isset($_POST['username']) && !empty($_POST['username'])) {
		if (isset($_POST['password']) && !empty($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			// pydio authentication

			$glueCode = "../pydio/plugins/auth.remote/glueCode.php";
			$secret = "secret";
			$credentials = array(
				"name" => $username,
				"password" => $password,
				"right" => "admin",
				);
			define('AJXP_EXEC', true);

			global $AJXP_GLUE_GLOBALS;
			$AJXP_GLUE_GLOBALS = array();
			$AJXP_GLUE_GLOBALS["secret"] = $secret;
			$AJXP_GLUE_GLOBALS["plugInAction"] = "login";
			$AJXP_GLUE_GLOBALS["login"] = $credentials;
			$AJXP_GLUE_GLOBALS["autoCreate"] = "true";
			
		   	include($glueCode);
		}	
	}
	

?>