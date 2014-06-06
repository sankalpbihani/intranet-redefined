<!DOCTYPE html >
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style2.css' />
	  <link href="Site.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
	
	
	<script src="/guest2/calendar6/js/jq.js" type="text/javascript"></script>
    <link href="/guest2/calendar6/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="/guest2/calendar6/js/jquery-1.10.2.js"></script>
    <script src="/guest2/calendar6/js/jquery-ui-1.10.4.custom.js"></script>
	
	<script>
	 $(function() {
		$( "#datepicker1" ).datepicker({ dateFormat: 'dd/mm/yy' }).val();
        $( "#datepicker1" ).datepicker({
            inline: true
        });
	});
	</script>
  <script>
   $(function() {
    $( "#datepicker2" ).datepicker({ dateFormat: 'dd/mm/yy' }).val();
     $( "#datepicker2" ).datepicker({
            inline: true
        });
  });
  </script>
</head>



<style>
body {background-image:url("aps.jpg");}

</style>
<body>
<div id="wrapperHeader">
    <div id="header">
             <img src="heading2.png"   alt="logo" />
    </div> 
</div>


<div id="form">
    <form   action="booked.php" method="POST">
   
    <div id="stime">Start Date: <input id="datepicker1" type="text" name="sdate" value="Choose date"></div></br>  </br></br>
    <div id="etime">End Date: <input id="datepicker2" type="text" name="edate" value="Choose date"></div> </br></br></br>
	</form>
	

    </div>
</body>
</html> 