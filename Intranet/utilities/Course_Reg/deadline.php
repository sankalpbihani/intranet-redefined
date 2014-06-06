<?phpinclude '../header.php';
//include '../styles/layout.css';
?><html>

<head>
<?php
error_reporting(0);
$db_host ="localhost";
$db_username ="kunal15595";
$db_pass ="jtmzk04484";
$db_name ="stud";

$conn=@mysql_connect ("$db_host","$db_username","$db_pass") or die("gjksfd");
@mysql_select_db("$db_name") or die ("no database");

$sql = "UPDATE `deadlines` SET  `start`='".$_POST['start_date']. "',`end`='".$_POST['end_date']. "' WHERE 1";
$retval = mysql_query( $sql, $conn ) or die("could not get data:" .mysql_error());
header(Location:admin_index.php);
//echo $_POST['start_date'];
?>
</head>
<body>
<link href="../styles/layout.css" rel="stylesheet" />
<form action="deadline.php" method="post">

Start Date: <input type="date" name="start_date"/>
End Date : <input type="date" name="end_date"/>
<input type="submit" value ="Change"/>
</form>
</body>

</html>
include "../footer.php";