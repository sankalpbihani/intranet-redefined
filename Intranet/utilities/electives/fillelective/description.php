


<?php
require 'connect.inc.php';
$query_batch_inc="SELECT DISTINCT Batch from electives_list WHERE 1 ORDER BY Batch,Elective_code";
if($query_batch_inc_run=mysql_query($query_batch_inc))
{


echo "
<div align='center' id='des_div' name='des_div'>
<table width='90%' border=''3' cellspacing=\"5\" BORDERCOLOR=\"#9F2800\" >
	<th align='center' colspan='2'>
		ELECTIVES DESCRIPTION
	</th>";
	$batch_count=0;
	while($batch_rows=mysql_fetch_assoc($query_batch_inc_run))
	{$batch_count++;
	$batch_row_value=$batch_rows['Batch'];
	
	$query_elective_inc="SELECT Electives,Elective_code,credits,syllabus,texts,reference FROM electives_list WHERE Batch='".$batch_row_value."'";
	echo "<tr>
	<table id='tab".$batch_count."' width ='85%' border=''3' cellspacing=\"5\" BORDERCOLOR=\"#9F2800\" >
	<th align='center' colspan='2'>".$batch_row_value."</th>";
	
	if($query_elective_inc_run=mysql_query($query_elective_inc))
	{
	while($query_elective_row=mysql_fetch_assoc($query_elective_inc_run))
		{$elective_value=$query_elective_row['Electives'];
		 $elective_code_value=$query_elective_row['Elective_code'];
		$elective_credits=$query_elective_row['credits'];
		$elective_syllabus=$query_elective_row['syllabus'];
		$elective_texts=$query_elective_row['texts'];
		$elective_reference=$query_elective_row['reference'];
		echo "<script>alert('".$elective_reference."');)</script>";
		echo "<tr>
				<td width='20%' align='center'>".$elective_code_value."</td>
				<td width='60%' name='subcat_".$batch_row_value."".$elective_value."' id='subcat_".$batch_row_value."".$elective_value."'><a href=\"#\" onclick=\"lightbox_open('".$elective_value."','".$elective_code_value."','".$elective_credits."','".$elective_syllabus."','".$elective_texts."','".$elective_reference."');\">".$elective_value."</a></td>
				
				
			</tr>";
		}
	}
	echo "</table>
	
	</tr>";
	}
echo "</table>


</div>






";
}










?>