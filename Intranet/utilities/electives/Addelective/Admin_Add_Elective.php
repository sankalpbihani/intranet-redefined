<?php

if(isset($_POST['new_Elective_name']) && isset($_POST['new_elective_code']) && !($_POST['programme_name']=="Nothing") && !($_POST['year']=="Nothing")  )
{

	
	
		$programme=$_POST['programme_name'];
		$year=$_POST['year'];
		$new_elective=$_POST['new_Elective_name'];
		$progyear=$programme." ".$year;
		$Elective_code=$_POST['new_elective_code'];
		$credit=$_POST['new_credits'];
		$syllabus=$_POST['new_syllabus'];
		$texts=$_POST['new_texts'];
		$reference=$_POST['new_reference'];
		
	/*echo $programme."<br>";
	echo $year."<br>";
	echo $new_elective."<br>";
	echo $progyear."<br>";*/

//query to add the new entry 
$add_query="INSERT INTO electives_list (department,Batch,Electives,Elective_code,credits,syllabus,texts,reference) VALUES ('Default','$progyear','$new_elective','$Elective_code','$credit','$syllabus','$texts','$reference')";

//$query="SELECT `department` FROM `electives_list`";

if($query_run= mysql_query($add_query))
	//echo "success";
{echo "<script>alert('The new Elective has been Added to the list oh Electives');</script>";
//header("Location:Success_Addition.php");

exit();
	}

	
}



?>