
<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<body>
<div align="center">
	<p><font size="8" color="red"><h1>WELCOME ADMIN</h1></font></p><br/>
        <p><font size="5" color="green"><h4>Schedule appointment</h4></font></p><br/><br/>

<table>
	<tr>
		<td>
			<form action="adminpermission.php" method="post">
				<label>Appointment ID</label>
				<input type="text" name="ID"><br/><br/>
				<label>Select Date</label>
					<?php

						$todaydate = date("Y-m-d") ;
						$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
						$tomorrowdate = date("Y-m-d", $tomorrow);
						$dayaftertomorrow = mktime(0,0,0,date("m"),date("d")+2,date("Y"));
						$dayaftertomorrowdate = date("Y-m-d", $dayaftertomorrow);
					?>
				<select name="date">
					<option value="<?php echo $todaydate ?>"><?php echo $todaydate ?></option>
					<option value="<?php echo $tomorrowdate ?>"><?php echo $tomorrowdate ?></option>
					<option value="<?php echo $dayaftertomorrowdate ?>"><?php echo $dayaftertomorrowdate ?></option>
				</select><br/><br/>		
				<label>Select Slot:</label>
 				<select name="time">
  					<option value="1">4:00PM-5:00PM</option>
  					<option value="2">5:00PM-6:00PM</option>
  				</select><br><br/>
				<input type="submit" name="submit-appointment" value="Submit"><br/><br/>

			</form>

		</td>

		<td>
			<?php
			error_reporting(0);
			include("opendb.php") ;

			if(!empty($_POST['submit-appointment']))
			{

				$ID = $_POST['ID'] ;
				$date = $_POST['date'] ;
				if($_POST['time']==1)
				{
					$time = "04:00:00" ;
				}
				else if($_POST["time"]==2)
				{
					$time = "05:00:00" ;
				}

				$sql = "UPDATE `book_appointment` SET `status` = 'YES',`date` = '".$date."',`time` = '".$time."' WHERE `appointment_ID` = '".$ID."';";

				$result = mysql_query($sql) ;

				if(!$result)
				{
					echo "Try again.";
				} 
				else
				{
//					echo "Appointment sucessusfully booked" ;
				}
				
			}

			?>

		</td>
	</tr>

</table>


<h4>Waiting Permissions</h4>
<?php

include("opendb.php");

$sql = "SELECT `appointment_id`,`student_username`,`student_name`,`professor` FROM `book_appointment` WHERE `status`='NO'";

$result = mysql_query($sql) ;

if(!$result)
{
	echo "No pending appointments.";
}
else 
{
	echo "<table>" ;

	while ($row = mysql_fetch_assoc($result)) {

		echo "<tr>" ;

		echo "<td>" ; echo $row['appointment_id'] ; echo "</td>" ;

		echo "<td>" ; echo $row['student_name'] ; echo "</td>" ;

		echo "<td>" ; echo $row['student_username'] ; echo "</td>" ;		

		echo "<td>" ; echo $row['professor'] ; echo "</td>" ;

		echo "</tr>" ;
	}

	echo "</table>" ;

}


?>

<div/>
</body>
</html>