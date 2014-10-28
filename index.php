<?php
/*
 * index.php
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * This file relocates to login screen or to the home page
 */

require 'php/topPage.php';

//Check if login is done - TO DO
header('Location: home.php');
?>