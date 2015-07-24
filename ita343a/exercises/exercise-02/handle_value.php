<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Product Cost Calculator</title>
	<style type="text/css" media="screen"> .number {font-weight: bold; } </style>
</head>
<body>
<?php // script - exercise 2 chapter 4: handle_value.php
/* This script takes values from value.html and calculates a persons investment value.*/


// Get the values from the $_POST array:
$starting = $_POST['starting'];
$annual_return = $_POST['annual_return'];
$years = $_POST['years'];

//convert rate from a percentage to decimal:
$annual_return = ($annual_return/100);

// Calculate the total:
$total =  pow((1 + $annual_return), $years) * $starting;

// Apply the proper formatting;
$total = number_format ($total, 2);


// Print out the results:
print "<p> In $years years you will have a total of $total dollars!  Congratulations on your investment! </p>"

?>
</body>
