<html>
<head>
<title>User</title>
</head>
<body style="background-color:maroon">
<h1><u>
<div id="heading" style="background-color:orange" align="center"><br>USER HOMEPAGE<br></div>
</u></h1>
<br>
<div align="center" style="color:white">
<?php
$str = "The IIT Guwahati Hospital is located inside the scenic IITG campus. 
The Hospital has three Medical Officers. Dr. M Borthakur, Chief Medical Officer is the Head of the Medical Section. Both Dr. Leena Barua and Dr. Anuj Kr. Baruah are Chief Medical Officers of this Institute.
Besides that there are two paramedical persons. They are viz. Mr. D Lahkar, Sr. Laboratory Assistant and Mrs. Ilabati Das, Mid Wife GrII.
Medical Section has three Office Staff. They are Mrs. Arpana Das, Jr. Assistant, Mr. Siddhartha Kumar Saikia, Jr. Assistant, Mr.Himangshu Bharadwaj,Jr. Assistant and Mr. Durga Sarma, Jr. Attendant.
It has three Visiting Consultants for ENT, Psychiatric and Paediatric consultation. Besides it has three Medical Consultants in OPD.
IITG hospital has an Emergency Room, Minor OT room, ECG Room, 10 numbers of Patient Cabin, 02 numbers of Isolation Cabin and 02 numbers of General Ward.
Hospital has 24 hrs Doctor, Nursing and Pharmacy service for its patients provided by outsourced hospital service provider. It has a Reception Counter for Patients registration, Diagnostics Laboratory with specimen collection facility for its patients from 8.00 PM to 1.00 PM provided by outsourced hospital service provider. The Hospital also has two ambulances for patient care.";
echo wordwrap($str,120,"<br>\n");
?>
</div>
<br><br>
<div id="user_main" align="center">
<a href="view_form.php" style="background-color:black ; color:orange ; padding:10px 10px">View Forms Here</a>
<a href="../resources/rules.pdf" style="background-color:black ; color:orange ; padding:10px 10px">View Rules here</a>
<a href="../resources/staff.pdf" style="background-color:black ; color:orange ; padding:10px 10px">View Staff Information here</a>
<a href="../resources/OPD.pdf" style="background-color:black ; color:orange ; padding:10px 10px">View OPD timings here</a><br><br>
<form action="user_home.php" method="post">
<b><label style="color:orange ; padding:20px 0px">Get your form number : </b></label>
<label style="color:orange ; padding:50px 0px">User id: </label><input type="text" name="user_id" id="user_id" style="background-color:white ; color:orange ; padding:10px 10px">
<input style="background-color:black ; color:orange ; padding:10px 10px" type="submit" value="Click here">
</form>
<?php
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$page_status="NEW";
if (isset($_POST['user_id'])){
$user = ($_POST['user_id']);
$page_status="FOUND";
}
if ($page_status == "FOUND"){
$sql="SELECT * FROM student_form_number WHERE user_id='".$user."' ";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
  {
  echo "Form Number of <b><label style=\"color:orange\">".$row['user_id'] . "</b></label> is <b><label style=\"color:orange\">" . $row['form_number']."</b></label>";
  echo "<br>";
  }
}
mysqli_close($con);
?>
</div>
<br><br><br>
<div align="center">
<b><label style="color:orange"> Lodge Complain Here</b></label><br>  
(250 characters only)<br>
<form action="user_home.php" method="post">
<textarea rows="5" cols="50" name="complains" maxlength="250">
</textarea><br>
<input type="submit" value="Submit As User" style="background-color:black ; color:orange ; padding:5px 10px" name="submit_user">
<input type="text" name="user_name" style="background-color:black ; color:orange ; padding:5px 10px"><br>
<input type="submit" value="Submit As Anonymous" style="background-color:black ; color:orange ; padding:5px 10px" name="submit_ano">
</form>
<?php
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$page_status="NEW";
if (isset($_POST['complains'])){
$comp = ($_POST['complains']);
$page_status="FOUND";
}
if ($page_status == "FOUND" ){
if($comp!=""){
if(isset($_POST['submit_ano'])){
$sql="INSERT INTO complains (complain) VALUES ('".$comp."')  ";
if (!mysqli_query($con,$sql))
{
  die('Error::: ' . mysqli_error($con));
}
else{
?>
<script type="text/javascript">
alert("Complain Lodged!");
</script>
<?php
}
}
elseif (isset($_POST['submit_user']))
{
$user_n=$_POST['user_name'];
if($user_n!=""){
$sql="INSERT INTO complains (user_id,complain) VALUES ( '".$user_n."','".$comp."')  ";
if (!mysqli_query($con,$sql))
{
  die('Error::: ' . mysqli_error($con));
}
else{
?>
<script type="text/javascript">
alert("Complain Lodged!");
</script>
<?php
}
}
else{?>
<script type="text/javascript">
alert("Enter the user name!");
</script>
<?php
}
}
}
else{?>
<script type="text/javascript">
alert("Please fill the complain box!");
</script>
<?php
}
}
mysqli_close($con);
?>
</div>
<a href="../../index.php"style="background-color:black ; color:orange ; padding:10px 10px">Home</a>
<br>
</body>
</html>