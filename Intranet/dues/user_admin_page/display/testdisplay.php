<?php
$con=mysqli_connect("localhost","root","","mysql");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$RollNo = $_POST['roll_no'];
$result = mysqli_query($con,"SELECT * FROM dues1
WHERE RollNo=$RollNo");

while($row = mysqli_fetch_array($result))
  {
    echo "Name :";
  echo $row['Name'] ; 
  echo "<br>";
  echo  "Roll No :";
  echo  $row['RollNo'] ; 
  echo "<br>";
  echo  "Mess Dues :"; 
  echo  $row['MessDues'] ;
  echo "<br>";
  echo  "Gymkhana Dues :";
  echo  $row['Gymkhana'] ;
  echo "<br>" ; 
  echo  "Miscellaneous Dues :" ; 
  echo  $row['Misc'];
  echo "<br>" ;
  }
?>