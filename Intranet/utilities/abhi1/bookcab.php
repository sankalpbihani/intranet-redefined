<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<div align="center"> 
<p><font size="15" color="red"><h1>Travel Details</h1></font></p><br/><br/>
<head>
	<title></title>
<script language="JavaScript" src="htmlDatePicker.js" type="text/javascript"></script>
<link href="htmlDatePicker.css" rel="stylesheet" />
<script>
	function validateForm()
	{
		var name=document.forms["book-cab"]["name"].value;
		var phone=document.forms["book-cab"]["phone"].value;
		var place=document.forms["book-cab"]["place"].value;
		var point=document.forms["book-cab"]["point"].value;
		var share=document.forms["book-cab"]["share"].value;
		var date=document.forms["book-cab"]["date"].value;
		var time=document.forms["book-cab"]["time"].value;
		if (name==null || name=="" || phone==null || phone=="" || place==null || place=="" || point==null || point=="" || share==null || share=="" || x==null || share=="" date==null || date=="" time==null || time=="")
		{
			alert("All the required details must be filled out");
  			return false;
		}
	}

</script>
</head>
<body>
<form name="book-cab" action="bookcab.php"  method="post">
<label>Name:</label>
<input type="text" name ="name"><br/><br/>
<label>phone:</label>
<input type="text" name ="phone"><br/><br/>
<input type="radio" name="place" value="tocity">Going to city
<input type="radio" name="place" value="fromcity">Coming from city<br/><br/>
<label>Places:</label>
<select name="point">
  <option value="Railway Station">Railway Station</option>
  <option value="Airport">Airport</option>
  <option value="GS Road">GS Road</option>
  <option value="Pan Bazar">Pan Bazar</option>
</select><br/><br/>
<label>Cab sharing:</label>
<input type="radio" name="share" value="YES">YES
<input type="radio" name="share" value="NO">NO 
<br/><br/>
<label>date:</label>
<input type="text" name="date" id="SelectedDate" readonly onClick="GetDate(this);" value="Click Here to pick" /><br/><br/>
<label>time:</label>
<input type="text" name ="time"><br><br/>
<input type="submit" name="submit" value="Submit">

</form>

<br>

<?php
error_reporting(0);
if(!empty($_POST['submit']))
{
	include("path.php");
	include("opendb.php");

	$name = $_POST['name'] ;
	$phone = $_POST['phone'] ;
	$place = $_POST['place'] ;
	$point = $_POST['point'] ;
	$share = $_POST['share'] ;
	$date = $_POST['date'] ;
	$time = $_POST['time'] ;

	//echo $date ;

	$tempArr=explode('/', $date);

	/*echo $tempArr[0] ;
	echo $tempArr[1] ;
	echo $tempArr[2] ;
*/
	$date = date("Y-m-d", mktime(0, 0, 0, $tempArr[0], $tempArr[1], $tempArr[2]));

	//echo $date ;

	$sql = "INSERT INTO `cab_details` (`Name` , `Number` , `to_from` , `place` , `share_cab` , `Date` , `Time`) VALUES ('".$name."','".$phone."','".$place."','".$point."','".$share."','".$date."','".$time."');";	

	$result = mysql_query($sql) ;

			if(!$result)
			{
				echo "Problem in submiting the notice try again" ;
			}
			else
			{
				//echo "Successfully submitted the notice" ;
			}

}

?>

<div style="height:22%;width:80%;position:absolute;left:10%;top:75%;overflow-y:scroll;">
<?php
error_reporting(0);
include("path.php");
include("opendb.php");

$sql = "SELECT * FROM `cab_details` ORDER BY `Date` DESC ;";
$result = mysql_query($sql) ;

echo "<table border =2px>" ;

echo"<tr> <th>Name</th><th>Phone number</th><th>To/From</th><th>Place</th><th>Cab Sharing</th><th>Date</th><th>Time</th></tr>";
for ($i=0; ($i < 200)&&($row = mysql_fetch_assoc($result))  ; $i++) 
{ 
	 	
	 $tempArr=explode('-', $row['Date']);
	 $date2 = date("m/d/y", mktime(10, 10, 10, $tempArr[1], $tempArr[2], $tempArr[0]));

	// echo "avg";
	 if((strtotime('now')<strtotime($date2))&&(strtotime($date2)<strtotime('+4days')))
	 {
	 
	 echo "<tr>"; echo "<td>";
	 echo $row['Name'] ; echo "</td>" ; echo "<td>";

	 echo $row['Number'] ; echo "</td>" ; echo "<td>";

	 echo $row['to_from'] ; echo "</td>" ; echo "<td>";

	 echo $row['place'] ; echo "</td>" ; echo "<td>";

	 echo $row['share_cab'] ; echo "</td>" ; echo "<td>";

	 echo $row['Date'] ; echo "</td>" ; echo "<td>";

	 echo $row['Time'] ; echo "</td>" ; echo "</tr>" ;
	 
	 }

	 else
	 {
	 	continue ; 
	 }

}

echo "</table>" ;

?>
</div>
</body>
<div/> 
</html>
