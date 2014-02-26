<?php
	/*Work on:
	- Getting Bio-Main and New pages up and working
	- ask Mark about difference between GET and POST and which to use
	- Test password/login using post
	
	- Style page should be edited a bit for a cascading affect
	*/
	require_once("bioblast.php");
	require_once("bioedit.php");
	require_once("biohome.php");
	require_once("bionew.php");
	require_once("dblogin.php");
	require_once("error.php");	
	require_once("forms.php");
	require_once("headerfooter.php");
	require_once("insertions.php");
	require_once("isset.php");
	require_once("javascript.php");
	require_once("overlay.php");
	require_once("sqlerror.php");
	
	$page = "Bio-Home";
	$formType = "";
	$message = "message";
	
	$page = getIsset("page", -1);
	$formType = getIsset("formType", -1);
	
	
			
	if($formType == "New-Tank")
	{
		insertTank();
	}
	
	/* 
		Post(Get)-> Index.php
		Check getIsset(val, default)
		call requisite insertion function 
		open database
			make checks to see that data is correct
			insert into database
		close database
		return (inserted,not inserted)
			if not inserted set page = to error page
			error = sql error
			print error msg on error page
	*/
	
	
	
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
	