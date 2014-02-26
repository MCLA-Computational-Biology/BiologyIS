<?php

	//require_once("dblogin.php");
	// Inserts a tank into the database
	function insertTank()
	{
		global $db_hostname, $db_database, $db_username, $db_password;
		//Declarations
		$tank_number = "";
		$tank_targettemp = "";
		$tank_salinity = "";
		$tank_tanksize = "";
		$tank_monoculture = "";
		
		//Try to get the variable, if not there return -1
		$tank_tanknumber = getIsset("tank_number",-1);
		$tank_targettemp = getIsset("tank_targettemp",-1);
		$tank_salinity = getIsset("tank_salinity",-1);
		$tank_tanksize = getIsset("tank_tanksize",-1);
		$tank_monoculture = getIsset("tank_monoculture",-1);

		$error = "";
		$query = "";
		$message = "";
		$queryResult = "";
		$results = array();
		$db_server = mysql_connect($db_hostname, $db_username, $db_password); 
	
		if ($db_server == FALSE) 
		{
			$error = "Unable to connect to MySQL: " . mysql_error();
		}
		else
		{
			if (mysql_select_db($db_database) == FALSE)
			{
				$error = "Unable to select MySQL DB: " . mysql_error();
			}
			else
			{
				if($tank_tanknumber != -1 &&
				   $tank_targettemp != -1 &&
				   $tank_salinity != -1 &&
				   $tank_tanksize != -1 &&
				   $tank_monoculture != -1)
				{
					$query = "INSERT INTO amartin.TANK " .
							 "(TANK_NAME, TANK_TARGET_TEMP, TANK_SALINITY, TANK_SIZE, TANK_MONOCULTURE) VALUES " .
							 "('" . $tank_tanknumber . "', '" 
							 	  . $tank_targettemp . "', '"
							 	  . $tank_salinity . "', '"
							 	  . $tank_tanksize . "', '"
							 	  . $tank_monoculture .
							 "')";
					$queryResult = mysql_query($query); 

				}
				else
				{
					echo "Missing one of more of the following values on querystring: <br/>";
					echo "Tank Number : $tank_tanknumber<br/>
				   		  Tank Temp: $tank_targettemp<br/>
				  		  Tank Salinity: $tank_salinity<br/>
				 		  Tank Size: $tank_tanksize<br/>
				 		  Tank Monoculture: $tank_monoculture<br>";
				}
				if($queryResult == FALSE)
				{
					$error = "MySQL insertion query error: " . mysql_error();
				}
				else
				{
					echo "Added a new tank with the following info: <br/>";
					echo "Tank Number : $tank_tanknumber<br/>
				   		  Tank Temp: $tank_targettemp<br/>
				  		  Tank Salinity: $tank_salinity<br/>
				 		  Tank Size: $tank_tanksize<br/>
				 		  Tank Monoculture: $tank_monoculture<br>";
				}
				
				//The following up until *END* is for test purposes only 
				//and should be removed when testing is complete
				///*
				$query = "SELECT amartin.TANK.* FROM amartin.TANK";
				$queryResult = mysql_query($query);
				if($queryResult == false)
				{
					$error = "MySQL selection query error: " . mysql_error();
				}
				else
				{
					$list = array();
					$column = array();
					for($i = 0; $i < mysql_num_fields($queryResult); $i++)
					{
						$field_info = mysql_fetch_field($queryResult, $i);
						$columns[$i] = $field_info->name;
					}
					while($row = mysql_fetch_row($queryResult))
					{
						$map = array();
						for($v = 0; $v < count($columns); $v++)
						{
							$map[$columns[$v]] = $row[$v];
						}
						$list[] = $row[];
					}
					echo "<table>";
					echo "<tr>";
					foreach ($columns as $col)
					{
						echo "<th>" . $col . "</th>";
					}
					echo "</tr>";
					foreach ($list as $col => $row) 
					{
						echo "<tr>";
    					foreach ($row as $val) 
    					{
        					echo "<td>". $val . "</td>";
    					}
    					echo "</tr>";
    				}
    				echo "</table>";
				}
				//*END*    */
				
			}
			mysql_close($db_server);
		}
			
	}
?>