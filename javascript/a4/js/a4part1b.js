function calculate () {
	var MonthNumber = document.getElementById('MonthNumber').value;
	//var Month = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	var Today = new Date();
	var MonthStamp = MonthNumber - 1;
	var YearStamp = Today.getFullYear();
	var Someday = new Date(YearStamp, MonthStamp, 01, 00, 00, 01);
	var StringDate = Someday.toLocaleString();

	alert(StringDate);


	return false;	
}

function init() {
	'use strict';
	document.getElementById('theForm').onsubmit = calculate;
} // End of init() function.
window.onload = init;
