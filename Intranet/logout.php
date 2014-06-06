<?php
	if (!isset($_SESSION)) {
        session_start();
    }
	if ($_SESSION['logged_in']) {
		$username = $_SESSION['iitg_username'] ;
		$password = $_SESSION['iitg_password'] ;
		unset($_SESSION['iitg_username']);
		unset($_SESSION['iitg_password']);
	}
	
	$_SESSION['logged_in'] = false;

	// pydio logout
	$glueCode = "../pydio/plugins/auth.remote/glueCode.php";
	$secret = "secret";
	define('AJXP_EXEC', true);

	global $AJXP_GLUE_GLOBALS;
	$AJXP_GLUE_GLOBALS = array();
	$AJXP_GLUE_GLOBALS["secret"] = $secret;
	$AJXP_GLUE_GLOBALS["plugInAction"] = "logout";
   	include($glueCode);

?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	
	// elgg logout
	
		$.ajax({
			url: '../Social/elgg/action/logout',
			type: 'post',
			data: {},
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

	// moodle logout
		
		$.ajax({
			url: '../moodle/login/logout.php',
			type: 'post',
			data: {  },
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
	
	
</script>