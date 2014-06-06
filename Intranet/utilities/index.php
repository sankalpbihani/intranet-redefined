
<!-- ####################################################################################################### -->
<?php
  include 'header.php';
?>
<!-- ####################################################################################################### -->

<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.html">Home</a>
        <ul>
          <li><a href="index.html">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
      </li>
      <li ><a href='./time_table/index.php'>Time Table</a></li>
      <li ><a href='./sac/index.php'>SAC</a></li>
      <li ><a href='./dues_page/session.php'>Dues</a></li>
      <li ><a href='./Course_Reg/course_login.php'>Course Reg.</a></li>
      <li ><a href='./guest2/index.php'>Guest House</a></li>
      <?php
      if ($_SESSION['user_type']=='adm') {
          echo "<li ><a href=\"./hospital/admin/admin_home.php\">Hospital</a></li>";

        }else{
          echo "<li ><a href=\"./hospital/user/user_home.php\">Hospital</a></li>";

        }
      if ($_SESSION['user_type']=='adm') {
          echo "<li ><a href=\"./abhi1/adminpermission.php\">Form Attest.</a></li>";

        }else{
          echo "<li ><a href=\"./abhi1/anil_login.php\">Form Attest.</a></li>";

        }
      
      if ($_SESSION['user_type']=='adm') {
          echo "<li ><a href=\"./abhi1/adminadd.php\">Mess</a></li>";

        }else{
          echo "<li ><a href=\"./abhi1/studentdownload.php\">Mess</a></li>";

        }
      if ($_SESSION['user_type']=='adm') {
          echo "<li ><a href=\"./abhi1/showdetails.php\">Travel</a></li>";

        }else{
          echo "<li ><a href=\"./abhi1/bookcab.php\">Travel</a></li>";

        }
      ?>
      <li><a href="style-demo.html">Style Demo</a>
        <ul>
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Suspendisse in neque</a></li>
          <li class="last"><a href="#">Praesent et eros</a></li>
        </ul>
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
  include 'new.php';
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
  include 'footer.php';
?>
</body>
</html>
