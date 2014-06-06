<html>
<head>

</head>

<body>
	<h1>WELCOME ADMIN</h1>
	
	<h5>Check the student list</h5>
	<form action="coursewise.php" method="post">
		Select the sem number

<select name="sem_number">
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
</select>
<input type="submit" value="Check the list"/>
</form>
		
	
	<h5>Change the courses or faculty advisors</h5>
	<form action="course_change.php" method="post">
		<input type="submit" value="Go!"/>
	</form>
	
	<form action="course_login.php" >
	<input type="submit" value="Logout!"/>
	</form>
</body>
</html>