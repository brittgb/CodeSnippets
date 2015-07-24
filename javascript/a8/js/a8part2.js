
window.onload = init;

function init() {

	// reset the form by calling the resetForm() function
	resetForm();
	
	// configure the 'reset' button to call the resetForm() function when clicked
	document.getElementById("resetform").onclick = resetForm;

	// configure the form itself to launch the submitIt() function when submitted
	document.getElementById("myform").onsubmit = submitIt;	

}


function resetForm() {

	 // make the value of the username field blank
	 document.getElementById("username").value = "";
	 
	 // position the cursor in the username field
	 document.getElementById("username").focus();

}
	

function submitIt() {
	var formerrors = document.getElementById("formerrors")
	formerrors.innerHTML = "&nbsp;"

	var number = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	var zip = document.getElementById("zip").value;
	var validationresult = true;

	// if name is blank, make user go back and correct
	// it before continuing on:

	if (document.getElementById("username").value == "") {
		formerrors.innerHTML += "You must enter your name <br />";
		document.getElementById("username").focus();
		document.getElementById("username").select();
		validationresult = false;
	}
	
	if (isPhoneNumber(number) == false) {
		formerrors.innerHTML += "You must enter a valid phone number, with the format (555) 555-5555 <br />";
		validationresult = false;
	}
	
	if (validEmail(email) == false) {
		formerrors.innerHTML += "You must enter a valid email address <br />";
		validationresult=false;
	}

	if (isUSZip(zip)== false) {
		formerrors.innerHTML += "You must enter a valid zip code <br />";
		validationresult=false;
	}

	return validationresult;
}


function validEmail(email) {
		var invalidChars = " /:,;";
	
		if (email == "") {
			return false;
		}
		for (var k=0; k<invalidChars.length; k++) {
			var badChar = invalidChars.charAt(k);
			if (email.indexOf(badChar) > -1) {
				return false;
			}
		}
		var atPos = email.indexOf("@",1);
		if (atPos == -1) {
			return false;
		}
		if (email.indexOf("@",atPos+1) != -1) {
			return false;
		}
		var periodPos = email.indexOf(".",atPos);
		if (periodPos == -1) {	
			return false;
		}
		if (periodPos+3 > email.length)	{
			return false;
		}
		return true;
	}

function isPhoneNumber(phone) {
		// Check for correct phone number
		// Phone Number Must Be Entered As: (555) 555-1234
		rePhoneNumber = new RegExp(/^\([1-9]\d{2}\)\s?\d{3}\-\d{4}$/);

		if (!rePhoneNumber.test(phone)) {
			  return false;
		}

		return true;
	}


function isUSZip(zip) {
		var rez = new RegExp(/^\d{5}(-\d{4})?$/);
		return rez.test(zip);
	}

// returns true if an email address is 
	// properly formatted, otherwise returns
	// false.  To call, send in the value of the 
	// form field as the parameter, i.e.:
	//
	// var theEmail = document.getElementById("emailaddr").value;
	// if (validEmail(theEmail) { // ... // }
	//	

	