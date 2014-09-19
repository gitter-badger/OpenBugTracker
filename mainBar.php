<?php
/*
 * mainBar.php
 * 
 * Copyright 2014 Hugo Rodrigues hugaomrodrigues<at>gmail<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * Platform main menu/bar
 */
?>
<div id="mainBar">
	<div id="header">
		<a href="#" id="logo"><img src="">_</a>
		<div id="search">
			<form action="search.php" method="POST">
				<input type="search" value="search">
			</form>
		</div>
		<ul id="mainMenu">
			<li><a href="projects.php">Projects</a></li>
			<li><a href="hotBugs.php">Hot bugs</a></li>
		</ul>
		<ul id="userMenu">
			<li href="#" id="privateMessage" title="Private Messages"><img src="images/resources/icons/message.png"></li>
			<li href="#" id="notification" title="You don't have new notifications"><img src="images/resources/icons/notifications.png"></li>
			<li href="#" id="userControl"><img src="images/resources/icons/guest.png"> <span>Guest</span></li>
			<li href="#"id="logOut" title="Logout"><img src="images/resources/icons/logout.png"></li>
		</ul>
	</div>
</div>