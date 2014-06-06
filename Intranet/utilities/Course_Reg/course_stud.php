<?php include '../header.php';
//include '../styles/layout.css';
?>
<html>
<head>
<?php
error_reporting(0);
$db_host ="localhost";
$db_username ="kunal15595";
$db_pass ="jtmzk04484";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");

//$sql = 'INSERT INTO `faculty_advisor`(`name`, `roll`) VALUES ("vhj","123")';
//$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());

?>
</head>
<body>
    <link href="../styles/layout.css" rel="stylesheet" />
Select the sem number
<form action="coursewise.php" method="post">
<select name="sem_number">
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
</select>
<input type="submit" value="Check the list"/>
</form>
</body>
</html>
<?phpinclude "../footer.php";?>