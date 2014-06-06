<!DOCTYPE html>
<html>
<head>
	<title></title>


	<script type="text/javascript">

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

	function lightbox_open()
	{
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
    background: #CCC;
    z-index:1182;
    overflow:visible;
}</style>
</head>
<body>
<a href="#" onclick="lightbox_open();">Open lightbox</a>
<div id="light">
	<table>
		<tr>
			<b>Credits :</b></tr>
			<tr id='desc_credits' name='desc_credits'>
		</tr><br>

		<br>
		<tr>
			<b>Course Code :</b></tr>
			<tr id='desc_code' name='desc_code'>
		</tr><br>
		<tr>
			<b><br>Elective name :</b></tr>
			<br><tr id='desc_electives' name='desc_electives'>
		</tr>
		
			<tr><br><b>Syllabus :<br></b></tr>
			<tr id='desc_syllabus' name='desc_syllabus'>
			</tr>
		<tr>
			<b><br>Texts :<br></b>
		</tr>
		<tr id='desc_texts' name='desc_texts'></tr>
		
		<tr>
			<b><br>References :<br></b></tr>
			<tr id='desc_reference' name='desc_reference'>
		</tr>


	</table>


</div>
<div id="fade" onClick="lightbox_close();"></div> 
</body>
</html>