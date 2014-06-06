<!DOCTYPE html>

<html>
<body bgcolor="#E6E6FA">
<div align="center"> 
<p><font size="7" color="blue"><h1>Mess Management</h1></font></p><br/<br/>
<head>
<script>

function reload(){
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("reload-notice").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","reload-notice.php",true);
xmlhttp.send();
}

</script>
</head>
<body>

<br>
<br>

<table>

<tr>

<td>

<form action="adminadd.php" method="post"
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
</select>
<br>
<br>
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br/><br/>
<input type="submit" name="submit-file" value="Submit">

<br>

</form>

</td>
<td>


	
	<?php
error_reporting(0);
if(!empty($_POST['submit-file']))
{

include("path.php");
include("opendb.php");

$allowedExts = array("gif", "jpeg", "jpg", "png" , "pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$hostel = $_POST["hostel"];
$file_type = $_POST["file_type"];
$date = date("Y-m-d");

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "text/pdf")
|| ($_FILES["file"]["type"] == "application/pdf"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    // echo $hostel."<br>";
    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

	$sql = "SELECT `Mess` , `Duelist` FROM anil WHERE `Hostel` = '".$hostel."'";

	$result = mysql_query($sql);

	$row = mysql_fetch_assoc($result);

	$mess = $row["Mess"] ;
	// echo $mess ;
	$due = $row["Duelist"] ;
 
	if($file_type=="mess_menu")
	{
		if(!is_null($mess))
		{
			unlink($path.$mess) ;
		}
	}
    else if ($file_type=="due_list")
    {
    	if(!is_null($due))
		{
			unlink($path.$due) ;
		}
    }


    if (file_exists($path.$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }

      if($file_type=="mess_menu")
	{
		$sql = "UPDATE anil SET `Mess`= '".$_FILES["file"]["name"]."' , `Mess_Date`=  '".$date."' WHERE  `Hostel` = '".$hostel."'" ;
	}
    else if ($file_type=="due_list")
    {
    	$sql = "UPDATE anil SET `Duelist`= '".$_FILES["file"]["name"]."' , `Due_Date`=  '".$date."' WHERE  `Hostel` = '".$hostel."'" ;
    }

    $result = mysql_query($sql);

    }
  }
else
  {
  echo "Invalid file";
  }

}
  

?> 


</td>

</tr>

<br>
<tr>
	<td id="reload-notice">
		<h2>Important Notices</h2>

<?php
error_reporting(0);
include("path.php");
include("opendb.php");

$sql = "SELECT `Notice` , `Date` FROM `notice` ORDER BY `ID` DESC ;";
$result = mysql_query($sql);

for ($i=0; ($i < 5)&&($row = mysql_fetch_assoc($result))  ; $i++) { 
	 
	 $note = $row['Notice'] ;
	 $date = $row['Date'] ;

	 echo $note."...... posted on ".$date;
	 echo "<br>" ; 
}

?>

	</td>
	<td >
		<button type="button" onclick="reload()">Refresh</button>
	</td>

</tr>

<tr>
<td>
	<form action="adminadd.php" method="post"
enctype="multipart/form-data">

<label><h2>Add Notice</h2></label>
<br>
<input type="text" name ="notice">
<br><br/>

<input type="submit" name="submit-notice" value="Submit">

<br>

</form>

</td>	
<td>
	<?php
error_reporting(0);
	if (!empty($_POST['submit-notice'])) {
		include("path.php");
		include("opendb.php");
		$notice = $_POST["notice"];
		$date = date("Y-m-d");

		if(!empty($notice))
		{
			$sql = "INSERT INTO `notice` (`Notice`, `Date`) VALUES ('".$notice."','".$date."');";

			$result = mysql_query($sql) ;

			if(!$result)
			{
				echo "Problem in submiting the notice try again" ;
			}
			else
			{
				echo "Successfully submitted the notice" ;
			}
		}
		else
		{
			echo "Invalid format.";
		}	

		}
	?>


</td>

</tr>
</table>


</body>
<div/>
</html>