<html>
<head>
  <title>Resources Available In SAC</title>
  <link href="Site.css" rel="stylesheet">
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

<body>
 <?php
    include '../header.php';
?>
<!-- ####################################################################################################### -->

<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li ><a href="/intranet/utilities/index.php">Home</a>
        <ul>
          <li><a href="index.html">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
      </li>
      <li class="active"><a href="index.php">SAC</a>
        <ul>
          <li><a href="/intranet/utilities/sac/rules.php">Rules</a></li>
          <li><a href="/intranet/utilities/sac/timing.php">Timing</a></li>
          <li><a href="/intranet/utilities/sac/pt.php">PT attendance</a></li>
          <li ><a href="/intranet/utilities/sac/nso.php">NSO attendance</a></li>
          <li ><a href="/intranet/utilities/sac/forms.php">FORMS</a></li>
          <li ><a href="/intranet/utilities/sac/resources.php">Resources</a></li>
          <li ><a href="/intranet/utilities/sac/calendar.php">Booking Hall</a></li>
          <li class="last"><a href="/intranet/utilities/sac/contact/contactform.php">Contact US</a></li>
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
  <div id="form" align="center" >

<table border="2" id='hd' >
  <tr >
    <th colspan="2"><font color=red>Sports</font></th>
  </tr>

<?php
include '../connect.php';
$con=getConnected($host,$user,$pass,$db);
$my_array=array("cricket","tennis","hockey");
foreach ($my_array as $value) {
  $result = mysqli_query($con,"SELECT * FROM resources WHERE `game_name`='$value'");
  echo "<tr id='hd' >";
  echo "<th colspan='2'  ><font color=green>"."$value"."</font></th>";
  echo "</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr id='hd' >";
  echo "<td><font color=blue>" . $row['objectname'] . "</font></td>";
  echo "<td><font color=blue>" . $row['quantity'] . "</font></td>";
  echo "</tr>";
  }

  
}

mysqli_close($con);
?>
</table> 



<?php
    include '../footer.php';
?>
</div>
</body>
</html>


</div>