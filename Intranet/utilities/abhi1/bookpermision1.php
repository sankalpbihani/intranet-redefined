<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<div align="center"> 
<head>
</head>

<body>

<?php
include("userdetails.php") ;
?>
<p><font size="8" color="blue"><h1>Welcome <?php echo $username ?></h1></font></p><br/<br/>

<h3>Schedule new appointment</h3><br>
<table>

<tr>

<td>

<form action="bookpermision1.php" method="post">

<label>Select Professor:</label>
 <select name="prof">
  <option value="KV Krishna">KV Krishna</option>
  <option value="BK Patel">BK Patel</option>
  <option value="PK Das">PK Das</option>
  <option value="SK Bose">SK Bose</option>
</select><br><br/>
<input type="submit" name="submit-appointment" value="Submit">

<br>

</form>

</td>
<td>

<?php
error_reporting(0);
if(!empty($_POST['submit-appointment']))
{
include("opendb.php");
$prof = $_POST['prof'] ;
$sql = "INSERT INTO `book_appointment` (`student_name`,`student_username`,`professor`) VALUES ('".$_SESSION["name"]."','".$_SESSION["roll_number"]."','".$prof."');";

$result = mysql_query($sql) ;
if(!$result)
{
	echo "<br/>". "Problem in booking the appointment. try again" ;
}
else
{
	//echo "<br/>"."Successfully booked the appointment" ;
}

}
?>

</td>


</tr>
</table><br/>

<h3>Pending appointments</h3>
<?php
include("opendb.php");

$sql = "SELECT `professor` FROM `book_appointment` WHERE `student_username` = '".$_SESSION['roll_number']."' && `status`='".$no."'";

$result = mysql_query($sql);

if(!$result)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
{
	echo "No pending permissions.";
}
else
{

	echo "<table>" ;

for ($i=0; ($row = mysql_fetch_assoc($result))  ; $i++) 
{ 
	 
	 echo "<tr>"; echo "<td>";

	 echo $row['professor'] ; echo "</td>" ; echo "<td>";

	 echo "permission not yet given" ; echo "</td>" ; echo "</tr>";

}

echo "</table>" ;

}
?>

<br/><h3>Fixed permissions</h3>
<?php

include("opendb.php");

$sql = "SELECT * FROM `book_appointment` WHERE `student_username`='".$_SESSION['roll_number']."' && `status` = 'YES' ORDER BY `Date` DESC;";

$result = mysql_query($sql);

if(!$result)
{
	echo "No fixed permissions if you have pending permissions please wait for few more days.";
}
else
{
echo "<table>" ;

for ($i=0; ($row = mysql_fetch_assoc($result))  ; $i++) 
{ 
	 
	 $date1=date('d/m/Y');
	 $tempArr=explode('-', $row['Date']);
	 $date2 = date("d/m/Y", mktime(0, 0, 0, $tempArr[1], $tempArr[2], $tempArr[0]));

	 /*if(strtotime($date1)>=strtotime($date2))
	 {
	 	break ;
	 }*/

	 
	 echo "<tr>"; echo "<td>";

	 echo $row['professor'] ; echo "</td>" ; echo "<td>";

	 echo $row['Date'] ; echo "</td>" ; echo "<td>";

	 echo $row['Time'] ; echo "</td>" ; echo "</tr>";
}
echo "</table>" ;
}
?>
<div/>
</body>
</html>