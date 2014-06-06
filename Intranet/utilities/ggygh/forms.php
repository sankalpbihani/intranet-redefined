<html>
<head>
  <title>FORMS</title>
  <link href="site.css" rel="stylesheet">
   <link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script src="jq.js" type="text/javascript"></script>
<style type="text/css">
  body{
  
    background-image: url(back1.jpg); /*You will specify your image path here.*/
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: top center ;
    background-repeat: no-repeat ;
    background-attachment: fixed;

  }
</style>


</head>

<body >
<?php
    include '../header.php';
?>

<!-- ####################################################################################################### -->

<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li ><a href="index.php">Home</a>
        <ul>
          <li><a href="index.html">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
      </li>
      <li class="active"><a href="index.php">SAC</a>
        <ul>
          <li><a href="rules.php">Rules</a></li>
          <li><a href="timing.php">Timing</a></li>
          <li><a href="pt.php">PT attendance</a></li>
          <li ><a href="nso.php">NSO attendance</a></li>
          <li ><a href="forms.php">FORMS</a></li>
          <li ><a href="resources.php">Resources</a></li>
          <li ><a href="calendar.php">Booking Hall</a></li>
          <li class="last"><a href="/contact/contactform.php">Contact US</a></li>
        </ul>
      </li>
      <li><a href="guest2/index.html">Guest House</a>
        <ul>
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Suspendisse in neque</a></li>
          <li class="last"><a href="#">Praesent et eros</a></li>
        </ul>
      </li>
      <li><a href="#">Our Services</a></li>
      <li class="last"><a href="#">Long Link Text</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
  <div id="form" >
 

<?php
include '../connect.php';
$con=getConnected($host,$user,$pass,$db);

$result = mysqli_query($con,"SELECT * FROM forms");
$temp='';
echo "<table border='1' style=\"color:green\">
<tr>
<th>FormNo</th>
<th>Subject</th>
<th>Links</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['formno'] . "</td>";
  echo "<td>" . $row['subject'] . "</td>";
  //echo "<td>" . $row['link'] . "</td>";
  $temp=$row['link'] ;
  echo  "<td><a href='$temp' target='_blank'>Click here</a></td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>


<!-- ####################################################################################################### -->
<?php
    include '../footer.php';
?>
</body>
</html>


</div>

