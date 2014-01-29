<?php
	
	


function getIsset($value, $default)
{
	$return = $default;
	if ( isset($_POST[$value]) ) 
		$return = $_POST[$value];
	if ( isset($_GET[$value]) ) 
		$return = $_GET[$value];
	return $return;
}
	
?>
