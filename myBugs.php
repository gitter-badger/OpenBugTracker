<?php
/*
 * myBugs.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * Display the user their bugs.(Reported, assigned, monitored)
 */

// Loads topPage
require 'php/topPage.php';

// require plataforms configuration
require 'configuration.php';

//Used to set the bug view
if(isset($_GET['bugView']))
	$bugView = $_GET['bugView'];
else
	$bugView = null;

//Used to set the project to view
if(isset($_GET['projectView']))
	$projectView = $_GET['projectView'];
else
	$projectView = null;
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
		$title = 'My Bugs';

		// require common head values for all pages
		require_once 'common_head.php'; ?>
	</head>

	<body onload="load()">
		<?php
		// require warning to enable javascript, if it's disabled.
		require 'noJava.php';

		// require mainbar of the plataform
		require 'mainBar.php';
		?>

		<!-- Page head off the page -->
		<div id="pageHead">
			<div class="container">
				<span id="pageTitle">My bugs</span>
				<div id="headControls">
					<div class="headButton<?php if($bugView == null) echo ' underSelected'; ?>"><a href="mybugs.php<?php if($projectView != null) echo '?projectView=' . $projectView; ?>">All</a></div>
					<div class="headButton<?php if($bugView == 'assigned') echo ' underSelected'; ?>"><a href="mybugs.php?bugView=assigned<?php if($projectView != null) echo '&projectView=' . $projectView; ?>">Assigned to me</a></div>
					<div class="headButton<?php if($bugView == 'reported') echo ' underSelected'; ?>"><a href="mybugs.php?bugView=reported<?php if($projectView != null) echo '&projectView=' . $projectView; ?>">Reported by me</a></div>
					<div class="headButton<?php if($bugView == 'monitored') echo ' underSelected'; ?>"><a href="mybugs.php?bugView=monitored<?php if($projectView != null) echo '&projectView=' . $projectView; ?>">Monitored by me</a></div>
				</div>
			</div>
		</div>

		<!-- Working area -->
		<div id="workspace">
			<div class="container">
				<!-- Projects list -->
				<div class="left smallPane">
					<a href="mybugs.php<?php if($bugView != null) echo '?bugView=' . $bugView; ?>">
						<div class="smallList <?php if($projectView == null) echo 'selectedList'; ?>">
								<div class="smallListContent">
									All Projects
								</div>
						</div>
					</a>
					<a href="mybugs.php?projectView=1<?php if($bugView != null) echo '&bugView=' . $bugView; ?>">
						<div class="smallList <?php if($projectView == 1) echo 'selectedList'; ?>">
								<div class="smallListContent">
									Project 1
								</div>
						</div>
					</a>
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
		// require plataform footer
		require 'footer.php';
		?>
		</div>
	</body>

</html>
