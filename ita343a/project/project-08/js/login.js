window.onload = init; 

function submitIt() {

	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var validationresult = true;

	// if name or password is blank, make user go back and correct it before continuing on:

	if (document.getElementById("username").value == "") {
		formerrors.innerHTML += "You must enter your username <br />";
		document.getElementById("username").focus();
		document.getElementById("username").select();
		validationresult = false;
	}
	
	if (document.getElementById("password").value == "") {
			formerrors.innerHTML += "You must enter your password <br />";
			document.getElementById("password").focus();
			document.getElementById("password").select();
			validationresult = false;
		}

	return validationresult;
}
