<?php
	$username = '';
	$password = '';
	if (!isset($_SESSION)) {
        session_start();
    }
	if (isset($_POST['username']) && !empty($_POST['username'])) {
		if (isset($_POST['password']) && !empty($_POST['password'])) {
			var_dump('ok');
			$username = $_POST['username'];
			$password = $_POST['password'];

			include 'login_process.php';
			if (!isset($_SESSION)) {
		        session_start();
		    }
			
			
			// pydio authentication

			$glueCode = "../pydio/plugins/auth.remote/glueCode.php";
			$secret = "secret";
			$credentials = array(
				"name" => $username,
				"password" => $password
				);
			define('AJXP_EXEC', true);

			global $AJXP_GLUE_GLOBALS;
			$AJXP_GLUE_GLOBALS = array();
			$AJXP_GLUE_GLOBALS["secret"] = $secret;
			$AJXP_GLUE_GLOBALS["plugInAction"] = "login";
			$AJXP_GLUE_GLOBALS["login"] = $credentials;
			$AJXP_GLUE_GLOBALS["autoCreate"] = "true";
			
		   	include($glueCode);

		   	echo $_SESSION['user_nm'];
		   	echo $_SESSION['name'];
		   	echo $_SESSION['role'];
		   	
		}	
	}
	

?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	var username = "<?php echo $username; ?>";
	var password = "<?php echo $password; ?>";
	console.log(username+":"+password);

	// moodle authentication
	if (username != '' && password != '') {
		$.ajax({
			url: '../moodle/login/index.php',
			type: 'post',
			data: { username: username, password: password  },
			success: function(data) {
				// console.log("request successful");
			},
	        error: function(xhr, ajaxOptions, thrownError)
	        {
	            // console.log("readyState: " + xhr.readyState);
	            //     console.log("responseText: "+ xhr.responseText);
	            //     console.log("status: " + xhr.status);
	            //     console.log("error: " + thrownError);
	        }
		});
		
		$(document).ajaxStop(function() {	
			// unblock();
			// window.location = 'rest.php';
			$(this).unbind('ajaxStop');
		});
	}
	else{
		window.location = 'index.php';
	}
	// elgg authentication
	if (username != '' && password != '') {
		$.ajax({
			url: '../Social/elgg/action/login',
			type: 'post',
			data: { username: username, password: password  },
			success: function(data) {
				// console.log("request successful");
			},
	        error: function(xhr, ajaxOptions, thrownError)
	        {
	            // console.log("readyState: " + xhr.readyState);
	            //     console.log("responseText: "+ xhr.responseText);
	            //     console.log("status: " + xhr.status);
	            //     console.log("error: " + thrownError);
	        }
		});
		
		$(document).ajaxStop(function() {	
			// unblock();
			window.location = 'index.php';
			$(this).unbind('ajaxStop');
		});
	}
	
</script>