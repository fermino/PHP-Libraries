<?php
	function LoadLib($Lib)
	{
		require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . $Lib . '.php';
	}

	spl_autoload_register('LoadLib');