
<html>
<head>
	
	<title>Elective Enlistment- IIT Guwahati</title>
    <script language="javascript" type="text/javascript">
    
	/*function redirect(URL)
     {
       document.location=URL;
       return false;
     }*/
	
	function letternumber(e)
	{
	var key;
	var keychar;
	if (window.even t)
	key = window.event.keyCode;
	else if (e)
	else
	return true;
	keychar = String.fromCharCode(key);
	keychar = keychar.toLowerCase();
	// control keys
	if ((key==null) || (key==0) || (key==9) || (key==13) || (key==27) )
	return true;
	// alphas and numbers
	else if (((" abcdefghijklmnopqrstuvwxyz.").indexOf(keychar) > -1))
	return true;
	else
	return false;
	}


function populateCourseName(cseCourseID)
	{
		cseCourseName=document.getElementById('courseName');
		if(!cseCourseName){return;}			
		var menuItems=new Array();
		menuItems['BT 2013'] = ['','HS 214','HS 221','HS 229','HS 230','HS 233','HS 235','HS 236'];
		menuItems['BT 2012'] = ['','HS 305','HS 306','HS 309','HS 310','HS 315','HS 321','HS 322'];

		cseCourseName.options.length=0;
		cur=menuItems[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName.options[i].text=cur[i];
			cseCourseName.options[i].value=cur[i];
		}
	}


function populateCourseName1(cseCourseID)
	{
		cseCourseName1=document.getElementById('courseName1');
		if(!cseCourseName1){return;}			
		var menuItems1=new Array();
		menuItems1['BT 2013'] = ['','HS 214','HS 221','HS 229','HS 230','HS 233','HS 235','HS 236'];
		menuItems1['BT 2012'] = ['','HS 305','HS 306','HS 309','HS 310','HS 315','HS 321','HS 322'];
	
		cseCourseName1.options.length=0;
		cur=menuItems1[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName1.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName1.options[i].text=cur[i];
			cseCourseName1.options[i].value=cur[i];
		}
	}
function populateCourseName2(cseCourseID)
	{
		cseCourseName2=document.getElementById('courseName2');
		if(!cseCourseName2){return;}			
		var menuItems2=new Array();
		menuItems2['BT 2013'] = ['','HS 214','HS 221','HS 229','HS 230','HS 233','HS 235','HS 236'];
		menuItems2['BT 2012'] = ['','HS 305','HS 306','HS 309','HS 310','HS 315','HS 321','HS 322'];
	
		cseCourseName2.options.length=0;
		cur=menuItems2[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName2.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName2.options[i].text=cur[i];
			cseCourseName2.options[i].value=cur[i];
		}
	}
function populateCourseName3(cseCourseID)
	{
		cseCourseName3=document.getElementById('courseName3');
		if(!cseCourseName3){return;}			
		var menuItems3=new Array();
		menuItems3['BT 2013'] = ['','HS 214','HS 221','HS 229','HS 230','HS 233','HS 235','HS 236'];
		menuItems3['BT 2012'] = ['','HS 305','HS 306','HS 309','HS 310','HS 315','HS 321','HS 322'];
	
		cseCourseName3.options.length=0;
		cur=menuItems3[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName3.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName3.options[i].text=cur[i];
			cseCourseName3.options[i].value=cur[i];
		}
	}
function populateCourseName4(cseCourseID)
	{
		cseCourseName4=document.getElementById('courseName4');
		if(!cseCourseName4){return;}			
		var menuItems4=new Array();
		menuItems4['BT 2013'] = ['','HS 214','HS 221','HS 229','HS 230','HS 233','HS 235','HS 236'];
		menuItems4['BT 2012'] = ['','HS 305','HS 306','HS 309','HS 310','HS 315','HS 321','HS 322'];
	
		cseCourseName4.options.length=0;
		cur=menuItems4[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName4.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName4.options[i].text=cur[i];
			cseCourseName4.options[i].value=cur[i];
		}
	}
function populateCourseName5(cseCourseID)
	{
		cseCourseName5=document.getElementById('courseName5');
		if(!cseCourseName5){return;}			
		var menuItems5=new Array();
		menuItems5['BT 2013'] = ['','HS 214','HS 221','HS 229','HS 230','HS 233','HS 235','HS 236'];
		menuItems5['BT 2012'] = ['','HS 305','HS 306','HS 309','HS 310','HS 315','HS 321','HS 322'];
	
		cseCourseName5.options.length=0;
		cur=menuItems5[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName5.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName5.options[i].text=cur[i];
			cseCourseName5.options[i].value=cur[i];
		}
	}
function populateCourseName6(cseCourseID)
	{
		cseCourseName6=document.getElementById('courseName6');
		if(!cseCourseName6){return;}			
		var menuItems6=new Array();
		menuItems6['BT 2013'] = ['','HS 214','HS 221','HS 229','HS 230','HS 233','HS 235','HS 236'];
		menuItems6['BT 2012'] = ['','HS 305','HS 306','HS 309','HS 310','HS 315','HS 321','HS 322'];
	
		cseCourseName6.options.length=0;
		cur=menuItems6[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName6.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName6.options[i].text=cur[i];
			cseCourseName6.options[i].value=cur[i];
		}
	}

/**function populateCourseName7(cseCourseID)
	{
				
		cseCourseName7=document.getElementById('courseName7');
		if(!cseCourseName7){return;}			
		var menuItems7=new Array();
		menuItems7['BT 2012'] = ['','HS 202','HS 203','HS 212','HS 216','HS 223','HS 224','HS 234','HS 237'];
		menuItems7['BT 2010'] = ['','HS 401','HS 403','HS 406','HS 410','HS 413','HS 419','HS 420','HS 422'];
	
		cseCourseName7.options.length=0;
		cur=menuItems7[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName7.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName7.options[i].text=cur[i];
			cseCourseName7.options[i].value=cur[i];
		}
		
	}
function populateCourseName8(cseCourseID)
	{
		cseCourseName8=document.getElementById('courseName8');
		if(!cseCourseName8){return;}			
		var menuItems8=new Array();
		menuItems8['BT 2011'] = ['','HS 203','HS 212','HS 214','HS 219','HS 222','HS 223','HS 224','HS 227','HS 234'];
		
	
		cseCourseName8.options.length=0;
		cur=menuItems8[cseCourseID.options[cseCourseID.selectedIndex].value];
		if(!cur){return;}
		cseCourseName8.options.length=cur.length;
		for(var i=0;i<cur.length;i++)
		{
			cseCourseName8.options[i].text=cur[i];
			cseCourseName8.options[i].value=cur[i];
		}
	}

*/

function Blank_TextField_Validator()
{ 				
   	
	if (Form1.rollno.value == ""  )
    {  alert("Roll no Cannot be blank!.");
       Form1.rollno.focus();
	   return (false); }  	

	if (Form1.names.value=="")
	{ alert("Name not entered");
	   Form1.names.focus();
	   return (false);}

	if (document.Form1.courseName.value==0)
	   { alert ("\ Option not selected for 1st Choice!\ At least three Options must be selected");
 	     document.Form1.courseName.focus();
             return (false);}
 	if (document.Form1.courseName1.value==0)
	   { alert ("\ Option not selected for 2nd Choice!\ At least three Options must be selected");
 	     document.Form1.courseName1.focus();
             return (false);}
	if (document.Form1.courseName2.value==0)
	   { alert ("\ Option not selected for 3rd Choice!\ At least three Options must be selected");
 	     document.Form1.courseName2.focus();
             return (false);}
	
// If text_name is not null continue processing
return (true);

}

 function checkDecimal(fieldIn,fieldNameIn,decMax,wholeMax)
{
	var fieldValue = fieldIn.value;
	var fieldName = fieldNameIn;
	var allValid = true;
	var decPoints = decMax +1;
	var wholePoints = wholeMax+1;
		    
	for (var i=0; i<fieldValue.length; i++){
	  	fieldValue = fieldValue.replace(',','A');
		fieldValue = fieldValue.replace(' ','A');
		fieldValue = fieldValue.replace('+','A');
		fieldValue = fieldValue.replace('-','A');
		fieldValue = fieldValue.replace('e','A');
		fieldValue = fieldValue.replace('E','A'); 
		break;
	}
	  
	var i = fieldValue.indexOf('.');
	var l = fieldValue.length;

	if (isNaN(fieldValue)) {
		alert("Please Enter Numeric Values In The \""+fieldName+"\" Field.");
		fieldIn.value = "";
		fieldIn.focus();
		allValid = false;
    }
	     
	if ((l-i)>decPoints && i!= -1){
		alert("Only One Decimal Can Be Entered \n for the \""+fieldName+"\" Field.");
		fieldIn.value = "";
		fieldIn.focus();
		allValid = false;
	}
	
	if (i == -1){
		if(l>wholeMax)
		{
			alert("More Than "+wholeMax+" Digits cannot be entered \n For The \""+fieldName+"\" Field.");
			fieldIn.value = "";
			fieldIn.focus();
			allValid = false;
		}
	}
	else {
		if(i>wholeMax){
			alert("More than "+wholeMax+" Digits Cannot be entered \n For The \""+fieldName+"\" Field.");
			fieldIn.value = "";
			fieldIn.focus();
			allValid = false;
		}
	}
 return (allValid);
 }
 function isFilled( fieldIn)
 {
 	if (fieldIn.value == ""){
		return false;
	}
	else {
		return true;
	}
 }
    </script>
	<style type="text/css">
		a:hover{color:FF0033; font-weight:; font-size:; background-color:CCCCFF; text-transform:;}
		a:link { color:none; }	
		a:visited { color:none; }
		a { text-decoration:none; }
	</style>
</head>
<body onLoad="focus(); Form1.Title.focus()">

<table align="center">
	<tr>
		<td>Welcome <b>subhojeet@iitg.ernet.in</b> to the Electives Enlistment form </td>
	</tr>
<tr><td><a href="logout" onclick="return redirect('./logout');">Logout</a></td></tr></table><hr style="COLOR: #000000; BACKGROUND-COLOR: #CCCCFF; BORDER: 0; HEIGHT: 2; WIDTH: 100%">
	<tr>
		<td>
			<form name="Form1" method="post" action="elistsave.php" onSubmit="return Blank_TextField_Validator()">
			<div align="center">	
				<p class="style4">Department of HSS, IITG </p>
					<table  border="3" cellpadding="3" cellspacing="3"  BORDERCOLOR="#006E2E" bgcolor="#C3D9FF">
						<tr>
							<td><span class="style24">Roll No</span></td>
							<td><input name="rollno" type="text" id="rollno"  size="10" value="120101086" readonly></td>
						</tr>
							<td><span class="style24">Name</span></td>
							<td><input name="names" type="text" maxlength="40" size="35" value="SUBHOJEET" readonly></td>
							<tr>
							<td><b>Enter Batch</b></td>
							<td><select name="courseID" id="courseID" onchange="populateCourseName(this);populateCourseName1(this);populateCourseName2(this);populateCourseName3(this);populateCourseName4(this);populateCourseName5(this);populateCourseName6(this);populateCourseName7(this)">
							<option></option>
							<option value="BT 2013">B.Tech/B.Des 2013</option>
							<option value="BT 2012">B.Tech/B.Des 2012</option>
							</select>
							</td>	
							</tr>
								<td><span class="style24">Elective Choice1</span></td>
								<td><select name="courseName" id="courseName">
								<option></option>
								</select>
								</td>
							</tr>
							<tr>
								<td><span class="style24">Elective Choice2</span></td>
								<td>	<select name="courseName1" id="courseName1">
									<option></option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span class="style24">Elective Choice3</span></td>
								<td>	<select name="courseName2" id="courseName2">
									<option></option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span class="style24">Elective Choice4</span></td>
								<td>	<select name="courseName3" id="courseName3">
									<option></option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span class="style24">Elective Choice5</span></td>
								<td>	<select name="courseName4" id="courseName4">
									<option></option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span class="style24">Elective Choice6</span></td>
								<td>	<select name="courseName5" id="courseName5">
									<option></option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span class="style24">Elective Choice7</span></td>
								<td>	<select name="courseName6" id="courseName6">
									<option></option>
									</select>
								</td>
							</tr>
							<!--
							<tr>
								<td><span class="style24">Elective Choice8</span></td>
								<td>	<select name="courseName7" id="courseName7">
									<option></option>
									</select>
								</td>
							</tr>		
							<tr>
								<td><span class="style24">Elective Choice9</span></td>
								<td>	<select name="courseName8" id="courseName8">
									<option></option>
									</select>
								</td>
							</tr>
							-->
						</td>
					</tr>
				</table>
		</div>
		<br>
		<br>
		<div align="center" class="teller_add_cust" id="btn">
		<input name="Submit" type="submit" class="button" id="Submit" value="Submit" >
		<input name="Submit2" type="reset" class="button" value="Reset">
		</div>
		</form>	
			
			<table align="center" width=90% border=1 cellpadding="3" cellspacing="3">
				<tr>
				<td colspan="3" align="center"><b>Details Syllabus </b></td>
				</tr>
				<tr>
				<td>
					<table align="center" border="1" cellpadding="3" cellspacing="3">
					<tr>
					<td colspan="4" align="center"><b>BTech/B.Des 2013</b></td>
					</tr>
					<tr>			
					<td><b>HS 214</b></td><td><a href="HSS_course/HS214.pdf" target="_new">INTRODUCTION TO CULTURAL STUDIES</a></td><td><b>HS 221</b></td><td><a href="HSS_course/HS221.pdf" target="_new">LANGUAGE, CULTURE AND COGNITION</a></td>
					</tr>
					<tr>
					<td><b>HS 229</b></td><td><a href="HSS_course/HS229.pdf" target="_new">Introduction to Psychology</a></td><td><b>HS 230</b></td><td><a href="HSS_course/HS230.pdf" target="_new">ECONOMIC THEORY: AN INTRODUCTION</a></td>
					</tr>
					<tr>
					<td><b>HS 233</b></td><td><a href="HSS_course/HS233.pdf" target="_new">Ethnic Conflict and Management </a></td><td><b>HS 235</b></td><td><a href="HSS_course/HS235.pdf" target="_new">History of Modern India</a></td>
					</tr>
					<tr>
					<td><b>HS 236</b></td><td><a href="HSS_course/HS236.pdf" target="_new">INTRODUCTION TO PHONETICS</a></td>
					</tr>

					<tr>
					<td colspan="4" align="center"><b>BTech/BDes 2012</b></td>
					</tr>
					<tr>
					<td><b>HS 305</b></td><td><a href="HSS_course/HS305.pdf" target="_new">HUMAN RESOURCE MANAGEMENT</a></td><td><b>HS 306</b></td><td><a href="HSS_course/HS306.pdf" target="_new">PHENOMENOLOGY AND ANALYTICAL PHILOSOPHY</a></td>
					</tr>
					<tr>
					<td><b>HS 309</b></td><td><a href="HSS_course/HS309.pdf" target="_new">CONTEMPORARY INDIAN LITERATURE IN ENGLISH</a></td><td><b>HS 310</b></td><td><a href="HSS_course/HS310.pdf" target="_new">CONCEPTS AND IDEOLOGIES IN SOCIAL LIFE</a></td>
					</tr>
					<tr>
					<td><b>HS 315</b></td><td><a href="HSS_course/HS315.pdf" target="_new">SOUND STRUCTURE OF LANGUAGE AND SPEECH ANALYSIS</a></td>
					<td><b>HS 321</b></td><td><a href="HSS_course/HS321.pdf" target="_new">Psychology of Health and Adjustment</a></td>
					</tr>
					<tr>
					<td><b>HS 322</b></td><td><a href="HSS_course/HS322.pdf" target="_new">INDUSTRIAL ORGANIZATION</a></td>
					</tr>
					</table> 
					</td>
				</tr>	
			</table>
</body>

<center><hr style="COLOR: #000000; BACKGROUND-COLOR: #CCCCFF; BORDER: 0; HEIGHT: 2; WIDTH: 100%"><font size="1" color="red"><u>Best viewed at 1024 x 768 Screen Resolution</u></font><br><font size="1"><strong>Developed & Maintained by: </strong></font> <font size="-3" color="darkblue">The Department of Computer Science & Engineering - IIT Guwahati</font> <font size="1"><b>Contact: </b></font><font size="-3" color="darkblue">mks@iitg.ernet.in</font><br><small>Last updated:  24 March 2014<br></center></body></html>