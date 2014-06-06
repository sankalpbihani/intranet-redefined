<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<html>
<body bgcolor="#E6E6FA">
<link href="../styles/layout.css" rel="stylesheet" />
<head>
<div align="center" style="padding:10px">
</div>
<div align="center">
<?php
 error_reporting(0);
$db_host ="localhost";
$db_username ="kunal15595";
$db_pass ="jtmzk04484";
$db_name ="stud";
	
$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");
  //session_start();
  echo '<div align="right"> ' .
  '<form action="logout.php" method="post">'.
'<input type="submit" value="Logout"/>'.
'</form>'.'</div>';
session_start();
  
  $sl='SELECT sem,name,roll,id,password,logged_in FROM course_stud_login';
$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{//echo"dfSA";

//echo $_SESSION["s"];
if($row['id']==$_SESSION['s']){
 echo   "<h3>ROLL NO. :{$row['roll']} <br/><br/><br>  ".
         " NAME : {$row['name']} <br/><br/><br/>".
         " SEMESTER : {$row['sem']}</h3><br/>".
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
		 $r=$row['roll'];
		}}

$sql = 'SELECT number, name, roll,sem, theory1,theory2,theory3,theory4,theory5,lab1,lab2,lab3 FROM course';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
if($s==$row['sem'])
{
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
		}
//$sql='INSERT INTO `faculty_advisor`(`name`, `roll`) VALUES ("vhj","123")';
//function send()
//$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());

$sql = 'SELECT message,roll FROM faculty_advisor';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{ if($row['roll']==$r){
echo "<form>";
echo"<textarea name='mes'>{$row['message']}</textarea> ";
echo "</form>";}
}
?>
 </div>
</head>
<body><br/><br/>
<link href="../styles/layout.css" rel="stylesheet" />
<div align="center">
<form action="add_course.php" method="post">
<input type="submit" value="Submit!"/>
</form>
</div>
</body>

</html>
<?phpinclude "../footer.php";?>