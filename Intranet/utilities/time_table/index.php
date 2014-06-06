<link rel="stylesheet" href="../styles/layout.css" type="text/css" />

<!-- ####################################################################################################### -->
<?php
  include '../header.php';
?>
<!-- ####################################################################################################### -->

<div class="wrapper col2">
  <div id="topnav">
    <ul>
	  
      <li><a href="../index.php">Home</a>
        <ul>
          <li><a href="index.html">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
      </li>
	  <li class="active" ><a href='index.php'>Time Table</a>
		
	  </li>
      <li><a href="style-demo.html">Style Demo</a>
        <ul>
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Suspendisse in neque</a></li>
          <li class="last"><a href="#">Praesent et eros</a></li>
        </ul>
      </li>
      <li><a href="full-width.html">Full Width</a>
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
<?php
	session_start();
	
	// $_SESSION["user_type"]="std";
	if($_SESSION["user_type"]=="adm")
	include 'front_admin.php';
	else if($_SESSION["user_type"]=="std")
	include 'student_main.php';
?>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="featured_slide">
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
  include '../footer.php';
?>
</body>
</html>
