/*
 * script.js
 * 
 * Copyright 2014 Hugo Rodrigues hugorodrigues.developer<at>outlook<dot>com
 * 
 * This file is part of OpenBugTracker.
 * 
 * OpenBugTracker it's a Open Source bug tracker and it's under the MIT License.
 *
 * JavaScript scripts used in OBT
 */

var pageLoaded = false;// Check's if the page is loaded

//Function to run on page event onload
function load () {
	pageLoaded = true;
}

//When user enters in searchbox
function enterSearch(searchDefault)
{
	if(!pageLoaded)
		return;
	else
	{
		var search = document.getElementById('searchBox');
		if (search.value == searchDefault)
		{
			search.value = '';
			search.style.fontStyle = 'normal';
		}
	}
}

//When user leaves the searchbox
function exitSearch(searchDefault)
{
	if(!pageLoaded)
		return;
	else
	{
		var search = document.getElementById('searchBox');
		if(search.value == '')
		{
			search.style.fontStyle = 'italic';
			search.value = searchDefault;
		}
	}
}