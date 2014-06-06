<?php
$con=mysqli_connect("localhost","root","","mysql");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// escape variables for security
$Name = $_POST['name'];
$RollNo = $_POST['roll_no'];
$MessDues = $_POST['mess_dues'];

$result = mysqli_query($con,"SELECT id FROM dues1
WHERE RollNo=$RollNo");


 $row = mysqli_fetch_array($result);
  
   $id_valaue=$row['id'] ; 
   if ($id_valaue==0)
 {
/*   echo "Entered Roll No  not found";
  echo "<br>";
  echo "Please enter "; */
   $sql="INSERT INTO dues1 (Name, RollNo, MessDues)
VALUES ('$Name', '$RollNo', '$MessDues')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

  
mysqli_close($con); 
 }
else
 {
 mysqli_query($con,"UPDATE dues1 SET MessDues=$MessDues
WHERE id=$id_valaue");

mysqli_close($con);

 echo "Dues updated";
 }
  
   



/* $sql="INSERT INTO dues1 (Name, RollNo, MessDues)
VALUES ('$Name', '$RollNo', '$MessDues')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

  
mysqli_close($con); */
?>