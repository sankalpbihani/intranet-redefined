<?php

session_start();
if((isset($_SESSION['logged_in']))&&(isset($_SESSION['user_type']))&&(isset($_SESSION['user_nm']))&&(isset($_SESSION['name'])))
{$loggedin=$_SESSION['logged_in'];
$usertype=$_SESSION['user_type'];
$name=$_SESSION['user_nm'];

$username=$_SESSION['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Electives</title>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
<link rel='stylesheet' type='text/css' href='styles.css' />
<script src='jquery-1.11.0.js'></script>
<script type='text/javascript' src='menu_jquery.js'></script>

	
<script type="text/javascript" src="jquery-1.11.0.js"> </script>
<script type="text/javascript">
$(document).ready(function () {

// hide #back-top first
$("#back-top").hide();

// fade in #back-top
$(function () {
$(window).scroll(function () {
if ($(this).scrollTop() > 100) {
$('#back-top').fadeIn();
} else {
$('#back-top').fadeOut();
}
});
// scroll body to 0px on click
$('#back-top a').click(function () {
$('body,html').animate({
scrollTop: 0
}, 800);
return false;
});
});

});
</script>


<style type="text/css">
body {
font: .88em/150% Arial, Helvetica, sans-serif;
margin: 30px auto;
}
#pagewrap {
margin: 0 auto;
width: 600px;
padding-left: 150px;
position: relative;
}
/*Back to top button*/
#back-top {
position: fixed;
bottom: 30px;
margin-left: 800px;
}
#back-top a {
width: 108px;
display: block;
text-align: center;
font: 11px/100% Arial, Helvetica, sans-serif;
text-transform: uppercase;
text-decoration: none;
color: #1ABC9C;
/* background color transition */
-webkit-transition: 1s;
-moz-transition: 1s;
transition: 1s;
}
#back-top a:hover {
color: #000;
}
/* arrow icon (span tag) */
#back-top span {
width: 70px;
height: 70px;
display: block;

margin-bottom: 7px;
background: #ddd url(uparrow.jpg) no-repeat center center;
background-size: 100%;
/* rounded corners */
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
/* background color transition */
-webkit-transition: 1s;
-moz-transition: 1s;
transition: 1s;
}
#back-top a:hover span {
background-color: #777;
}
</style>
	
	
	<script type="text/javascript" >



$(".edit_the_entered").click(function(){
    $(".back").click(); 
    return false;
});
    
    
	function checkform(){
	   
		var batch=document.getElementById('edit_batch').value;
		var elective=document.getElementById('edit_Elective_name').value;
		var code=document.getElementById('edit_Elective_code').value;
		var credits=document.getElementById('edit_credits').value;
	    if(batch=='')
	    {
	    alert('Please provide new batch name');
	    return false;
	    
	    }
	      if(elective=='')
	    {
	    alert('Please provide new course name');
	    return false;
	    
	    }
	      if(code=='')
	    {
	    alert('Please provide new course code');
	    return false;
	    
	    }
	      if(credits=='')
	    {
	    alert('Please provide new credits');
	    return false;
	    
	    }
	    
	    
	     
	
	return true;
	}
		
	function Hideeditform(){

		document.getElementById("form_edit").style.display="none";
		document.getElementById("tableform").style.display="none";
		document.getElementById("back").clicked=true;

	//	alert("andar to aaya tha");


	}
	function showeditform(editid){
		document.getElementById("tableform").style.display="none";
		
		document.getElementById("form_edit").style.display="inline-block";
		document.getElementById("editform_div").align="center";
		document.getElementById("edittable").align="center";
		//document.getElementById("edit_batch").innerHTML="kam kiya";//document.getElementById("");
		//alert("kam kya");
		var indexbatch= "edithidden_batch"+ editid;
		//alert(index);
		document.getElementById("labelbatch").innerHTML=document.getElementById(indexbatch).value;
		var indexelective= "edithidden_Electives"+editid;

		document.getElementById("labelelective").innerHTML=document.getElementById(indexelective).value;
		var indexelectivecode= "edithidden_Elective_code"+editid;
		document.getElementById("labelelectivecode").innerHTML=document.getElementById(indexelectivecode).value;
		var indexcredits= "edithidden_credits"+ editid;
		document.getElementById("labelcredits").innerHTML=document.getElementById(indexcredits).value;
			
		var indexreference="edithidden_reference"+ editid;
		document.getElementById("edit_reference").value=document.getElementById(indexreference).value;
		var indexsyllabus="edithidden_syllabus"+ editid;
		document.getElementById("edit_syllabus").value=document.getElementById(indexsyllabus).value;
		//document.getElementById("new_syllabus").value=document.getElementById(indexsyllabus).value;
		var indextexts="edithidden_texts"+ editid;
		document.getElementById("edit_texts").value=document.getElementById(indextexts).value;
		
		
		document.getElementById("edithidden2_batch").value=document.getElementById(indexbatch).value;

		document.getElementById("edithidden2_Electives").value=document.getElementById(indexelective).value;

		document.getElementById("edithidden2_Elective_code").value=document.getElementById(indexelectivecode).value;
		


	} 
	

	function hideeditform(){


		document.getElementById("form_edit").style.display="none";
		
	}

	function reload(){


		window.location.reload();
	}
	</script>


	<style type="text/css">

.editbutton{
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding:1px 25px; /*add some padding to the inside of the button*/
background:#35b128; /*the colour of the button*/
border:1px solid #33842a; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
color:#f3f3f3;
font-size:1.1em;
}
/***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***
.editbutton:hover,.editbutton:focus{
background-color :#399630; /*make the background a little darker*/
/*reduce the drop shadow size to give a pushed button effect*/
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}

.blue th{
  background:#4865AF;
}





tbody tr:nth-child(odd){
  background:#ECF0F1;
}

tbody tr:hover{
background:#08298A;
  color:#FFFFFF;
}





	</style>

</head>

<body id ='top' bgcolor="#4865AF">
 
 <div id='webmail' align='right'><label>You are logged in as <?php Echo $name;?>@iitg.ernet.in</label></div>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='http://intranet.iitg.ernet.in'><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Electives</span></a>
      <ul>
         <li><a href='../viewall/viewall.php'><span>View Filled Choices</span></a></li>
         
         <li><a href='../Addelective/Add_Electives.php'><span>Add Elective</span></a></li>
         <li><a href='../Deleteelective/Delete_Elective.php'><span>Delete Elective</span></a></li>
		 <li class='last'><a href='../Editelective/Edit_Admin.php'><span>Edit Electives</span></a></li>
      </ul>
   </li>
  
   
</ul>
</div>
<h3>Search/Select Electives to Edit</h3>
 
 
 
<div id="pagewrap">

<div ></div>
<p id="back-top">
<a href="#top"><span></span></a>
</p>
</div>
 
 <form  id="tableform" method='POST'>
	
            <input type='text' id='searchedit' name='searchedit'/>
			
			<input class="editbutton" type='submit' name='btnsearchedit' id='btnsearchedit' value='Search'>
			
			<input class="editbutton" action='Edit_Admin.php' type='submit' name='viewall' id='viewall' value="View all Electives" />
			





<?php 
require "connect.inc.php";
//echo "line";
if(isset($_POST['viewall'])|| isset($_POST['btnsearchedit']))
{


if(isset($_POST['viewall'])){
	$query_view_all_edit="SELECT Batch, Electives,Elective_code,credits,syllabus,texts,reference FROM electives_list WHERE 1 ORDER BY Batch";
	}
	else if( isset($_POST['btnsearchedit'])){
		$search=$_POST['searchedit'];
		if(!empty($search))
		{
		$query_view_all_edit="SELECT Batch, Electives,Elective_code,credits,syllabus,texts,reference FROM electives_list WHERE LOWER(Batch) Like LOWER('%".$search."%') || LOWER(Elective_code) LIKE LOWER('%".$search."%') || LOWER(Electives) LIKE LOWER('%".$search."%') ORDER BY Batch";
		//echo $query_view_all;
		}
		else{
		
		echo "<br>Can't search for blank field.	Please Enter a Search Item.";}
	}


if(isset($_POST['viewall']) || (isset($_POST['btnsearchedit']) && !empty($search)))
	{
if($query_viewall_run_edit=mysql_query($query_view_all_edit))
{	
	if(mysql_num_rows($query_viewall_run_edit)>0)
	{ 

//				echo mysql_num_rows($query_viewall_run_edit);


			 echo "<table class='blue' border=\"3\" align=\"center\" cellspacing=\"5\" BORDERCOLOR=\"#9F2800\" bgcolor=\"#1ABC9C\">";
			//echo "success";
			echo "<tr>
					<!--<th>Select</th>-->
				  	
				  	<th>Batch</th>
				 	 <th>Electives name</th>
				 	 <th>Elective code</th>
					 <th>Credits</th>
					 <th>Syllabus</th>
					 <th>Texts</th>
					 <th>References</th>
				 	 <th>Edit</th>
				  </tr>";
				  $editid=0;
				while($query_allrow=mysql_fetch_assoc($query_viewall_run_edit))
				{ 
					
					$edit_Batch[$editid]=$query_allrow['Batch'];
					$edit_Electives[$editid]=$query_allrow['Electives'];
					$edit_Elective_code[$editid]=$query_allrow['Elective_code'];
					$edit_credits[$editid]=$query_allrow['credits'];
					$edit_syllabus[$editid]=$query_allrow['syllabus'];
					$edit_texts[$editid]=$query_allrow['texts'];
					$edit_reference[$editid]=$query_allrow['reference'];

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
					<td>";
					echo $edit_credits[$editid];
					echo "</td>
					<td>";
					echo $edit_syllabus[$editid];
					echo "</td>
					<td>";
					echo $edit_texts[$editid];
					echo "</td>
					<td>";
					echo $edit_reference[$editid];
					echo "</td>";
					
					echo "<td><input  type=\"hidden\" name='edithidden_batch".$editid."' id='edithidden_batch".$editid."' value='".$edit_Batch[$editid]."'/>
					<input  type=\"hidden\" name='edithidden_Electives".$editid."' id='edithidden_Electives".$editid."' value='".$edit_Electives[$editid]."'/>
					<input type=\"hidden\" name='edithidden_Elective_code".$editid."' id='edithidden_Elective_code".$editid."' value= '".$edit_Elective_code[$editid]."'/>
					
					<input  type=\"hidden\" name='edithidden_credits".$editid."' id='edithidden_credits".$editid."' value='".$edit_credits[$editid]."'/>
					<input  type=\"hidden\" name='edithidden_syllabus".$editid."' id='edithidden_syllabus".$editid."' value='".$edit_syllabus[$editid]."'/>
					<input  type=\"hidden\" name='edithidden_texts".$editid."' id='edithidden_texts".$editid."' value='".$edit_texts[$editid]."'/>
					<input  type=\"hidden\" name='edithidden_reference".$editid."' id='edithidden_reference".$editid."' value='".$edit_reference[$editid]."'/>
					
					
					<!--<input  type=\"submit\" name='edit".$editid."' id='edit".$editid."' value=\"Edit\"  >-->
					<input class=\"editbutton\" type='button' id='\"button\"".$editid."' name='button".$editid."' onclick=\"showeditform(".$editid.")\"; value=\"Edit\"/>
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
	else{echo "<br>Sorry..No relevant field found!!";}
}
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

				echo "<form action=\"Edit_Admin.php\" method='POST'  onSubmit='return checkform()'; id=\"form_edit\" align=\"center\" style=\"display:none\" >";
		echo "<div  align=\"center\" id=\"editform_div\">
			 <table class='blue' id=\"edittable\" align ='center' border=''3' cellspacing=\"5\" BORDERCOLOR=\"#9F2800\" bgcolor=\"#1ABC9C\">
			 <th colspan='2' align='center'>Edit Elective</th>
			 <tr>
			 	<td>
			 		<label>Old batch name:</label>
			 	</td>
			 	<td>
			 		<label id=\"labelbatch\"></label>
			 	</td>
			 </tr>


			 <tr>
					<td>
						<label>New Batch Name:
					</td>
					<td>
						<input action=\"Edit_Admin.php\" method='POST' type=\"text\" name=\"edit_batch\" id=\"edit_batch\"/></label>
					</td>
				</tr>

			 <tr>
			 	<td>
			 		<label >Old Elective name:</label>
			 	</td>
			 	<td>
			 		<label id=\"labelelective\"></label>
			 	</td>
			 </tr>


			 <tr>
				<td>
						<label>Elective name:
				</td>
				<td>
						<input action=\"Edit_Admin.php\" method='POST' type=\"text\" name=\"edit_Elective_name\" id=\"edit_Elective_name\"/></label>
				</td>
			</tr>


			 <tr>
			 	<td>
			 		<label>Old Elective code:</label>
			 	</td>
			 	<td>
			 		<label id=\"labelelectivecode\">";echo $_POST["edithidden_Elective_code".$i];echo"</label>
			 	</td>
			 </tr>

			 <tr>
					<td>
						<label>New Elective code:
					</td>
					<td>
						<input action=\"Edit_Admin.php\" method='POST' type=\"text\" name=\"edit_Elective_code\" id=\"edit_Elective_code\"/></label>
					</td>
				</tr>

			  <tr>
			 	<td>
			 		<label >Old Credit:</label>
			 	</td>
			 	<td>
			 		<label id=\"labelcredits\"></label>
			 	</td>
			 </tr>


			 <tr>
				<td>
						<label>Credits:
				</td>
				<td>
						<input action=\"Edit_Admin.php\" method='POST' type=\"text\" name=\"edit_credits\" id=\"edit_credits\"/></label>
				</td>
			</tr>
			 <tr>
			 	<td>
			 		<label >Syllabus:</label>
			 	</td>
			 	<!--<td>
			 		<input action=\"Edit_Admin.php\" method='POST' type=\"text\" name=\"edit_syllabus\" id=\"edit_syllabus\"/></label>
				</td>-->
				<td>
				<textarea  rows=\"6\" cols=\"100\" name=\"edit_syllabus\" id=\"edit_syllabus\" ></textarea>
				</td>
			 </tr>


			 
			  <tr>
			 	<td>
			 		<label >Texts:</label>
			 	</td>
			 	<td>
				<textarea  rows=\"6\" cols=\"100\" name=\"edit_texts\" id=\"edit_texts\" ></textarea>
				</td>
			 </tr>
			  <tr>
			 	<td>
			 		<label >References:</label>
			 	</td>
			 	<td>
				<textarea  rows=\"6\" cols=\"100\" name=\"edit_reference\" id=\"edit_reference\" ></textarea>
				</td>
				
			 </tr>
			 </table>
			 ";
			
		echo "</div>";
		echo "<div align='center' id='editbutton'>";
		echo "<input  class=\"editbutton\"align='center' action='Edit_Admin.php'  class-button' type='submit'  id='edit_the_entered' name='edit_the_entered'  value='Update' method='POST' />";
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

		echo "<input  type=\"hidden\" name='edithidden2_batch' id='edithidden2_batch' />
					<input  type=\"hidden\" name='edithidden2_Electives' id='edithidden2_Electives'/>
					<input type=\"hidden\" name='edithidden2_Elective_code' id='edithidden2_Elective_code' />";
		echo "</form>";
				
			
		if(isset($_POST['edit_the_entered']))
			{	$upd_batch_old=$_POST['edithidden2_batch'];
				$upd_Elective_old=$_POST['edithidden2_Electives'];
				$upd_Elective_code_old=$_POST['edithidden2_Elective_code'];
				$upd_batch_new=$_POST['edit_batch'];
				$upd_Elective_new=$_POST['edit_Elective_name'];
				$upd_Elective_code_new=$_POST['edit_Elective_code'];
				//$query_upd="UPDATE `electives_list` SET `Batch`='$upd_batch_new',`Electives`=$upd_Elective_new,`Elective_code`=$upd_Elective_code_new WHERE `Batch`='$upd_batch_old' && `Electives`='$upd_Elective_old' && `Elective_code`=$upd_Elective_code_old";
				/*echo $_POST['edit_batch'];
				echo $_POST['edit_Elective_name'];
				echo $_POST['edit_Elective_code'];
				echo $upd_batch_old;
				echo $upd_Elective_old;
				echo $upd_Elective_code_old;
				
			*/	
			//echo "<script>alert('".$_POST['edit_batch']."');</script>";
			
			//echo "<script>alert('".$_POST['edit_credits']."');</script>";
			//echo "<script>alert('".$_POST['edit_texts']."');</script>";
			//echo "<script>alert('".$_POST['edit_reference']."');</script>";
			//echo "<script>alert('".$_POST['edit_syllabus']."');</script>";
			//echo "<script>alert('".$_POST['edit_texts']."');</script>";
			//echo "<script>alert('".$_POST['edit_reference']."');</script>";
				$query_upd="UPDATE `electives_list` SET `Batch`='".$_POST['edit_batch']."',`Electives`='".$_POST['edit_Elective_name']."',`Elective_code`='".$_POST['edit_Elective_code']."', `credits`='".$_POST['edit_credits']."' ,`syllabus`='".$_POST['edit_syllabus']."' ,`texts`='".$_POST['edit_texts']."' ,`reference`='".$_POST['edit_reference']."' WHERE `Batch`='".$upd_batch_old."' && `Electives`='".$upd_Elective_old."' && `Elective_code`='".$upd_Elective_code_old."'";
				
				
			//echo $query_upd;
				if($query_upd_run=mysql_query($query_upd))
				{
					/*echo "
							<form action=\"Edit_Admin.php\" method='submit'>
					<input type='submit' id =\"back\" method='POST' action='Edit_Admin.php' class='button' value='Back'  />";
					echo "</form>";
					*/
					echo "Succesfully updated the entry with Batch=".$upd_batch_old.",Elective name=".$upd_Elective_old.", Elective code=".$upd_Elective_code_old." with Batch=".$_POST['edit_batch'].", Elective name=".$_POST['edit_Elective_name'].", Elective code=".$_POST['edit_Elective_code']."." ;
			




				}
			}

		

	}	
}


?>
</body>
</html>
