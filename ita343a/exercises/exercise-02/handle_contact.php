<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
</head>
<body>
<?php 

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);

$name = $first_name . " " . $last_name;

$state_abbrev = substr($state, 0, 2);
$state_abbrev = strtoupper($state_abbrev);

print "Hello $name from $city, $state_abbrev.  Nice to meet you!";


?>
</body>
</html>
