<?php
/*
 * footer.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * Footer to display in all pages
 */

?>
<div id="footer" class="clearFloat">
	<div class="container">
		<?php
		// If the platform is a nightly build, shows the messagee
		if($config_nightly == true) echo '<div>This is a nightly release of OpenBugTracker. Use at your own risk. See more in <a href="about.php#branch">about</a></div>';
		?>

		<!-- Footer links -->
		<div id="serviceInfo">
			<ul>
				<?php if($config_showFooterHome) { ?><li><a href="<?php echo $config_footerHome; ?>">Homepage</li></a> - <?php } ?>
				<?php if($config_showFooterTerms) { ?><li><a href="termsofservice.php">Terms of service</a></li> - <?php } ?>
				<li><a href="#">Contact</a></li> - 
				<?php if($config_showFooterStatus) { ?><li><a href="<?php echo $config_footerStatus; ?>">Status</a></li> - <?php } ?>
				<li><a href="#">Help</a></li> - 
				<li><a href="#">License</a></li> - 
				<li><a href="#">About</a></li>
			</ul>
		</div>

		<!-- OpenBugTracker information and Copyright -->
		<div id="obtInfo">
			Provided by<br>
			<a href="https://github.com/Hugao/OpenBugTracker" target="_blank"><img src="images/obt.png"></a>
		</div>
		<div id="copyright">&copy; 2014 <a href="https://web-hugorodrigues.rhcloud.com/" target="_blank">Hugo Rodrigues</a> and <a href="https://github.com/Hugao/OpenBugTracker/graphs/contributors" target="_blank">contributors</a></div>
	</div>
</div>