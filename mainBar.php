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
$searchDefault = 'Search';
?>
<div id="mainBar">
	<div id="header">
		<a href="<?php echo $config_baseUrl; ?>" id="logo"><img src="">_</a>
		<div id="search">
			<form action="search.php" method="POST">
				<input type="search" id="searchBox" onclick="enterSearch('<?php echo $searchDefault; ?>')" onblur="exitSearch('<?php echo $searchDefault; ?>')" value="<?php echo $searchDefault; ?>">
			</form>
		</div>
		<ul id="mainMenu">
			<li><a href="projects.php">Projects</a></li>
			<li><a href="hotBugs.php">Hot bugs</a></li>
		</ul>
		<ul id="userMenu">
			<li href="#" id="privateMessage" title="Private Messages"><img src="images/resources/icons/message.png" onmouseover="imgSrcChange(this, 'images/resources/icons/message_hover.png')" onmouseout="imgSrcChange(this, 'images/resources/icons/message.png')"></li>
			<li href="#" id="notification" title="You don't have new notifications"><img src="images/resources/icons/notifications.png" onmouseover="imgSrcChange(this, 'images/resources/icons/notifications_hover.png')" onmouseout="imgSrcChange(this, 'images/resources/icons/notifications.png')"></li>
			<li href="#" id="userControl"><a href="#"><img src="images/resources/icons/guest.png"> <span>Guest</span></a></li>
			<li href="#" id="logOut" title="Logout"><a href="#"><img src="images/resources/icons/logout.png" onmouseover="imgSrcChange(this, 'images/resources/icons/logout_hover.png')" onmouseout="imgSrcChange(this, 'images/resources/icons/logout.png')"></a></li>
		</ul>
	</div>
</div>