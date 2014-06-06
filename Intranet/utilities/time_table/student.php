<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
</head>
	<?php
		error_reporting(E_ERROR | E_PARSE);
	ini_set('max_execution_time', 300);
		$i=1;
			while($i<=66)
			{
			echo '<style type="text/css">
					/* HOVER STYLES */
					div#pop-up'.$i.' {
						display: none;
						position: absolute;
						width: 280px;
						padding: 10px;
						background: #eeeeee;
						color: #000000;
						border: 1px solid #1a1a1a;
							font-size: 90%;
						}
				</style>';
				$i=$i+1;
			}
	?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
  <?php
	$i=1;
			while($i<=66)
			{
			echo  "<script type='text/javascript'>
						$(function() {
						var moveLeft = 20;
							var moveDown = 10;
						$('a#trigger".$i."').hover(function(e) {
								$('div#pop-up".$i."').show();
							}, function() {
								$('div#pop-up".$i."').hide();
								});
        
					$('a#trigger".$i."').mousemove(function(e) {
						$('div#pop-up".$i."').css('top', e.x + moveDown).css('left', e.y + moveLeft);
								});
        
						}); 
						</script>";
			$i=$i+1;
			}
				
  
  ?>
<body>
	<?php
	include 'database.php';
	$depat = $_POST["branch"];//"computer_science";
	$sem = $_POST["sem"];//"b.tech 4";
	$arr = (fetch_time_table($depat,$sem));
	$answer = array();
	echo "<div id=container>";
	$i=1;
	$j=1;
	foreach($arr as $x=>$x_value)
	{	
			foreach($x_value as $y=>$y_value)
			{
				if($i<=66)
				{
					$answer[$i]=$y_value;
					//echo $answer[$i];
					$i=$i+1;
				}
				else
				{
					//echo $answer[$j+11]; 
					if($answer[$j+11]=="NULL")
					{
						$answer[$j+11]=$y_value;
					}
					$j=$j+1;
				}
				
			}
	}
	$i=1;
	echo '<table border=2>';
	echo '<tr>';
	while($i<=66)
	{
		echo '<td align=center>';
		echo '<a href="#" id="trigger'.$i.'">';
				if($answer[$i]!="NULL")
				echo $answer[$i];
				else
				echo "#--#";
				echo '</a>';
				echo '<div id=pop-up'.$i.' style="display: none;" >';
					if($i>=1 && $i<=11)
						echo $answer[$i];
					else if(($i-1)%11==0)
					{
							echo $answer[$i];
					}
					else
					{
							if($answer[$i]!="NULL")
							echo fetch_information($answer[$i],$depat,$sem);
							else
							echo $i;
					}
				echo '</div>';
		echo '</td>';
				if($i%11==0)
				{
					echo "</tr><tr>";
				}
				$i=$i+1;
	}
	echo '</tr>';
	echo '</table>';
	echo "</div>"
?>
</body>
</html>