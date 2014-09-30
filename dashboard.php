<?php
/*
 * dashboard.php
 * 
 * Copyright 2014 Hugo Rodrigues hugaomrodrigues<at>gmail<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * User dashboard
 */
include 'configuration.php';

//Used to set the dashboard view
$dashboardToDisplay = $_GET['dashboard'];
?>

<!DOCTYPE html>
<html>

	<head>
		<?php include 'common_head.php'; ?>
	</head>

	<body onload="load()">
		<?php
		include 'noJava.php';
		include 'mainBar.php';
		?>
		<div id="pageHead">
			<div class="container">
				<span id="pageTitle">Welcome</span>
				<div id="headControls">
					<div class="headButton<?php if($dashboardToDisplay == null || $dashboardToDisplay == 'news') echo ' underSelected'; ?>">News Feed</div>
					<div class="headButton<?php if($dashboardToDisplay == 'bugs') echo ' underSelected'; ?>">Bugs</div>
				</div>
			</div>
		</div>
		<div id="workspace">
			<div class="container">
				<?php
				//If the view is News
				if($dashboardToDisplay == null || $dashboardToDisplay == 'news')
				{
					?>
					<div class="news">
						<div class="newsLogo">
							<img src="">
						</div>
						<div class="newsContent">
							<time datetime="PT1H15MIN">1 hour and 15 minutes</time><br>
							News feed example
						</div>
					</div>
					<hr class="newsSeparator">
					<div class="news">
						<div class="newsLogo">
							<img src="">
						</div>
						<div class="newsContent">
							<time datetime="P2D">2 days</time><br>
							News feed example
						</div>
					</div>
					<hr class="newsSeparator">
					<div class="news">
						<div class="newsLogo">
							<img src="">
						</div>
						<div class="newsContent">
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
					Lorem Ipsum 
					<?php
				}
				//If the view is unknown loads the default view
				else
					header('Location: dashboard.php');
				?>
			</div>
		<?php include 'footer.php'; ?>
		</div>
	</body>

</html>
