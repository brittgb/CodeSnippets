<?php

//A security gap is created by not checking and cleaning the user input, so I added typesetting, 
// escaped input, and sanitized several fields. All of these things work to ensure that user data 
// can't screw up the rendering of your page or do something malicious, either accidentally or on purpose.

// As a note: it is good practice to validate that some value has been submitted and 
// that the submission is what you expected it to be before processing data, but I didn't 
// do it in this instance because the fields are not required to be filled in.

//I also added a public error message and private debugging message.  Any application that is public facing 
//should hide specific PHP and MySQL error messages so the user cannot become aware of security deficiencies 
//or glean too much information.  Not necessarily required for this specific application depending on who
// would be using it, but wanted to show that it was a possibility.

//I also parsed for valid characters using mysql_real_escape_string so that all the content is safe for
//insertion into mysql.  

error_reporting(0);

// Get value from HTML form
$donorname    = strip_tags($_POST['donorname']); //removes any HTML, JavaScript, PHP
$email        = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //removes all characters except those that are valid in an email address
$phone        = (string) FILTER_VAR($_POST['phone'], FILTER_SANITIZE_NUMBER_INT); //removes all characters except digits, plus, and minus signs
$address      = strip_tags($_POST['address']); //removes any HTML, JavaScript, PHP
$donorid      = (int) FILTER_VAR($_POST['donorid'], FILTER_SANITIZE_NUMBER_INT); //removes all characters except digits, plus, and minus signs

// Connect to the database
require "database.inc";

if ($mysqli->connect_errno) 
{
  die("Error connecting to database ");
}

//Secure the data before it is used by parsing for valid characters
$donorname = mysql_real_escape_string($donorname);
$email = mysql_real_escape_string($email);
$phone = mysql_real_escape_string($phone);
$address = mysql_real_escape_string($address);
$donorid = mysql_real_escape_string($donorid);


// Create the query
$q = $mysqli->query("UPDATE Donor set name= '$donorname',
    email = '$email', phone = '$phone', 
    address = '$address' WHERE DONORID = '$donorid'");


if $q 
{
	echo '<h1>Thank you!</h1>
	<p>The information has been updated.</p><br />';
} else
	{
		echo '<h1>System Error</h1>
		<p>The information could not be updated due to a system error.  We apologize for any inconvenience.</p>';
	}

// Find number of affected rows
echo $mysqli->affected_rows, " row was updated.";


?>
 
