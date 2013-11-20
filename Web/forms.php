<?php

	/* FORMS FILE
		- holds all of the HTML for the forms in order to reduce copied code 
	*/
	
	// Tank Form
	function createTankForm()
	{
		return "
				Name: <input type='text' name='tankname'/><br/>
				Target-Temp: <input type='text' name='targettemp'/><br/>
				Salinity: <input type='text' name='salinity'/><br/>
				Size gal.: <input type='text' name='tanksize'/><br/>
				Monoculture: <input type='name='monoculture'/><br/>
				";
	}
	
	//Organism Form
	function createOrganismForm()
	{
		return 	"
						Tank: <select name='tank'>
							<option></option>
							<option>One</option
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
						Lat: <input type='text' name='latitude'/> Lon:<input type='text' name='longitude'/><br/>
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
					";
	}
	//
	
	
	
	
	
?>