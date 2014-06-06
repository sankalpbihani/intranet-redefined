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
      <li ><a href="/utilities/index.php">Home</a>
        <ul>
          <li><a href="index.html">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
      </li>
      <li class="active"><a href="index.php">SAC</a>
        <ul>
          <li><a href="/utilities/sac/rules.php">Rules</a></li>
          <li><a href="/utilities/sac/timing.php">Timing</a></li>
          <li><a href="/utilities/sac/pt.php">PT attendance</a></li>
          <li ><a href="/utilities/sac/nso.php">NSO attendance</a></li>
          <li ><a href="/utilities/sac/forms.php">FORMS</a></li>
          <li ><a href="/utilities/sac/resources.php">Resources</a></li>
          <li ><a href="/utilities/sac/calendar.php">Booking Hall</a></li>
          <li class="last"><a href="/utilities/sac/contact/contactform.php">Contact US</a></li>
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
    <?php 
      
    <form name="resouceform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     echo"   <select name="sports" onchange="this.form.submit()">
            Select Sports:      
            <option value="" disabled="disabled" selected="selected">Please select Sport</option>
            <option value="cricket"  if($_POST[\'sports\']=="cricket"){ <option value="cricket"  selected="selected">Cricket</option>}
            <option value="tennis"  if($_POST[\'sports\']=="tennis"){ <option value="tennis"  selected="selected">Tennis</option>}
            <option value="hockey"  if($_POST[\'sports\']=="hockey"){ <option value="hockey"  selected="selected">Hockey</option>}
            <option value="football"  if($_POST[\'sports\']=="football"){ <option value="football"  selected="selected">Football</option>}
    </select> </form> ';

    ?>      

</body>
</html>
