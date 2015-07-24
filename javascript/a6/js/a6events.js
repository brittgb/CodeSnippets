	
function sayHello() {
	alert("Welcome to my page!");
	alert("The local time is " + (new Date).toLocaleString());
}

function hideDiv() {
	document.getElementById("hidden").style.display = "none";
}

function showDiv() {
	document.getElementById("hidden").style.display = "block";
}

function convertUpper() {
	this.value = this.value.toUpperCase();
}

function convertLower() {
	this.value = this.value.toLowerCase();
}

	
function init() {

	var pushbutton = document.getElementById ("pushbutton")
	pushbutton.onclick = sayHello;


	var show = document.getElementById("redbox")
	show.onmouseover = showDiv;
	show.onmouseout = hideDiv;

	var lowercase = document.getElementById("ta1")
	lowercase.onfocus = convertLower;

	var caps = document.getElementById("ta1")
	caps.onblur = convertUpper;

	var lowercase = document.getElementById("ta2")
	lowercase.onfocus = convertLower;

	var caps = document.getElementById("ta2")
	caps.onblur = convertUpper;

	var lowercase = document.getElementById("ta3")
	lowercase.onfocus = convertLower;

	var caps = document.getElementById("ta3")
	caps.onblur = convertUpper;

}

window.onload = init;
	
	
	