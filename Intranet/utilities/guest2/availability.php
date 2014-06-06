<!DOCTYPE html>
<html>
<?php

$edate=$sdate=$name=$rel="";
$i1=$i2=$i3=$i4=$i5=$i6=$i7=$i8=$i9=$i10=$i11=$i12=$i13=$i14=$i15=$i16=$i17=$i18=$i19=$i20=0;
$j1=$j2=$j3=$j4=$j5=$j6=$j7=$j8=$j9=$j10=$j11=$j12=$j13=$j14=$j15=$j16=$j17=$j18=$j19=$j20=0;
$n=0;
$i=0;
$count=3;
$con=mysqli_connect("127.0.0.1","root","","singla");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

		
 if(isset($_POST['bookform2']))
 {
	/*if($_POST['name']=='' || $_POST['rel']=='' || $_POST['sdate']=='' || $_POST['edate']=='') 
	{
		echo "Please fill the empty field";
	}
	*/
	 $sdate=$_POST['sdate'];
      $edate=$_POST['edate'];
      
 }
 $search1=mysqli_query($con,"select start_date, end_date from room_1 ");
		while($row = mysqli_fetch_array($search1))
		{
			if(($sdate >= $row['start_date'] && $sdate <= $row['end_date']) || ($edate >= $row['start_date'] && $edate <= $row['end_date']))
			{
					//echo"Rooms not Available.\n";
					$i1=1;
					$count=$count-1;
			}
		}
		
	$search2=mysqli_query($con,"select start_date, end_date from room_2 ");
		while($row = mysqli_fetch_array($search2))
		{
			if(($sdate >= $row['start_date'] && $sdate <= $row['end_date']) || ($edate >= $row['start_date'] && $edate <= $row['end_date']))
			{
					//echo"Rooms not Available.\n";
					$i1=1;
					$count=$count-1;
			}
		}
		
			
	$search3=mysqli_query($con,"select start_date, end_date from room_3 ");
		while($row = mysqli_fetch_array($search3))
		{
			if(($sdate >= $row['start_date'] && $sdate <= $row['end_date']) || ($edate >= $row['start_date'] && $edate <= $row['end_date']))
			{
					//echo"Rooms not Available.\n";
					$i1=1;
					$count=$count-1;
			}
		}
		
	echo "No. of room available is $count";
 
 mysqli_close($con);
 ?>
 
 </html>