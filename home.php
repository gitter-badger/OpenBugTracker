<?php
/*
 * home.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * User home page
 */

// Loads topPage
include 'php/topPage.php';

// Include plataforms configuration
include 'configuration.php';
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
			$title = 'Home';

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
			</div>
		</div>

		<!-- Working area -->
		<div id="workspace">
			<div class="container">
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
		</div>
		<?php
		// Include plataform footer
		include 'footer.php';
		?>
		</div>
	</body>

</html>
