<?php

	// Overlay
	// This file contains the overlay div function
	// $form - the form passed
	// $okayHandler - the submission handler method called upon 'ok'
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