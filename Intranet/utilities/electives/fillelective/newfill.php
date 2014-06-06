<!doctype html >
<html>
<head>
<title>test</title>
<script type="text/javascript">

var Batch=new Array();
var Elective_batch=new Array();

<?php 
require "connect.inc.php"; 
$Batch=array();
//echo "var Batch=new Array();";
	$query_batch="SELECT DISTINCT Batch from electives_list ORDER BY Batch";
	
	if($query_batch_run=mysql_query($query_batch))

		{	$i=0;
			while($row=mysql_fetch_assoc($query_batch_run))
			{	
				$batchvalue=$row['Batch'];
				
				array_push($Batch, $batchvalue);
				echo "Batch.push('".$batchvalue."');";
				//echo "<script>alert('".$batchvalue."');</script>";
				//echo "<script>alert('".$Batch[$i]."');</script>";
				//echo "<script>addOption('Category','".$batchvalue."','".$batchvalue."');</script>";
				

				$Elective_batch[$i]=array();
				echo "Elective_batch[".$i."]=new Array();";
				$query_batch_elective="SELECT Electives from electives_list WHERE Batch=".$batchvalue."";
				if($query_batch_elective_run=mysql_query($query_batch_elective))
					{
						while($electiverow=mysql_fetch_assoc($query_batch_elective_run))
						{	$elective_elem=$electiverow['Electives'];
							array_push($Elective_batch[$i], $elective_elem);
							echo "Elective_batch[".$i."].push('".$elective_elem."');";
						}
					}


					$i++;
			}
		}

		$count_batch=$i;


?>



function initall(){


	
}

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		var selbox=document.getElementById(selectbox);
		selbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{	



//alert(selectbox);
	var selbox=document.getElementById(selectbox);
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;
	selbox.options.add(optn);
}


function populatesubcat(){
var batchcount=document.getElementById('Category').length-1;

/*for(var j=0;j<=batchcount;j++)
{	
	//alert(j);
	//alert('<?php echo $count_batch; ?>');
	<?php 



	for($k=0;$k<$count_batch;$k++)
		{

			echo "alert('".$Batch[$k]."');";
		}?>
	
}*/
var selbatch=document.getElementById('Category').value;
alert(selbatch);
//alert(Batch[0]);


//alert('<?php echo $Batch[0];?>');
//alert('<?php echo $i;?>');
<?php
for($l=0;$l<$i;$l++)
{
	

		//$query_batch_elective="SELECT Electives from electives_list WHERE Batch=".$Batch[$l]."";
		
		//require "connect.inc.php";
		//if($query_batch_elective_run=mysql_query($query_batch_elective))
		echo "alert('aaya');";
			while($electiverow=mysql_fetch_assoc($query_batch_elective_run))
						{	
							echo "if(selbatch=='".$Batch[$l]."'){";
							
							$elective_elem=$electiverow['Electives'];
							echo "alert('".$elective_elem."');";
							echo "addOption('SubCat1','".$elective_elem."','".$elective_elem."');";
							echo "}";
						}
		

		



	

}

?>
}

</script>
</head>

<body>

<?php
$name="subhojeet";
$rollno="120101086";?>
<form name="drop_list" id="drop_list" action="newfill.php" method="POST" >
<div  align='center'>
<table id='filltable' name='filltable' width='60%' align='center' border='3' cellspacing="3" cellpadding="3" BORDERCOLOR="#9F2800" bgcolor="#F4AD62">		
<tr>
	<td align='center'>
		<label>
			Roll no:
		</label>
	</td>

		
		<td>
			<input type="text" name='rollno' id='rollno' value=<?php echo $rollno; ?> readonly />
		</td>
		
	
</tr>
<tr>
	<td align='center'>
		<label>
			Name:
		</label>
	</td>

	<td>
		<input style="width: 97%;" type="text" name='name' id='name' value=<?php echo $name; ?> readonly />
		
	</td>
</tr>



<tr>
	<td align="center">
		<label ><b>Enter Batch:</b></label>
	</td>

	<td >
		<SELECT  NAME="Category" id="Category" onchange="populatesubcat();" >
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
<tr>
	<td align="center">
		<label >Elective Choice 1:</label>
	</td>
	<td >
		<SELECT id="SubCat1" NAME="SubCat1">
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
<tr>
	<td align="center">
		<label >Elective Choice 2:</label>
	</td>
	<td >
		<SELECT id="SubCat2" NAME="SubCat2">
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
<tr>
	<td align="center">
		<label >Elective Choice 3:</label>
	</td>
	<td >
		<SELECT id="SubCat3" NAME="SubCat3">
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
<tr>
	<td align="center">
		<label >Elective Choice 4:</label>
	</td>
	<td >
		<SELECT id="SubCat4" NAME="SubCat4">
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
<tr>
	<td align="center">
		<label >Elective Choice 5:</label>
	</td>
	<td >
		<SELECT id="SubCat5" NAME="SubCat5">
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
<tr>
	<td align="center">
		<label >Elective Choice 6:</label>
	</td>
	<td >
		<SELECT id="SubCat6" NAME="SubCat6">
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
<tr>
	<td align="center">
		<label >Elective Choice 7:</label>
	</td>
	<td >
		<SELECT id="SubCat7" NAME="SubCat7">
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
</table>
<input type='submit' action='newfill.php' method='POST' name='SubmitElectives' id='SubmitElectives' value='Submit'/>
</div>

</form>
<?php 
require "connect.inc.php"; 
$Batch=array();
	$query_batch="SELECT DISTINCT Batch from electives_list ORDER BY Batch";
	
	if($query_batch_run=mysql_query($query_batch))

		{	$i=0;
			while($row=mysql_fetch_assoc($query_batch_run))
			{	
				$batchvalue=$row['Batch'];
				
				array_push($Batch, $batchvalue);
				//echo "<script>alert('".$batchvalue."');</script>";
				//echo "<script>alert('".$Batch[$i]."');</script>";
				echo "<script>addOption('Category','".$batchvalue."','".$batchvalue."');</script>";
				

				$Elective_batch["'".$batchvalue."'"]=array();
				$query_batch_elective="SELECT Electives from electives_list WHERE Batch=".$batchvalue."";
				if($query_batch_elective_run=mysql_query($query_batch_elective))
					{
						while($electiverow=mysql_fetch_assoc($query_batch_elective_run))
						{
							array_push($Elective_batch["'".$batchvalue."'"], $electiverow['Electives']);
						}
					}


					$i++;
			}
		}

		$count_batch=$i;


?>






</body>

</html>

