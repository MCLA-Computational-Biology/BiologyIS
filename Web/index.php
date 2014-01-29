<?php
	/*Work on:
	- Getting Bio-Main and New pages up and working
	- ask Mark about difference between GET and POST and which to use
	- Test password/login using post
	
	- Style page should be edited a bit for a cascading affect
	*/
	require_once("headerfooter.php");
	require_once("biohome.php");
	require_once("bionew.php");
	require_once("bioedit.php");
	require_once("bioblast.php");
	require_once 'dblogin.php';
	require_once("error.php");	
	require_once("forms.php");
	require_once("javascript.php");
	require_once("sql.php");
	
	
	$page = "";
	$form = "";
	$targettemp = "";
	$salinity = "";
	
	$page = getIsset("page", 0);
	$form = getIsset("form", 0);
	$targettemp = getIsset("targettemp",0);
	$salinity = getIsset("salinity",0);
	/*getIsset("TANK_NAME", 0);
	getIsset("TANK_TARGET_TEMP", 0);
	getIsset("TANK_SALINITY",0);
	getIsset("TANK_SIZE",0);
	getIsset("TANK_MONOCULTURE",0);*/
	
	// On success - go to New Content Page
	// Error - Back to form with error message
	$error = "";
	$query = "";
	$message = "";
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
			$result = "";
			if( isset($_GET['targettemp']) && isset($_GET['salinity']))
			{
				$query = "INSERT INTO amartin.TANK " .
						 "(TANK_TARGET_TEMP, TANK_SALINITY) VALUES " .
						 "('" . $targettemp . "', '" . $salinity . "')";
				$result = mysql_query($query); 
			}
			if ($result == FALSE)
			{
				$error = "MySQL query error: " . mysql_error();
			}
			else
			{
				echo "Inserted a new tank.";
			}
			
			$query = "SELECT amartin.TANK.TANK_SALINITY FROM amartin.TANK";
			$result = mysql_query($query);
			if($result == false)
			{
				$error = "MySQL query error: " . mysql_error();
			}
			else
			{
				for($i = 0; $i < mysql_num_fields($result); $i++)
				{
					$field_info = mysql_fetch_field($result, $i);
					$columns[$i] = $field_info->name;
				}
				echo mysql_num_fields($result);
				print_r($columns);
				while($row = mysql_fetch_row($result))
				{
					//$map[];
					for($v = 0; $v < count($columns); $v++)
					{
						$map[$columns[$v]] = $row[$v];
					}
					$list[] = $map;
				}
				print_r($list);
			}
		}
	}


	mysql_close($db_server);
?>


<html>
	<!-- CONTROLLER
	
		Come to this page from login
		If states to check log in correct
		If states to check page value
	
	-->
	
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="submissionHandlers.js"></script>
		<title><?=$page?></title>
	</head>
	<body>
		<div class="header">
			<?=createHeader()?>
			<?=$message?>
		</div>
		<div id='content'>
			<?=createContent($page)?><!--returns a string of html text-->
		</div>
		</div>
		<div class="footer">
			<?=createFooter()?>
		</div>
	</body>
</html>

<?php

// The following functions are called based on the $page that is passed
function createContent($page)
{
	switch ($page) 
	{ 
		case "Bio-Home":
			return createBioHomeContent();	
			break;
		case "Bio-New":
			return createBioNewContent();	
			break;
		case "Bio-New-Organism":
			return createBioNewOrgContent();	
			break;
		case "Bio-New-Tank":
			return createBioNewTankContent();
			break;
		case "Bio-New-Plate":
			return createBioNewPlateContent();
			break;
		case "Bio-New-Bacteria":
			return createBioNewBacteriaContent();
			break;
		case "Bio-New-Colony":
			return createBioNewColonyContent();
			break;
		case "Bio-New-Sequence":
			return createBioNewSequenceContent();
			break;
		case "Bio-Edit":
			return createBioEditContent();
			break;
		case "Bio-Blast":
			return createBioBlastContent();
			break;
		default:
			return createErrorContent();
			break;
	}
	

}	
//Griffin easter egg
function createGriffinContent()
{
	return "
			<p style='text-align:center'><img src='griffin.jpg'></p>
			";
}
?>
	