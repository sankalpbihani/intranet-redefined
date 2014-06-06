<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<html>
<head>
<?php
error_reporting(0);
$db_host ="localhost";
$db_username ="root";
$db_pass ="password";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");

$sl='SELECT sem,name,roll,id,password,logged_in FROM course_stud_login';
$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());


while($row = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{
	if($row['logged_in']==1)
	{
		$sql = 'INSERT INTO `faculty_advisor`(`name`, `roll`,`sem`) VALUES ("'.$row['name'].'","'.$row['roll'].'","'.$row['sem'].'")';
		$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());

	}
	
}

?>
</head>
<body>
<link href="../styles/layout.css" rel="stylesheet" />
<h1>DONE!
<div align="right"> 
  <form action="logout.php" method="post">
<input type="submit" value="Logout"/>
</form></div>
</h1>
</body>
</html>
<?phpinclude "../footer.php";?>