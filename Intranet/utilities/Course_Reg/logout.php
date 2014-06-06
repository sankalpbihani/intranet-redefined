<?phpinclude '../header.php';
//include '../styles/layout.css';
?><html>
<head>

<?php
error_reporting(0);
$db_host ="localhost";
$db_username ="kunal15595";
$db_pass ="jtmzk04484";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");

$sql = "UPDATE `course_stud_login` SET  `logged_in`=0 WHERE `logged_in`=1";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());


header('Location:course_login.php ');
?>
</head>
<body><link href="../styles/layout.css" rel="stylesheet" /></body>
</html>
<?phpinclude "../footer.php";?>