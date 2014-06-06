<?php
    include '../header.php';
?>
<html>
<head>
  <title>SAC Home</title>
  <link href="site.css" rel="stylesheet">
  <link href="gallery.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/layout.css" type="text/css" />
</head>

<body>

<!-- ####################################################################################################### -->

<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li ><a href="../index.php">Home</a>
        <ul>
          <li><a href="index.html">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
      </li>
      <li class="active"><a href="">SAC</a>
        <ul>
          <li><a href="rules.php">Rules</a></li>
          <li><a href="timing.php">Timing</a></li>
          <li><a href="timing.php">PT attendance</a></li>
          <li ><a href="nso.php">NSO attendance</a></li>
          <li ><a href="forms.php">FORMS</a></li>
          <li ><a href="resources.php">Resources</a></li>
          <li ><a href="calendar.php">Booking Hall</a></li>
          <li class="last"><a href="/contact/contactform.php">Contact US</a></li>
        </ul>
      </li>
      <li><a href="guest2/index.php">Guest House</a>
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
  <div id="main">
  <h1>Welcome to SAC IITG</h1>
  <div class="wrapper col3">
  <div id="gallery" >
    <ul>
      <li class="placeholder" style="background-image:url(images/gallery/6_s.jpg)" > Image Holder</li>
	   <div class="tap">
      <li><a class="swap" href="#"><img src="images/gallery/1_s.jpg" alt="" /><span><img src="images/gallery/1_s.jpg" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/2_s.jpg" alt="" /><span><img src="images/gallery/2_s.jpg" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/3_s.jpg" alt="" /><span><img src="images/gallery/3_s.jpg" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/4_s.jpg" alt="" /><span><img src="images/gallery/4_s.jpg" width="950" height="370" alt="" /></span></a></li>
	  
      <li class="last"><a class="swap" href="#"><img src="images/gallery/5_s.jpg" alt="" /><span><img src="images/gallery/5_s.jpg" width="950" height="370" alt="" /></span></a></li>
	    </div>
    </ul>
  </div>
</div>
</div>
<!-- ####################################################################################################### -->

</body>
</html>
<?php
    include '../footer.php';
?>