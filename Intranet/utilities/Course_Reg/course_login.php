<?include "../header.php";
//include '../styles/layout.css';
?>
<html><link href="../styles/layout.css" rel="stylesheet" />
<body bgcolor="#E6E6FA"; background="Course Reg/Capture8.PNG";>

<head>
<div align="center">
<br/><br/<br/><p><font size="15" color="blue" ><h1> Course Registration</h1></font></p><br/><br/>

<?php  error_reporting(0);
//echo date("Y-m-d");
$valid ="VALID";

    
$db_host ="localhost";
$db_username ="kunal15595";
$db_pass ="jtmzk04484";
$db_name ="stud";
$count="1";
$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");
session_start();
$_SESSION["login"]="VALID";
if($_POST['user_type']=="student")
  {  
$sl='SELECT sem,name,roll,id,password FROM course_stud_login';
$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());

while($row = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{
	if($_POST['username']==$row['id'] && $_POST['password']==$row['password'])
	{//echo "djvbk<br/>";
	$sql='SELECT end,start FROM deadlines';
$retvalue = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());

$c=1;
while($colo = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{
	if($c==1)
{
	$datestart= $colo['start'];
	echo  "<br/><br/> ";
	$datend= $colo['end'];echo "</h3>";
	$c=$c+1;
	}}
	$_SESSION["login"]="VALID";
	if(strtotime(date("Y-m-d"))>=strtotime($datestart) &&strtotime(date("Y-m-d"))<=strtotime($datend)){
	$sql = "UPDATE `course_stud_login` SET  `logged_in`=1 WHERE `id` ='".$_POST['username']."' ";
	$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
	
  $_SESSION["s"]=$row['id']; echo $_SESSION['s'];
	header('Location:course.php');
	}else 
	if(strtotime(date("Y-m-d"))<strtotime($datestart))
	echo" <script type='text/javascript'>".
	  //JavaScript code goes here
	 " alert('Not allowed!')".
      "</script>";
  
}}}
  
  else
  if($_POST['user_type']=="admin" && $_POST['username']=="admin" && $_POST['password']=="admin")
  {
		$_SESSION["login"]="VALID";
		header('Location:admin_index.php');
  }
  else
  if($_POST['user_type']=="faculty")
  {  $_SESSION["login"]="VALID";
$sl='SELECT sem,name,id,password FROM faculty_login';
$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());

while($row = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{
	if($_POST['username']==$row['id'] && $_POST['password']==$row['password'])
	{//echo "djvbk<br/>";
	$valid="VALID";
	//$sql = "UPDATE `course_stud_login` SET  `logged_in`=1 WHERE `id` ='".$_POST['username']."' ";
//	$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());$_SESSION['f']=$row['id'];
	$_SESSION["faculty"]=$_POST['username'];//echo $_SESSION["faculty"];
	header('Location:faculty.php');
}}
  }
  //else
   //echo"INVALID";
?> 
</head>
<body>
<form action="course_login.php" method="post">
<select name="user_type" >
       
		<option value="student">Student</option>
		<option value="faculty">Faculty</option>
		<option value="admin">Admin</option>
		
</select><br/><br/><br/><br/>
Username: <input type="text" name="username"/><br/><br/><br/>
Password: <input type="password" name="password"/><br/><br><br/>
<input type="submit" value="Enter"/><br/><br/><br/>
</form>
<?php 
$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");
$c=1;
$sql='SELECT end,start FROM deadlines';
$retvalue = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());


while($row = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{
	if($c==1)
{
	echo "<h3>Course Registration commences on";
	echo $row['start'];echo "</h3>";
	echo  "<br/><br/> <h3>Last Date of Registration is";
	echo $row['end'];echo "</h3>";
	$c=$c+1;
	}	

}

?>
<p><font size="5" color="green"><h5>Check the student list</h5></font></p>
	<form action="coursewise.php" method="post">
		
Select Sem No.<select name="sem_number">
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
</select>
	<input type="submit" value="Check the list"/><br/><br/><br/><br/><br/><br/>

	</form>
	
</body>

</html>
<?phpinclude "../footer.php";?>