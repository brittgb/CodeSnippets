<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>I Have This Sorted Out</title>
</head>
<body>
<?php // Script 7.7 - list.php
/* This script receives a string in $_POST['words']. It then turns it into an array,
sorts the array alphabetically, and reprints it. 

This script was edited for exercise-04 so that it uses foreach instead of implode(),
but still prints each sorted word on its own line.

Form validation was added so it only attempts to parse and sort this string if 
it has a value.  */



// Turn the incoming string into an array:
$words_array = explode(' ' , $_POST['words']);

// Sort the array:
sort($words_array);

if (empty($_POST['words'])) {
	print "please type in a value!";
} else {
	// Print the results:
	print "<p>An alphabetized version of your list is:";
		foreach ($words_array as $_POST['words'] => $word) {	
		print "<br /> $word <br />";
		}
	print "</p>";
	}


?>
</body>
</html>