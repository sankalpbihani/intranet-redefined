<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<html>
<body bgcolor="#E6E6FA">
<!--<body>-->
<head>
<div align="center">
<?php
 error_reporting(0);
$db_host ="localhost";
$db_username ="kunal15595";
$db_pass ="jtmzk04484";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");
session_start();
$sq = 'SELECT sem, name, id FROM faculty_login';//echo $_SESSION["faculty"];
$retval = mysql_query( $sq, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{//echo $row['id'];
	if($_SESSION["faculty"]==$row['id'])
	{	
		echo "<h1>HELLO      ";
		echo "{$row['name']}</h1>";
		$_SESSION['faculty_sem']=$row['sem'];
	}
}
$sl = "UPDATE `faculty_advisor` SET  `message`='".$_POST['message']. "' WHERE `roll`='".$_POST['message_id']."'";
		$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());

$sql = 'SELECT sem, name, roll ,message FROM faculty_advisor';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
echo"<table border=2px width=700>";
echo "<tr><th>id</th><th>Roll No.</th><th>Name</th><th>Message</th> </tr>";
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{if($row['sem']==$_SESSION['faculty_sem'])
 {
echo"<tr>";
 echo   "<td>{$row['number']}</td>".
        "<td>{$row['roll']}</td>".
        "<td>{$row['name']}</td>".
	"<td>{$row['message']}</td>";
        echo "</tr>";
}		}
echo "</table>";
?>
</head>

<body>
<link href="../styles/layout.css" rel="stylesheet" />
<br/><br/><br/>
	
<form action="faculty.php" method = "post">
Enter your Roll No.<input type="text" name="message_id"/><br/><br/>
<textarea name="message">
Done</textarea><br/>
<input type="submit" value="Send Message"/>
</form>
<?php
//echo date("Y-m-d");
$sql = 'SELECT end FROM deadlines';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
echo "<br/><br/><br/>";
$c=1;
//echo $row['end'];
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() )){
if(strtotime(date("Y-m-d"))==strtotime($row['end']) && $c==1 ){
$c=$c+1;//echo $row['end'];echo date("Y-m-d");
echo "<form action='confirmlist.php' method='post'>".
"<input type='submit' value='Send to admin'/>".
"</form>";
}}
?>
<form action="course_login.php">
<input type="submit" value="Logout"/>
</form>
</body>
</html>
<?php include "../footer.php";?>