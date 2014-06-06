<?php
    
    define("HOST", "http://localhost/utilities");
	define("HOSTNAME", "localhost");
	define("USERNAME", "kunal15595");
	define("PASS", "jtmzk04484");
	define("DBNAME", "demo");


    $host=constant("HOSTNAME");
    $user=constant("USERNAME");
    $pass=constant("PASS");
    $db=constant("DBNAME");
    
    function getConnected($host,$user,$pass,$db) {
		$mysqli = new mysqli($host, $user, $pass, $db);
		if($mysqli->connect_error) 
		die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		return $mysqli;
	}

?>
