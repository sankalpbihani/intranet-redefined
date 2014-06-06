<!DOCTYPE html>
<html>
<?php

$edate=$sdate=$name=$rel="";
$i1=$i2=$i3=$i4=$i5=$i6=$i7=$i8=$i9=$i10=$i11=$i12=$i13=$i14=$i15=$i16=$i17=$i18=$i19=$i20=0;
$j1=$j2=$j3=$j4=$j5=$j6=$j7=$j8=$j9=$j10=$j11=$j12=$j13=$j14=$j15=$j16=$j17=$j18=$j19=$j20=0;
$n=0;
$i=0;
$count=20;
$con=mysqli_connect("localhost","kunal15595","jtmzk04484","apdemo");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

		
 if(isset($_POST['bookform']))
 {
	if($_POST['name']=='' || $_POST['rel']=='' || $_POST['sdate']=='' || $_POST['edate']=='') 
	{
		echo "<font color='green'>Please fill the empty field</font>";
		return ;
	}
	
	 $sdate=$_POST['sdate'];
      $edate=$_POST['edate'];
      $name=$_POST['name'];
      $rel=$_POST['rel'];
	  
	   function process($csdate){ $csdate=implode('', array_reverse(explode('/', $csdate))); return $csdate; }
	  
	  function process2($cedate){ $cedate=implode('', array_reverse(explode('/', $cedate))); return $cedate; }
 }
 
 
 if(isset($_POST['bookform2']))
 {	
	if($_POST['name']=='' || $_POST['rel']=='' || $_POST['sdate']=='' || $_POST['edate']=='') 
	{
		echo "<font color='green'>Please fill the empty field</font>";
		return ;
	}
	
	$sdate=date($_POST['sdate']);
      $edate=date($_POST['edate']);
      $name=$_POST['name'];
      $rel=$_POST['rel'];
	  
	  function process($csdate){ $csdate=implode('', array_reverse(explode('/', $csdate))); return $csdate; }
	  
	  function process2($cedate){ $cedate=implode('', array_reverse(explode('/', $cedate))); return $cedate; }
	  
	 // $sdate=date($_POST['sdate']);
	  //$edate=date($_POST['edate']);
	  
	  
	  if(process($sdate)>process2($edate))
	  {
			echo"<font color='green'>Start date must be less than equal to End date.\n</font>";
			return ;
	  }
	$search1=mysqli_query($con,"select start_date, end_date from room_1 ");
	
		
		
		
		while($row = mysqli_fetch_array($search1))
		{	
			$csdate=date($row['start_date']);
			$cedate=date($row['end_date']);
			
			
			if((process($sdate) >= process($csdate) && process($sdate) <= process($cedate)) || (process2($edate) >= process2($csdate) && process2($edate) <= process2($cedate)) || (process($sdate) <= process($csdate) && process($sdate) >= process($cedate)) || (process2($edate) <= process2($csdate) && process2($edate) >= process2($cedate)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 1 is booked from $csdate to $cedate<br></font>";
					$i1=1;
					$count=$count-1;
					
			}
		}
	
		$search2=mysqli_query($con,"select start_date, end_date from room_2 ");
		
		
		while($row = mysqli_fetch_array($search2))
		{
			$csdate2=date($row['start_date']);
			$cedate2=date($row['end_date']);
			
			if((process($sdate) >= process($csdate2) && process($sdate) <= process($cedate2)) || (process2($edate) >= process2($csdate2) && process2($edate) <= process2($cedate2)) || (process($sdate) <= process($csdate2) && process($sdate) >= process($cedate2)) || (process2($edate) <= process2($csdate2) && process2($edate) >= process2($cedate2)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 2 is booked from $csdate2 to $cedate2<br></font>";
					$i2=1;
					$count=$count-1;
					
					
			}
		}
		
			
	$search3=mysqli_query($con,"select start_date, end_date from room_3 ");
	
	
		while($row = mysqli_fetch_array($search3))
		{
			$csdate3=date($row['start_date']);
			$cedate3=date($row['end_date']);
			
			if((process($sdate) >= process($csdate3) && process($sdate) <= process($cedate3)) || (process2($edate) >= process2($csdate3) && process2($edate) <= process2($cedate3)) || (process($sdate) <= process($csdate3) && process($sdate) >= process($cedate3)) || (process2($edate) <= process2($csdate3) && process2($edate) >= process2($cedate3)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 3 is booked from $csdate3 to $cedate3<br></font>";
					$i3=1;
					$count=$count-1;
					
			}
		}
		
		$search4=mysqli_query($con,"select start_date, end_date from room_4 ");
		
		
		while($row = mysqli_fetch_array($search4))
		{
			$csdate4=date($row['start_date']);
			$cedate4=date($row['end_date']);
			
			if((process($sdate) >= process($csdate4) && process($sdate) <= process($cedate4)) || (process2($edate) >= process2($csdate4) && process2($edate) <= process2($cedate4)) || (process($sdate) <= process($csdate4) && process($sdate) >= process($cedate4)) || (process2($edate) <= process2($csdate4) && process2($edate) >= process2($cedate4)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 4 is booked from $csdate4 to $cedate4<br></font>";
					$i4=1;
					$count=$count-1;
					
			}
		}
		
		$search5=mysqli_query($con,"select start_date, end_date from room_5 ");
		
		while($row = mysqli_fetch_array($search5))
		{
			$csdate5=date($row['start_date']);
			$cedate5=date($row['end_date']);
			
			if((process($sdate) >= process($csdate5) && process($sdate) <= process($cedate5)) || (process2($edate) >= process2($csdate5) && process2($edate) <= process2($cedate5)) || (process($sdate) <= process($csdate5) && process($sdate) >= process($cedate5)) || (process2($edate) <= process2($csdate5) && process2($edate) >= process2($cedate5)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 5 is booked from $csdate5 to $cedate5<br></font>";
					$i5=1;
					$count=$count-1;
					
			}
		}
		
		$search6=mysqli_query($con,"select start_date, end_date from room_6 ");
		
		while($row = mysqli_fetch_array($search6))
		{
			$csdate6=date($row['start_date']);
			$cedate6=date($row['end_date']);
			
			if((process($sdate) >= process($csdate6) && process($sdate) <= process($cedate6)) || (process2($edate) >= process2($csdate6) && process2($edate) <= process2($cedate6)) || (process($sdate) <= process($csdate6) && process($sdate) >= process($cedate6)) || (process2($edate) <= process2($csdate6) && process2($edate) >= process2($cedate6)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 6 is booked from $csdate6 to $cedate6<br></font>";
					$i6=1;
					$count=$count-1;
					
			}
		}
		
		
		$search7=mysqli_query($con,"select start_date, end_date from room_7 ");
			
		while($row = mysqli_fetch_array($search7))
		{
			$csdate7=date($row['start_date']);
			$cedate7=date($row['end_date']);
			
			if((process($sdate) >= process($csdate7) && process($sdate) <= process($cedate7)) || (process2($edate) >= process2($csdate7) && process2($edate) <= process2($cedate7)) || (process($sdate) <= process($csdate7) && process($sdate) >= process($cedate7)) || (process2($edate) <= process2($csdate7) && process2($edate) >= process2($cedate7)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 7 is booked from $csdate7 to $cedate7<br></font>";
					$i7=1;
					$count=$count-1;
					
			}
		}
		
		
		$search8=mysqli_query($con,"select start_date, end_date from room_8 ");
		while($row = mysqli_fetch_array($search8))
		{
			$csdate8=date($row['start_date']);
			$cedate8=date($row['end_date']);
			
			if((process($sdate) >= process($csdate8) && process($sdate) <= process($cedate8)) || (process2($edate) >= process2($csdate8) && process2($edate) <= process2($cedate8)) || (process($sdate) <= process($csdate8) && process($sdate) >= process($cedate8)) || (process2($edate) <= process2($csdate8) && process2($edate) >= process2($cedate8)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 8 is booked from $csdate8 to $cedate8<br></font>";
					$i8=1;
					$count=$count-1;
					
			}
		}
		
		$search9=mysqli_query($con,"select start_date, end_date from room_9 ");
		while($row = mysqli_fetch_array($search9))
		{
			$csdate9=date($row['start_date']);
			$cedate9=date($row['end_date']);
			
			if((process($sdate) >= process($csdate9) && process($sdate) <= process($cedate9)) || (process2($edate) >= process2($csdate9) && process2($edate) <= process2($cedate9)) || (process($sdate) <= process($csdate9) && process($sdate) >= process($cedate9)) || (process2($edate) <= process2($csdate9) && process2($edate) >= process2($cedate9)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 9 is booked from $csdate9 to $cedate9<br></font>";
					$i9=1;
					$count=$count-1;
					
			}
		}
		$search10=mysqli_query($con,"select start_date, end_date from room_10 ");
		while($row = mysqli_fetch_array($search10))
		{
			$csdate10=date($row['start_date']);
			$cedate10=date($row['end_date']);
			
			if((process($sdate) >= process($csdate10) && process($sdate) <= process($cedate10)) || (process2($edate) >= process2($csdate10) && process2($edate) <= process2($cedate10)) || (process($sdate) <= process($csdate10) && process($sdate) >= process($cedate10)) || (process2($edate) <= process2($csdate10) && process2($edate) >= process2($cedate10)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 10 is booked from $csdate10 to $cedate10<br></font>";
					$i10=1;
					$count=$count-1;
					
			}
		}
		
		$search11=mysqli_query($con,"select start_date, end_date from room_11 ");
		while($row = mysqli_fetch_array($search11))
		{
			$csdate11=date($row['start_date']);
			$cedate11=date($row['end_date']);
			
			if((process($sdate) >= process($csdate11) && process($sdate) <= process($cedate11)) || (process2($edate) >= process2($csdate11) && process2($edate) <= process2($cedate11)) || (process($sdate) <= process($csdate11) && process($sdate) >= process($cedate11)) || (process2($edate) <= process2($csdate11) && process2($edate) >= process2($cedate11)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 11 is booked from $csdate11 to $cedate11<br></font>";
					$i11=1;
					$count=$count-1;
					
			}
		}
		
		$search12=mysqli_query($con,"select start_date, end_date from room_12 ");
		while($row = mysqli_fetch_array($search12))
		{
			$csdate12=date($row['start_date']);
			$cedate12=date($row['end_date']);
			
		if((process($sdate) >= process($csdate12) && process($sdate) <= process($cedate12)) || (process2($edate) >= process2($csdate12) && process2($edate) <= process2($cedate12)) || (process($sdate) <= process($csdate12) && process($sdate) >= process($cedate12)) || (process2($edate) <= process2($csdate12) && process2($edate) >= process2($cedate12)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 12 is booked from $csdate12 to $cedate12<br></font>";
					$i12=1;
					$count=$count-1;
					
			}
		}
	
		$search13=mysqli_query($con,"select start_date, end_date from room_13 ");
		while($row = mysqli_fetch_array($search13))
		{
				$csdate13=date($row['start_date']);
			$cedate13=date($row['end_date']);
			
		if((process($sdate) >= process($csdate13) && process($sdate) <= process($cedate13)) || (process2($edate) >= process2($csdate13) && process2($edate) <= process2($cedate13)) || (process($sdate) <= process($csdate13) && process($sdate) >= process($cedate13)) || (process2($edate) <= process2($csdate13) && process2($edate) >= process2($cedate13)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 13 is booked from $csdate13 to $cedate13<br></font>";
					$i13=1;
					$count=$count-1;
					
			}
		}
		
		$search14=mysqli_query($con,"select start_date, end_date from room_14 ");
		while($row = mysqli_fetch_array($search14))
		{
				$csdate14=date($row['start_date']);
			$cedate14=date($row['end_date']);
			
		if((process($sdate) >= process($csdate14) && process($sdate) <= process($cedate14)) || (process2($edate) >= process2($csdate14) && process2($edate) <= process2($cedate14)) || (process($sdate) <= process($csdate14) && process($sdate) >= process($cedate14)) || (process2($edate) <= process2($csdate14) && process2($edate) >= process2($cedate14)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 14 is booked from $csdate14 to $cedate14<br></font>";
					$i14=1;
					$count=$count-1;
					
			}
		}
		
		$search15=mysqli_query($con,"select start_date, end_date from room_15 ");
		while($row = mysqli_fetch_array($search15))
		{
				$csdate15=date($row['start_date']);
			$cedate15=date($row['end_date']);
			
		if((process($sdate) >= process($csdate15) && process($sdate) <= process($cedate15)) || (process2($edate) >= process2($csdate15) && process2($edate) <= process2($cedate15)) || (process($sdate) <= process($csdate15) && process($sdate) >= process($cedate15)) || (process2($edate) <= process2($csdate15) && process2($edate) >= process2($cedate15)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 15 is booked from $csdate15 to $cedate15<br></font>";
					$i15=1;
					$count=$count-1;
					
			}
		}
		
		$search16=mysqli_query($con,"select start_date, end_date from room_16 ");
		while($row = mysqli_fetch_array($search16))
		{
				$csdate16=date($row['start_date']);
			$cedate16=date($row['end_date']);
			
		if((process($sdate) >= process($csdate16) && process($sdate) <= process($cedate16)) || (process2($edate) >= process2($csdate16) && process2($edate) <= process2($cedate16)) || (process($sdate) <= process($csdate16) && process($sdate) >= process($cedate16)) || (process2($edate) <= process2($csdate16) && process2($edate) >= process2($cedate16)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 16 is booked from $csdate16 to $cedate16<br></font>";
					$i16=1;
					$count=$count-1;
					
			}
		}
		
		$search17=mysqli_query($con,"select start_date, end_date from room_17 ");
		while($row = mysqli_fetch_array($search17))
		{
				$csdate17=date($row['start_date']);
			$cedate17=date($row['end_date']);
			
		if((process($sdate) >= process($csdate17) && process($sdate) <= process($cedate17)) || (process2($edate) >= process2($csdate17) && process2($edate) <= process2($cedate17)) || (process($sdate) <= process($csdate17) && process($sdate) >= process($cedate17)) || (process2($edate) <= process2($csdate17) && process2($edate) >= process2($cedate17)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 17 is booked from $csdate17 to $cedate17<br></font>";
					$i17=1;
					$count=$count-1;
					
			}
		}
		
		$search18=mysqli_query($con,"select start_date, end_date from room_18 ");
		while($row = mysqli_fetch_array($search18))
		{
				$csdate18=date($row['start_date']);
			$cedate18=date($row['end_date']);
			
		if((process($sdate) >= process($csdate18) && process($sdate) <= process($cedate18)) || (process2($edate) >= process2($csdate18) && process2($edate) <= process2($cedate18)) || (process($sdate) <= process($csdate18) && process($sdate) >= process($cedate18)) || (process2($edate) <= process2($csdate18) && process2($edate) >= process2($cedate18)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 18 is booked from $csdate18 to $cedate18<br></font>";
					$i18=1;
					$count=$count-1;
					
			}
		}
		
		$search19=mysqli_query($con,"select start_date, end_date from room_19 ");
	while($row = mysqli_fetch_array($search19))
		{
				$csdate19=date($row['start_date']);
			$cedate19=date($row['end_date']);
			
		if((process($sdate) >= process($csdate19) && process($sdate) <= process($cedate19)) || (process2($edate) >= process2($csdate19) && process2($edate) <= process2($cedate19)) || (process($sdate) <= process($csdate19) && process($sdate) >= process($cedate19)) || (process2($edate) <= process2($csdate19) && process2($edate) >= process2($cedate19)))
			{
					//echo"Rooms not Available.\n";
					//echo'<script>alert("room 19 is booked from".$csdate19." to ".$cedate19);</script>';
					echo"<br><font color='green'>room 19 is booked from $csdate19 to $cedate19<br></font>";
					
					$i19=1;
					$count=$count-1;
					
			}
		}
		
		$search20=mysqli_query($con,"select start_date, end_date from room_20 ");
		while($row = mysqli_fetch_array($search20))
		{
				$csdate20=date($row['start_date']);
			$cedate20=date($row['end_date']);
			
				if((process($sdate) >= process($csdate20) && process($sdate) <= process($cedate20)) || (process2($edate) >= process2($csdate20) && process2($edate) <= process2($cedate20)) || (process($sdate) <= process($csdate20) && process($sdate) >= process($cedate20)) || (process2($edate) <= process2($csdate20) && process2($edate) >= process2($cedate20)))
			{
					//echo"Rooms not Available.\n";
					echo"<br><font color='green'>room 20 is booked from $csdate20 to $cedate20<br></font>";
					$i20=1;
					$count=$count-1;
					
			}
		}
		
		echo "<br><font color='red'>No. of room available is $count</font>";
			 mysqli_close($con);
			return;
		
}
 
 
 //$i=$sdate;
 
	//for($i = $sdate; $i <= $edate ;$i++)
	//{
	if($sdate>$edate)
	  {
			echo"<font color='green'>Start date must be less than equal to End date.\n</font>";
			return;
	  }
	$search1=mysqli_query($con,"select start_date, end_date from room_1 ");
		while($row = mysqli_fetch_array($search1))
		{
			$csdate=date($row['start_date']);
			$cedate=date($row['end_date']);
			
			if((process($sdate) >= process($csdate) && process($sdate) <= process($cedate)) || (process2($edate) >= process2($csdate) && process2($edate) <= process2($cedate)) || (process($sdate) <= process($csdate) && process($sdate) >= process($cedate)) || (process2($edate) <= process2($csdate) && process2($edate) >= process2($cedate)))
			{
					//echo"Rooms not Available.\n";
					$i1=1;
					$count=$count-1;
			}
		
		}
				if($i1==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_1(start_date,end_date) VALUES('$sdate','$edate')");
					 $j1=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
					 
					 
				}
		if($i1==1)
		{
				$search2=mysqli_query($con,"select start_date, end_date from room_2 ");
			while($row = mysqli_fetch_array($search2))
			{
					$csdate2=date($row['start_date']);
				$cedate2=date($row['end_date']);
			
			if((process($sdate) >= process($csdate2) && process($sdate) <= process($cedate2)) || (process2($edate) >= process2($csdate2) && process2($edate) <= process2($cedate2)) || (process($sdate) <= process($csdate2) && process($sdate) >= process($cedate2)) || (process2($edate) <= process2($csdate2) && process2($edate) >= process2($cedate2)))
			{
					//echo"Rooms not Available.\n";
					$i2=1;
					$count=$count-1;
			}
			}
				
				if($i2==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_2(start_date,end_date) VALUES('$sdate','$edate')");
					 $j2=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					  
				}
		}
		
		if($i1==1 && $i2==1)
		{
			$search3=mysqli_query($con,"select start_date, end_date from room_3 ");
			while($row = mysqli_fetch_array($search3))
			{
				$csdate3=date($row['start_date']);
				$cedate3=date($row['end_date']);
			
			if((process($sdate) >= process($csdate3) && process($sdate) <= process($cedate3)) || (process2($edate) >= process2($csdate3) && process2($edate) <= process2($cedate3)) || (process($sdate) <= process($csdate3) && process($sdate) >= process($cedate3)) || (process2($edate) <= process2($csdate3) && process2($edate) >= process2($cedate3)))
			{
					//echo"Rooms not Available.\n";
					$i3=1;
					$count=$count-1;
			}
			}
			
			if($i3==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_3(start_date,end_date) VALUES('$sdate','$edate')");
					 $j3=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					  
				}
		}
		if($i1==1 && $i2==1 && $i3==1)
		{
			$search4=mysqli_query($con,"select start_date, end_date from room_4 ");
		while($row = mysqli_fetch_array($search4))
		{
			$csdate4=date($row['start_date']);
				$cedate4=date($row['end_date']);
			
			if((process($sdate) >= process($csdate4) && process($sdate) <= process($cedate4)) || (process2($edate) >= process2($csdate4) && process2($edate) <= process2($cedate4)) || (process($sdate) <= process($csdate4) && process($sdate) >= process($cedate4)) || (process2($edate) <= process2($csdate4) && process2($edate) >= process2($cedate4)))
			{
					//echo"Rooms not Available.\n";
					$i4=1;
					$count=$count-1;
			}
		}
				if($i4==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_4(start_date,end_date) VALUES('$sdate','$edate')");
					 $j4=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1)
		{
			$search5=mysqli_query($con,"select start_date, end_date from room_5 ");
		while($row = mysqli_fetch_array($search5))
		{
			$csdate5=date($row['start_date']);
				$cedate5=date($row['end_date']);
			
			if((process($sdate) >= process($csdate5) && process($sdate) <= process($cedate5)) || (process2($edate) >= process2($csdate5) && process2($edate) <= process2($cedate5)) || (process($sdate) <= process($csdate5) && process($sdate) >= process($cedate5)) || (process2($edate) <= process2($csdate5) && process2($edate) >= process2($cedate5)))
			{
					//echo"Rooms not Available.\n";
					$i5=1;
					$count=$count-1;
			}
		}
				if($i5==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_5(start_date,end_date) VALUES('$sdate','$edate')");
					 $j5=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1)
		{
			$search6=mysqli_query($con,"select start_date, end_date from room_6 ");
		while($row = mysqli_fetch_array($search6))
		{
			$csdate6=date($row['start_date']);
				$cedate6=date($row['end_date']);
			
			if((process($sdate) >= process($csdate6) && process($sdate) <= process($cedate6)) || (process2($edate) >= process2($csdate6) && process2($edate) <= process2($cedate6)) || (process($sdate) <= process($csdate6) && process($sdate) >= process($cedate6)) || (process2($edate) <= process2($csdate6) && process2($edate) >= process2($cedate6)))
			{
					//echo"Rooms not Available.\n";
					$i6=1;
					$count=$count-1;
			}
		}
				if($i6==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_6(start_date,end_date) VALUES('$sdate','$edate')");
					 $j6=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1)
		{
			$search7=mysqli_query($con,"select start_date, end_date from room_7 ");
		while($row = mysqli_fetch_array($search7))
		{
			$csdate7=date($row['start_date']);
				$cedate7=date($row['end_date']);
			
			if((process($sdate) >= process($csdate7) && process($sdate) <= process($cedate7)) || (process2($edate) >= process2($csdate7) && process2($edate) <= process2($cedate7)) || (process($sdate) <= process($csdate7) && process($sdate) >= process($cedate7)) || (process2($edate) <= process2($csdate7) && process2($edate) >= process2($cedate7)))
			{
					//echo"Rooms not Available.\n";
					$i7=1;
					$count=$count-1;
			}
		}
				if($i7==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_7(start_date,end_date) VALUES('$sdate','$edate')");
					 $j7=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1)
		{
			$search8=mysqli_query($con,"select start_date, end_date from room_8 ");
		while($row = mysqli_fetch_array($search8))
		{
			$csdate8=date($row['start_date']);
				$cedate8=date($row['end_date']);
			
			if((process($sdate) >= process($csdate8) && process($sdate) <= process($cedate8)) || (process2($edate) >= process2($csdate8) && process2($edate) <= process2($cedate8)) || (process($sdate) <= process($csdate8) && process($sdate) >= process($cedate8)) || (process2($edate) <= process2($csdate8) && process2($edate) >= process2($cedate8)))
			{
					//echo"Rooms not Available.\n";
					$i8=1;
					$count=$count-1;
			}
		}
				if($i8==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_8(start_date,end_date) VALUES('$sdate','$edate')");
					 $j8=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1)
		{
			$search9=mysqli_query($con,"select start_date, end_date from room_9 ");
		while($row = mysqli_fetch_array($search9))
		{
			$csdate9=date($row['start_date']);
				$cedate9=date($row['end_date']);
			
			if((process($sdate) >= process($csdate9) && process($sdate) <= process($cedate9)) || (process2($edate) >= process2($csdate9) && process2($edate) <= process2($cedate9)) || (process($sdate) <= process($csdate9) && process($sdate) >= process($cedate9)) || (process2($edate) <= process2($csdate9) && process2($edate) >= process2($cedate9)))
			{
					//echo"Rooms not Available.\n";
					$i9=1;
					$count=$count-1;
			}
		}
				if($i9==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_9(start_date,end_date) VALUES('$sdate','$edate')");
					 $j9=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1)
		{
			$search10=mysqli_query($con,"select start_date, end_date from room_10 ");
		while($row = mysqli_fetch_array($search10))
		{
			$csdate10=date($row['start_date']);
				$cedate10=date($row['end_date']);
			
		if((process($sdate) >= process($csdate10) && process($sdate) <= process($cedate10)) || (process2($edate) >= process2($csdate10) && process2($edate) <= process2($cedate10)) || (process($sdate) <= process($csdate10) && process($sdate) >= process($cedate10)) || (process2($edate) <= process2($csdate10) && process2($edate) >= process2($cedate10)))
			{
					//echo"Rooms not Available.\n";
					$i10=1;
					$count=$count-1;
			}
		}
				if($i10==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_10(start_date,end_date) VALUES('$sdate','$edate')");
					 $j10=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1)
		{
			$search11=mysqli_query($con,"select start_date, end_date from room_11 ");
		while($row = mysqli_fetch_array($search11))
		{
			$csdate11=date($row['start_date']);
				$cedate11=date($row['end_date']);
			
		if((process($sdate) >= process($csdate11) && process($sdate) <= process($cedate11)) || (process2($edate) >= process2($csdate11) && process2($edate) <= process2($cedate11)) || (process($sdate) <= process($csdate11) && process($sdate) >= process($cedate11)) || (process2($edate) <= process2($csdate11) && process2($edate) >= process2($cedate11)))
			{
					//echo"Rooms not Available.\n";
					$i11=1;
					$count=$count-1;
			}
		}
				if($i11==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_11(start_date,end_date) VALUES('$sdate','$edate')");
					 $j11=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1)
		{
			$search12=mysqli_query($con,"select start_date, end_date from room_12 ");
		while($row = mysqli_fetch_array($search12))
		{
			$csdate12=date($row['start_date']);
				$cedate12=date($row['end_date']);
			
		if((process($sdate) >= process($csdate12) && process($sdate) <= process($cedate12)) || (process2($edate) >= process2($csdate12) && process2($edate) <= process2($cedate12)) || (process($sdate) <= process($csdate12) && process($sdate) >= process($cedate12)) || (process2($edate) <= process2($csdate12) && process2($edate) >= process2($cedate12)))
			{
					//echo"Rooms not Available.\n";
					$i12=1;
					$count=$count-1;
			}
		}
				if($i12==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_12(start_date,end_date) VALUES('$sdate','$edate')");
					 $j12=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1)
		{
			$search13=mysqli_query($con,"select start_date, end_date from room_13 ");
		while($row = mysqli_fetch_array($search13))
		{
			$csdate13=date($row['start_date']);
				$cedate13=date($row['end_date']);
			
		if((process($sdate) >= process($csdate13) && process($sdate) <= process($cedate13)) || (process2($edate) >= process2($csdate13) && process2($edate) <= process2($cedate13)) || (process($sdate) <= process($csdate13) && process($sdate) >= process($cedate13)) || (process2($edate) <= process2($csdate13) && process2($edate) >= process2($cedate13)))
			{
					//echo"Rooms not Available.\n";
					$i13=1;
					$count=$count-1;
			}
		}
				if($i13==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_13(start_date,end_date) VALUES('$sdate','$edate')");
					 $j13=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1 && $i13==1)
		{
			$search14=mysqli_query($con,"select start_date, end_date from room_14 ");
		while($row = mysqli_fetch_array($search14))
		{
			$csdate14=date($row['start_date']);
				$cedate14=date($row['end_date']);
			
		if((process($sdate) >= process($csdate14) && process($sdate) <= process($cedate14)) || (process2($edate) >= process2($csdate14) && process2($edate) <= process2($cedate14)) || (process($sdate) <= process($csdate14) && process($sdate) >= process($cedate14)) || (process2($edate) <= process2($csdate14) && process2($edate) >= process2($cedate14)))
			{
					//echo"Rooms not Available.\n";
					$i14=1;
					$count=$count-1;
			}
		}
				if($i14==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_14(start_date,end_date) VALUES('$sdate','$edate')");
					 $j14=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1 && $i13==1 && $i14==1)
		{
			$search15=mysqli_query($con,"select start_date, end_date from room_15 ");
		while($row = mysqli_fetch_array($search15))
		{
			$csdate15=date($row['start_date']);
				$cedate15=date($row['end_date']);
			
		if((process($sdate) >= process($csdate15) && process($sdate) <= process($cedate15)) || (process2($edate) >= process2($csdate15) && process2($edate) <= process2($cedate15)) || (process($sdate) <= process($csdate15) && process($sdate) >= process($cedate15)) || (process2($edate) <= process2($csdate15) && process2($edate) >= process2($cedate15)))
			{
					//echo"Rooms not Available.\n";
					$i15=1;
					$count=$count-1;
			}
		}
				if($i15==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_15(start_date,end_date) VALUES('$sdate','$edate')");
					 $j15=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1 && $i13==1 && $i14==1 && $i15==1)
		{
			$search16=mysqli_query($con,"select start_date, end_date from room_16 ");
		while($row = mysqli_fetch_array($search16))
		{
			$csdate16=date($row['start_date']);
				$cedate16=date($row['end_date']);
			
		if((process($sdate) >= process($csdate16) && process($sdate) <= process($cedate16)) || (process2($edate) >= process2($csdate16) && process2($edate) <= process2($cedate16)) || (process($sdate) <= process($csdate16) && process($sdate) >= process($cedate16)) || (process2($edate) <= process2($csdate16) && process2($edate) >= process2($cedate16)))
			{
					//echo"Rooms not Available.\n";
					$i16=1;
					$count=$count-1;
			}
		}
				if($i16==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_16(start_date,end_date) VALUES('$sdate','$edate')");
					 $j16=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1 && $i13==1 && $i14==1 && $i15==1 && $i16==1)
		{
			$search17=mysqli_query($con,"select start_date, end_date from room_17 ");
		while($row = mysqli_fetch_array($search17))
		{
			$csdate17=date($row['start_date']);
				$cedate17=date($row['end_date']);
			
		if((process($sdate) >= process($csdate17) && process($sdate) <= process($cedate17)) || (process2($edate) >= process2($csdate17) && process2($edate) <= process2($cedate17)) || (process($sdate) <= process($csdate17) && process($sdate) >= process($cedate17)) || (process2($edate) <= process2($csdate17) && process2($edate) >= process2($cedate17)))
			{
					//echo"Rooms not Available.\n";
					$i17=1;
					$count=$count-1;
			}
		}
				if($i17==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_17(start_date,end_date) VALUES('$sdate','$edate')");
					 $j17=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1 && $i13==1 && $i14==1 && $i15==1 && $i16==1 && $i17==1)
		{
			$search18=mysqli_query($con,"select start_date, end_date from room_18 ");
		while($row = mysqli_fetch_array($search18))
		{
			$csdate18=date($row['start_date']);
				$cedate18=date($row['end_date']);
			
		if((process($sdate) >= process($csdate18) && process($sdate) <= process($cedate18)) || (process2($edate) >= process2($csdate18) && process2($edate) <= process2($cedate18)) || (process($sdate) <= process($csdate18) && process($sdate) >= process($cedate18)) || (process2($edate) <= process2($csdate18) && process2($edate) >= process2($cedate18)))
			{
					//echo"Rooms not Available.\n";
					$i18=1;
					$count=$count-1;
			}
		}
				if($i18==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_18(start_date,end_date) VALUES('$sdate','$edate')");
					 $j18=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1 && $i13==1 && $i14==1 && $i15==1 && $i16==1 && $i17==1 && $i18==1)
		{
			$search19=mysqli_query($con,"select start_date, end_date from room_19 ");
		while($row = mysqli_fetch_array($search19))
		{
			$csdate19=date($row['start_date']);
				$cedate19=date($row['end_date']);
			
		if((process($sdate) >= process($csdate19) && process($sdate) <= process($cedate19)) || (process2($edate) >= process2($csdate19) && process2($edate) <= process2($cedate19)) || (process($sdate) <= process($csdate19) && process($sdate) >= process($cedate19)) || (process2($edate) <= process2($csdate19) && process2($edate) >= process2($cedate19)))
			{
					//echo"Rooms not Available.\n";
					$i19=1;
					$count=$count-1;
			}
		}
				if($i19==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_19(start_date,end_date) VALUES('$sdate','$edate')");
					 $j19=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1 && $i13==1 && $i14==1 && $i15==1 && $i16==1 && $i17==1 && $i18==1 && $i19==1)
		{
			$search20=mysqli_query($con,"select start_date, end_date from room_20 ");
		while($row = mysqli_fetch_array($search20))
		{
			$csdate20=date($row['start_date']);
				$cedate20=date($row['end_date']);
			
		if((process($sdate) >= process($csdate20) && process($sdate) <= process($cedate20)) || (process2($edate) >= process2($csdate20) && process2($edate) <= process2($cedate20)) || (process($sdate) <= process($csdate20) && process($sdate) >= process($cedate20)) || (process2($edate) <= process2($csdate20) && process2($edate) >= process2($cedate20)))
			{
					//echo"Rooms not Available.\n";
					$i20=1;
					$count=$count-1;
			}
		}
				if($i20==0)
				{
					 mysqli_query($con,"INSERT INTO booking (check_in,check_out,relation,name) VALUES('$sdate','$edate','$rel','$name')");
					 mysqli_query($con,"INSERT INTO room_20(start_date,end_date) VALUES('$sdate','$edate')");
					 $j20=1;
					 echo"<font color='green'>Booking Successful.\n</font>";
					 
				}
		}
		
		
		
if($i1==1 && $i2==1 && $i3==1 && $i4==1 && $i5==1 && $i6==1 && $i7==1 && $i8==1 && $i9==1 && $i10==1 && $i11==1 && $i12==1 && $i13==1 && $i14==1 && $i15==1 && $i16==1 && $i17==1 && $i18==1 && $i19==1 && $i20==1)	
	{
		echo"<font color='red'>Rooms not Available.\n</font>";
		echo"<font color='red'> Please choose valid dates.\n</font>";
	}
	
   
	mysqli_close($con);

	
?>

</html>