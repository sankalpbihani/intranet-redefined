<?php

$con=mysqli_connect("localhost","root","root","testdatabase");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM student";

$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
	$output[]=$row;
}

print(json_encode($output));

mysqli_close($con);

?>