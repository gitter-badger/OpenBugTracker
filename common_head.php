<?php

/*
 * common_head.php
 * 
 * Copyright 2014 Hugo Rodrigues hugaomrodrigues<at>gmail<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * Meta data
 */

?>
<!-- Set Meta data according to contents in configuration.php -->
<meta charset="<?php echo $config_charset; ?>">
<meta name="description" content="<?php echo $config_description; ?>">

<!-- Title of the page -->
<title><?php if($config_name != null) { echo $config_name; if($config_showBugTracker) echo ' Bug Tracker'; if($title != null) echo ' - '; }  if($title != null) echo $title; ?></title>

<!-- Style for all pages -->
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Javascript for all pages -->
<script type="text/javascript" src="javascript/script.js"></script>