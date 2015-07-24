<?php
session_start();
$page_base = basename($_SERVER['PHP_SELF'],".php");

switch ($page_base)
	{
		case 'home':
			if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1'))
				{
					$page_base = "login";
					$message = '<p class="message">You must be logged in to view that page.</p>';
				} else
					{
						$section_head = "Welcome to the Super Awesome Website homepage!";
					}
			break;


		case 'profile':
			if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1'))
				{
					$page_base = "login";
					$message = '<p class="message">You must be logged in to view that page.</p>';
				} else
					{
						$section_head = "Profile Information";
					}
			break;


		case 'contact':
			if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1'))
				{
					$page_base = "login";
					$message = '<p class="message">You must be logged in to view that page.</p>';
				}
			break;

		case 'registration':
			 if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			 	{
					if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) 
						{
							if (($_POST['password']) !== ($_POST['r_password'])) //unmatching passwords
							{
								$message = "<p class='message'> Your passwords do not match.  Please try again!</p>";
							} else // correct
								{
									if (is_writable('uploads') && move_uploaded_file ($_FILES['avatar']['tmp_name'], "avatars/{$_FILES['avatar']['username']}"))  //move avatar image
										{ 
											//add user info to database
											file_put_contents('data/users.txt', (date(U), $_POST['username'], $_POST['password']) . PHP_EOL, FILE_APPEND | LOCK_EX);
											file_put_contents('data/profiles.txt', (date(U), $_POST['f_name'], $_POST['l_name'], $_POST['email'], $_POST['phone']) . PHP_EOL, FILE_APPEND | LOCK_EX); //add AVATAR NAME
											$message = "<p class='message'> You have successfully registered! To login, click <a href = 'login.php'>here</a></p>";
										} else 
											{ // Problem with the avatar upload!
												print '<p style="color: red;">Your file could not be uploaded because: ';
														// Print a message based upon the error:
												switch ($_FILES['avatar']['error']) 
													{
														case 1:
															print 'The file exceeds the upload_max_filesize setting in php.ini';
															break;
														case 2:
															print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
															break;
														case 3:
															print 'The file was only partially uploaded';
															break;
														case 4:
															print 'No file was uploaded';
															break;
														case 6:
															print 'The temporary folder does not exist.';
															break;
														default:
															print 'Something unforeseen happened.';
															break;
													}
											}
						} else 
							{  //Forgot a field
								$message ='<p class="message">Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
							}
				}
			break;

		case 'login':
			if ($_SERVER['REQUEST_METHOD'] == 'POST') 
				{
					$file = fopen('data/profiles.txt', 'rw');
					while (($line = fgetcsv($file)) !== FALSE)
							{
								if $line[1] == ($_POST['username']) && if ($line[2] == $_POST['password'])
									{
										$_SESSION['loggedin'] = '1';
										$page_base = "home";
										$message = "<p class='message'>Login successful!</p>";

										$_SESSION["UserData"] = array
											(
												["UserName"]="exampleuser";
												["Password"]="testpass";
												["FirstName"]="Suzie";
												["LastName"]="Examplename";
												["UserId"] = date(U);
												["EmailAddress"] = "me@exampleuser.com";
												["PhoneNumber"] = "206.222.3344";
												["AvatarImageName"] = "??";
											)
									}
								else
									{
										$message = '<p class="message">Your username or password do not match our files!<br />Go back and try again.</p>'
									}
							fclose($file);
				}
				break;

		case 'logout':
			if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == '1'))
				{
					$page_base = "login";
					$message = "<p class='message'>You must be logged in to view that page.</p>";
				} else 
					{
						unset($_SESSION);
						$_SESSION = array();
						$page_base = "login";
						$message = "<p class='message'> Thank you for visiting my site! Come again Soon! </p>";
					}
			break;
	}

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
		<br />
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

