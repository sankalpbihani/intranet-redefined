<html>

<head>
<div align="center">
<br/><br/<br/><h1 style="color:blue;">Course Registration</h1><br/><br/>

<?php  error_reporting(0);

$valid ="VALID";

    
$db_host ="localhost";
$db_username ="root";
$db_pass ="password";
$db_name ="stud";
$count="1";
$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");

if($_POST['user_type']=="student")
  {  
$sl='SELECT sem,name,roll,id,password FROM course_stud_login';
$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());

while($row = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{
	if($_POST['username']==$row['id'] && $_POST['password']==$row['password'])
	{//echo "djvbk<br/>";
	$valid="VALID";
	$sql = "UPDATE `course_stud_login` SET  `logged_in`=1 WHERE `id` ='".$_POST['username']."' ";
	$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
	header('Location:course.php');
}}
  }
  else
  if($_POST['user_type']=="admin" && $_POST['username']=="admin" && $_POST['password']=="admin")
  {
		$valid="VALID";
		header('Location:admin_index.php');
  }
  else
  if($_POST['user_type']=="faculty")
  {  
$sl='SELECT sem,name,id,password FROM faculty_login';
$retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());

while($row = mysql_fetch_array($retvalue, mysql_fetch_assoc() ))
{
	if($_POST['username']==$row['id'] && $_POST['password']==$row['password'])
	{//echo "djvbk<br/>";
	$valid="VALID";
	$sql = "UPDATE `course_stud_login` SET  `logged_in`=1 WHERE `id` ='".$_POST['username']."' ";
	$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
	header('Location:faculty.php');
}}
  }
  else
  $valid="INVALID";
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
if($valid =="INVALID")
//echo "INVALID CREDENTIALS"
?>
</body>

</html>