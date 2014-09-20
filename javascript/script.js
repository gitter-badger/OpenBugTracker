var pageLoaded = false;// Check's if the page is loaded

//Function to run on page event onload
function load () {
	pageLoaded = true;
}

//Change img src
function imgSrcChange (element, image) {
	if(!pageLoaded)
		return;
	else
		element.setAttribute('src', image);
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
			search.value = '';
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
			search.value = searchDefault;
	}
}