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

?>