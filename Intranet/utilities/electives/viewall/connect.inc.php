<?php
$conn_error='Could not connect to database';
$mysql_host ='localhost';
$mysql_user = 'kunal15595';
$mysql_pass= 'jtmzk04484';
$mysql_db='subgroup5';

if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db)){
	die($conn_error);
} else{
	//echo "Connected!";
}





