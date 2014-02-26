<?php

	/* FORMS FILE
		- holds all of the HTML for the forms in order to reduce copied code 
	*/
	
	// Phylum Form
	function createPhylumForm()
	{
		return "
				Name: <input type='text' name='phylumname'/><br/>
				";
	}
	
	// Genus Form
	function createGenusForm()
	{
		return "
				Name: <input type='text' name='genusname'/><br/>
				";
	}	
	
	// Species Form
	function createSpeciesForm()
	{
		return "
				Name: <input type='text' name='speciesname'/><br/>
				";
	}
	
	// Tank Form
	function createTankForm()
	{
		return "
				Tank Number: <input type='text' name='tank_number' id='tank_number'/><br/>
				Target-Temp: <input type='text' name='tank_targettemp' id='tank_targettemp'/><br/>
				Salinity: <input type='text' name='tank_salinity' id='tank_salinity'/><br/>
				Size gal.: <input type='text' name='tank_tanksize' id='tank_tanksize'/><br/>
				Monoculture: <input type='text' name='tank_monoculture' id='tank_monoculture'/><br/>
				";
	}
	
	// Location Form
	function createLocationForm()
	{
		return "
				Name: <input type='text' name='locationname'/><br/>
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
						</select> and create new phylum popup<br/>
					Location: <select name='location'> 
						<option></option>
						<option>Britain</option>
						<option>Cape Code</option>
						</select>and create new location popup<br/>
					Genus: <select name='genus'> 
						<option></option>
						<option>Genus1</option>
						<option>Genus2</option>
						</select>and create new genus popup<br/>
					Species: <select name='species'> 
						<option></option>
						<option>Species1</option>
						<option>Species2</option>
						<option>Species3</option>
						</select>and create new species popup<br/>
					Lat: <input type='text' name='latitude'/> Lon:<input type='text' name='longitude'/><br/>
					Nickname: <input type='text' name='nickname'/><br/>
				";
	}
	
	// Fridge Form
	function createFridgeForm()
	{
		return "
				??Name/Number: <input type='text' name='fridgename'/>confused why fridge only has temp?<br/>
				Temperature (Celsius?): <input type='text' name='fridgetemp'/><br/>
				";
	}
	
	//Plate Form
	function createPlateForm()
	{
		return "
					Organism: <select name='organism'>
						<option></option>
						<option>Organism1</option>
						<option>Organism2</option>
						</select>and create new organism popup<br/> 
					Researcher: <select name='researcher'> 
						<option></option>
						<option>Charles Darwin</option>
						<option>George Beadle</option>
						<option>Barbara McClintock</option>
						<option>Gregor Mendel</option>
						</select>and create new researcher popup?<br/>
					Fridge: <select name='fridge'> 
						<option></option>
						<option>Fridge1</option>
						<option>Fridge2</option>
						</select>and create new fridge popup<br/>
					Colony Number: <input type='text' name='platecolonynumber'/><br/>
					Letter: <input type='text' name='plateletter'/><br/>
					Homogenize: <input type='text' name='platehomogenize'/> homegenate microliters<br/>
					Agar: <input type='text' name='plateagar'/><br/>
					Date: <input type='text' name='platedate'/>calendar?<br/> 
					Temperature (Celsius?): <input type='text' name='platetemp'/><br/>
					Image: File Browser here
				";
	}
	
	//Colony Form
	function createColonyForm()
	{
		return "
				Should this have options for bacteria and plate?<br/>
				Size: <input type='text' name='colonysize'/><br/>
				Morphology: <input type='text' name='colonymorphology'/><br/>
				Color: <input type='text' name='colonycolor'/><br/>
				";
	}
	
	//Bacteria Form
	function createBacteriaForm()
	{
		return "
				Culture Media: <input type='text' name='bacteriaculturemedia'/><br/>
				Assessment Key: <input type='text' name='bacteriaassessmentkey'/><br/>
				Gram Reaction: <input type='text' name='bacteriagramreaction'/><br/>
				Morphology: <input type='text' name='bacteriamorphology'/>On both bacteria and Colony?<br/>
				Incubation Period: <input type='text' name='bacteriaincubationperiod'/><br/>
				Incubation Temperature: <input type='text' name='platehomogenize'/><br/>
				Strain: <input type='text' name='bacteriastrain'/><br/>
				Genus: <input type='text' name='bacteriagenus'/><br/>
				Species: <input type='text' name='bacteriaspecies'/><br/>
				Metabolism: <input type='text' name='bacteriametabolism'/><br/>
				Motility: <input type='text' name='bacteriamotility'/><br/>
				AntiMicrobial: some sort of selecter tool, and create new antimicrobial popup
				Sequence: some sort of selecter tool, and create new sequence popup, and create new lab popup?
				";
	}
	
	//AntiMicrobial Form
	function createAntiMicrobialForm()
	{
		return "
				Type:  <input type='text' name='antimicrobialname'/><br/>
				";
	}
	
	//Sequence Form
	function createSequenceForm()
	{
		return "
				Assessment Key: <input type='text' name='sequenceassessmentkey'/><br/>
				Type: <input type='text' name='sequencetype'/><br/>
				Source: <input type='text' name='sequencesource'/><br/>
				Base Pair Length: <input type='text' name='sequencebasepairlength'/><br/>
				Base Primer Pair: <input type='text' name='sequencebaseprimerpair'/><br/>
				Sequence String: <input type='text' name='sequencestring'/><br/>
				Lab: <input type='text' name='sequencelab'/> and create new lab popup<br/>
				";
	}
	
	//Lab Form
	function createLabForm()
	{
		return "
				Name:  <input type='text' name='labname'/><br/>
				Location:  <input type='text' name='lablocation'/><br/>
				";
	}
	
	
	
	
?>