<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>IITG</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="http://www.iitg.ernet.in/">Utilities</a></h1>
      <p>IITG</p>
    </div>
    <div class="fl_right">
      <ul>
        <li class="last"><a href="../../wordpress">Activities</a></li>
        <?php
          session_start();
          if (isset($_SESSION['user_type'])) {
            if ($_SESSION['user_type']=='adm') {
                echo "<li><a href=\"electives/viewall/viewall.php\">Electives</a></li>";

              }else{
                echo "<li><a href=\"electives/fillelective/fillingstyle.php\">Electives</a></li>";

              }
          }
          
        ?>
        
        <li><a href="student/index.php">Student Utilities</a></li>
      </ul>
      <p> Mail: webmaster@iitg.ernet.in</p>
    </div>
    <br class="clear" />
  </div>
</div>