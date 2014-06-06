
<html>
<!--<body>-->
<head>
<?php
 error_reporting(0);
$db_host ="localhost";
$db_username ="root";
$db_pass ="password";
$db_name ="stud";
//echo "this is {$_POST['sem_number']}<br/><br/>";
$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");

$sql = 'SELECT serial, name, roll FROM admin_list';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());

$sl = 'SELECT sem, theory1,theory2 ,theory3,theory4,theory5,lab1,lab2,lab3 FROM course';
$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());

while($col =mysql_fetch_array($retvalue,mysql_fetch_assoc()))
	{if($_POST['sem_number']==$col['sem']){
		echo "<h1>Sem No. {$col['sem']}</h1><br/><br/>";
		echo "<h3>Course Name. {$col['theory1']}</h3><br/>";
		$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
		
		echo"<table border=2px>";
		echo"<tr><th>ID</th><th>Roll No.</th><th>Name</th></tr>";
		
		while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
		{
			echo   "<tr><td> {$row['serial']}</td>".
				"<td>{$row['roll']}</td>  ".
				"<td>{$row['name']}</td></tr><br/>";
		}echo"</table>";

echo "<h3>Course Name. {$col['theory2']}</h3><br/>";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
 echo   "id : {$row['serial']}".
        "ROLL NO. :{$row['roll']}   ".
        "Name: {$row['name']}<br/>";
}
echo "Course Name. {$col['theory3']}<br/>";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
 echo   "id : {$row['serial']}".
        "ROLL NO. :{$row['roll']}   ".
        "Name: {$row['name']}<br/>";
}
echo "Course Name. {$col['theory4']}<br/>";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
 echo   "id : {$row['serial']}".
        "ROLL NO. :{$row['roll']}   ".
        "Name: {$row['name']}<br/>";
}
echo "Course Name. {$col['theory5']}<br/>";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
 echo   "id : {$row['serial']}".
        "ROLL NO. :{$row['roll']}   ".
        "Name: {$row['name']}<br/>";
}
echo "Course Name. {$col['lab1']}<br/>";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
 echo   "id : {$row['serial']}".
        "ROLL NO. :{$row['roll']}   ".
        "Name: {$row['name']}<br/>";
}

echo "Course Name. {$col['lab2']}<br/>";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
 echo   "id : {$row['serial']}".
        "ROLL NO. :{$row['roll']}   ".
        "Name: {$row['name']}<br/>";
}
echo "Course Name. {$col['lab3']}<br/>";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
 echo   "id : {$row['serial']}".
        "ROLL NO. :{$row['roll']}   ".
        "Name: {$row['name']}<br/>";
}
}}
?>
</head>

</html>