<?php

/*
 * common_head.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * Meta data
 */

if(!isset($theme))
	if($config_defaultTheme == null)
		$theme = 'blue';
	else
		$theme = $config_defaultTheme;

?>
<!-- Set Meta data according to contents in configuration.php -->
<meta charset="<?php echo $config_charset; ?>">
<meta name="description" content="<?php echo $config_description; ?>">

<!-- Title of the page -->
<title><?php if($config_name != null) { echo $config_name; if($config_showBugTracker) echo ' Bug Tracker'; if($title != null) echo ' - '; }  if($title != null) echo $title; ?></title>

<!-- Style for all pages -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/themes/<?php echo $theme; ?>.css">

<!-- Javascript for all pages -->
<script type="text/javascript" src="javascript/script.js"></script>