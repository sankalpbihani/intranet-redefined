<html>
<head>
	<title> student windows </title>
</head>



	<center>
	<?php
		if(isset($_POST['submit']))	
		{
			include 'student.php';
		}
	?>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" id="studentform">
		
		<style="color:RED"><b><font size=3>Department :- </font></b></style><select name="branch" form="studentform">
				<option value="computer_science">Computer Science</option>
				<option value="mechanical_engineering">Mechanical Engineering</option>
				<option value="electrical_engineering">Electrical Engineering</option>
				<option value="electronics_electrical">Electronics and Electrical</option>
				<option value="biotechnology">Biotech</option>
				<option value="chemical">Chemical Engineering</option>
				<option value="chemistry">Chemistry</option>
		</select>
		<br>
		<style="color:RED"><b><font size=3>Semester :- </font></b></style> 
		<select name="sem" form="studentform">
				<option value="b.tech 1">1</option>
				<option value="b.tech 2">2</option>
				<option value="b.tech 3">3</option>
				<option value="b.tech 4">4</option>
				<option value="b.tech 5">5</option>
				<option value="b.tech 6">6</option>
				<option value="b.tech 7">7</option>
				<option value="b.tech 8">8</option>
		</select>
		<br>
		<input type=submit value="submit" name="submit">
	</form>
	</center>


</html>