function calculate () {
	var MonthNumber = document.getElementById('MonthNumber').value;
	var Month = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

	alert(Month[MonthNumber -1]);
	return false;
}

function init() {
	'use strict';
	document.getElementById('theForm').onsubmit = calculate;
} // End of init() function.
window.onload = init;
