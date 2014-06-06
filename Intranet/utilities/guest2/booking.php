<!DOCTYPE html >
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style2.css' />
	  <link href="Site.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
	
	
	<script src="calendar6/js/jq.js" type="text/javascript"></script>
    <link href="calendar6/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="calendar6/js/jquery-1.10.2.js"></script>
    <script src="calendar6/js/jquery-ui-1.10.4.custom.js"></script>
	
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
body {background-image:url("Booking.jpg");}



</style>
<body>
<div id="wrapperHeader">
    <div id="header">
             <img src="heading2.png"   alt="logo" />
    </div> 
</div>


<div id="form">
    <form   action="booked.php" method="POST">
    
	</br></br>
	<div id="content" style="background-color:WhiteSmoke  ;margin-left:240px;width:900px;height:450px">
	<div style="margin-left:300px;font-family:Georgia;font-size:20px;color:darkgreen">
	
	Name of Guest: <input type="text" name="name" value style="text-shadow:  2px 2px 2px 0px"</br></br></br></br></br>
	Relationship With Student: <input type="text" name="rel" value=""></br></br></br></br>
    <div id="stime">Check-In: <input id="datepicker1" type="text" name="sdate" value=" "></div></br></br></br>
    <div id="etime">Check-Out: <input id="datepicker2" type="text" name="edate" value=" "></div></br></br></br>

	<input type="submit" name="bookform2" value="Check Availability" style="background-color:lightorange;font-size:18px;font-family:Georgia"></br></br></br></br>
	<input type="submit" name="bookform" value="Book Now" font="20px" style="background-color:lightorange;font-size:18px;font-family:Georgia"></br></br></br></br>
	
	</div>
	</div>
	</form>
	</br></br></br>
	
	
	

    </div>
</body>
</html> 