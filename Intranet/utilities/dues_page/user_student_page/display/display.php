<!DOCTYPE html>
<html>

<head>
<style>
h1 {text-align:center;}

</style>
<head>
<body style="background-color:#993333;">
<h1  style="background-color:#00CCFF;">Get Your All Dues at single Place.</h1>
</body>

<?php
include '../../connect.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$u_name = $_POST['u_name'];
if ($u_name==NULL)
{echo "Please enter user name.";}
else 
{
$result = mysqli_query($con,"SELECT * FROM dues1
WHERE username='".$u_name."'");
$row = mysqli_fetch_array($result);
$id_value= $row['id'];
 if ($id_value==0)
{echo "You have no 
dues."; }
else
{
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#CC33FF
\"><tr> 

<td width=100>Name:</td> 
<td width=100>User Name:</td> 
<td width=100>Mess Dues:</td> 
<td width=100>Gymkhana:</td> 
<td width=100>Miscellaneous:</td> 
</tr>"; 


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
}
}
?>
</html> 