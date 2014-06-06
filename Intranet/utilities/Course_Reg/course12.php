<html>
<body bgcolor="#E6E6FA">
<head>
<div align="center" style="padding:10px">
</div>
<div align="center">
<?php
 error_reporting(0);
$db_host ="localhost";
$db_username ="root";
$db_pass ="password";
$db_name ="stud";
	
$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");
  session_start();
  
  $sl='SELECT sem,name,roll,id,password,logged_in FROM course_stud_login';
$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{//echo"dfSA";
if($row['logged_in']==1){
 echo   "ROLL NO. :{$row['roll']} <br/><br/><br>  ".
         " NAME : {$row['name']} <br/><br/><br/>".
         " SEMESTER : {$row['sem']}<br/>".
        /* " {$row['theory1']} <br/> ".
		 " {$row['theory5']} <br/> ".
		 " {$row['theory2']} <br/> ".
		 " {$row['theory3']} <br/> ".
		 " {$row['theory4']} <br/> ".
		 " {$row['lab1']} <br/> ".
		 " {$row['lab2']}<br/>".
		 " {$row['lab3']}<br/>".*/
         "<br/>COURSE DETAILS OF SEMESTER<br><br/>";
		 $s=$row['sem'];
		}}

$sql = 'SELECT number, name, roll,sem, theory1,theory2,theory3,theory4,theory5,lab1,lab2,lab3 FROM course';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
if($s==$row['sem'])

	echo "<table border=2px width=300>";
      echo"<tr>";
		echo "<td>{$row['theory1']}</td>";
	  echo"</tr>";
	  echo"<tr>";
	    echo "<td>{$row['theory2']}</td>";
	  echo"</tr>";
      echo"<tr>";
        echo "<td>{$row['theory3']}</td>";
      echo"</tr>";
      echo"<tr>";
	    echo "<td>{$row['theory4']}</td>";
	  echo"</tr>";
	  echo"<tr>"; 
	   echo "<td>{$row['theory5']}</td>";
	  echo"</tr>";
	  echo"<tr>";
       echo "<td>{$row['lab1']}</td>";	  
      echo"</tr>";
	   
	  echo"<tr>";
	    echo "<td>{$row['lab2']}</td>";
	  echo"</tr>";
      echo"<tr>";
         echo "<td>{$row['lab3']}</td>";
      echo"</tr>";	 
	echo "</table>";

		}
//$sql='INSERT INTO `faculty_advisor`(`name`, `roll`) VALUES ("vhj","123")';
//function send()
//$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());


?>
 </div>
</head>
<body><br/><br/>
<div align="center">
<form action="add_course.php" method="post">
<input type="submit" value="Submit!"/>
</form>
</div>
</body>

</html>