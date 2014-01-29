<?php

	// Overlay
	// This file contains the overlay div function

	function divOverlay($form, $okayHandler)
	{
		return	"<div id='overlay'>
					 <div>
						  $form
						  <!-- If Okay then Handle with js function, If cancel then toggle/hide div-->
						  [<a href='#' onclick='$okayHandler()'>OK</a>]
						  [<a href='#' onclick='visibilityHandler()'>Cancel</a>]
					 </div>
				</div>";
	}
?>