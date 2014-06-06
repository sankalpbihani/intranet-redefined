<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<html>
<head>
<?php

error_reporting(0);
$db_host ="localhost";
$db_username ="root";
$db_pass ="password";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");

//$sq = 'SELECT sem,theory1,theory2,theory3,theory4,theory5,lab1,lab2,lab3 FROM deadlines';
$sq = 'SELECT sem,theory1,theory2,theory3,theory4,theory5,lab1,lab2,lab3 FROM course';
$sql = 'SELECT sem,number, name, roll ,message FROM faculty_advisor';
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
while($row = mysql_fetch_array($retval, mysql_fetch_assoc() ))
{
if($row['message']=="Done" ||$row['message']=="done")
{echo "sdvb";
$sl='INSERT INTO `admin_list` (`name`,`roll`,`sem`) VALUES("'.$row['name'].'","'.$row['roll'].'","'.$row['sem'].'")';
 $retvalue = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());       

 $retvalu = mysql_query( $sq, $conn ) or die("could not get data:" .mysql_error());
 while($col = mysql_fetch_array($retvalu, mysql_fetch_assoc() ))
	{if($row['sem']==$col['sem']){//echo "gvd";
	$sl = "UPDATE `admin_list` SET  `theory1`= '".$col['theory1']."',`theory2`= '".$col['theory2']."',`theory3`= '".$col['theory3']."',`theory4`= '".$col['theory4']."',`theory5`= '".$col['theory5']."',`lab1`= '".$col['lab1']."',`lab2`= '".$col['lab2']."',`lab3`= '".$col['lab3']."' WHERE 1";
$retvali = mysql_query( $sl, $conn ) or die("could not get data:" .mysql_error());}}
}}

?>
</head>

<body>
<link href="../styles/layout.css" rel="stylesheet" />
<h1>Added the courses</h1>

</body>
</html>
<?phpinclude "../footer.php";?>