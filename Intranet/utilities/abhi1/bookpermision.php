<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<head>
</head>

<body>

<?php
include("userdetails.php") ;
?>

<h3>Welcome <?php echo $user_name; ?></h3>

<h4>schedule new appointment</h4><br>
<table>

<tr>

<td>

<form action="bookpermision.php" method="post">

<label>Select Professor:</label>
 <select name="prof">
  <option value="prof1">Prof1</option>
  <option value="prof2">Prof2</option>
  <option value="prof3">Prof3</option>
  <option value="prof4">Prof4</option>
</select><br>
<input type="submit" name="submit-appointment" value="Submit">

<br>

</form>

</td>
<td>

<?php
if(!empty($_POST['submit-appointment']))
{
include("opendb.php");
$prof = $_POST['prof'] ;

$sql = "INSERT INTO `anil`.`book_appointment` (`student_name`, `student_username`, `professor`) VALUES ('".$user_name."','".$username."','".$prof."' );";

$result = mysql_query($sql) ;

if(!$result)
{
	echo "Problem in booking the appointment. try again" ;
}
else
{
	echo "Successfully booked the appointment" ;
}

}

?>

</td>


</tr>
</table>

<h4>Pending appointments</h4>
<?php
include("opendb.php");

$sql = "SELECT `professor` FROM `book_appointment` WHERE `student_username` = '".$username."' && `status`='".$no."'";

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

<h4>Fixed permissions</h4>
<?php

include("opendb.php");

$sql = "SELECT * FROM `book_appointment` WHERE `student_username`='".$username."' && `status` = 'YES' ORDER BY `Date` DESC;";

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
</body>
</html>