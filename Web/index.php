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
	require_once("forms.php");
	require_once("error.php");
	
	
	$page = "";
	if ( isset($_POST['page']) ) 
		$page = $_POST['page'];
	if ( isset($_GET['page']) ) 
		$page = $_GET['page'];
?>


<html>
	<!-- CONTROLLER
	
		Come to this page from login
		If states to check log in correct
		If states to check page value
	
	-->
	
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title><?=$page?></title>
	</head>
	<body>
		<div class="header">
			<?=createHeader()?>
		</div>
		<div id='content'>
			<?=createContent($page)?> <!--returns a string of html text-->
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







?>
	