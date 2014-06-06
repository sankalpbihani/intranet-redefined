 <?php
 /* $con=mysqli_connect("localhost","root","","mysql"); */

// Check connection
/* if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } */
    if (isset($_POST['q1']))
        $q1 = $_POST['q1'];
     /*    mysql_query("INSERT INTO assessment (q1) VALUES ('$q1')"); */
	 echo $q1 ;
    
    ?>