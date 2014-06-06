<body bgcolor="#E6E6FA">
<div align="center"> 
<p><font size="15" color="blue"><h1>Travell Details</h1></font></p><br/><br/>
<div style="height:50%;width:80%;position:absolute;left:10%;top:10%;overflow-y:scroll;">
<?php
error_reporting(0);
include("path.php");
include("opendb.php");

$sql = "SELECT * FROM `cab_details` ORDER BY `ID` DESC ;";
$result = mysql_query($sql) ;
//echo "<table>" ;
echo "<table border=1px width=800>";
echo "<tr><th>Name</th><th>Phone No.</th><th>To/From</th><th>Destination</th><th>Cab sharing</th><th>Date</th><th>Time</th></tr>";  
for ($i=0; ($i < 200)&&($row = mysql_fetch_assoc($result))  ; $i++)
{
		
	 
	 echo "<tr>";
	 echo "<td>";

	 echo $row['Name'] ;

	 echo "</td>" ;

	 echo "<td>";

	 echo $row['Number'] ;

	 echo "</td>" ;

	 echo "<td>";

	 echo $row['to_from'] ;

	 echo "</td>" ;

	 echo "<td>";

	 echo $row['place'] ;

	 echo "</td>" ;

	 echo "<td>";

	 echo $row['share_cab'] ;

	 echo "</td>" ;

	 echo "<td>";

	 echo $row['Date'] ;

	 echo "</td>" ;

	 echo "<td>";

	 echo $row['Time'] ;

	 echo "</td>" ;

	 echo "</tr>" ;
        
}

echo "</table>" ;

?>    

</div> 

<div style="height:50%;width:80%;position:absolute;left:9.5%;top:60%;"> 

<?php

echo "<br>" ;

echo "<table>" ;
echo "<table border=1px width=800>";
echo "<tr><th>Destination</th><th>Date</th><th>To City</th><th>From City</th></tr>"; 

echo "<tr>" ;


						$todaydate = date("Y-m-d") ;
						$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
						$tomorrowdate = date("Y-m-d", $tomorrow);
						$dayaftertomorrow = mktime(0,0,0,date("m"),date("d")+2,date("Y"));
						$dayaftertomorrowdate = date("Y-m-d", $dayaftertomorrow);

echo "<td rowspan='3'>";

echo "Railway Station" ;

echo "</td>" ;

echo "<td>" ;

echo $todaydate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Railway Station' && `date` = '".$todaydate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Railway Station' && `date` = '".$todaydate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

echo "<tr>" ;

echo "<td>" ;

echo $tomorrowdate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Railway Station' && `date` = '".$tomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Railway Station' && `date` = '".$tomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

echo "<tr>" ;

echo "<td>" ;

echo $dayaftertomorrowdate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Railway Station' && `date` = '".$dayaftertomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Railway Station' && `date` = '".$dayaftertomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;


echo "<td rowspan='3'>";

echo "Airport" ;

echo "</td>" ;

echo "<td>" ;

echo $todaydate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Airport' && `date` = '".$todaydate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Airport' && `date` = '".$todaydate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

echo "<tr>" ;

echo "<td>" ;

echo $tomorrowdate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Airport' && `date` = '".$tomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Airport' && `date` = '".$tomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

echo "<tr>" ;

echo "<td>" ;

echo $dayaftertomorrowdate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Airport' && `date` = '".$dayaftertomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Airport' && `date` = '".$dayaftertomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;


echo "<td rowspan='3'>";

echo "GS Road" ;

echo "</td>" ;

echo "<td>" ;

echo $todaydate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'GS Road' && `date` = '".$todaydate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'GS Road' && `date` = '".$todaydate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

echo "<tr>" ;

echo "<td>" ;

echo $tomorrowdate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'GS Road' && `date` = '".$tomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'GS Road' && `date` = '".$tomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

echo "<tr>" ;

echo "<td>" ;

echo $dayaftertomorrowdate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'GS Road' && `date` = '".$dayaftertomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'GS Road' && `date` = '".$dayaftertomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;


echo "<td rowspan='3'>";

echo "Pan Bazar" ;

echo "</td>" ;

echo "<td>" ;

echo $todaydate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Pan Bazar' && `date` = '".$todaydate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Pan Bazar' && `date` = '".$todaydate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

echo "<tr>" ;

echo "<td>" ;

echo $tomorrowdate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Pan Bazar' && `date` = '".$tomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Pan Bazar' && `date` = '".$tomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

echo "<tr>" ;

echo "<td>" ;

echo $dayaftertomorrowdate ;

echo "</td>" ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='tocity' && `place` = 'Pan Bazar' && `date` = '".$dayaftertomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "<td>" ;

$sql = "SELECT `Name` FROM `cab_details` WHERE `to_from`='fromcity' && `place` = 'Pan Bazar' && `date` = '".$dayaftertomorrowdate."' ;";
$result = mysql_query($sql);
$x = mysql_num_rows($result) ;

echo $x ;

echo "</td>" ;

echo "</tr>" ;

//
//
//




?>
</div>