<html>
<body bgcolor="#E6E6FA">
<div align="center">
<p><font size="15" color="blue" ><h1>Mess Utilities</h1></font></p>
</div>

<br>
<div align="center" >
<table>

<tr>
<td>
<form action="studentdownload.php" method="post"
enctype="multipart/form-data">
<label>Select hostel:</label>
 <select name="hostel">
  <option value="siang">Siang</option>
  <option value="barak">Barak</option>
  <option value="kapili">Kapili</option>
  <option value="dihing">Dihing</option>
  <option value="dibang">Dibang</option>
  <option value="umium">Umium</option>
  <option value="manas">Manas</option>
  <option value="bramhaputra">Bramhaputra</option>
  <option value="kameng">Kameng</option>
  <option value="subansiri">Subansiri</option>
</select><br/><br/>
<label>select file type:</label>
<select name="file_type">
  <option value="mess_menu">Mess Menu</option>
  <option value="due_list">Due List</option>
</select><br/<br/>
<br>
<input type="submit" name="submit" value="Submit">

</form>
</td>
<td>
	
<?php
error_reporting(0);
if(isset($_POST["hostel"]))
{
	include("path.php");
	include("opendb.php");

	$hostel = $_POST["hostel"];
	$file_type = $_POST["file_type"];

	$sql = "SELECT `Mess` , `Duelist` , `Mess_Date` , `Due_Date` FROM anil WHERE `Hostel` = '".$hostel."'";

	$result = mysql_query($sql);

	$row = mysql_fetch_assoc($result);

	$mess = $row["Mess"] ;

	$messdate = $row["Mess_Date"] ;
	
	$due = $row["Duelist"] ;

	$duedate = $row["Due_Date"] ;

	if($file_type=="mess_menu")
	{
		if(is_null($mess))
		{
			echo "No details are available" ;
		}
		else
		{
			$file_path = $path.$mess ;

			echo "Details latest updated on ".$messdate ;

		}
	}
    else if ($file_type=="due_list")
    {
    	if(is_null($due))
		{
			echo "No details are available" ;
		}
		else
		{
			$file_path = $path.$due ;

			echo "Details latest updated on ".$duedate ;
		}
    }

    if(isset($file_path)){

    $file = $file_path ;

    if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    
}
}
}

?>

</td>

</tr>

</table>
</div>
<div style="height:50% ;width:20%;position:absolute;left:40%;top:30%;overflow-x:scroll;">
<h2>Important Notices</h2>

<?php

include("path.php");
include("opendb.php");

$sql = "SELECT `Notice` , `Date` FROM `notice` ORDER BY `ID` DESC ;";
$result = mysql_query($sql);

for ($i=0; ($i < 4)&&($row = mysql_fetch_assoc($result))  ; $i++) { 
	 
	 $note = $row['Notice'] ;
	 $date = $row['Date'] ;

	 echo $note." ...........  posted on ".$date;
	 echo "<br>" ; 
}
echo "</div>";
?>

</body>
</html>