<?php

	/* FORMS FILE
		- holds all of the HTML for the forms in order to reduce copied code 
	*/
	function createTankForm()
	{
		$page = "Bio-New";
		return "<form class='form-padded' action='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New' method='post'>
				Name: <input type='text' name='tankname'/><br/>
				Target-Temp: <input type='text' name='targettemp'/><br/>
				Salinity: <input type='text' name='salinity'/><br/>
				Size gal.: <input type='text' name='tanksize'/><br/>
				Monoculture: <input type='name='monoculture'/><br/>
				<input type='hidden' name='page' value='$page'/>
				<input type='submit' value='OK'/>
				</form>";
	}
	
	function createOrganismForm()
	{
		$page = "Bio-New";
		return 	"<form class='form-padded' action='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New' method='post'>
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
							<option>Species3</option>
							</select><br/>
						Nickname: <input type='text' name='nickname'/><br/>
						<input type='hidden' name='page' value='<?= $page?>'/>
						<input type='submit' value='OK'/>
					</form>";
	}
?>