<?php // Script 9.7 - welcome.php #2
/* This is the welcome page. The user is redirected here
after they successfully log in. */

//the print statement should indicate how long the user has been logged in and uses double quotes
//(reassign the current code to a variable)

// Need the session:
session_name("LoggedIn");
session_start();
date_default_timezone_set('America/Los_Angeles');
$session_length = date('g:i a', $_SESSION['loggedin']);

// Set the page title and include the header file:
define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
include('templates/header.html'); 

// Print a greeting:
print '<h2>Welcome to the J.D. Salinger Fan Club!</h2>';
print '<p>Hello, ' . $_SESSION['email'] . '!</p>';
	
// Print how long they've been logged in:
date_default_timezone_set('America/New_York');
print "<p>You have been logged in since: $session_length. </p>";

// Make a logout link:
print '<p><a href="logout.php">Click here to logout.</a></p>';
	
include('templates/footer.html'); // Need the footer.
?>s