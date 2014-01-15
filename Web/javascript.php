<?php

	// Overlay
	// This file contains the overlay div function

	function divTester($form, $okayHandler)
	{
		return	"<div id='overlay'>
					 <div>
						  $form
						  <!-- If Okay then Handle, Else then cancel/hide div-->
						  [<a href='#' onclick='$okayHandler()'>OK</a>]
						  [<a href='#' onclick='visibilityHandler()'>Cancel</a>]
					 </div>
				</div>";
	}
?>