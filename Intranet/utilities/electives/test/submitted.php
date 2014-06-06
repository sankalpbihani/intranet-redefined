<?php

echo "<style>




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









</style>";
require 'connect.inc.php';
$name='naman kansal';
$rollno='120103044';
$prefnum=7;
if(isset($_POST['SubmitElectives']))
{	
	
	$query_insert="UPDATE `user_preference_electives` SET `pref1`='".$_POST['SubCat1']."',`pref2`='".$_POST['SubCat2']."',`pref3`='".$_POST['SubCat3']."',`pref4`='".$_POST['SubCat4']."',`pref5`='".$_POST['SubCat5']."',`pref6`='".$_POST['SubCat6']."',`pref7`='".$_POST['SubCat7']."' WHERE `rollno`='".$rollno."' && `username`='".$name."'";
	
	//echo "<script>alert('".$name."');</script>";
	//echo "<script>alert('".$rollno."');</script>";
	$query_tool="SELECT tool from user_preference_electives WHERE `username`='".$name."'";
	
//SELECT tool FROM user_preference_electives WHERE  username='".$name."' && rollno='".$rollno."'
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
				echo "<script>alert('The choices could not be submitted.Please try again later!!!');</script>";
			}
		}
		else
			echo "<script>alert('Already filled the choices!!!');</script>";


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

				$query_choices="SELECT pref1,pref2,pref3,pref4,pref5,pref6,pref7 from user_preference_electives WHERE `username`='".$name."'";

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

?>


