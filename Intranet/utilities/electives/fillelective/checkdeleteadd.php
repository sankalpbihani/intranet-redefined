<!doctype html >
<html>
<head>
<title>test</title>
<script type="text/javascript">


<?php


require "connect.inc.php"; // database connection details 
echo "

function fillCategory(){ 
 // this function is used to fill the category list on load

";

$q1=mysql_query("SELECT DISTINCT Batch from electives_list ORDER BY Batch");
echo mysql_error();
while($nt1=mysql_fetch_array($q1)){
echo "addOption(document.drop_list.Category, '$nt1[Batch]', '$nt1[Batch]');";
}// end of while
?>
} // end of JS function

function SelectSubCat(){

<?php 
$query_batch="SELECT DISTINCT Batch  from electives_list ORDER BY Batch";
$query_Batch_run=mysql_query($query_batch);

while($row=mysql_fetch_assoc($query_Batch_run)){
//echo "$nt2[cat_id]";
$q5=mysql_query("SELECT Electives from electives_list where Batch='$row[Batch]'");
$nt5=mysql_fetch_assoc($q5);
$number=mysql_num_rows($q5);
//echo "alert('".$number."');";
?>

if(document.drop_list.Category.value === "<?php echo $row['Batch'];?>"){

caller();

}
<?php
}
?>




}


function caller(){
//alert("<?php echo $number;?>");
<?php
// Collect all element of subcategory for various cat_id 


for($num=1;$num<=$number;$num++)

	{
	
	echo "	removeAllOptions(document.drop_list.SubCat".$num.");
			addOption(document.drop_list.SubCat".$num.", \"\", \"Select\", \"\");";
	}
// let us collect all cat_id and then collect all subcategory for each cat_id
$q2=mysql_query("SELECT DISTINCT Batch  from electives_list");
// In the above query you can collect cat_id from category table also. 
while($nt2=mysql_fetch_array($q2)){
//echo "$nt2[cat_id]";
echo "if(document.drop_list.Category.value == '$nt2[Batch]'){";
$q3=mysql_query("SELECT Electives from electives_list where Batch='$nt2[Batch]'");
while($nt3=mysql_fetch_array($q3)){
	$course=$nt3['Electives'];
	for($numb=1;$numb<=$number;$numb++)
	{
	echo "addOption(document.drop_list.SubCat".$numb.",'$course', '$course');";
	
	}

	

} // end of while loop
echo "}"; // end of JS if condition

}
?>
}


////////////////// 

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}


function addRow(tableID) {
 			
            var table = document.getElementById(tableID);
 			//alert(table);
            var rowCount = table.rows.length;
            alert(rowCount);
            var row = table.insertRow(rowCount);
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("select");
           // element1.type = "checkbox";
            element1.name="select[]";
            element1.id="select";
            element1.value="label";
            cell1.appendChild(element1);
 			
            
 
            var cell2 = row.insertCell(1);
            var element2 = document.createElement("label");
            element2.type = "text";
            element2.name = "label[]";
            element2.value="label";
            cell2.appendChild(element2);
 
           
 
        }

function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                
                {
                    table.deleteRow(0);
                   
                }
 
 
            }
            }catch(e) {
                alert(e);
            }
        }
		
		
		
		//********************************
//implementing lightbox
window.document.onkeydown = function (e)
	{
    if (!e){
        e = event;
    	}
    if (e.keyCode == 27)
    	{
        lightbox_close();
    	}
	}

	function lightbox_open(electives,coursecode,credits,syllabus,texts,reference)
	{
	/*alert('aaya');
	alert(electives);
	alert(coursecode);
	alert(credits);
	alert(syllabus);
	alert(texts);
	alert(reference);
	*/
    document.getElementById('desc_credits').innerHTML=credits;
	document.getElementById('desc_code').innerHTML=coursecode;
	document.getElementById('desc_electives').innerHTML=electives;
	document.getElementById('desc_credits').innerHTML=credits;
	document.getElementById('desc_syllabus').innerHTML=syllabus;
	document.getElementById('desc_texts').innerHTML=texts;
	document.getElementById('desc_reference').innerHTML=reference;

	
    window.scrollTo(0,0);
    document.getElementById('light').style.display='block';
    document.getElementById('fade').style.display='block';  
	}

	function lightbox_close(){
    document.getElementById('light').style.display='none';
    document.getElementById('fade').style.display='none';
	}


</script>
<style>
#fade{
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index:1100;
    -moz-opacity: 0.7;
    opacity:.70;
    filter: alpha(opacity=70);
}
#light{
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 800px;
    height: 500px;
    margin-left: -400px;
    margin-top: -250px;                 
    padding: 10px;
    border: 2px solid #FFF;
    background: #EEE;
    z-index:1182;
    overflow:visible;
}</style>

</head>

<body bgcolor="#6989DC" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000" onload="fillCategory();">

<div id="light" class="light">
	<table>
		<tr>
			<td>
				<b>
					Credits :
				</b>
			</td>
		</tr>
		<tr>
			<td id='desc_credits' name='desc_credits'>
			
			</td>
		</tr>

		<br>
		<tr>
			<td>
				<b>
					<br>Course Code :
				</b>
			</td>
		</tr>
		<tr>
			<td id='desc_code' name='desc_code'>
			</td>
		</tr>
		<tr>
			<td>
				<b>
					<br>Elective name :
				</b>
			</td>
		</tr>
		<tr>
			<td id='desc_electives' name='desc_electives'>
			</td>
		</tr>
		<tr>
			<td>
				<b>
					<br>Syllabus :<br>
				</b>
			</td>
		</tr>
		<tr>
			<td id='desc_syllabus' name='desc_syllabus'>
			</td>
		</tr>	
		<tr>
			<td>
				<b>
					<br>Texts :<br>
				</b>
			</td>
		</tr>
		<tr>
			<td id='desc_texts' name='desc_texts'>
				
			</td>
		</tr>
		<tr>
			<td>
				<b>
					<br>References :<br>
				</b>
			</td>
		</tr>
		<tr>
			<td id='desc_reference' name='desc_reference'>asjdgahdgsh
			</td>
		</tr>


	</table>


</div>
<div id="fade" onmouseover="lightbox_close();"></div> 

<?php 
$name='naman kansal';
$rollno="120103044";?>
<form name="drop_list" action="submitted.php" method="POST" >
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
		<input style="width: 97%;" type="text" name='name' id='name' value='<?php echo $name; ?>' readonly />
		
	</td>
</tr>



<tr>
	<td align="center">
		<label ><b>Enter Batch:</b></label>
	</td>

	<td >
		<SELECT  NAME="Category" onChange="SelectSubCat();" >
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
<input type='submit' action='submitted.php' method='POST' name='SubmitElectives' id='SubmitElectives' value='Submit'/>
</div>
<?php 
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
				//echo "<script>alert('".$bool."');</script>";
		
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

		
		}

	}
}	

?>


</form>


<?php
//require 'description.php';

require 'connect.inc.php';
$query_batch_inc="SELECT DISTINCT Batch from electives_list WHERE 1 ORDER BY Batch,Elective_code";
if($query_batch_inc_run=mysql_query($query_batch_inc))
{


echo "
<div align='center' id='des_div' name='des_div'><br><br><br>
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
				<td width='60%' name='subcat_".$batch_row_value."".$elective_value."' id='subcat_".$batch_row_value."".$elective_value."'><a href=\"#\"    onmouseover=\"lightbox_open('".$elective_value."','".$elective_code_value."','".$elective_credits."','".$elective_syllabus."','".$elective_texts."','".$elective_reference."');\">".$elective_value."</a></td>
				
				
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
</body>

</html>
