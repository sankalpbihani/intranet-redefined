<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<?php
session_start();
$text = rand(10000,99999);
$_SESSION["vercode"] = $text;
$height = 25;
$width = 65;
  
$image_p = imagecreate($width, $height);
$blue = imagecolorallocate($image_p, 0, 0, 0);
$white = imagecolorallocate($image_p, 255, 250, 250);
$font_size = 14;
  
imagestring($image_p, $font_size, 5, 5, $text, $white);
imagejpeg($image_p, null, 80);
?>
<?phpinclude "../footer.php";?>