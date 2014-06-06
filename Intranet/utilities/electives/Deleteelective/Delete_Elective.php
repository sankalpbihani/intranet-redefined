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
	<title>Delete Electives</title>


<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
<link rel='stylesheet' type='text/css' href='styles.css' />
<script src='jquery-1.11.0.js'></script>
<script type='text/javascript' src='menu_jquery.js'></script>


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
	
	function unselectallcheck(delid){
	for(var i=0;i<delid;i++)
		{
			//alert(i);
			var checkid="delete"+i;
		//alert(checkid);
		document.getElementById(checkid).checked=false;
		
		}
	
	}
	
	function toggleall(delid){
	for(var i=0;i<delid;i++)
		{
			
			var checkid="delete"+i;
		//alert(checkid);
		
		if(document.getElementById(checkid).checked==true)
			{document.getElementById(checkid).checked=false;}
		else 
			{document.getElementById(checkid).checked=true;}
			
		
		}
		
	}
	
	function selectrange(delid){
	
	var first=-1;
	var last=-1;
	for(var i=0;i<delid;i++)
		{
			
			var checkid="delete"+i;
		//alert(checkid);
		
		if(document.getElementById(checkid).checked==true && first==-1)
			{first=i;
			last=i;}
		else if(document.getElementById(checkid).checked==true && first != -1)
			{last=i;}
			
		}
		if(first!=-1){
		for(var selection=first;selection<=last;selection++)
			{selectid="delete"+selection;
			document.getElementById(selectid).checked=true
	
			}
		}
	
	}
	
	
	
	</script>
	
	
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
	
	
	<style type="text/css">


.custbut{
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
.custbut:hover,.custbut:focus{
background-color :#399630; /*make the background a little darker*/
/*reduce the drop shadow size to give a pushed button effect*/
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}

.blue th{
  background:#4865AF;
}

.purple{
  border:2px solid #9B59B6;
}

.purple th{
  background:#9B59B6;
}





tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#08298A;
  color:#FFFFFF;
}




	</style>
</head>
<body id='top' bgcolor="#4865AF">
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
<h3>Search/Select Electives to delete</h3>
 
 <div id="pagewrap">

<div ></div>
<p id="back-top">
<a href="#top"><span></span></a>
</p>
</div>
 
 
<?php
require "connect.inc.php";
//require "Delete_Selected_Viewall.inc.php";

echo "<form action='Delete_Elective.php' method='POST'>";
   
          
echo "<input type='text' id='searchdel' name='searchdel'/>
	<input class='custbut' type='submit' name='btnsearchdel' id='btnsearchdel' value='Search'>";
echo " <input class='custbut' type='submit' name='viewall' id='viewall' value=\"View all Electives\" />";

//this file is included for viewing all and delete selected electives
$del_Batch=array();
$del_Electives=array();
$del_Elective_code=array();



if(isset($_POST['viewall'])|| isset($_POST['btnsearchdel']))
	{

	if(isset($_POST['viewall'])){
	$query_view_all="SELECT Batch, Electives,Elective_code,credits,syllabus,texts,reference FROM electives_list WHERE 1 ORDER BY Batch";
	}
	else if( isset($_POST['btnsearchdel'])){
		$search=$_POST['searchdel'];
		if(!empty($search))
		{
		$query_view_all="SELECT Batch, Electives,Elective_code,credits,syllabus,texts,reference FROM electives_list WHERE LOWER(Batch) Like LOWER('%".$search."%') || LOWER(Elective_code) LIKE LOWER('%".$search."%') || LOWER(Electives) LIKE LOWER('%".$search."%') ORDER BY Batch";
		//echo $query_view_all;
		}
		else{
		
		echo "<br>Can't search for blank field.	Please Enter a Search Item.";}
	}
	if(isset($_POST['viewall']) || (isset($_POST['btnsearchdel']) && !empty($search)))
	{
	if($query_viewall_run=mysql_query($query_view_all))
		{if(mysql_num_rows($query_viewall_run)>0)
			{  echo "<table class='blue' border=\"3\" align=\"center\" cellspacing=\"5\" BORDERCOLOR=\"#9F2800\" bgcolor=\"#1ABC9C\">";
			//echo "success";
			echo "<tr>
					<th>Select</th>
				  	<th>Batch</th>
				 	 <th>Electives name</th>
				 	 <th>Elective code</th>
					 <th>Credits</th>
					 <th>Syllabus</th>
					 <th>Texts</th>
					 <th>References</th>
					 
				  </tr>";
				  $delid=0;
				while($query_allrow=mysql_fetch_assoc($query_viewall_run))
				{ 
					
					$del_Batch[$delid]=$query_allrow['Batch'];
					$del_Electives[$delid]=$query_allrow['Electives'];
					$del_Elective_code[$delid]=$query_allrow['Elective_code'];
					$del_credit[$delid]=$query_allrow['credits'];
					$del_syllabus[$delid]=$query_allrow['syllabus'];
					$del_texts[$delid]=$query_allrow['texts'];
					$del_reference[$delid]=$query_allrow['reference'];

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
					<td>";
					
					echo $del_credit[$delid];
					echo "</td>
					<td>";
					echo $del_syllabus[$delid];
					echo "</td>
					<td>";
					echo $del_texts[$delid];
					echo "</td>
					<td>";
					echo $del_reference[$delid];
					echo "</td>";
					
					
					echo "
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
				<input class='custbut' name=\"Select_all\" type=\"button\" class=\"button\" id=\"select_all\"  onclick=\"selectallcheck(".$delid.")\"; value=\"Select All\" />
				<input class='custbut' name=\"toggle_all\" type=\"button\" class=\"button\" id=\"toggle_all\"  onclick=\"toggleall(".$delid.")\"; value=\"Toggle All\" />
				<input class='custbut' name=\"select_range\" type=\"button\" class=\"button\" id=\"select_range\"  onclick=\"selectrange(".$delid.")\"; value=\"Select Range\" />
				
				<input class='custbut' name=\"unSelect_all\" type=\"button\" class=\"button\" id=\"unselect_all\"  onclick=\"unselectallcheck(".$delid.")\"; value=\"UnSelect All\" />
				<input class='custbut' action=\"Delete_Elective.php\" name=\"Delete\" type=\"submit\" class=\"button\" id=\"Delete\" value=\"Delete\" />
				</div>";

			}
			else
			{
			echo "<br>Sorry..No relevant entry found!!";
			}
		}

	}
	}

if(isset($_POST['Delete']))
{ $selected_boxes=0;
	
	$query_view_all="SELECT Batch, Electives,Elective_code FROM electives_list WHERE 1 ORDER BY Batch";
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
			{echo "<br>Successfully deleted the entry with Batch=".$Batch.", Elective name=".$Electives.", Elective code=".$Elective_code." ";}
			$selected_boxes++;
		}
	}
	
	if($selected_boxes==0)
	{
	echo "<script>alert('No entry selected');</script>";
	}
	
//echo "<br>".$selected_boxes;



}



echo "</form>";
?>


</body>
</html>
