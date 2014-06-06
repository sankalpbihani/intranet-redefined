<html>
<head>
<title>Complains</title>
<style>
table,th
{
border:1px solid black;
background-color:orange;
padding-left:20px;
padding-right:20px; 
}
td
{
border:1px solid black;
background-color:orange;
padding-left:20px;
padding-right:20px; 
width: 200px;
word-wrap: break-word;
}
</style>
</head>
<body style="background-color:maroon">
<h1><u>
<div id="heading" style="background-color:orange" align="center"><br>Complain Page<br></div>
</u></h1>
<br>
<?php
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$page_status="FOUND";

// escape variables for security
//$age = mysqli_real_escape_string($_POST['age']);

if ($page_status == "FOUND"){
$sql="SELECT * FROM complains  ";
$result = mysqli_query($con,$sql);
?>
<table style="table-layout: fixed;" align="center" width="500">
<tr>
<th style="background-color:black ; color:orange">Webmail ID</th>
<th style="background-color:black ; color:orange" style="word-wrap: break-word">Complain</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
  {
  ?><tr>
  <td><?php
  echo $row['user_id']; ?></td>
  <td style="word-wrap: break-word">
  <?php echo $row['complain']; ?></td>
  </tr>
  <?php
  }
  ?></table><?php
}
mysqli_close($con);
?>
<br><br><br><br>
<div align="center">
<a href="admin_home.php"style="background-color:black ; color:orange ; padding:10px 30px">Home</a>
</div>
</body>
</html>