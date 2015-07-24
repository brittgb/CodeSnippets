<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php // Script 7.2 - soups2.php
/* This script creates and prints out an array.
	It was rewritten so that it displays the number of elements 
	in the array without using a separate variable */


// Create the array:
$soups = array (
'Monday' => 'Clam Chowder',
'Tuesday' => 'White Chicken Chili',
'Wednesday' => 'Vegetarian'
);

// Count and print the current number of elements:
print "<p> The soups array contains&nbsp" . count ($soups) . "&nbspelements.</p>";





?>
</body>
</html>

