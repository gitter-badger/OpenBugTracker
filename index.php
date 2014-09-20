<?php
/*
 * index.php
 * 
 * Copyright 2014 Hugo Rodrigues hugaomrodrigues<at>gmail<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 */
 
if(!file_exists('configuration.php'))
{
	if(file_exists('install/'))
		header('Location: install/');
	else
		echo 'Ups!! OpenBugTracker isn\'t installed and the installation folder don\'t exist.';
}
else
{
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
		
	</body>

</html>
<?php
}//configuration file
?>
