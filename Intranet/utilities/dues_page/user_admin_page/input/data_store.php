<?php
include '../../connect.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// escape variables for security
$Name = $_POST['name'];
$u_name = $_POST['u_name'];
$misc_dues = $_POST['misc_dues'];
if (isset($_POST['q1']))
        $q1 = $_POST['q1'];
$result = mysqli_query($con,"SELECT * FROM dues1
WHERE username='".$u_name."'");


 $row = mysqli_fetch_array($result);
    $pre_misc_dues=$row['Misc'] ; 
   $id_value=$row['id'] ; 
   if ($id_value==0)
 {

   $sql="INSERT INTO dues1 (Name, username, Misc,Misctok)
VALUES ('$Name', '$u_name', '$misc_dues', 1)";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

  
mysqli_close($con); 
 }
else
 {
 if($q1==1)
 {
 mysqli_query($con,"UPDATE dues1 SET Misc=$misc_dues,  Misctok=1
WHERE id=$id_value");

mysqli_close($con);
}
if($q1==2)
{
$final_misc_dues=$misc_dues + $pre_misc_dues;
 mysqli_query($con,"UPDATE dues1 SET Misc=$final_misc_dues,Misctok=1
WHERE id=$id_value");
mysqli_close($con);
}
if($q1==3)
{
$final_misc_dues=$pre_misc_dues - $misc_dues;
 mysqli_query($con,"UPDATE dues1 SET Misc=$final_misc_dues,Misctok=1
WHERE id=$id_value");
mysqli_close($con);
}
elseif ($q1==4)
{
 mysqli_query($con,"UPDATE dues1 SET Misc=0, Misctok=1
WHERE id=$id_value");
mysqli_close($con);
}
 echo "Dues updated";
 }
  
 
?>