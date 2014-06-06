<!DOCTYPE html>
<html>

 <head>
<style>
h1 {text-align:center;}

 </style>
<head>
<body style="background-color:#00FFFF;">
<h1  style="background-color:red;">Get Your All Dues at single Place.</h1>
</body>
 
<?php
include '../connect.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 /*  mysqli_query($con,"UPDATE dues1 SET Messtok=0 
WHERE RollNo=120101055");
 */

session_start();
 $ses_var=$_SESSION['user_nm']; 
 /* ----
$result = mysqli_query($con,"SELECT * FROM dues1
WHERE username='".$ses_var."'"); */
$result = mysqli_query($con,"SELECT * FROM dues1 WHERE username='". $ses_var ."' ");
 $row = mysqli_fetch_array($result);
  $id_value=$row['id'];
   $var= "oooo";
  if ($id_value==0)
    {echo "You have no due .";}
  else {

  

  print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FF6699\"><tr> 

<td width=100>Name:</td> 

<td width=100>User Name:</td> 
 <td width=100>Mess Dues:</td> 
<td width=100>Gymkhana:</td> 
<td width=100>Miscellaneous:</td>  
</tr>"; 
   print "<tr>"; 
print "<td>" . $row['Name'] . "</td>"; 
print "<td>" . $row['username'] . "</td>"; 
  
   $messtok_var=$row['Messtok'] ; 
   if ($messtok_var==1)
   {
print "<td>" . $row['MessDues'] . "</td>";
 mysqli_query($con,"UPDATE dues1 SET  Messtok=0
WHERE id=$id_value");

}
   else 
   { print "<td>" . $var . "</td>"; }
   $gymtok_var=$row['Gymtok'];
	   if ($gymtok_var==1)
   {  
   print "<td>" . $row['Gymkhana'] . "</td>";
   mysqli_query($con,"UPDATE dues1 SET  Gymtok=0
WHERE id=$id_value");

   }
   else 
   {print "<td>" . $var . "</td>"; }
   $misctok_var=$row['Misctok'];
      if ($misctok_var==1)
   {
 
   print "<td>" . $row['Misc'] . "</td>";
     mysqli_query($con,"UPDATE dues1 SET  Misctok=0
WHERE id=$id_value");
mysqli_close($con);
   }
   else 
   { print "<td>" . $var . "</td>";}
   
/* print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FF6699\"><tr> 

<td width=100>Name:</td> 
<td width=100>Roll No:</td> 
<td width=100>Mess Dues:</td> 
<td width=100>Gymkhana:</td> 
<td width=100>Miscellaneous:</td> 
</tr>"; 

$row = mysqli_fetch_array($result);
{ 
print "<tr>"; 
print "<td>" . $row['Name'] . "</td>"; 
print "<td>" . $row['RollNo'] . "</td>"; 
print "<td>" . $row['MessDues'] . "</td>";
print "<td>" . $row['Gymkhana'] . "</td>";
print "<td>" . $row['Misc'] . "</td>";
print "</tr>"; 
} 
print "</table>";  */
print "</table>";
  }
?>
</html> 