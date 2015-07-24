<?php

	$mysqli = new mysqli("parshall.ovid.u.washington.edu", "brittgb", "fud794zf", "brittgb", "3131");  // use your NetID and Password!!!
	
	if ($mysqli->connect_errno) {
		die("Error connecting to database " . $mysqli->connect_error);
	}

//I didn't change anything in this file, but I'd like to mention that it is good for security to place database connection information in a separate file such as this.

?>

	