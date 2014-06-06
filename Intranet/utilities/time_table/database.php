
<?php
	function Database_Connect()
	{
		return mysqli_connect('localhost','kunal15595','jtmzk04484','grp3');
	}
	function database_create_Table($department,$sem,$noc)
	{
		mb_language('uni');
		mb_internal_encoding('UTF-8');
		$query = "Create Table";
		$query = $query." `".$department."_".$sem."` ( ";
		$table = "`".$department."_".$sem."`";
		$query2="DROP TABLE ".$table." ;";
		$con = Database_Connect();
		mysqli_query($con,$query2);
		foreach($noc as $x=>$x_value)
		{
			if (!strlen(preg_replace('/\s+/u','',$x_value)) == 0) {
				$k= preg_replace('/\s+/ ', '', $x_value);
				$query = $query."`".$k."` "."varchar(255)".", ";
			}	
		}
		$query = substr($query,0,strlen($query)-2);
		$query = $query." );";
		$result = mysqli_query($con,$query);
		mysqli_close($con);
		if($sem=="Main")
		{
			$arr=array("Monday","","ML1","ML1","ML1","","","AL1","AL1","AL1","");
			database_table_fill($table,$arr);
			$arr=array("Tuesday","","ML2","ML2","ML2","","","AL2","AL2","AL2","");
			database_table_fill($table,$arr);
			$arr=array("Wednesday","","ML3","ML3","ML3","","","AL3","AL3","AL3","");
			database_table_fill($table,$arr);
			$arr=array("Thursday","","ML4","ML4","ML4","","","AL4","AL4","AL4","");
			database_table_fill($table,$arr);
			$arr=array("Friday","","ML5","ML5","ML5","","","AL5","AL5","AL5","");
			database_table_fill($table,$arr);
		}
		$con = NULL;
			return $table;
	}
	function database_table_fill($table_name,$atf)
	{
		if(!isset($con))
		$con = Database_Connect();
		$query = "Describe ".$table_name.";";
		$str = mysqli_query($con,$query);
		$z=array();
		$i=0;
		while($row=mysqli_fetch_array($str,MYSQLI_NUM))
		{
				$z[$i]=$row[0];
				$i=$i+1;
		}
		$query = "INSERT INTO `grp3`.".$table_name." (";
		foreach($z as $x=>$x_value)
		{
			$query = $query." `".$x_value."`, ";
		}
		$query = substr($query,0,strlen($query)-2);
		$query = $query." )";
		$query = $query." VALUES ( ";
		foreach($atf as $x => $x_value)
		{
			$query = $query."'".$x_value."'".", ";
		}
		$query = substr($query,0,strlen($query)-2);
		$query = $query." );";
		$result = mysqli_query($con,$query);
		mysqli_close($con);
		$con = NULL;
		return $result;
	}
?>
<?php
		function fetch_time_table($depat,$sem)
		{
			if(!isset($con))
			$con = Database_Connect();
			$should_send=array();
			$storage=array();
			$query = "DESCRIBE `".$depat."_main`";
			$result = mysqli_query($con,$query);
			$i=0;
			while($row=mysqli_fetch_array($result,MYSQLI_NUM))
			{
				$should_send[0][$i]=$row[0];
				$i=$i+1;
			}
			$query = "SELECT * FROM `".$depat."_main`;";
			$result = mysqli_query($con,$query);
			$j=1;
			
			while($row=mysqli_fetch_array($result,MYSQLI_NUM))
			{
				$i=0;
				$should_send[$j][$i]=$row[0];
				$i=$i+1;
					while($i<count($row))
					{
						//echo $row[$i]."<br>";
						if(isset($storage[$row[$i]]))
							$should_send[$j][$i]=$storage[$row[$i]];
						else
						{
							//echo $row[$i]."<br>";
							$flag=1;
							$query = "SELECT * FROM `".$depat."_".$sem."`;";
							$result2 = mysqli_query($con,$query);
							while($row2=mysqli_fetch_array($result2,MYSQLI_ASSOC))
							{
								//echo $row2["Course"]."<br>";
								$str = '/[#]\s+'.$row[$i].'\s+[#]/';
								
								if(preg_match($str,$row2["Slot"]))
								{
										//echo "hello";
										$storage[$row[$i]] = $row2["Course"];
										$should_send[$j][$i]=$storage[$row[$i]];
										$flag=0;
								}
							}
							if($flag==1)
							{
								$storage[$row[$i]]="NULL";
								$should_send[$j][$i]=$storage[$row[$i]];
							}
						}
						$i=$i+1;
					}
				$j=$j+1;
			}
			return($should_send);
		}
		function fetch_information($y,$depat,$sem)
		{
		
			$query = "SELECT * FROM `".$depat."_".$sem."`;";
			//echo $query;
			$con = Database_Connect();
			$result=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				if(strpos(" ".$row["Course"],$y))
				{
					return "Title :- ".$row["Title"]."<br>"."Credit :- ".$row["Credit"]."<br>"."Instructor :- ".$row["Instructor"]."<br>"."Slot :- ".$row["Slot"]."<br>"."Classroom :-".$row["Classroom"]."<br>";
				}
			}
		}
?>





