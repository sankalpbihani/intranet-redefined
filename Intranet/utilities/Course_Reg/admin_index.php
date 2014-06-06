<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<html>
<body bgcolor="#E6E6FA">
<head>

</head>

<body>
<link href="../styles/layout.css" rel="stylesheet" />
 <div align="right"> 
  <form action="course_login.php" method="post">
<input type="submit" value="Logout"/>
</form></div>

<div align="center">
	<p><font size="7" color="blue"><h1>WELCOME ADMIN</h1></font></p><br/><br/>
	
	<p><font size="5" color="green"><h5>Check the student list</h5></font></p>
	<form action="coursewise.php" method="post">
		
Select Sem No.<select name="sem_number">
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
</select>
	<input type="submit" value="Check the list"/><br/><br/><br/><br/><br/><br/>

	</form>
	
	<p><font size="5" color="green"><h5>Change the courses or faculty advisors</h5></font></p>
	<form action="course_change.php" method="post">
		Select Sem No.<select name="sem_number">
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
</select>
		<input type="submit" value="Go!"/>
	</form><br/><br/><br/>
	<form action="deadline.php">
	<p><font size="5" color="green"><h5>Change the deadlines</h5></font></p><input type="submit" value ="Change Deadlines"/>
	</form>
</div>	
</body>
</html>
<?php include "../footer.php";?>