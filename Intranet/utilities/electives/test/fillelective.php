<!DOCTYPE html>
<html>
<head>
	<title>Fill Electives</title>
	<script type="text/javascript" >
	


	function populatecourses()
	{	<?php
		$bol=0;
		require "connect.inc.php";
		$sql = "SELECT Electives FROM electives_list where 1";
   		if($result = mysql_query($sql))
   			{	
   				$potential=mysql_fetch_assoc($result);
   				$bol=1;
   				
   		  	} 
   			?>
    	
   		alert('<?php echo $bol;?>');
    	//alert('<?php echo $sql;?>');

   		 
		<?php $nan="subh";?>

    	

			var name='<?php echo $nan;?>';

		//	alert(name);
			var totalbatch=document.getElementById("batchsel").length;
			var courselists=new Array(totalbatch);
			var index=document.getElementById("batchsel").selectedIndex;
			var which=document.getElementById("batchsel").value;
			courselists["Select"]=["Select a course"];
			for(var i=1;i<totalbatch;i++)
			{
				var associate=document.getElementById("batchsel").options[i].value;
				courselists[associate]=["a","b","c","d","e"];
				//alert(i);
			}
			clist=courselists[which];
			
			var selselect=document.getElementById("sel1");
			
			var sellen=selselect.options.length;
			while(selselect.options.length>0)
			{
				selselect.remove(0);
			}
			var newoption;
			
			for(var t=0;t<clist.length;t++)
			{
				newoption=document.createElement("option");
				newoption.value=clist[t];
				newoption.text=clist[t];
				//alert(newoption.text);
			try{
				selselect.add(newoption);
				}	
			catch(e){
				selselect.appendChild(newoption);
			}
			}
			
			
			
			//alert(which);

	}
	</script>
</head>


<body>
<?php
require "connect.inc.php";

$name='subhojeet';
$rollno='120101086'
?>
<form name='fillform' id='fillform' action='fillelective.php' method='POST'>
<div name='fillformdiv' id='fillformdiv' align='center'>
<table width='40%' name='fillformtable' id='fillformtable' align='center' border='3' cellspacing="3" cellpadding="3" BORDERCOLOR="#006E2E" bgcolor="#C3D9FF">
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
	<td align='center'>
		<label>
			<b>Enter Batch:</b>
		</label>
	</td>
	<td>
		<select name='batchsel' id='batchsel' onchange="populatecourses() ;" />
			<?php 
			
			$batch_query="SELECT DISTINCT Batch FROM electives_list";
			
			
			
			if($batch_query_run=mysql_query($batch_query))
			{	
				echo "<option name='Select' id='Select' >Select
				</option>";	
				$batchid=0;
				while($query_allbatch=mysql_fetch_assoc($batch_query_run))
				{

				echo "<option name='".$query_allbatch['Batch']."' value='".$query_allbatch['Batch' ]."' id='".$query_allbatch['Batch' ]."'>".$query_allbatch['Batch']."
				</option>";	
				$queryforcourse="SELECT Electives FROM electives_list where Batch='".$query_allbatch['Batch']."'";
				if($queryforcourse_run=mysql_query($queryforcourse))
				{	$data=array();
					while($row=mysql_fetch_assoc($queryforcourse_run))
					{
						$data[]=$row['Electives'];
					}

					//echo "var courses".$batchid."=".json_encode($data).";";

				}
				$batchid=$batchid+1;
				
				}
				$totalbatch=$batchid;


			}
			

			?>
		</select>
	</td>
</tr>
<tr>
	<td  align="center">
	<label>Preference1:</label>
	</td>
	<td align="center">
	<select id="sel1" name="sel1" ></select>
	</td>
</tr>
</table>
</div>

</form>



</body>
</html>