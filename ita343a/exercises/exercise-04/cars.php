<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Awesome Cars!</title>
</head>
<body>
<h1>So many cars to choose from!</h1>

<?php

// exercise-04: cars.php

/* This script creates and displays a multidimensional array for car names and associated colors. 
The script loads the array and displays its count to the user, then adds elements and displays the resultant count. */


// Create the first array:
$mustang = array (1 => 'black', 'blue', 'yellow', 'red');

// Create the second array:
$viper = array (1 => 'green', 'purple', 'black', 'red');

// Create the third array:
$stationwagon = array (1 => 'brown', 'gray', 'tan', 'orange');

// Create the multidimensional array:
$cars = array (
	'Mustang' => $mustang,
	'Viper' => $viper,
	'Station Wagon' => $stationwagon
	);

//display the array
print "<pre>"; print_r ($cars); print "</pre>";

//count the cars in the array and display its count to the user
$count1 = count($cars);
print "<p> The cars array originally had $count1 elements.</p>";

//add elements to the array

$cars['Hummer'] = array (1 => 'brown', 'black', 'green', 'blue');

//recount

$count2= count ($cars);
print "<p>After adding 1 more car with four colors, the array now has $count2 elements.</p>";

?>
</body>
</html>