function check() {
	var price = document.getElementById('price').value;  //type is numeric
	var pubYear = document.getElementById('pubYear').value; // type is numeric
	var binding = (document.getElementById('hardcover').checked) ? 'hardcover' : 'paperback';  //type is string
	var NYTBestSeller = document.getElementById('NYTBestSeller').checked;  //type is boolean
	var seriesTitle = document.getElementById('seriesTitle').value;  //type is string


	if (
			(pubYear >= 2000) && 
			((binding=="hardcover" && price < 25.00) || (binding=="paperback" && price < 15.00)) && 
			(NYTBestSeller == true) && 
			(seriesTitle == "Food Network" || seriesTitle == "The Food Network")
		)
	{
		alert("This is a Food Network Hot Selling Bargain Book!");
	} else {
		alert("This is NOT a Food Network Hot Selling Bargain Book!");
	}

	return false;
}

// Function called when the window has been loaded.
// Function needs to add an event listener to the form.
function init() {
	'use strict';
	document.getElementById('theForm').onsubmit = check;
} // End of init() function.
window.onload = init;