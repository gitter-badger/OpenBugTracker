<?php
/*
 * dashboard.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * User dashboard
 */

// Include plataforms configuration
include 'configuration.php';

//Used to set the dashboard view
if(isset($_GET['dashboard']))
	$dashboardToDisplay = $_GET['dashboard'];
else
	$dashboardToDisplay = null;
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
		if($dashboardToDisplay == null && $config_name == null)
			$title = 'Dashboard';
		else if($dashboardToDisplay == 'bugs')
			$title = 'Bugs';

		// Include common head values for all pages
		include 'common_head.php'; ?>
	</head>

	<body onload="load()">
		<?php
		// Include warning to enable javascript, if it's disabled.
		include 'noJava.php';

		// Include mainbar of the plataform
		include 'mainBar.php';
		?>

		<!-- Page head off the page -->
		<div id="pageHead">
			<div class="container">
				<span id="pageTitle">My bugs</span>
				<div id="headControls">
					<div class="headButton<?php if($dashboardToDisplay == null || $dashboardToDisplay == 'news') echo ' underSelected'; ?>"><a href="dashboard.php">All</a></div>
					<div class="headButton<?php if($dashboardToDisplay == 'bugs') echo ' underSelected'; ?>"><a href="dashboard.php?dashboard=bugs">Assigned to me</a></div>
					<div class="headButton<?php if($dashboardToDisplay == 'bugs') echo ' underSelected'; ?>"><a href="dashboard.php?dashboard=bugs">Reported by me</a></div>
					<div class="headButton<?php if($dashboardToDisplay == 'bugs') echo ' underSelected'; ?>"><a href="dashboard.php?dashboard=bugs">Monitored by me</a></div>
				</div>
			</div>
		</div>

		<!-- Working area -->
		<div id="workspace">
			<div class="container">
				<!-- Projects list -->
				<div class="left smallPane">
					<div class="smallList selectedList">
						<div class="smallListContent">
							All Projects
						</div>
					</div>
					<div class="smallList">
						<div class="smallListContent">
							Project example
						</div>
					</div>
				</div>
					<!-- Bug list -->
				<div class="left largePane">
					<div class="list">
						<div class="listLogo">
							<img src="">
						</div>
						<div class="listContent">
							<span class="smallInfo">Project</span><br>
							Bug example
						</div>
					</div>
					<hr class="listSeparator">
					<div class="list">
						<div class="listLogo">
							<img src="">
						</div>
						<div class="listContent">
							<span class="smallInfo">Project</span><br>
							Bug example
						</div>
					</div>
				</div>
			</div>
		<?php
		// Include plataform footer
		include 'footer.php';
		?>
		</div>
	</body>

</html>
