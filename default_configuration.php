<?php
/*
 * configuration.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * This file contains all OpenBugTracker configuration
 */

//Name of the server (required)
$config_name = '';

//Show Bug Tracker in the title (true|false/null)
$config_showBugTracker = true;

//Charset to use (required)
$config_charset = '';

//Description of the platform (required)
$config_description = '';

//Default theme to apply (required)
$config_defaultTheme = '';

//Default url of the platform (ex: http://www.example.com/bugtracker) (required)
$config_baseUrl = '';

// If display home page link in footer (true|false/null)
$config_showFooterHome = true;

//Link to footer homepage (required if showFooterHome is true)
$config_footerHome = '';

// If display terms of service link in footer (true|false/null)
$config_showFooterTerms = true;

// If display status link in footer (true|false/null)
$config_showFooterStatus = true;

//Link to footer status (required if showFooterStatus is true)
$config_footerStatus = '';

// If the release is a development (required)
$config_deve = true;
?>
