<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<html>
<body bgcolor="#E6E6FA">
<head>
<div align="center"> 
<h1>Present Courses</h1>
<?php
error_reporting(0);
$db_host ="localhost";
$db_username ="kunal15595";
$db_pass ="jtmzk04484";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");
echo '<div align="right"> ' .
  '<form action="course_login.php" method="post">'.
'<input type="submit" value="Logout"/>'.
'</form>'.'</div>';
$sql = 'SELECT name,number,roll,sem ,theory1, theory2, theory3 ,theory4, theory5, lab1, lab2,lab3 ,faculty_advisor_name ,faculty_advisor_id FROM course';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
echo"<table border=2px width=500>";
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
	{
	if($row['sem']==$_POST['sem_number'])
{
 $sq = 'UPDATE `sem_change` SET `sem`="'.$row['sem'].'" WHERE 1 ';
$retvalue = mysql_query( $sq, $conn ) or die("could not get data:" .mysql_error());
  echo            "<tr><td>theory1 </td><td>{$row['theory1']}</td></tr>".
		   "<tr><td>theory2 </td><td>{$row['theory2']}</td></tr>".
		     "<tr><td>theory3 </td><td>{$row['theory3']}</td></tr>".
			   "<tr><td>theory4 </td><td>{$row['theory4']}</td></tr>".
         "<tr><td>theory5 </td><td>{$row['theory5']}</td></tr>".
		 "<tr><td>lab1 </td><td>{$row['lab1']}</td></tr>".
		 "<tr><td>lab2 </td><td>{$row['lab2']}</td></tr>".
		 "<tr><td>lab3 </td><td>{$row['lab3']}</td></tr>".
		 "<tr><td>Faculty name </td><td>{$row['faculty_advisor_name']}</td></tr>".
		 "<tr><td>Faculty Advisor ID </td><td>{$row['faculty_advisor_id']}</td></tr>" ;
}}
 echo"</table>";
?></br></br>
</head>
<body>
<link href="../styles/layout.css" rel="stylesheet" />


<h2>New Courses</h2> 
<form action="course_new.php" method="post">
<table border=2px width=500>


<tr><td> Course 1</td><td><input type="text" name="theory1_name"/></td></tr>
<tr><td> Course 2</td><td><input type="text" name="theory2_name"/><br/></td></tr>
<tr><td> Course 3</td><td><input type="text" name="theory3_name"/><br/></td></tr>
<tr><td> Course 4</td><td><input type="text" name="theory4_name"/><br/></td></tr>
<tr><td> Course 5</td><td><input type="text" name="theory5_name"/><br/></td></tr>
<tr><td> Lab 1</td><td><input type="text" name="lab1_name"/><br/></td></tr>
<tr><td> Lab 2</td><td><input type="text" name="lab2_name"/><br/></td></tr>
<tr><td> Lab 3</td><td><input type="text" name="lab3_name"/><br/></td></tr>
<tr><td> Faculty Advisor name</td><td><input type="text" name="faculty_name"/><br/></td></tr>
<tr><td> Faculty_email id</td><td><input type="text" name="faculty_id"/><br/></br></td></tr>
 </table></br></br>
<input type="submit" value="Change/Reset"/>
</form>
</div>
</body>
</html>
<?phpinclude "../footer.php";?>