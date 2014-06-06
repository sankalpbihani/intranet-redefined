<html>
<head>
<title>Delete User</title>

</head>
<body style="background-color:maroon">
<h1><u>
<div id="heading" style="background-color:orange" align="center"><br>DELETE USER<br></div>
</u></h1>
<br>
<form action="delete_user.php" method="post">
<b><label style="color:orange ; padding:20px 0px">Search : </b></label>
<label style="color:orange ; padding:50px 0px">User id: </label><input type="text" name="user_id" id="user_id" style="background-color:white ; color:orange ; padding:10px 10px">
<input style="background-color:black ; color:orange ; padding:10px 10px" type="submit" value="Click here">
</form>
<?php
session_start();
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$page_status="NEW";
if (isset($_POST['user_id'])){
$_SESSION['user'] = ($_POST['user_id']);
$page_status="FOUND";
}
$count=0;
if ($page_status == "FOUND"){
$sql="SELECT * FROM student_form_number WHERE user_id='".$_SESSION['user']."' ";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
  {
  echo "Form Number of <b><label style=\"color:orange\">".$row['user_id'] . "</b></label> is <b><label style=\"color:orange\">" . $row['form_number']."</b></label>";
  echo "<br>";
  $_SESSION['form_no']=$row['form_number'];
  $count++;
  }
  if($count == 0)
  {
  echo "<b><label style=\"color:orange\">". $_SESSION['user'] . "</b></label> not found! ";
  }
}
mysqli_close($con);
?>
<form action="delete_user.php" method="post">
<b><label style="color:orange ; padding:20px 0px">To Delete the User </b></label>
<input style="background-color:black ; color:orange ; padding:10px 10px" type="submit" value="Click here" name="delete_me">
</form>
<?php
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$delete_status="NEW";
if (isset($_POST['delete_me'])){
$delete_status="FOUND";
//$user_del=($_POST['user_id']);
}
if($delete_status == "FOUND")
{
$sql="	DELETE FROM student_form_number WHERE user_id='".$_SESSION['user']."' ";
if (!mysqli_query($con,$sql))
{
  die('Error::: ' . mysqli_error($con));
}
?><script type="text/javascript">
alert("deleted successfully");
</script>
<?php
}
?>
<!--
<form action="delete_user.php" method="post">
<b><label style="color:orange ; padding:20px 0px">To Edit the User </b></label>
<input style="background-color:black ; color:orange ; padding:10px 10px" type="submit" value="Click here" name="edit_me">
</form>
<?php
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$edit_status="NEW";
if (isset($_POST['edit_me'])){
$edit_status="FOUND";
//$user_del=($_POST['user_id']);
}
if($edit_status == "FOUND")
{
echo "<input type=\"text\" name=\"edit_name\" value=\" ". $_SESSION['user']." ><br>
	<input type=\"text\" name=\"edit_number\" value=\" ". $_SESSION['form_no']. "><br>
	<input type=\"submit\" value=\"Edit\" name=\"edit_button\">";

}
?>
-->
<br><br><br><br>
<a href="admin_home.php"style="background-color:black ; color:orange ; padding:10px 30px">Home</a>
</body>
</html>