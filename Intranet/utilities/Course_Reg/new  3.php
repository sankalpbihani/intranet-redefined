<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<html>

<head>
</head>
<body>
<link href="../styles/layout.css" rel="stylesheet" />
<form action="course.php" method="post">
<select name="user_type">
		<option value="student">Student</option>
		<option value="faculty">Faculty</option>
		<option value="admin">Admin</option>
		
</select>
Username: <input type="text" name="username"/>
Password: <input type="text" name="password"/>

</form>
</body>

</html>
<?phpinclude "../footer.php";?>