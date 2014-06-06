<?php
error_reporting(E_ERROR | E_PARSE);
ini_set('max_execution_time', 300);
	include "/database.php";
?>
<?php
	function return_string($text2)
	{
		////echo $text2."<br>";
		if(preg_match_all('/B.Tech|M.Tech/',$text2,$match,PREG_OFFSET_CAPTURE))
			{
				if(preg_match_all('/B.Tech|M.Tech/',$text2,$match2,PREG_OFFSET_CAPTURE,$match[0][0][1]+1))
					{
					preg_match_all('/\s+[A-Z]{2}[0-9]{3}|\s+[A-Z]{2}[0-9][x][x]/',$text2,$matches,PREG_OFFSET_CAPTURE,$match[0][0][1]);
						$t=0;
						foreach($match2 as $y=>$y_value)
							{
								
								foreach($y_value as $z=>$z_value)
								{
									if($match2[0][$t][1] > $matches[0][0][1])
										break;
								$t++;
								}
							}
						////echo substr($text2,$match[0][0][1],$match2[0][$t][1]-$match[0][0][1])."<br>";
						return substr($text2,$match[0][0][1],$match2[0][$t][1]-$match[0][0][1]);	
					}
				else
					{
						////echo substr($text2,$match[0][0][1]);
						return substr($text2,$match[0][0][1]);
					}
			}
	}
?>
<?php
	include("pdf2text.php");
	
	$i;
	$text = file_to_text($_FILES["file"]["tmp_name"]);
	
	//echo $text;
		//echo "<br>";
		//echo "<br>";
	$dateAndTime = substr($text,strpos($text,"Day"),strpos($text,"Monday")-strpos($text,"Day"));
	$dateAndTime = preg_split("/\s+ | \-/",$dateAndTime);
	$text = substr($text,strpos($text,"Monday"));
		for($i=0;$i<=10;$i++)
		{
			//echo $dateAndTime[$i]." ";
		}
		//echo "<br>";
	$Monday = substr($text,strpos($text,"Monday"),strpos($text,"Tuesday")-strpos($text,"Monday"));
	$Monday = preg_split("/\s+(?!\()/",$Monday);
	$text = substr($text,strpos($text,"Tuesday"));
		for($i=0;$i<=10;$i++)
		{
			//echo $Monday[$i]." ";
		}
		//echo "<br>";
	$Tuesday = substr($text,strpos($text,"Tuesday"),strpos($text,"Wednesday")-strpos($text,"Tuesday"));
	$Tuesday = preg_split("/\s+(?!\()/",$Tuesday);
	$text = substr($text,strpos($text,"Wednesday"));
		for($i=0;$i<=10;$i++)
		{
			//echo $Tuesday[$i]." ";
		}
		//echo "<br>";
	$Wednesday = substr($text,strpos($text,"Wednesday"),strpos($text,"Thursday")-strpos($text,"Wednesday"));
	$Wednesday = preg_split("/\s+(?!\()/",$Wednesday);
	$text = substr($text,strpos($text,"Thursday"));
		for($i=0;$i<=10;$i++)
		{
			//echo $Wednesday[$i]." ";
		}
		//echo "<br>";
	$Thursday = substr($text,strpos($text,"Thursday"),strpos($text,"Friday")-strpos($text,"Thursday"));
	$Thursday = preg_split("/\s+(?!\()/",$Thursday);
	$text = substr($text,strpos($text,"Friday"));
	for($i=0;$i<=10;$i++)
		{
			//echo $Thursday[$i]." ";
		}
		//echo "<br>";
	$Friday = substr($text,strpos($text,"Friday"),strpos($text,"Program")-strpos($text,"Friday"));
	$Friday = preg_split("/\s+(?!\()/",$Friday);
	$text = substr($text,strpos($text,"Program"));
	for($i=0;$i<=10;$i++)
		{
			//echo $Friday[$i]." ";
		}
		//echo "<br>";	
	$Details = array();
	
		
?>
<?php	
	//echo "<br>";//echo "<br>";//echo "<br>";//echo "<br>";
	while(strpos($text,"B.Tech") || strpos($text,"M.Tech"))
	{
			////echo $text;
		$offset=array(0,0,0,0,0,0);
		
		$now = return_string($text);
		$text = substr($text , strpos($text,"Sem")+3);
		preg_match('/B.Tech|M.Tech/',$now,$match4,PREG_OFFSET_CAPTURE);
		$x = substr($now,strpos($now,$match4[0][0]),strpos($now,'Sem')-strpos($now,$match4[0][0]));
		preg_match('/\s+[0-9]/',$x,$match5,PREG_OFFSET_CAPTURE);
		$x = $match4[0][0].$match5[0][0];
		////echo $x;
		if(!isset($Details[$x]))
		{
		$Details[$x]["Course"] = array();
		$Details[$x]["Title"] = array();
		$Details[$x]["Credit"] = array();
		$Details[$x]["Instructor"] = array();
		$Details[$x]["Slot"] = array();
		$Details[$x]["Classroom"] = array();
		////print_r($Details);
		}
		else
		{
			foreach($Details[$x]["Course"] as $k=>$k_value)
			{
				$offset[0]=$offset[0]+1;
				$offset[1]=$offset[1]+1;
				$offset[2]=$offset[2]+1;
				$offset[3]=$offset[3]+1;
				$offset[4]=$offset[4]+1;
				$offset[5]=$offset[5]+1;
			}
		}
		////echo "<br>";
		////echo "<br>";
		
	//$now = preg_split("/\s+[A-Z][A-Z][0-9][0-9][0-9]/",$text);
	////print_r($now);
		
		
		////echo "now"."<br>";			
		////echo $now;
		////echo "<br>";
		////echo "<br>";
	preg_match_all('/\s+[A-Z]{2}[0-9]{3}|\s+[A-Z]{2}[0-9][x][x]/',$now,$matches,PREG_OFFSET_CAPTURE);
	////print_r($matches);
	////echo "<br>";
	////echo "<br>";
	$now2;
	$now3;
	foreach($matches as $y=>$y_value)
	{
		$t=0;
	//	if($offset==-1)
		//	$offset=0;
		foreach($y_value as $z=>$z_value)
			{
				////print_r($z_value);
				if($t!=0)
				{
					////echo $matches[0][$t-1][1]." ".$matches[0][$t][1]."<br>";
					$now2 = substr($now,$matches[0][$t-1][1],$matches[0][$t][1]-$matches[0][$t-1][1]);
					$now2 = $now2." ";
					////echo $now2;
					////echo "<br>";
					
					$Details[$x]["Course"][$t-1+$offset[0]] = substr($now2,0,strpos($now2 ,":"));
					preg_match('/\(/',$now2,$match,PREG_OFFSET_CAPTURE);
					$Details[$x]["Title"][$t-1+$offset[1]] = substr($now2,strpos($now2,":")+1,$match[0][1]-strpos($now2,":")-1);
					preg_match('/\)/',$now2,$match2,PREG_OFFSET_CAPTURE);
					$Details[$x]["Credit"][$t-1+$offset[2]] =substr($now2,$match[0][1],$match2[0][1]-$match[0][1]+1);
					$now2 = substr($now2,strpos($now2,")")+1);
					preg_match('/\s+[A|B|C|D|E|F|G|H|I|J|K|L][^A-Za-z0-9]|\s+[A|B|C|D|E][0-9][^A-Za-z0-9]|\s+[A|M][L][1|2|3|4|5][^A-Za-z0-9]/',$now2,$match,PREG_OFFSET_CAPTURE);
					$Details[$x]["Instructor"][$t-1+$offset[3]]=substr($now2,0,$match[0][1]);
					$now2 = substr($now2,$match[0][1]);
					$now3 = $now2;
					$last;
					$Details[$x]["Slot"][$t-1+$offset[4]]="#";
					while(preg_match('/\s+[A|B|C|D|E|F|G|H|I|J|K|L][^A-Za-z0-9]|\s+[A|B|C|D|E][0-9][^A-Za-z0-9]|\s+[A|M][L][1|2|3|4|5][^A-Za-z0-9]/',$now2,$match,PREG_OFFSET_CAPTURE))
					{
						////echo $match[0][0];
						////echo $now2;
						////echo "<br>";
						if($match[0][1]!=0)
							{
									$last=$match[0][0];
									if(strpos($now2,"("))
									{
										if($match[0][1] < strpos($now2,")") && $match[0][1] > strpos($now2,"("))
										{	}
										else										
											$Details[$x]["Slot"][$t-1+$offset[4]]= $Details[$x]["Slot"][$t-1+$offset[4]].$match[0][0]."#";
									}
									else
										$Details[$x]["Slot"][$t-1+$offset[4]]= $Details[$x]["Slot"][$t-1+$offset[4]].$match[0][0]."#";
										$now2=preg_replace('/'.$match[0][0].'/',' ',$now2);
							}
						else
							{
									$last=$match[0][0];
									if(strpos($now2,"("))
									{
										if($match[0][1] < strpos($now2,")") && $match[0][1] > strpos($now2,"("))
										{	}
										else										
											$Details[$x]["Slot"][$t-1+$offset[4]]= $Details[$x]["Slot"][$t-1+$offset[4]].$match[0][0]."#";
									}
									else
										$Details[$x]["Slot"][$t-1+$offset[4]]= $Details[$x]["Slot"][$t-1+$offset[4]].$match[0][0]."#";
										$now2=preg_replace('/'.$match[0][0].'/',' ',$now2);
							}
					}	
					
					$now3 = substr($now3,strpos($now3,$last));
					$now3 = preg_replace('/\s+[A|B|C|D|E|F|G|H|I|J|K|L][^A-Za-z0-9]|\s+[A|B|C|D|E][0-9][^A-Za-z0-9]|\s+[A|M][L][1|2|3|4|5][^A-Za-z0-9]/',' ',$now3);
						if(strpos($now3,"(")==0 || strpos($now3,"(")==1)
						$now3=substr($now3,strpos($now3,")")+1);
					$now3=preg_replace("/\([^)]+\)/","",$now3);	
					$Details[$x]["Classroom"][$t-1+$offset[5]] = $now3;
					////print_r($match);
					////echo $now2;
					////echo "<br>";
					//B|A|C|D|E|F|G|H|J|K|L|ML|Al|A1|B1|C1|D1|E1
					////print_r($match);
					////print_r($Details);
					////echo "<br>";
				}
				$t++;
			}
		//echo "<br>";
			
					$now2 = substr($now,$matches[0][$t-1][1]);
					////echo $now2;
					$Details[$x]["Course"][$t-1+$offset[0]] = substr($now2,0,strpos($now2 ,":"));
					preg_match('/\(/',$now2,$match,PREG_OFFSET_CAPTURE);
					$Details[$x]["Title"][$t-1+$offset[1]] = substr($now2,strpos($now2,":")+1,$match[0][1]-strpos($now2,":")-1);
					preg_match('/\)/',$now2,$match2,PREG_OFFSET_CAPTURE);
					$Details[$x]["Credit"][$t-1+$offset[2]] =substr($now2,$match[0][1],$match2[0][1]-$match[0][1]+1);
					$now2 = substr($now2,strpos($now2,")")+1);
					preg_match('/\s+[A|B|C|D|E|F|G|H|I|J|K|L][^A-Za-z0-9]|\s+[A|B|C|D|E][0-9][^A-Za-z0-9]|\s+[A|M][L][1|2|3|4|5][^A-Za-z0-9]/',$now2,$match,PREG_OFFSET_CAPTURE);
					$Details[$x]["Instructor"][$t-1+$offset[3]]=substr($now2,0,$match[0][1]);
					$now2 = substr($now2,$match[0][1]);
					$now3 = $now2;
					$last;
					$Details[$x]["Slot"][$t-1+$offset[4]]="#";
					while(preg_match('/\s+[A|B|C|D|E|F|G|H|I|J|K|L][^A-Za-z0-9]|\s+[A|B|C|D|E][0-9][^A-Za-z0-9]|\s+[A|M][L][1|2|3|4|5][^A-Za-z0-9]/',$now2,$match,PREG_OFFSET_CAPTURE))
					{
					//	//print_r($match);
						////echo $now2;
					//	//echo "<br>";
						
						//echo "<br>";
						if($match[0][1]!=0)
							{
											
								$last=$match[0][0];
									if(strpos($now2,"("))
									{
										if($match[0][1] < strpos($now2,")") && $match[0][1] > strpos($now2,"("))
										{	}
										else										
											$Details[$x]["Slot"][$t-1+$offset[4]]= $Details[$x]["Slot"][$t-1+$offset[4]].$match[0][0]."#";
									}
									else
										$Details[$x]["Slot"][$t-1+$offset[4]]= $Details[$x]["Slot"][$t-1+$offset[4]].$match[0][0]."#";
										$now2=preg_replace('/'.$match[0][0].'/',' ',$now2);
								
							}
						else
							{	
									
									$last=$match[0][0];
									if(strpos($now2,"("))
									{
										if($match[0][1] < strpos($now2,")") && $match[0][1] > strpos($now2,"("))
										{	}
										else										
											$Details[$x]["Slot"][$t-1+$offset[4]]= $Details[$x]["Slot"][$t-1+$offset[4]].$match[0][0]."#";
									}
									else
										$Details[$x]["Slot"][$t-1+$offset[4]]= $Details[$x]["Slot"][$t-1+$offset[4]].$match[0][0]."#";
										$now2=preg_replace('/'.$match[0][0].'/',' ',$now2);
							}
					}	
					
					$now3 = substr($now3,strpos($now3,$last));
					$now3 = preg_replace('/\s+[A|B|C|D|E|F|G|H|I|J|K|L][^A-Za-z0-9]|\s+[A|B|C|D|E][0-9][^A-Za-z0-9]|\s+[A|M][L][1|2|3|4|5][^A-Za-z0-9]/',' ',$now3);	
					if(strpos($now3,"(")==0 || strpos($now3,"(")==1)
						$now3=substr($now3,strpos($now3,")")+1);
					$now3=preg_replace("/\([^)]+\)/","",$now3);
					$Details[$x]["Classroom"][$t-1+$offset[5]] = $now3;
					////print_r($match);
					////echo $now2;
					////echo "<br>";
					//B|A|C|D|E|F|G|H|J|K|L|ML|Al|A1|B1|C1|D1|E1
					////print_r($match);
					////echo $x."<br><br>";
					////print_r($Details[$x]);
					////echo "<br><br>";
		////echo $now2;
	}
	//echo "<br>";
	////echo "<br>";
	////echo "<br>";
	////print_r($matches);
	}
	
?>
<?php
	foreach($Details as $x=>$x_value)
	{
		//echo $x.":-";
		//echo "<br>";
		foreach($x_value as $y=>$y_value)
		{
			//echo $y." ";
				foreach($y_value as $z=>$z_value)
				{
					//echo $z.".".$z_value." "; 
				}
			//echo "<br>";
		}
		//echo "<br>";
	}
?>

<?php
//echo "<br>";
		$depat =  $_POST["branch"];
		//echo $_POST["branch"];
		
		$table_name = database_create_table($depat,"Main",$dateAndTime);
		$i=0;
		$mon=array();
		foreach($Monday as $x => $x_value)
		{
			$mon[$i]=$x_value;
			$i=$i+1;
			if($i==11)
			{
				break;
			}
		}
		(database_table_fill($table_name,$mon));
		$mon2 = array("MondayL","","ML-1","ML-1","ML-1","","","AL-1","AL-1","AL-1","","");
	//	//print_r($mon2);
	//	//print_r(database_table_fill($table_name,$mon2));
		$i=0;
		$tue=array();
		foreach($Tuesday as $x => $x_value)
		{
			$tue[$i]=$x_value;
			$i=$i+1;
			if($i==11)
			{
				break;
			}
		}
	(database_table_fill($table_name,$tue));
		///$tue2 = array("TuesdayL","","ML-2","ML-2","ML-2","","","AL-2","AL-2","AL-2","","");
		/////print_r($tue2);
	///	//print_r(database_table_fill($table_name,$tue2));
		$i=0;
		$wed=array();
		foreach($Wednesday as $x => $x_value)
		{
			$wed[$i]=$x_value;
			$i=$i+1;
			if($i==11)
			{
				break;
			}
		}
		(database_table_fill($table_name,$wed));
		//$wed2 = array("WednesdayL","","ML-3","ML-3","ML-3","","","AL-3","AL-3","AL-3","","");
	//	//print_r($wed2);
		(database_table_fill($table_name,$wed2));
		$i=0;
		$thurs=array();
		foreach($Thursday as $x => $x_value)
		{
			$thurs[$i]=$x_value;
			$i=$i+1;
			if($i==11)
			{
				break;
			}
		}
		(database_table_fill($table_name,$thurs));
		//$thurs2 = array("ThursdayL","","ML-4","ML-4","ML-4","","","AL-4","AL-3","AL-3","","");
	//	print_r(database_table_fill($table_name,$thrus2));
		$i=0;
		$Fri=array();
		foreach($Friday as $x => $x_value)
		{
			$Fri[$i]=$x_value;
			$i=$i+1;
			if($i==11)
			{
				break;
			}
		}
		(database_table_fill($table_name,$Fri));
		//$Fri2 = array("FridayL","","ML-5","ML-5","ML-5","","","AL-5","AL-5","AL-5","","");
		//print_r(database_table_fill($table_name,$Fri2));
		
		foreach($Details as $x=>$x_value)
		{
			
			$sem = $x;
			$a=array();
			$i=0;
				foreach($x_value as $y=>$y_value )
				{
					$a[$i]=$y;
					$i=$i+1;
				}
		$table_name = database_create_table($depat,$sem,$a);
			$j=0;
			foreach($Details[$sem]["Course"] as $k=>$k_value)
			{
				$b=array();
				
				$b[0]=$Details[$sem][$a[0]][$j];
				$b[1]=$Details[$sem][$a[1]][$j];
				$b[2]=$Details[$sem][$a[2]][$j];
				$b[3]=$Details[$sem][$a[3]][$j];
				$b[4]=$Details[$sem][$a[4]][$j];
				$b[5]=$Details[$sem][$a[5]][$j];
				//print_r($b);
				//echo "<br>";
				(database_table_fill($table_name,$b));
				$j=$j+1;
			}
		}

?>
<?php
		echo "File Uploaded";	
?>