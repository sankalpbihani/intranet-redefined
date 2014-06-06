<?php
    include '../header.php';
?>
<html>
<head>
  <title>PT Attendance</title>
  <link href="site.css" rel="stylesheet">
   <link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script src="jq.js" type="text/javascript"></script>
<style type="text/css">
  body{
  
    background-image: url(pt.jpg); /*You will specify your image path here.*/
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: top center ;
    background-repeat: no-repeat ;
    background-attachment: fixed;

  }
</style>


<script type='text/javascript'>

 $(document).ready(function() { 
   $('input[name=attendance]').change(function(){

        $('form').submit();

   });
  });

</script>


</head>

<body >


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
<!-- ####################################################################################################### -->
  <div id="form">

<form name="attendaceform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="radio" name="attendance" id="attendance_me"  value="me" ><font size="6px">Only Me </font></br>
<input type="radio" name="attendance"  id="attendance_all"  value="all" ><font size="6px">Show All </font></br>
</form> 

<?php


?>
</br></br>

<?php
include '../connect.php';
$con=getConnected($host,$user,$pass,$db);
// Check connection

$result = mysqli_query($con,"SELECT * FROM pt_attendance");
 $webmailid="";
 
$i=0;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $attend=$_POST['attendance'];
  echo "<table border=\"1\" id='hd' >
  <tr >
    
    <th>webmailid</th>
    <th>name</th>
    <th>year</th>
    <th>attendance</th>
    <th>GroupNo</th>
  </tr>";
  if($attend ==  'all'){
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr  align=\"center\" id='hd' >";
      echo "<td>" . $row['webmailid'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['year'] . "</td>";
      echo "<td>" . $row['attendance'] . "</td>";
      echo "<td>" . $row['groupno'] . "</td>";
      echo "</tr>";
    }  
  } else {
    if (!isset($_SESSION)) {
       session_start();
    }   
    $webmailid=$_SESSION['user_nm'];
    while($row = mysqli_fetch_array($result))
    {
      if($row['webmailid']==$webmailid){
        echo "<tr align=\"center\" id='hd' >";$i=1;
        echo "<td>" . $row['webmailid'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['attendance'] . "</td>";
        echo "<td>" . $row['groupno'] . "</td>";
        echo "</tr>";  
      }else {
        $i=0;
      }
      
    }  
    if($i==0){
      "It is seemed you are not involved in these activities!";
    }
  }
} 


mysqli_close($con);
?>
</table> 


<!-- ####################################################################################################### -->
<?php
    include '../footer.php';
?>
</body>
</html>


</div>
