<html>
<!--<body>-->
<head>
<div align="center">
<?php
 error_reporting(0);
$db_host ="localhost";
$db_username ="root";
$db_pass ="password";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");

$sl = "UPDATE `faculty_advisor` SET  `message`='".$_POST['message']. "' WHERE `roll`='".$_POST['message_id']."'";
		$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());

$sql = 'SELECT number, name, roll ,message FROM faculty_advisor';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
echo"<table border=2px width=700>";
echo "<tr><th>id</th><th>Roll No.</th><th>Name</th><th>Message</th> </tr>";
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
 
echo"<tr>";
 echo   "<td>{$row['number']}</td>".
        "<td>{$row['roll']}</td>".
        "<td>{$row['name']}</td>".
	"<td>{$row['message']}</td>";
        echo "</tr>";
		}
echo "</table>";
?>
</head>

<body>
<br/><br/><br/>
	
<form action="faculty.php" method = "post">
Enter your Roll No.<input type="text" name="message_id"/><br/><br/>
<textarea name="message">
write your message</textarea><br/>
<input type="submit" value="Submit"/>
</form>

<br/><br/><br/>
<form action="confirmlist.php">
<input type="submit" value="Confirm"/>
</form>
<div/>
</body>
</html>