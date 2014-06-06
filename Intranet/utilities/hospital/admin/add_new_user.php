<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
<?php
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$page_status="NEW";

// escape variables for security
if (isset($_POST['user_id'])){
$user = ($_POST['user_id']);
$form = ($_POST['form_id']);
$page_status="FOUND";
}
//$age = mysqli_real_escape_string($_POST['age']);

if ($page_status == "FOUND"){
$c=0;
$sql="SELECT * FROM student_form_number WHERE (user_id='" .$user. "')";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
$c++;
}
if($c == 0){
$sql1="INSERT INTO student_form_number  (user_id,form_number) VALUES ('" .$user. "', '" . $form . "')";

if (!mysqli_query($con,$sql1))
{
  die('Error::: ' . mysqli_error($con));
}
?><script type="text/javascript">
alert("input successful");
</script>
<?php
}
else {?><script type="text/javascript">
alert("User Already Exist");
</script>
<?php
}

  
}
mysqli_close($con);
?>

</head>
<body style="background-color:maroon">

<h1><u>
<div id="heading" style="background-color:orange" align="center"><br>ADD NEW USER HERE<br></div>
</u></h1>
<div id="main">
<form action="add_new_user.php" method="post">
<b><label style="padding-left:300px" >User id: </label></b><label style="padding-left:500px" ><input type="text" name="user_id" id="user_id" name="file_rules" style="background-color:white ; color:orange ; padding:10px 10px"></label><br><br>
<b><label style="padding-left:300px" >Form Number:</label></b> <label style="padding-left:455px" ><input type="text" name="form_id" id="form_id" name="file_rules" style="background-color:white ; color:orange ; padding:10px 10px"></label><br><br>
<div align="center"><input style="background-color:black ; color:orange ; padding:10px 10px ; align:center" type="submit" value="Click Me"></div>
</form>
</div>
<br><br><br><br>
<div align="center">
<a href="admin_home.php"style="background-color:black ; color:orange ; padding:10px 30px">Home</a>
</div>
</body>
</html>