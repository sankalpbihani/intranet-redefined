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
$MessDues = $_POST['mess_dues'];
if (isset($_POST['q1']))
        $q1 = $_POST['q1'];
		
$result = mysqli_query($con,"SELECT * FROM dues1
WHERE username='".$u_name."'");


 $row = mysqli_fetch_array($result);
  
   $id_value=$row['id'] ; 
  /*  echo $id_value; */
   $pre_mess_dues=$row['MessDues'] ; 
   if ($id_value==0)
 {
/*   echo "Entered Roll No  not found";
  echo "<br>";
  echo "Please enter "; */
   $sql="INSERT INTO dues1 (Name, username, MessDues, Messtok)
VALUES ('$Name', '$u_name', '$MessDues',1)";

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
{ 
 mysqli_query($con,"UPDATE dues1 SET MessDues=$MessDues,Messtok=1
WHERE id=$id_value");
mysqli_close($con);
}
elseif ($q1==2) 
{
 /* $pre_mess_dues=$row['MessDues'] ;  */
 $final_mess_dues=$pre_mess_dues + $MessDues;
 mysqli_query($con,"UPDATE dues1 SET MessDues=$final_mess_dues,Messtok=1
WHERE id=$id_value");
mysqli_close($con);
}

elseif ($q1==3)
{
$pre_mess_dues=$row['MessDues'] ; 
 $final_mess_dues=$pre_mess_dues - $MessDues;
 mysqli_query($con,"UPDATE dues1 SET MessDues=$final_mess_dues,Messtok=1
WHERE id=$id_value");
mysqli_close($con);
}
elseif ($q1==4)
{
 mysqli_query($con,"UPDATE dues1 SET MessDues=0,Messtok=1
WHERE id=$id_value");
mysqli_close($con);
}
 echo "Dues updated";
 }
?>