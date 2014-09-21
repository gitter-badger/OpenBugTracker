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
					<div class="headButton underSelected">News Feed</div>
					<div class="headButton">Bugs</div>
				</div>
			</div>
		</div>
		<div id="workspace">
			<div class="container">
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>

</html>
