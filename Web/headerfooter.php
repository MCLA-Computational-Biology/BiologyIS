<?php

/* HEADER/FOOTER FILE
	- holds all of the HTML to create headers for page 
*/
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
					</div>
				</div>"
				;
		return $html;
		
	}

	function createFooter()
	{
		$html = "<div id='menu-bottom'>
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
							<li><a href='http://www.youtube.com'  target='_blank'>Youtube</a></li>
							<li><a href='http://www.youtube.com'  target='_blank'>Twitter</a></li>
							<li><a href='http://www.youtube.com'  target='_blank'>Facebook</a></li>
						</ul>
					</div>
					<div id='footer'>
						Copyright &copy; 2013 CatalystSoft
					</div>
				</div>			

				"
				;
			return $html;
	}
?>