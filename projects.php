<?php
/*
 * projects.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * List of all projects
 */

// Loads topPage
require 'php/topPage.php';

// Include plataforms configuration
require 'configuration.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<?php

		/*
		 * Set the title of the page. Null value for default
		 * News feed -> <platform title>
		 * Bugs -> <lataform title> Bugs
		 */
		$title = null;
		if($config_name == null)
			$title = 'Projects';

		$projectView = null;
		if(isset($_GET['projectView']))
			$projectView = $_GET['projectView'];

		// Include common head values for all pages
		require 'common_head.php'; ?>
	</head>

	<body onload="load()">
		<?php
		// Include warning to enable javascript, if it's disabled.
		require 'noJava.php';

		// Text displayed in the search bar
		$searchDefault = 'Search projects';
		
		// Include mainbar of the plataform
		require 'mainBar.php';
		?>

		<!-- Page head off the page -->
		<div id="pageHead">
			<div class="container">
				<span id="pageTitle">Projects</span>
				<div id="headControls">
					<div class="headButton <?php if($projectView == null) echo 'underSelected'; ?>"><a href="projects.php">All</a></div>
					<div class="headButton <?php if($projectView == 'imIn') echo 'underSelected'; ?>"><a href="projects.php?projectView=imIn">Projects where I'm in</a></div>
					<div class="headButton <?php if($projectView == 'create') echo 'underSelected'; ?>"><a href="projects.php?projectView=create">Create project</a></div>
					<div class="headButton <?php if($projectView == 'manage') echo 'underSelected'; ?>"><a href="projects.php?projectView=manage">Manage projects</a></div>
				</div>
			</div>
		</div>

		<!-- Working area -->
		<div id="workspace">
			<div class="container">
				lorem ipsun
			</div>
		<?php
		// Include plataform footer
		require 'footer.php';
		?>
		</div>
	</body>

</html>
