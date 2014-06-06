
<?php
error_reporting(0);
$dbhost = 'localhost';
$dbuser = 'kunal15595';
                                               //Add the details of whatever database to be connected
$dbname = 'anil';

$conn = mysql_connect($dbhost, $dbuser,"jtmzk04484") or die ('Error connecting to mysql');
mysql_select_db($dbname);
?>