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
$gym_dues = $_POST['gym_dues'];
if (isset($_POST['q1']))
        $q1 = $_POST['q1'];
$result = mysqli_query($con,"SELECT * FROM dues1
WHERE username='".$u_name."'");


 $row = mysqli_fetch_array($result);
     $pre_gym_dues=$row['Gymkhana'] ; 
   $id_value=$row['id'] ; 
/*    echo $id_value; */
   if ($id_value==0)
 {

  $sql="INSERT INTO dues1 (Name, username, Gymkhana,Gymtok)
VALUES ('$Name', '$u_name', '$gym_dues',1)";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

  
mysqli_close($con);
 }
else
 {
	 if ($q1==1)
 	{ mysqli_query($con,"UPDATE dues1 SET Gymkhana=$gym_dues,Gymtok=1
WHERE id=$id_value");

mysqli_close($con);
}
elseif ($q1==2) 
{
 $final_gym_dues=$pre_gym_dues + $gym_dues;
 mysqli_query($con,"UPDATE dues1 SET Gymkhana=$final_gym_dues,Gymtok=1
WHERE id=$id_value");
mysqli_close($con);
}
elseif ($q1==3) 
{
 $final_gym_dues=$pre_gym_dues - $gym_dues;
 mysqli_query($con,"UPDATE dues1 SET Gymkhana=$final_gym_dues,Gymtok=1
WHERE id=$id_value");
mysqli_close($con);
}
elseif ($q1==4)
{
 mysqli_query($con,"UPDATE dues1 SET Gymkhana=0,Gymtok=1
WHERE id=$id_value");
mysqli_close($con);
}
 echo "Dues updated";
 }
  
   





?>