<!DOCTYPE html>
<html>

<head>
<style>
h1 {text-align:center;}

</style>
<head>
<body style="background-color:#00FFFF;">
<h1  style="background-color:#D11975;">Get Your All Dues at single Place.</h1>
</body>

<?php
include '../../connect.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$u_name = $_POST['u_name'];
$result = mysqli_query($con,"SELECT * FROM dues1
WHERE username='".$u_name."'");

print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FF6699\"><tr> 

<td width=100>Name:</td> 
<td width=100>User Name:</td> 
<td width=100>Mess Dues:</td> 
<td width=100>Gymkhana:</td> 
<td width=100>Miscellaneous:</td> 
</tr>"; 

$row = mysqli_fetch_array($result);
{ 
print "<tr>"; 
print "<td>" . $row['Name'] . "</td>"; 
print "<td>" . $row['username'] . "</td>"; 
print "<td>" . $row['MessDues'] . "</td>";
print "<td>" . $row['Gymkhana'] . "</td>";
print "<td>" . $row['Misc'] . "</td>";
print "</tr>"; 
} 
print "</table>"; 
?>
</html> 