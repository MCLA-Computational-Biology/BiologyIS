<?php
	/*Work on:
	- Getting Bio-Main and New pages up and working
	- ask Mark about difference between GET and POST and which to use
	- Test password/login using post
	
	- Style page should be edited a bit for a cascading affect
	*/

	
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
		<div class="content">
			<?=createContent($page)?> <!--returns a string of html text-->
		</div>
		<div class="footer">
			<?=createFooter()?>
		</div>
	</body>
</html>

<?php 

function createHeader()
{
	$html=	"<div id='container'>
				<div id='header'>
					<h1>Biology Tools</h1>
				</div>

				<div id='menu-top'>
					<ul>
						<li class='link-header'><a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-Home'>Home</a></li>
						<li class='link-header'><a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New'>New</a></li>
						<li class='link-header'><a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-Edit'>Edit/Manage</a></li>
						<li class='link-header'><a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-Blast'>Run Blast</a></li>
						<div class='float-clear'></div>
					</ul>
				</div>"
			;
	return $html;
	
}

function createFooter()
{
	$html = 	"<div id='menu-bottom'>
					<div class='link-column'>
						<ul>
							<li>Biology</li>
							<li><a href='http://www.youtube.com'  target='_blank'>NCBI</a></li>
							<li><a href='http://www.youtube.com'  target='_blank'>BioInformatics</a></li>
							<li><a href='http://www.youtube.com'  target='_blank'>JStor</a></li>
						</ul>
					</div>
					<div class='link-column'>
						<ul>
							<li>MCLA</li>
							<li><a href='http://www.youtube.com'  target='_blank'>Campus Connection</a></li>
							<li><a href='http://www.youtube.com'  target='_blank'>Biology Department</a></li>
							<li><a href='http://www.youtube.com'  target='_blank'>Canvas</a></li>
						</ul>
					</div>
					<div class='link-column'>	
						<ul>
							<li>Other?</li>
							<li><a href='http://www.youtube.com'  target='_blank'>Youtube</a></li>
							<li><a href='http://www.youtube.com'  target='_blank'>Twitter</a></li>
							<li><a href='http://www.youtube.com'  target='_blank'>Facebook</a></li>
						</ul>
					</div>
					<div id='footer'>
						Copyright &copy; 2012 Coolwebsite.com
					</div>
				</div>
			</div>"
			;
		return $html;
}

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
		case "Bio-Edit":
			return createBioEditContent();
			break;
		case "Bio-Blast":
			return createBioBlastContent();
			break;
	}
}
// The following functions are called based on the $page that is passed
// Biology Home Page
function createBioHomeContent()
{
	$html =	"<div id='content'>
				<p id='contentText'>
					Bio Home
					<img src='bacteria-green.jpg'/>
				</p>
			</div>"
			;
	return $html;
}
// New Item Page
function createBioNewContent()
{
	$html = "<div id='content'>
				<p id='contentText'>
					<h1>What Would You Like To Create?</h1><br/>
					<a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New-Organism'>Organism</a>
				</p>
			</div>"
			;
	return $html;
}

function createBioNewOrgContent()
{
	$page = "Bio-New";
	$html = "<div id='content'>
				<div id='contentText'>
					<h1>New Organism</h1>
					<div class='form-center'>
						<form action='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New' method='post'>
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
				</div>
			</div>"
			;
	return $html;
}

// Edit Item Page
function createBioEditContent()
{
	$html = "<div id='content'>
				<p id='contentText'>Edit</p>
			</div>"
			;
	return $html;
}

// Run Blast Page
function createBioBlastContent()
{
	$html = "<div id='content'>
				<p id='contentText'>Run Blast.</p>
			</div>"
			;
	return $html;
}

?>
	