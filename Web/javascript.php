<?php

	// JAVASCRIPT
	// This file contains all of the javascript scripts to be used on the site

	function scriptPopup()
	{
		return	"<script>
					function overlay(okhit) 
					{
						var el = document.getElementById('overlay');
						el.style.visibility = (el.style.visibility == 'visible') ? 'hidden' : 'visible';
						if (okhit)
						{
							
						}
					}		
				</script>";
	}
	
	function divTester($form)
	{
		return	"<div id='overlay'>
					 <div>
						  $form
						  [<a href='#' onclick='overlay(true)'>OK</a>]
						  [<a href='#' onclick='overlay(false)'>Cancel</a>]
					 </div>
				</div>";
	}
?>