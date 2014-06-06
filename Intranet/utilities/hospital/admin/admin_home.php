<html>
<head>
<title>Admin</title>


<?php
    $pdfPath = "../resources/";
    $maxSize = 102400000000;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_rule'])) {   
	    if (is_uploaded_file($_FILES['file_rules']['tmp_name'])) {
		    if ($_FILES['file_rules']['type'] != "application/pdf") {
			    echo '<p>Format is not pdf</p>';
		    } else if ($_FILES['file_rules']['size'] > $maxSize) {
			    echo '<p class="error">File size increased. It should be less than ' . $maxSize . 'KB</p>';
		    } else {
			    $menuName = 'rules.pdf';
			    $result = move_uploaded_file($_FILES['file_rules']['tmp_name'], $pdfPath . $menuName);
			    if ($result == 1) {
				    ?><script type="text/javascript">
							alert("Upload Successful!!");
							</script>
					<?php
			    } else {
				   ?><script type="text/javascript">
							alert("Upload Not Possible!!");
							</script>
					<?php
			    }
		    }
	    }
    }

?>
<?php
    $pdfPath = "../resources/";
    $maxSize = 102400000000;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_staff'])) {   
	    if (is_uploaded_file($_FILES['file_staff']['tmp_name'])) {
		    if ($_FILES['file_staff']['type'] != "application/pdf") {
			    echo '<p>Format is not pdf</p>';
		    } else if ($_FILES['file_staff']['size'] > $maxSize) {
			    echo '<p class="error">File size increased. It should be less than ' . $maxSize . 'KB</p>';
		    } else {
			    $menuName = 'staff.pdf';
			    $result = move_uploaded_file($_FILES['file_staff']['tmp_name'], $pdfPath . $menuName);
			    if ($result == 1) {
				   ?><script type="text/javascript">
							alert("Upload Successful!!");
							</script>
					<?php
			    } else {
				   ?><script type="text/javascript">
							alert("Upload Not Possible!!");
							</script>
					<?php
			    }
		    }
	    }
    }

?>
<?php
    $pdfPath = "../resources/";
    $maxSize = 102400000000;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_OPD'])) {   
	    if (is_uploaded_file($_FILES['file_OPD']['tmp_name'])) {
		    if ($_FILES['file_OPD']['type'] != "application/pdf") {
			    echo '<p>Format is not pdf</p>';
		    } else if ($_FILES['file_OPD']['size'] > $maxSize) {
			    echo '<p class="error">File size increased. It should be less than ' . $maxSize . 'KB</p>';
		    } else {
			    $menuName = 'OPD.pdf';
			    $result = move_uploaded_file($_FILES['file_OPD']['tmp_name'], $pdfPath . $menuName);
			    if ($result == 1) {
				     ?><script type="text/javascript">
							alert("Upload Successful!!");
							</script>
					<?php
			    } else {
				     ?><script type="text/javascript">
							alert("Upload Not Possible!!");
							</script>
					<?php
			    }
		    }
	    }
    }

?>
<?php 
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_form'])){
 //This is the directory where pdf will be saved 
 $target = "../resources/forms/"; 
 $target = $target . basename( $_FILES['file_form']['name']); 
 
 //This gets all the other information from the form 
 $pic=($_FILES['file_form']['name']); 
 
 // Connects to your Database 
 $con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
 $sql="INSERT INTO forms (path) VALUES ('".$pic."')";
 //Writes the information to the database 
  
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['file_form']['tmp_name'], $target) && mysqli_query($con,$sql)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['file_form']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 }
 ?> 

</head>
<body style="background-color:maroon">

<h1><u>
<div id="heading" style="background-color:orange" align="center"><br>ADMINISTRATION HOMEPAGE<br></div>
</u></h1>
<br>
<div id="main_id">
<div id="left_half" style="float:left; width:50%;">
<form action="admin_home.php" method="post" enctype="multipart/form-data">
<b>Add Rules here:	</b>   <div id="lblock" style="padding-left:50px"> <input type="file" name="file_rules" style="background-color:black ; color:orange ; padding:10px 10px" />
	    <input type="submit" style="background-color:black ; color:orange ; padding:10px 10px" value="Upload" name="upload_rule" />
		</div>
</form>
<br>
<form action="admin_home.php" method="post" enctype="multipart/form-data">
<b>Add Staff Information here:	<b>   <div id="lblock" style="padding-left:50px"> <input type="file" name="file_staff" style="background-color:black ; color:orange ; padding:10px 10px" />
	   	   <input type="submit" style="background-color:black ; color:orange ; padding:10px 10px" value="Upload" name="upload_staff" />
</div>
		   </form>
<br>
<br>
<form action="admin_home.php" method="post" enctype="multipart/form-data">
<b>Add OPD Timings here	<b>   <div id="lblock" style="padding-left:50px"> <input type="file" name="file_OPD" style="background-color:black ; color:orange ; padding:10px 10px" />
	    <input type="submit" style="background-color:black ; color:orange ; padding:10px 10px" value="Upload" name="upload_OPD" />
</div>
		</form>
<br>
<br>
<form action="admin_home.php" method="post" enctype="multipart/form-data">
<b>Add new forms here:	 <b> <div id="lblock" style="padding-left:50px"> <input type="file" style="background-color:black ; color:orange ; padding:10px 10px" name="file_form" />
	    <input type="submit" style="background-color:black ; color:orange ; padding:10px 10px" value="Upload" name="upload_form" />
</div></form>
</div>
<div id="right_half" style="float:left; width:50%; margin-left:0px; padding:50px 0px">
<img src="image.jpg" alt="hospital image" width="500px" height="300px">
</div>
<br><br><br><br><br>
<div style="float:left">
<a href="add_new_user.php" style="background-color:black ; color:orange ; padding:10px 10px">Add New User</a>
<a href="show_list.php"style="background-color:black ; color:orange ; padding:10px 10px">View Users</a>
<a href="view_complain.php"style="background-color:black ; color:orange ; padding:10px 10px">View Complains here</a>
<a href="delete_user.php"style="background-color:black ; color:orange ; padding:10px 10px">Delete User</a>
<br>
<br><br>
<form action="admin_home.php" method="post">
<b><label style="color:orange ; padding:20px 0px">Get form number : </b></label>
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
$count=0;
if ($page_status == "FOUND"){
$sql="SELECT * FROM student_form_number WHERE user_id='".$user."' ";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
  {
  echo "Form Number of <b><label style=\"color:orange\">".$row['user_id'] . "</b></label> is <b><label style=\"color:orange\">" . $row['form_number']."</b></label>";
  echo "<br>";
  $count++;
  }
  if($count == 0)
  {
  echo "<b><label style=\"color:orange\">". $user . "</b></label> not found! ";
  }
}
mysqli_close($con);
?>
<a href="../../index.php"style="background-color:black ; color:orange ; padding:10px 10px">Home</a>
</div>

</div>
<br>


</body>
</html>