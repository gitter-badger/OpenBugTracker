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
				<span id="pageTitle">Welcome</span>
				<div id="headControls">
					<div class="headButton<?php if($dashboardToDisplay == null || $dashboardToDisplay == 'news') echo ' underSelected'; ?>"><a href="dashboard.php">News Feed</a></div>
					<div class="headButton<?php if($dashboardToDisplay == 'bugs') echo ' underSelected'; ?>"><a href="dashboard.php?dashboard=bugs">Bugs</a></div>
				</div>
			</div>
		</div>

		<!-- Working area -->
		<div id="workspace">
			<div class="container">
				<?php
				//If the view is News
				if($dashboardToDisplay == null || $dashboardToDisplay == 'news')
				{
					?>
					<div class="largeList">
						<div class="largeListLogo">
							<img src="">
						</div>
						<div class="largeListContent">
							<time datetime="PT1H15MIN">1 hour and 15 minutes</time><br>
							News feed example
						</div>
					</div>
					<hr class="listSeparator">
					<div class="largeList">
						<div class="largeListLogo">
							<img src="">
						</div>
						<div class="largeListContent">
							<time datetime="P2D">2 days</time><br>
							News feed example
						</div>
					</div>
					<hr class="listSeparator">
					<div class="largeList">
						<div class="largeListLogo">
							<img src="">
						</div>
						<div class="largeListContent">
							<time datetime="2014-09-30T01:29">30 of September of 2014 at 01:29</time><br>
							News feed example
						</div>
					</div>
					<?php
				}
				//If the view is bugs
				else if($dashboardToDisplay == 'bugs')
				{
					?>
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
					<?php
				}
				//If the view is unknown loads the default view
				else
					header('Location: dashboard.php');
				?>
			</div>
		<?php
		// Include plataform footer
		include 'footer.php';
		?>
		</div>
	</body>

</html>
