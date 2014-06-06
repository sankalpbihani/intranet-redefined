
<?php
 session_start();
	// $_SESSION['user_type']='adm'; 
	if($_SESSION['user_type']=='adm'){
       echo "<a href=\"user_admin_page/index.html\">Admin</a>";
		
	}else{
		echo "<a href=\"user_student_page/index.html\">Student</a>";

		
	} 
// 		echo "<a href=\"user_student_page/index.html\">Student</a>";
// echo "<br>";
// 	echo "<a href=\"user_admin_page/index.html\">Admin</a>";
?>


