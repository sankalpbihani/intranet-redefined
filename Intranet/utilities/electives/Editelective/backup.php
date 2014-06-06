<!DOCTYPE html>
<html>
<head>
	<title>Edit Electives</title>
	<script type="text/javascript" >
	window.onload=hideeditform;

	function showeditform(editid){

		document.getElementById("form_edit").style.display="inline-block";
		document.getElementById("edit_batch").innerHTML="kam kiya";
		//document.getElementById("");
		//alert("kam kya");
		//var index "edithidden_batch"+ editid;
		alert(index);
		//document.getElementById("labelbatch").innerHTML=document.getElementById(index).value;

	} 

	function hideeditform(){


		document.getElementById("form_edit").style.display="none";
		
	}

	</script>

</head>

<body>

 <form  method='POST'>
   
           <input action='Edit_Admin.php' type='submit' name='viewall' id='viewall' value="View all Electives" />
 





<?php 
require "connect.inc.php";
//echo "line";
$query_view_all_edit="SELECT Batch, Electives,Elective_code FROM electives_list WHERE 1";

if($query_viewall_run_edit=mysql_query($query_view_all_edit))
{	
	if(mysql_num_rows($query_viewall_run_edit)>0)
	{ 

//				echo mysql_num_rows($query_viewall_run_edit);


			 echo "<table border=\"3\" align=\"center\" cellspacing=\"5\" BORDERCOLOR=\"#006E2E\" bgcolor=\"#C3D966\">";
			//echo "success";
			echo "<tr>
					<!--<th>Select</th>-->
				  	
				  	<th>Batch</th>
				 	 <th>Electives name</th>
				 	 <th>Elective code</th>
				 	 <th>Edit</th>
				  </tr>";
				  $editid=0;
				while($query_allrow=mysql_fetch_assoc($query_viewall_run_edit))
				{ 
					
					$edit_Batch[$editid]=$query_allrow['Batch'];
					$edit_Electives[$editid]=$query_allrow['Electives'];
					$edit_Elective_code[$editid]=$query_allrow['Elective_code'];
				

				echo "
				<tr>
                   
					
					<td>";
					echo $edit_Batch[$editid];
					echo "</td>
					<td>";
					echo $edit_Electives[$editid];
					echo "</td>
					<td>";
					echo $edit_Elective_code[$editid];
					echo "</td>
					<td>
					
					<input  type=\"hidden\" name='edithidden_batch".$editid."' id='edithidden_batch".$editid."' value='".$edit_Batch[$editid]."'/>
					<input  type=\"hidden\" name='edithidden_Electives".$editid."' id='edithidden_Electives".$editid."' value='".$edit_Electives[$editid]."'/>
					<input type=\"hidden\" name='edithidden_Elective_code".$editid."' id='edithidden_Elective_code".$editid."' value= '".$edit_Elective_code[$editid]."'/>
					<!--<input  type=\"submit\" name='edit".$editid."' id='edit".$editid."' value=\"Edit\"  >-->
					<input type='button' id='\"button\"".$editid."' name='button".$editid."' onclick=\"showeditform(".$editid.")\"; value=\"Edit\"/>
					</td>
				</tr>";
					
				$editid=$editid+1;
				}
				echo "</table>";


				echo "<div align=\"center\" id=\"btn_edit\">
				<!--<input name=\"Edit\" type=\"submit\" class=\"button\" id=\"Edit\" value=\"Select All\" >
				
				<input action=\"Delete_Elective.php\" name=\"Delete\" type=\"submit\" class=\"button\" id=\"Delete\" value=\"Delete\" >
				-->
				</div>";

	}
}


echo "<br><br><br>";
?>
</form>

<?php
//for($i=0;$i<mysql_num_rows($query_viewall_run_edit);$i++)
{
	


	//doing it for the clicked elective to be edited
	//if(isset($_POST["edit".$i]))


	{	

		//$query_upd="UPDATE `electives_list` SET `Batch`='2013 ',`Electives`='fame theory',`Elective_code`='hs2xx' WHERE `Batch`='1013' || `Electives`='game theory' || `Elective_code`='hs223'";
			/*	
echo $query_upd;
				if($query_upd_run=mysql_query($query_upd))
				{
					echo "ho gaya";

				}

*/

				echo "<form id=\"form_edit\" style=\"display:none\" >";
		echo "<div>
			 <table align ='center' border=''3' cellspacing=\"5\" BORDERCOLOR=\"#006E2F\" bgcolor=\"#C3F970\">
			 <th>Edit Elective</th>
			 <tr>
			 	<td>
			 		<label>Old batch name:</label>
			 	</td>
			 	<td>
			 		<label id=\"labelbatch\">";echo $_POST["edithidden_batch".$i];echo"</label>
			 	</td>
			 </tr>


			 <tr>
					<td>
						<label>New Batch Name:
					</td>
					<td>
						<input type=\"text\" name=\"edit_batch\" id=\"edit_batch\"/></label>
					</td>
				</tr>

			 <tr>
			 	<td>
			 		<label>Old Elective name:</label>
			 	</td>
			 	<td>
			 		<label>";echo $_POST["edithidden_Electives".$i];echo"</label>
			 	</td>
			 </tr>


			 <tr>
				<td>
						<label>Elective name:
				</td>
				<td>
						<input type=\"text\" name=\"edit_Elective_name\" id=\"edit_Elective_name\"/></label>
				</td>
			</tr>


			 <tr>
			 	<td>
			 		<label>Old Elective code:</label>
			 	</td>
			 	<td>
			 		<label>";echo $_POST["edithidden_Elective_code".$i];echo"</label>
			 	</td>
			 </tr>

			 <tr>
					<td>
						<label>New Elective code:
					</td>
					<td>
						<input type=\"text\" name=\"edit_Elective_code\" id=\"edit_Elective_code\"/></label>
					</td>
				</tr>

			 
			 </table>
			 ";
			
		echo "</div>";
		echo "<div align='center' id=editbutton>";
		echo "<input align='center' class-button' type='submit' id='edit_the_entered' name='edit_the_entered' value='Update'/>";
		echo "</div>";

		

		
		//require "Edit_Selected.php";
		echo "<br><br>";
	/*	echo "<div id=\"edit_box\" name=\"edit_box\" >";
		echo "<table align='center'>
				<tr>
					<td>
						<label>Batch:
					</td>
					<td>
						<input type=\"text\" name=\"edit_batch\" id=\"edit_batch\"/></label>
					</td>
				</tr>
				<tr>
					<td>
						<label>Elective name:
					</td>
					<td>
						<input type=\"text\" name=\"edit_Elective_name\" id=\"edit_Elective_name\"/></label>
					</td>
				</tr>
				<tr>
					<td>
						<label>Elective code:
					</td>
					<td>
						<input type=\"text\" name=\"edit_Elective_code\" id=\"edit_Elective_code\"/></label>
					</td>
				</tr>



		";
		
		
		echo "</div>";
		*/
		echo "</form>";

		if(isset($_POST['edit_the_entered']))
			{
				$upd_batch_old=$_POST['edithidden_batch'];
				$upd_Elective_old=$_POST['edithidden_Electives'];
				$upd_Elective_code_old=$_POST['edithidden_Elective_code'];
				$upd_batch_new=$_POST['edit_batch'];
				$upd_Elective_new=$_POST['edit_Elective_name'];
				$upd_Elective_code_new=$_POST['edit_Elective_code'];
				//$query_upd="UPDATE `electives_list` SET `Batch`='$upd_batch_new',`Electives`=$upd_Elective_new,`Elective_code`=$upd_Elective_code_new WHERE `Batch`='$upd_batch_old' && `Electives`='$upd_Elective_old' && `Elective_code`=$upd_Elective_code_old";
				$query_upd="UPDATE `electives_list` SET `Batch`='2013 ',`Electives`='fame theory',`Elective_code`='hs2xx' WHERE `Batch`='1013' || `Electives`='game theory' || `Elective_code`='hs223'";
				
echo $query_upd;
				if($query_upd_run=mysql_query($query_upd))
				{
					echo "ho gaya";

				}
			}

		

	}	
}


?>
</body>
</html>
