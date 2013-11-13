<?php
	/*Work on:
	- Getting Bio-Main and New pages up and working
	- ask Mark about difference between GET and POST and which to use
	- Test password/login using post
	
	- Style page should be edited a bit for a cascading affect
	*/
	require_once("headerfooter.php");
	require_once("biohome.php");
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

// 'New' Page
function createBioNewContent()
{
	$html = "<div id='content'>
				<h1>What Would You Like To Create?</h1>
				<p id='contentText'>
					<a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New-Organism'>Organism</a>
					<a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New-Tank'>Tank</a>
				</p>
			</div>"
			;
	return $html;
}

// New Org Page
function createBioNewOrgContent()
{
	$page = "Bio-New";
	$html = "<div id='content'>
				<div id='contentText'>
					<h1>New Organism</h1>
					<form class='form-padded' action='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New' method='post'>
						Tank: <select name='tank'> 
							<option></option>
							<option>One</option>
							<option>Two</option>
							</select><br/>
						Phylum: <select name='phylum'>
							<option></option>
							<option>Phylum1</option>
							<option>Phylum2</option>
							</select><br/>
						Location: <select name='location'>
							<option></option>
							<option>Britain</option>
							<option>Cape Code</option>
							</select><br/>
						Lat/Lon: <input type='text' name='latitude'/> <input type='text' name='longitude'/><br/>
						Genus: <select name='genus'>
							<option></option>
							<option>Genus1</option>
							<option>Genus2</option>
							</select><br/>
						Species: <select name='species'>
							<option></option>
							<option>Species1</option>
							<option>Species2</option>
							</select><br/>
						Nickname: <input type='text' name='nickname'/><br/>
						<input type='hidden' name='page' value='<?= $page?>'/>
						<input type='submit' value='OK'/>
					</form> 
				</div>
			</div>"
			;
	return $html;
}

function createBioNewTankContent()
{
	$tankForm = "";
	$tankForm = createTankForm();
	
	$html = "<div id='content'>
				<div id='contentText'>
					<h1>New Tank</h1>
						$tankForm
				</div>
			</div>"
			;
	return $html;
}




?>
	