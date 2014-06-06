<html>
<head>
</head>
<body>
<?php
	if(isset($_POST['Upload']))
	{
		include 'admin.php';
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"
enctype="multipart/form-data">
<center>
<label for="file" style="color:RED "><font size=3><b>Filename:- </b></font></label>
<input type="file" name="file" id="file"><br>
<br>
<style="color:RED "><font size=3><b>Departement:- </b></font></style>
<select name="branch">
				<option value="computer_science">Computer Science</option>
				<option value="mechanical_engineering">Mechanical Engineering</option>
				<option value="electrical_engineering">Electrical Engineering</option>
				<option value="electronics_electrical">Electronics and Electrical</option>
				<option value="biotechnology">Biotech</option>
				<option value="chemical">Chemical Engineering</option>
				<option value="chemistry">Chemistry</option>
</select>
<input type="submit" name="Upload" value="Upload">
</center>
</form>

</body>
</html>
