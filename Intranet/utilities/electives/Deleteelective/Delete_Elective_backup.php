<!DOCTYPE html>
<html>
<head>
	<title>Delete Electives</title>

	<script type="text/javascript" >
	function selectallcheck(delid){
		//alert("andar aya");
		
		//alert(delid);
		for(var i=0;i<delid;i++)
		{
			//alert(i);
			var checkid="delete"+i;
		//alert(checkid);
		document.getElementById(checkid).checked=true;
		
		}

	}
	
	
	</script>
</head>
<body>
 
<?php
require "connect.inc.php";
//require "Delete_Selected_Viewall.inc.php";

echo "<form action='Delete_Elective.php' method='POST'>
   
           <input type='submit' name='viewall' id='viewall' value=\"View all Electives\" />";


//this file is included for viewing all and delete selected electives
$del_Batch=array();
$del_Electives=array();
$del_Elective_code=array();



if(isset($_POST['viewall']))
	{


	$query_view_all="SELECT Batch, Electives,Elective_code FROM electives_list WHERE 1";
	
	if($query_viewall_run=mysql_query($query_view_all))
		{if(mysql_num_rows($query_viewall_run)>0)
			{  echo "<table border=\"3\" align=\"center\" cellspacing=\"5\" BORDERCOLOR=\"#006E2E\" bgcolor=\"#C3D966\">";
			//echo "success";
			echo "<tr>
					<th>Select</th>
				  	<th>Batch</th>
				 	 <th>Electives name</th>
				 	 <th>Elective code</th>
				  </tr>";
				  $delid=0;
				while($query_allrow=mysql_fetch_assoc($query_viewall_run))
				{ 
					
					$del_Batch[$delid]=$query_allrow['Batch'];
					$del_Electives[$delid]=$query_allrow['Electives'];
					$del_Elective_code[$delid]=$query_allrow['Elective_code'];
				

				echo "
				<tr>
                   
					<td>
					<input type=\"checkbox\" name='delete".$delid."' id='delete".$delid."' value=\"Delete\" >
					<input type=\"hidden\" name='deletehidden_batch".$delid."' id='deletehidden_batch".$delid."' value='".$del_Batch[$delid]."'/>
					<input type=\"hidden\" name='deletehidden_Electives".$delid."' id='deletehidden_Electives".$delid."' value='".$del_Electives[$delid]."'/>
					<input type=\"hidden\" name='deletehidden_Elective_code".$delid."' id='deletehidden_Elective_code".$delid."' value='".$del_Elective_code[$delid]."'/>
					</td>
					<td>";
					echo $del_Batch[$delid];
					echo "</td>
					<td>";
					echo $del_Electives[$delid];
					echo "</td>
					<td>";
					echo $del_Elective_code[$delid];
					echo "</td>
					<!--<td>
					<input type='submit' name='delete".$delid."' value=\"Delete\" id='delete".$delid."'/>
					</td>-->
				</tr>


				";
					/*echo $del_Batch[$delid];
					echo $del_Electives[$delid];
					echo $del_Elective_code[$delid];
					*/
				$delid=$delid+1;
				}
				echo "</table>";

				echo "<div align=\"center\" id=\"btn_del\">
				<input name=\"Select_all\" type=\"button\" class=\"button\" id=\"select_all\"  onclick=\"selectallcheck(".$delid.")\"; value=\"Select All\" />
				
				<input action=\"Delete_Elective.php\" name=\"Delete\" type=\"submit\" class=\"button\" id=\"Delete\" value=\"Delete\" />
				</div>";

			}
		}

	}

if(isset($_POST['Delete']))
{ $selected_boxes=0;
	
	$query_view_all="SELECT Batch, Electives,Elective_code FROM electives_list WHERE 1";
	$query_viewall_run=mysql_query($query_view_all);
	$Batch="";
	$Electives="";
	$Elective_code="";
	$query_delete="";
	for($i= 0; $i<mysql_num_rows($query_viewall_run);$i++)
	{
		if(isset($_POST["delete".$i]))
		{	//echo "andar aaya to tha";
			$Batch=$_POST["deletehidden_batch".$i];
			//echo $Batch;
			$Electives=$_POST["deletehidden_Electives".$i];
			//echo $Electives;
			$Elective_code=$_POST["deletehidden_Elective_code".$i];
			//echo $Elective_code;
			$query_delete="DELETE FROM `electives_list` WHERE `Batch`= '$Batch' AND `Electives` = '$Electives' AND `Elective_code`='$Elective_code' ";
			
			//echo $query_delete;
			if($query_delete_run=mysql_query($query_delete))
			{/*echo "deleted successfully";*/}
			$selected_boxes++;
		}
	}
//echo "<br>".$selected_boxes;



}



echo "</form>";
?>


</body>
</html>
