<?phpinclude '../header.php';
//include '../styles/layout.css';
?>
<?php
function store_sem($c)
{global $x;
$x=$c;
}
function get_sem()
{
  return $x;
}


?>
<?phpinclude "../footer.php";?>