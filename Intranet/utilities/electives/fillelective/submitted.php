
<?php 
session_start();
if((isset($_SESSION['logged_in']))&&(isset($_SESSION['user_type']))&&(isset($_SESSION['user_nm']))&&(isset($_SESSION['name']))&&(isset($_SESSION['roll_no'])))
{
$loggedin=$_SESSION['logged_in'];

$usertype=$_SESSION['user_type'];
$name=$_SESSION['user_nm'];//here name holds the value of webmail according to the database
$rollno=$_SESSION['roll_no'];
$username=$_SESSION['name'];//here username holds the value for name of the student

}

else{
$usertype='student';
$loggedin='yes';
$name='subhojeet';
$rollno='120101086';
$username='subhojeet';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
<link rel='stylesheet' type='text/css' href='styles.css' />
<script src='jquery-1.11.0.js'></script>
<script type='text/javascript' src='menu_jquery.js'></script>
<style>




.blue th{
  background:#9B59B6;
}





tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}









</style>





	<title>Submitted</title>
</head>
<body>


<div id='cssmenu'>
<ul>
   <li class='active'><a href='http://intranet.iitg.ernet.in'><span>Home</span></a></li>
   <li class='active'><a href='fillingstyle.php'><span>Fill choices</span></a></li>
  
  
  
   
</ul>
</div>

<?php

require 'connect.inc.php';
$prefnum=7;
if(isset($_POST['SubmitElectives']))
{	
	
	$query_insert="UPDATE `user_preference_electives` SET `tool`='1', `pref1`='".$_POST['SubCat1']."',`pref2`='".$_POST['SubCat2']."',`pref3`='".$_POST['SubCat3']."',`pref4`='".$_POST['SubCat4']."',`pref5`='".$_POST['SubCat5']."',`pref6`='".$_POST['SubCat6']."',`pref7`='".$_POST['SubCat7']."' WHERE `rollno`='".$rollno."' && `webmail`='".$name."'";
	
	//echo "<script>alert('".$name."');</script>";
	//echo "<script>alert('".$rollno."');</script>";
	$query_tool="SELECT tool from user_preference_electives WHERE `webmail`='".$name."'";
	
//SELECT tool FROM user_preference_electives WHERE  webmail='".$name."' && rollno='".$rollno."'
	//echo "<script>alert('".$query_tool."');</script>";
	//echo "<script>alert('hey');</script>";
	if($query_tool_run=mysql_query($query_tool))
	{
	
		$tool=0;
		while($tool_row=mysql_fetch_assoc($query_tool_run))
		{

		
		if($tool_row['tool']==1)
			{
				$tool=1;
				
			}
		//echo "<script>alert('".$tool."');</script>";
		if($tool==0)
		{
		if($query_insert_run=mysql_query($query_insert))
			{
				echo "<script>alert('Successfully submitted the form');</script>";
			}
			else
			{
				echo "<script>alert('The choices asjhajh could not be submitted.Please try again later!!!');</script>";
			}
		}
		else
			echo "<script>alert('Already filled the choices!!!');</script>";


		echo "<div align ='center'>
				<table  class ='blue' width='60%' align='center' border='3' cellspacing='3' cellpadding='3' BORDERCOLOR='#9F2800' bgcolor='#1ABC9C'>
				<th colspan='2'>Your Filled choices are</th>

				<tr>
					<td>
						Username:
					</td>
						
					<td>
						<input style=\"width: 60%;\" type=\"text\" name='name' id='name' value='".$name."' readonly />
		
					</td>
				</tr>
				<tr>
					<td>
						Roll no.:
					</td>
						
					<td>
						<input style=\"width: 30%;\" type=\"text\" name='rollno' id='rollno' value='".$rollno."' readonly />
		
					</td>
				</tr>";

				$query_choices="SELECT pref1,pref2,pref3,pref4,pref5,pref6,pref7 from user_preference_electives WHERE `webmail`='".$name."'";

				if($query_choices_run=mysql_query($query_choices))
				{

					while($query_choices_row=mysql_fetch_assoc($query_choices_run))
					{	$hit=0;
						for($pref=1;$pref<=$prefnum;$pref++)
						{	
							$index="pref".$pref."";
							$pref_choice=$query_choices_row[$index];
							if($pref_choice!="")
								{$hit++;
							echo "<tr>
									<td>
										Choice".$hit.":
									</td>
									
									<td>
									".$query_choices_row[$index]."
									</td>

								 </tr>
							";
							}
						}
					}
				}


				echo "</table>
			 </div>";

		
		}

	}
}
else{ //echo "<script>alert('aaya')</script>;";
    	$query_tool="SELECT tool from user_preference_electives WHERE `webmail`='".$name."'";
	
//SELECT tool FROM user_preference_electives WHERE  webmail='".$name."' && rollno='".$rollno."'
	//echo "<script>alert('".$query_tool."');</script>";
	//echo "<script>alert('hey');</script>";
	if($query_tool_run=mysql_query($query_tool))
	{
	
		$tool=0;
		while($tool_row=mysql_fetch_assoc($query_tool_run))
		{

		
		if($tool_row['tool']==1)
			{
				$tool=1;
				
			}
		
		}
    
        if($tool==0)
		{
		 echo "<script>alert('No choices filled till now. Please fill the choices!!!');</script>";  
		}
		else
		{


		echo "<div align ='center'>
				<table  class ='blue' width='60%' align='center' border='3' cellspacing='3' cellpadding='3' BORDERCOLOR='#9F2800' bgcolor='#1ABC9C'>
				<th colspan='2'>Your Filled choices are</th>

				<tr>
					<td>
						Name:
					</td>
						
					<td>
						<input style=\"width: 60%;\" type=\"text\" name='name' id='name' value='".$name."' readonly />
		
					</td>
				</tr>
				<tr>
					<td>
						Roll no.:
					</td>
						
					<td>
						<input style=\"width: 30%;\" type=\"text\" name='rollno' id='rollno' value='".$rollno."' readonly />
		
					</td>
				</tr>";

				$query_choices="SELECT pref1,pref2,pref3,pref4,pref5,pref6,pref7 from user_preference_electives WHERE `webmail`='".$name."'";

				if($query_choices_run=mysql_query($query_choices))
				{

					while($query_choices_row=mysql_fetch_assoc($query_choices_run))
					{	$hit=0;
						for($pref=1;$pref<=$prefnum;$pref++)
						{	
							$index="pref".$pref."";
							$pref_choice=$query_choices_row[$index];
							if($pref_choice!="")
								{
								    $hit++;
							        echo "<tr>
									<td>
										Choice".$hit.":
									</td>
									
									<td>
									".$query_choices_row[$index]."
									</td>

								 </tr>
							        ";
					        	}
				    	}
			    	}
		    	}
		


				echo "</table>
			 </div>";

		}
    
}
}

?>


</body>
</html>
