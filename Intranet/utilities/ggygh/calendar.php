<html>
<?php
    include '../header.php';
?>
<head>
  <title>Booking in SAC</title>
  <link href="site.css" rel="stylesheet">
   <link rel="stylesheet" href="../styles/layout.css" type="text/css" />
  <link href="style.css" rel="stylesheet">
  <link href="jquery-ui-1.10.4.custom.css" rel="stylesheet">        
	<style>
	     body{
	        background-image: url(back1.jpg);
	     }
	</style>
    <script src="jq.js" type="text/javascript"></script>
    <script src="jquery-ui-1.10.4.custom.js"></script>
    
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

    <script>
   $(function() {
    $( "#datepicker3" ).datepicker({ dateFormat: 'dd/mm/yy' }).val();
     $( "#datepicker3" ).datepicker({
            inline: true
        });
  });
  </script>

    <script>
    $(function() {
        $( "#datepicker4" ).datepicker({ dateFormat: 'dd/mm/yy' }).val();
        $( "#datepicker4" ).datepicker({
            inline: true
        });
    });
    </script>

</head>

<body  >
  


<!-- ####################################################################################################### -->

<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li ><a href="index.php">Home</a>
        <ul>
          <li><a href="index.html">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
      </li>
      <li class="active"><a href="index.php">SAC</a>
        <ul>
          <li><a href="rules.php">Rules</a></li>
          <li><a href="timing.php">Timing</a></li>
          <li><a href="pt.php">PT attendance</a></li>
          <li ><a href="nso.php">NSO attendance</a></li>
          <li ><a href="forms.php">FORMS</a></li>
          <li ><a href="resources.php">Resources</a></li>
          <li ><a href="calendar.php">Booking Hall</a></li>
          <li class="last"><a href="/contact/contactform.php">Contact US</a></li>
        </ul>
      </li>
      <li><a href="guest2/index.html">Guest House</a>
        <ul>
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Suspendisse in neque</a></li>
          <li class="last"><a href="#">Praesent et eros</a></li>
        </ul>
      </li>
      <li><a href="#">Our Services</a></li>
      <li class="last"><a href="#">Long Link Text</a></li>
    </ul>
  </div>
</div>

<!-- ####################################################################################################### -->
<div id="container">
    <div id="left">
        <form name="checkingform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateCheck();" method="POST">
            
            <strong>Check Date:</strong></br>  </br></br> 
            FROM: <input id="datepicker3" type="text" name="csdate" value="Choose date"></br>  </br>
            TO  :&nbsp&nbsp&nbsp&nbsp&nbsp<input id="datepicker4" type="text" name="cedate" value="Choose date"></br>  </br>
            Hall to be Checked
            <select name="chall">
                <option value="" disabled="disabled" selected="selected">Please select a Hall to Book</option>
                <option value="1">Dance Hall</option>
                <option value="2">Music Hall</option>
                <option value="3">Event Hall</option>
                <option value="4">Meditation Hall</option>
                <option value="5">Conference Hall</option>
            </select> </br></br>
            <input type="submit" name="check" value="Submit"/>   </br></br></br>
        </form>
        <p id="cerror"  ><font color=red>.</font></p>
    </div>


    <div id="middle">
        <strong>Suggestions-</strong>
    <?php
        function process($var){
            $var=implode('', array_reverse(explode('/', $var)));
            return $var;
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){               
            $chall=$csdate=$cedate="";
            include_once '../connect.php';
            $con=getConnected($host,$user,$pass,$db);
            if(isset($_POST['check'])){                
                if($_POST['chall']==1){
                    $chall="Dance Hall";
                } else if($_POST['chall']==2){
                    $chall="Music Hall";
                }else if($_POST['chall']==3){
                    $chall="Event Hall";
                }else if($_POST['chall']==4){
                    $chall="Meditation Hall";
                }else if($_POST['chall']==5){
                    $chall="Conference Hall";
                }
                $csdate=date($_POST['csdate']);
                $cedate=date($_POST['cedate']);
             
                if(process($csdate)<=process($cedate)){
                    $result = mysqli_query($con,"SELECT hallid,startdate,enddate,hallname,starttime,endtime FROM booking");
                    echo "</br>These are Already Booked!</br>";
                    while($row = mysqli_fetch_array($result)) {                           
                        if((  (process($csdate)<=process($row['startdate']) && process($row['startdate'])<=process($cedate)) || (process($csdate)<=process($row['enddate']) && process($row['enddate'])<=process($cedate))) && $chall==$row['hallname']){                    
                            echo "".$row['startdate']." to ".$row['enddate']." time from ".$row['starttime']." to ".$row['endtime']."</br>";
                        }  
                    }
                } else {
                    echo "End Time must be after start Timing!</br>";
                }
            }
            mysqli_close($con);

        }        
    ?>
    </div>


    <div id="bookform" >
        <form   name="bookingform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  onsubmit="return validateForm();" method="POST" >
            <strong>Fill Your Booking Details</strong></br></br></br>
            Start Date: <input id="datepicker1" type="text" name="sdate" value="Choose date"></br>  </br></br>
            End Date: <input id="datepicker2" type="text" name="edate" value="Choose date"> </br></br></br>
            Hall to be Booked
            <select name="hall">
                <option value="" disabled="disabled" selected="selected">Please select a Hall to Book</option>
                <option value="1">Dance Hall</option>
                <option value="2">Music Hall</option>
                <option value="3">Event Hall</option>
                <option value="4">Meditation Hall</option>
                <option value="5">Conference Hall</option>
            </select> </br></br></br></br>
            Start Time
            <select name="stime">
                <option value="" disabled="disabled" selected="selected">Start Time</option>
                <?php
                for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
                for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
                echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
                ?>
            </select>     </br></br></br>
            End Time
            <select name="etime">
                <option value="" disabled="disabled" selected="selected">End Time</option>
                <?php
                for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
                for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
                echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
                ?>
            </select>  </br></br></br>
            <input type="submit" name="bookform" value="Submit"/>   </br></br></br>
            <p id="error"  ><font color=red>.</font></p>
        </form>    
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){   
         
            
        $hall=$sdate=$edate=$stime=$etime=$hallid="";
        $i=0;
        include_once '../connect.php';
        $con=getConnected($host,$user,$pass,$db);
        if(isset($_POST['bookform'])){
            if($_POST['hall']==1){
                $hall="Dance Hall";
            } else if($_POST['hall']==2){
                $hall="Music Hall";
            }else if($_POST['hall']==3){
                $hall="Event Hall";
            }else if($_POST['hall']==4){
                $hall="Meditation Hall";
            }else if($_POST['hall']==5){
                $hall="Conference Hall";
            }
            $sdate=$_POST['sdate'];
            $edate=$_POST['edate'];
            $stime=$_POST['stime'];
            $etime=$_POST['etime'];   
        
        if($sdate<$edate || ($sdate==$edate && $etime>$stime)){
            $result = mysqli_query($con,"SELECT hallid,startdate,enddate,hallname,starttime,endtime FROM booking");

            while($row = mysqli_fetch_array($result)) {
                
                $hallid=$row['hallid'];
                if((  ($row['startdate']<$sdate && $row['enddate']>$sdate) || ($row['startdate']<$edate && $row['enddate']>$edate)) && $hall==$row['hallname']){                
                    echo "$hall is already booked for this timing! </br>";
                    $i=1;
                } else if($sdate==$row['enddate'] && $hall==$row['hallname'] ){
                    if($stime<$row['endtime']){
                        echo "$hall is already booked for this timing! </br>";
                        $i=1;
                    }
                } else if($edate==$row['startdate'] && $hall==$row['hallname']){
                    if($etime>$row['starttime']  && $i==0){
                        echo "$hall is already booked for this timing! </br>";
                        $i=1;
                    }
                }
            }
            if($i==0){
                mysqli_query($con,"INSERT INTO booking (startdate,enddate,hallname,starttime,endtime) VALUES('$sdate','$edate','$hall','$stime','$etime')");
            }
        } else {               
            $i=1;
            echo "*End Time must be greater than Start Time!\r\n";        
        }


        mysqli_close($con);
                  
        if($i==0){
            echo "You have booked. $hall from date $sdate  to  $edate \r\n";
        } 
        }
     }
    ?>
    </div>



</div>
     
    
<script type="text/javascript">
    function validateForm(){
    var sdate=document.forms["bookingform"]["sdate"].value;
    var edate=document.forms["bookingform"]["edate"].value;
    var hall=document.bookingform.hall;
    var stime=document.bookingform.stime;
    var etime=document.bookingform.etime;
    
    if (sdate=="Choose date" || edate=="Choose date" || (hall.options[hall.selectedIndex].value==='') || (stime.options[stime.selectedIndex].value==='') || (etime.options[etime.selectedIndex].value==='') ){
        
        document.getElementById('error').innerHTML="*Please Fill all the Details";        
        return false;

    } else{
        return true;
    }
}
</script>

<script type="text/javascript">
    function validateCheck(){
    var sdate=document.forms["checkingform"]["csdate"].value;
    var edate=document.forms["checkingform"]["cedate"].value;
    var hall=document.checkingform.chall;
    if (sdate=="Choose date" || edate=="Choose date"||(hall.options[hall.selectedIndex].value==='') ){
        
        document.getElementById('cerror').innerHTML="*Please Fill all the Details";        
        return false;

    } else{
        return true;
    }
}
</script>

</body>
</html>
