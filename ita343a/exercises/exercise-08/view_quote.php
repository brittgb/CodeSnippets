<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>View A Quotation</title>
</head>
<body>
<h1>Random Quotation</h1>
<?php // Script 11.3 - view_quote.php
/* This script displays and handles an HTML form. This script reads in a file and prints a random line from it. */
$file = fopen('quotes.txt', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
	$quotes[] = $line; 
}
fclose($file);

// Count the number of items in the array:
$n = count($quotes);

// Pick a random item:
$rand = rand(0, ($n - 1));

// Print the quotation:
$quote = $quotes[$rand];
print '<p> Quote: ' . trim($quote[0]) . '<br /> Author: ' .  trim($quote[1]) . '</p>';

// Pick a random item:
$rand = rand(0, ($n - 1));

// Print the quotation:
$quote = $quotes[$rand];
print '<p> Quote: ' . trim($quote[0]) . '<br /> Author: ' .  trim($quote[1]) . '</p>';

?>
</body>
</html>