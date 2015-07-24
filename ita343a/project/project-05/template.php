<?php
$page_base = basename($_SERVER['PHP_SELF'],".php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		 <link rel="stylesheet" type="text/css" href="css/style.css" />
		<title> Home Page </title>
	</head>
	<body>
	<header>
		<h2> Home Page </h2>
		<nav>
		<?php if ($page_base == "home" || $page_base == "contact" || $page_base == "profile") { ?>
				<ul>
				<li><a <?php if ($page_base == "home") echo "class='active'" ?> href='home.php'>Home</a></li>
				<li><a <?php if ($page_base == "profile") echo "class='active'" ?> href='profile.php'>Profile</a></li>
				<li><a <?php if ($page_base == "contact") echo "class='active'" ?> href='contact.php'>Contact</a></li>
				</ul>
		<?php } else {
				echo "Login and Registration Pages";
			}
		?>
	</nav>
	</header>
	<section>
		<h2> test section header </h2>
		<!-- main page content -->
		<p>
			<?php include_once "includes/" . $page_base . ".inc"; ?>
		</p>
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

