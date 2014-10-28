<?php
/*
 * error.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * This page is used to show an internal error
 *
 * Error table
 * |  Error  |      Description      |
 * |---------|-----------------------|
 * |   null  |     Unknown error     |
 * |    0    |   OBT not installed   |
 * |    1    |  Required VAR not set |
 */

if (isset($_GET['error']))
	$error = $_GET['error'];
else
	$error = null;

if ($error == 1)
	$message = 'OpenBugTracker isn\'t installed and the installation folder don\'t exist.';
else if ($error == 2)
	$message = 'Bad configurations. There are one or more required configurations that aren\'t set.';
else
	$message = 'Unknown error';

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Set Meta data according to contents in configuration.php -->
		<meta charset="UTF-8">
		<meta name="description" content="OpenBugTracker error page">

		<!-- Title of the page -->
		<title>OpenBugTracker <?php if($error != null) echo 'Error ' . $error; else echo $message; ?></title>

		<style type="text/css">
		body {
			text-align: center;
			background-color: rgba(245, 245, 245, 1);
			font-family: sans-serif;
		}

		#info {
			cursor: pointer;
			font-weight: bold;
		}

		.infoHover:hover {
			color: rgba(38, 38, 36, 1);
		}

		#noJava {
			font-size: 25px;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			position: absolute;
			opacity: 0.7;
			vertical-align: middle;
			text-align: center;
			z-index: 200000;
			color: rgba(255, 255, 255, 1);
			background-color: rgba(0, 0, 0, 1);
		}
		</style>

		<script type="text/javascript">
			function showInfo () {
				document.getElementById('info').innerHTML = "<?php echo 'Error ' . $error . ': ' . $message; ?>";
				document.getElementById('info').style.cursor = 'default';
                document.getElementById('info').className = "";
			}
		</script>
	</head>
	<body>
		<?php
		require 'noJava.php';
		?>
		<div>
			<img src="images/resources/error.png">
			<p>Something bad happen. An error occurred while performing the task.</p>
			<div id="info" class="infoHover" onclick="showInfo();">Show me more</div>
		</div>
	</body>
</html>