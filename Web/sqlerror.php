<?php
	class SQLError
	{
		private $m;
		private $e = "";

		function __construct($map, $error)
		{
			$this->m = $map;
			$this->error = $e;
		}
	
		/*function __construct($error)
		{
			$this->m = NULL;
			$this->e = $error;
		}*/
		function getmap()
		{
			return $this->m;
		}
	
		function geterror()
		{
			return $this->e;
		}
	}

	
?>