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

$sql = 'SELECT sem ,theory1, theory2, theory3 ,theory4, theory5, lab1, lab2,lab3 ,faculty_advisor_name ,faculty_advisor_id FROM course';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{if($row['sem']==$_POST['sem_number'])
{
 $sq = 'UPDATE `sem_change` SET `sem`="'.$row['sem'].'" WHERE 1 ';
$retvalue = mysql_query( $sq, $conn ) or die("could not get data:" .mysql_error());


 echo      " theory1 : {$row['theory1']} <br> ".
		   " theory2 : {$row['theory2']} <br> ".
		     " theory3 : {$row['theory3']} <br> ".
			   " theory4 : {$row['theory4']} <br> ".
         "theory5 : {$row['theory5']} <br>".
		 "lab1 : {$row['lab1']}<br/>".
		 "lab2 : {$row['lab2']}<br/>".
		 "lab3 : {$row['lab3']}<br/>".
		 "Faculty name : {$row['faculty_advisor_name']}<br/>".
		 "Faculty Advisor ID : {$row['faculty_advisor_id']}<br/>" ;

		 }		}


?>
</head>
<body>

<form action="course_new.php" method="post">

 Course 1:<input type="text" name="theory1_name"/><br/>
 Course 2:<input type="text" name="theory2_name"/><br/>
 Course 3:<input type="text" name="theory3_name"/><br/>
 Course 4:<input type="text" name="theory4_name"/><br/>
 Course 5:<input type="text" name="theory5_name"/><br/>
 Lab 1:<input type="text" name="lab1_name"/><br/>
 Lab 2:<input type="text" name="lab2_name"/><br/>
 Lab 3:<input type="text" name="lab3_name"/><br/>
 Faculty Advisor name:<input type="text" name="faculty_name"/><br/>
 Faculty_email id:<input type="text" name="faculty_id"/><br/>
 <input type="submit" value="Change/Reset"/>
</form>
</body>
</html>