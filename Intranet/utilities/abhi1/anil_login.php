<html>
<body bgcolor="#E6E6FA">
<head>
<div align="center">
<br/><br/<br/><h1 style="color:blue;">Login for Attestation</h1><br/><br/>


</head>
<body>
<form action="anil_login.php" method="post">
<br/><br/><br/><br/>
Username: <input type="text" name="username"/><br/><br/><br/>
Password: <input type="password" name="password"/><br/><br><br/>
<input type="submit" name="submit" value="Enter"/><br/><br/><br/>
</form>
<?php 

if(!empty($_POST['submit']))
{	
include('opendb.php') ;
$sql = "SELECT `name`,`roll_number`,`user_nm`,`password` FROM `student` WHERE `user_nm` = '".$_POST['username']."'" ;
$result = mysql_query($sql) ;
if(!$result){
	echo "Invalid credentials" ;
}
else {
	$count = mysql_num_rows($result) ;
	if($count==1){
		$row = mysql_fetch_assoc($result) ;
		if($row['password']==$_POST['password']){

			session_start() ;
			$_SESSION['name'] = $row['name'] ;
			$_SESSION['roll_number'] = $row['roll_number'] ;

			header("location:bookpermision1.php") ;

		}
		else {
			echo "Invalid password try again !!!!" ;
		}

	}
	else{
		echo "There exist multiple users with same username.Error !!!!" ;
	}
}

}
?>


</body>

</html>