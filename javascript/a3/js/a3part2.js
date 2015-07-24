function testswitch() {
	var season = document.getElementById('season').value;

	switch(season) {
		case 'spring':
			alert("Yay, you love spring!  April showers bring May flowers!")
			break;
		case 'summer':
			alert("Yay, you love summer!  Getting groovy on the beach, y'all!")
			break;
		case 'winter': 
			alert("Yay, you love winter! You must be dark and mysterious!")
			break;
		case 'fall':
			alert("Yay, you love fall! mmmmm pumpkin spice!")
			break;
		default:
			alert("that's not one of the options, silly!")
	}
	return false;
}

function init() {
	'use strict';
	document.getElementById('theForm').onsubmit = testswitch;
} // End of init() function.
window.onload = init;
