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
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<link rel='stylesheet' type='text/css' href='styles.css' />
	<script src='jquery-1.11.0.js'></script>
	<script type='text/javascript' src='menu_jquery.js'></script>

	<title>Admin_Electives</title>

<style type="text/css">
	



.blue th{
  background:#4865AF;
}


.purple th{
  background:#4865AF;
}





tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#08298A;
  color:#FFFFFF;
}

.buttons{
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
/***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
.buttons:hover, .buttons:focus{
background-color :#399630; /*make the background a little darker*/
/*reduce the drop shadow size to give a pushed button effect*/
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}


</style>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"> </script>
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
</head>

<body  id ='top'>
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


<div id="pagewrap">

<div ></div>
<p id="back-top">
<a href="#top"><span></span></a>
</p>
</div>
<form action="Add_Electives.php" method="post" id="Form_Add Elective">
	<table class='purple' width='80%' border="3" align="center" cellspacing="3" BORDERCOLOR="#9F2800" bgcolor="#1ABC9C">
		<tr>
		<th colspan="2" align="center">Add New Elective</th>
		</tr>


		<tr>
			<td>
				<label>Programme :
			</td>
			<td>
				<select type="text" name="programme_name" id="programme_name" />
				<option value="Nothing">Select</option>
				<option value="B.tech/B.des">B.tech/B.des</option>
				<option value="M.tech/M.des">M.tech/M.des</option>
				</select>
				</label>
			</td><br>
		</tr>
		<tr>
			<td>
				<label>Year :
			</td>
			<td>
				<select type="text" name="year" id="year" />
				<option value="Nothing">Select</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				
				
				</select>
				<!--<input type="text" name="year" id="year" /></label>-->
			</td><br>
		</tr>
		<tr>
			<td>
				<label>Name of Elective :
			</td>
			<td>
				<input  type="text" name="new_Elective_name" id="new_elective_name" /></label>
			</td>
		</tr>
		<tr>
			<td>
				<label>Elective code :
			</td>
			<td>
				<input type="text" name="new_elective_code" id="new_elective_code" /></label>
			</td>
		</tr>
		<tr>
			<td>
				<label>Credits :
			</td>
			<td>
				<input type="text" name="new_credits" id="new_credits" /></label>
			</td>
		</tr>
		<tr>
			<td>
				<label>Syllabus :
			</td>
			<td>
				<textarea  rows="6" cols="100" name="new_syllabus" id="new_syllabus" ></textarea></label>
			</td>
		</tr>
		<tr>
			<td>
				<label>Texts :
			</td>
			<td>
				<textarea  rows="3" cols="100" name="new_texts" id="new_texts" ></textarea></label>
			</td>
		</tr>
		<tr>
			<td>
				<label>References :
			</td>
			<td>
				<textarea  rows="3" cols="100" name="new_reference" id="new_reference" ></textarea></label>
			</td>
		</tr>
	</table>

	<div align="center" id="btn">
		<input name="Add_Elective" type="submit" class="buttons" id="Add" value="Add" >
		<input name="Reset" id="Reset" type="reset" class="buttons" value="Reset">
	</div>
</form>







<?php
require "connect.inc.php";
require "Admin_Add_Elective.php";
//$batch_name=$_POST['batch_name'];
//$elective_name=$_POST['new_Elective_name']

/*echo $_POST['batch_name'];*?
/*echo$elective_name;
*/

//if(isset($_POST['programme_name'])



?>
<?php
require 'connect.inc.php';
$query_view_all_add="SELECT Batch, Electives,Elective_code,credits,syllabus,texts,reference FROM electives_list WHERE 1 ORDER BY Batch";

if($query_viewall_run_add=mysql_query($query_view_all_add))
{//echo "<script>alert('aaya');</script>";	
	if(mysql_num_rows($query_viewall_run_add)>0)
	{  echo "<div align='center'>
				<table class='blue' style=\"table-layout: auto; \"   border=\"3\" align=\"center\" cellspacing=\"5\" BORDERCOLOR=\"#9F2800\" bgcolor=\"#1ABC9C\">";
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
				 	 
				  </tr>";
				  $editid=0;
				while($query_allrow=mysql_fetch_assoc($query_viewall_run_add))
				{ 
					
					$edit_Batch[$editid]=$query_allrow['Batch'];
					$edit_Electives[$editid]=$query_allrow['Electives'];
					$edit_Elective_code[$editid]=$query_allrow['Elective_code'];
					$edit_credits[$editid]=$query_allrow['credits'];
					$edit_syllabus[$editid]=$query_allrow['syllabus'];
					$edit_texts[$editid]=$query_allrow['texts'];
					$edit_references[$editid]=$query_allrow['reference'];
				echo "
				<tr>
                   
					
					<td style=\"width: 15px; \">";
					echo $edit_Batch[$editid];
					echo "</td>
					<td style=\"width: 25px; \">";
					echo $edit_Electives[$editid];
					echo "</td>
					<td style=\"width: 5px; \">";
					echo $edit_Elective_code[$editid];
					echo "</td>
					<td style=\"width: 15px; \">";
					echo $edit_credits[$editid];
					echo "</td>
					<td style=\"width: 1000px; word-wrap: break-word\">";
					echo $edit_syllabus[$editid];
					echo "</td>
					<td>";
					echo $edit_texts[$editid];
					echo "</td>
					<td>";
					echo $edit_references[$editid];
					echo "</td>
				</tr>";
				
				
				$editid++;
				}
				echo "</table>
				</div>";
	}
}

?>

</body>
</html>