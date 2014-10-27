<?php
/*
 * index.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * This file relocates to login screen or to the home page
 */
 
//Checks if OpenBugTracker is installed and if not, checks for the installation directory
if(!file_exists('configuration.php'))
{
	if(file_exists('install/'))
		header('Location: install/');
	else
		echo 'Ups!! OpenBugTracker isn\'t installed and the installation folder don\'t exist.';
}
else
{
	//Check if login is done - TO DO
	header('Location: home.php');
}
?>