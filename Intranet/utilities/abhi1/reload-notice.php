

<?php
error_reporting(0);

$x = "<h2>Important Notices</h2>" ;

include("path.php");
include("opendb.php");

$sql = "SELECT `Notice` , `Date` FROM `notice` ORDER BY `ID` DESC ;";
$result = mysql_query($sql);

for ($i=0; ($i < 5)&&($row = mysql_fetch_assoc($result))  ; $i++) { 
	 
	 $note = $row['Notice'] ;
	 $date = $row['Date'] ;

	 $x= $x.$note."....... posted on ".$date;
	 $x= $x."<br>" ; 
}

echo $x ;
?>