<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<html>
<head>

<?php
error_reporting(0);
$db_host ="localhost";
$db_username ="kunal15595";
$db_pass ="jtmzk04484";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");
$sql = 'SELECT sem ,theory1, theory2, theory3 ,theory4, theory5, lab1, lab2,lab3 ,faculty_advisor_name ,faculty_advisor_id FROM course';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());

//include 'course_change.php';
//echo "store()";

$sq = 'SELECT sem FROM sem_change';
$retvalu = mysql_query( $sq, $conn ) or die("could not get data:" .mysql_error());

while($col = mysql_fetch_array($retvalu, mysql_fetch_assoc() ))
{
	while($row = mysql_fetch_array($retval, mysql_fetch_assoc() )){
	//if(isset($_POST['sem_number']) && !empty($_POST['sem_number']) && isset($_POST['theory1_name']) && !empty(($_POST['theory1_name'])) && isset($_POST['theory2_name']) && !empty($_POST['theory3_name']) && isset($_POST['theory3_name']) && !empty(($_POST['theory3_name'])) && isset($_POST['theory4_name']) && !empty(($_POST['theory4_name']))){
		if($col['sem']==$row['sem']){
			$sl="UPDATE `course` SET `theory1`='".$_POST['theory1_name']."',`theory2`='".$_POST['theory2_name']."',`theory3`='".$_POST['theory3_name']."',`theory4`='".$_POST['theory4_name']."',`theory5`='".$_POST['theory5_name']."',`lab1`='".$_POST['lab1_name']."',`lab2`='".$_POST['lab2_name']."',`lab3`='".$_POST['lab3_name']."',`faculty_advisor_name`='".$_POST['faculty_name']."',`faculty_advisor_id`='".$_POST['faculty_id']."' WHERE 1";
			$retvalue = mysql_query( $sl, $conn ) or die("could not get no data:" .mysql_error());
		}
	}
	}

?>
</head>
<body> <link href="../styles/layout.css" rel="stylesheet" /></body>
</html>
<?phpinclude "../footer.php";?>