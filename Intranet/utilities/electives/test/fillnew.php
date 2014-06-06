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

$q1=mysql_query("SELECT DISTINCT Batch from electives_list");
echo mysql_error();
while($nt1=mysql_fetch_array($q1)){
echo "addOption(document.drop_list.Category, '$nt1[Batch]', '$nt1[Batch]');";
}// end of while
?>
} // end of JS function

function SelectSubCat(){
// ON or after selection of category this function will work

removeAllOptions(document.drop_list.SubCat);
addOption(document.drop_list.SubCat, "", "Select", "");

// Collect all element of subcategory for various cat_id 

<?php
// let us collect all cat_id and then collect all subcategory for each cat_id
$q2=mysql_query("SELECT DISTINCT Batch  from electives_list");
// In the above query you can collect cat_id from category table also. 
while($nt2=mysql_fetch_array($q2)){
//echo "$nt2[cat_id]";
echo "if(document.drop_list.Category.value == '$nt2[Batch]'){";
$q3=mysql_query("SELECT Electives from electives_list where Batch='$nt2[Batch]'");
while($nt3=mysql_fetch_array($q3)){
echo "addOption(document.drop_list.SubCat,'$nt3[Electives]', '$nt3[Electives]');";


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

function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                
                {
                    table.deleteRow(0);
                   
                    i--;
                }
 
 
            }
            }catch(e) {
                alert(e);
            }
        }


</script>
</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000" onload="fillCategory();">
<?php 
$name="subhojeet";
$rollno="120101086";?>
<form name="drop_list" action="fillnew.php" method="POST" >
<div  align='center'>
<table id='filltable' name='filltable' width='60%' align='center' border='3' cellspacing="3" cellpadding="3" BORDERCOLOR="#006E2E" bgcolor="#C3D9FF">		
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
		<SELECT id="SubCat" NAME="SubCat">
			<Option value="">Select</option>
		</SELECT>
	</td>
</tr>
</table>
<input type='submit' action='fillnew.php' method='POST' name='SubmitElectives' id='SubmitElectives' value='Submit'/>
</div>
</form>

</body>

</html>
