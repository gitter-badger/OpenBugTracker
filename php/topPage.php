<?php
/*
 * topPage.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * In this file are all the PHP scripts that are used on top of every page
 */

//Required files
//checkVars
require 'php/checkVars.php';
$requiredVars = new checkVars();


if(!file_exists('configuration.php'))
{
	if(file_exists('install/'))
		header('Location: install/');
	else
		header('Location: error.php?error=1');
}
else if($requiredVars->mandatoryVars())
	header('Location: error.php?error=2');
?>