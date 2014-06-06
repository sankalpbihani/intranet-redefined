<html>
<head>
<title>Forms</title>
<style>
table,th,td
{
border:1px solid black;
background-color:orange;
padding-left:20px;
padding-right:20px; 
}
</style>
</head>
<body style="background-color:maroon">
<h1><u>
<div id="heading" style="background-color:orange" align="center"><br>MEDICAL FORMS<br></div>
</u></h1>
<br>
<?php
// Connect to the database
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT * FROM `forms`';
$result = mysqli_query($con,$sql);
$counter=1; 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo "<table align=\"center\">
                <tr>
					<td style=\"background-color:black ; color:orange\"><b>ID</b></td>
                    <td style=\"background-color:black ; color:orange\" width=\"300px\"><b>Name</b></td>
					<td style=\"background-color:black ; color:orange\"><b>&nbsp;</b></td>
                </tr>";
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
					<td>{$counter}</td>
                    <td>{$row['path']}</td>
                    <td><a href='view_form.php?id={$row['id']}'>Download</a></td>
                </tr>";
				$counter++;
        }
 
        // Close table
        echo '</table>';
    }
 
    // Free the result
   
}

// Close the mysql connection
mysqli_close($con);

?>


<?php
session_start();
// Make sure an ID was passed
if(isset($_GET['id'])) {
// Get the ID
    $id = intval($_GET['id']);
	echo $id;
 
    // Make sure the ID is in fact a valid ID
    if($id <= 0) {
        die('The ID is invalid!');
    }
    else {
        // Connect to the database
        $con=mysqli_connect("localhost","kunal15595","jtmzk04484","subgroup5");
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Fetch the file information
        $sql = "SELECT * FROM `forms`  WHERE id = '".$id."'";
        $result = mysqli_query($con,$sql);
 
        if($result) {
            // Make sure the result is valid
            if($result->num_rows == 1) {
            // Get the row
                $row = mysqli_fetch_assoc($result);
 
                // Print headers
                header("Content-Disposition: attachment; filename=". $row['path']);
 
                // Print data
                echo $row['data'];
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
 
            // Free the mysqli resources
       
        }
        
        mysqli_close($con);
    }
}
else {
   //echo "fhdfh";
}
?>
<div align="center">
<a href="user_home.php"style="background-color:black ; color:orange ; padding:10px 30px">Home</a>
</div>
</body>
</html>