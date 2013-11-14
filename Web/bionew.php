<?php

	/* NEW PAGE
		- shows new content
	*/
	// New Page
	function createBioNewContent()
	{
		return "
					<h1>What Would You Like To Create?</h1>
					<p id='contentText'>
						<a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New-Organism'>Organism</a>
						<a href='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New-Tank'>Tank</a>
					</p>
				"
				;
	}
	// New Org Page
	function createBioNewOrgContent()
	{
		$page = "Bio-New";
		$organismForm = createOrganismForm();
		$tankOverlay= divTester(createTankForm());
		$html = "
					<div id='contentText'>
						<h1>New Organism</h1>
						$tankOverlay
						$organismForm
						<p style='float:left'><a href='#' onclick='overlay(false)'>New Tank</a></p>
					</div>
				"
				;
		return $html;
	}
	// New Tank Page
	function createBioNewTankContent()
	{
		$tankForm = createTankForm();
		$html = "
					<div id='contentText'>
						<h1>New Tank</h1>
							$tankForm
					</div>
				"
				;
		return $html;
	}
?>