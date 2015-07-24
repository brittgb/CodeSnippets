<?php
session_start();
$page_base = basename($_SERVER['PHP_SELF'],".php");

switch ($page_base)
	{
		case 'home':
			if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1'))
				{
					$page_base = "login";
					$message = '<p>You must be logged in to view that page.</p>';
				}
			break;


		case 'profile':
			if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1'))
				{
					$page_base = "login";
					$message = '<p>You must be logged in to view that page.</p>';
				}
			break;


		case 'contact':
			if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1'))
				{
					$page_base = "login";
					$message = '<p>You must be logged in to view that page.</p>';
				}
			break;

// add check for equivalent passwords
		case 'registration':
			 if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			 	{
					if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) 
						{
							if (($_POST['password']) !== ($_POST['r_password'])) //unmatching passwords
							{
								$message = "<p> Your passwords do not match.  Please try again!</p>";
							} else // correct
								{
									$message = "<p> You have successfully registered! To login, click <a href = 'login.php'>here</a></p>";
								}
						} else 
							{  //Forgot a field
								$message ='<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
							}
				}
			break;

		case 'login':
			if ($_SERVER['REQUEST_METHOD'] == 'POST') 
				{
					if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) 
						{
							if ( (strtolower($_POST['username']) == 'exampleuser') && ($_POST['password'] == 'testpass') ) 
								{ //Correct!
									$_SESSION['loggedin'] = '1';
									$page_base = "home";
									$message = "Login successful!";
								} else 
									{ // Incorrect!
										$message = '<p>The submitted username and password do not match those on file!<br />Go back and try again.</p>';
									} 

						} else 
							{  //Forgot a field
								$message = '<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
							} 
				}
				break;

		case 'logout':
			if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1'))
				{
					$page_base = "login";
					$message = '<p>You must be logged in to view that page.</p>';
				}
			break;
	}


if ($page_base == 'login' || $page_base == 'registration')
	{
		/* This script defines and calls a function that creates a sticky text input. */
		// This function makes a sticky text input.

			function make_text_input($name, $label, $size = 20)
					{
						// Begin a paragraph and a label: 
						print '<p><label>' . $label . ': ';

						// Begin the input:
						print '<input tyep="text" name="' . $name . '" size="' . $size . '" ';

						//Add the value:
						if (isset($_POST[$name])) 
							{
								print ' value="' . htmlspecialchars ($_POST[$name]) . '"';
							} else if (isset($_GET[$name]))
								{
									print ' value="' . htmlspecialchars ($_GET[$name]) . '"';
								}

						// Complete the input, the label and the paragraph:
						print ' /></label></p>';
					}
	}

//login test, if successful the session variable "LoggedIn" should be set to "1". 
//If unsuccessful, the login page should be displayed again and a general login failure message displays
/* if ($page_base == 'login' && $_SERVER['REQUEST_METHOD'] == 'POST') {
	if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) {

		if ( (strtolower($_POST['username']) == 'exampleuser') && ($_POST['password'] == 'testpass') ) { //Correct!
			$_SESSION['loggedin'] = '1';
			$page_base = "home";
			$message = "Login successful!";

		} else { // Incorrect!
			$message = '<p>The submitted email address and password do not match those on file!<br />Go back and try again.</p>';
		} 

	} else {  //Forgot a field
		$message = '<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
	} 

} else if ($page_base == 'home' || $page_base == 'contact' || $page_base == 'profile') {

	if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1')){
		$message = '<p>You must be logged in to view that page.</p>';
		$page_base = "login";
	}
} else if ($page_base =='registration') {
	 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {
			$message = "<p> You have successfully registered! To login, click <a href = 'login.php'>here</a></p>";

		} else {  //Forgot a field
			$message ='<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
		} 
	}
} else if ($page_base == 'logout') {
	unset($_SESSION);
	$_SESSION = array();
	$page_base = "login";
	$message = "<p> Thank you for visiting my site! Come again Soon! </p>";
} */

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		 <link rel="stylesheet" type="text/css" href="css/style.css" />
		<title> My Super Awesome Website </title>
	</head>
	<body>
	<header>
		<h2> My Super Awesome Website </h2>
		<nav>
		<?php if ($page_base == "home" || $page_base == "contact" || $page_base == "profile") { ?>
				<ul>
				<li><a <?php if ($page_base == "home") echo "class='active'" ?> href='home.php'>Home</a></li>
				<li><a <?php if ($page_base == "profile") echo "class='active'" ?> href='profile.php'>Profile</a></li>
				<li><a <?php if ($page_base == "contact") echo "class='active'" ?> href='contact.php'>Contact</a></li>
				<li><a <?php if ($page_base == "logout") echo "class='active'" ?> href='logout.php'>Logout</a></li>
				</ul>
		<?php } else {
				echo "Login and Registration Pages";
			}
		?>
	</nav>
	</header>
	<section>
		<h2> test section header </h2>
		<?php echo $message; ?>
		<!-- main page content -->
		<?php include_once "includes/" . $page_base . ".inc"; ?>

	</section>
	<aside>
		<h2> test aside header </h2>
		<!-- login form and registration form, profile info -->
		helpful side bar content
	</aside>
	<footer>
		<p> <!-- copywrite goes here --> </p>
		<p>Contact information: <a href="mailto:someone@example.com"> someone@example.com</a>. </p>
	</footer>
	</body>
</html>

