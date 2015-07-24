<!DOCTYPE html>
<html>

	<head>
		<link href='http://fonts.googleapis.com/css?family==Open+Sans|Bad+Script|EB+Garamond' rel='stylesheet' type='text/css'>
		<title>Britt Barcroft's Portfolio</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body>

		<div class = "footer_wrapper">
			<div class = "bottom_nav_wrapper">

				<header class="site_banner">

					<div class="name"><h1>Britt</h1></div>  
					<img class="logo" src="images/logo.png" height="120px" alt=""> 
					<div class="name"><h1>Barcroft</h1></div>
						
				</header>

				<section class = "main_background">

						<nav>
							<ul>
								<li><a href="about.php" >About Me</a></li>
								<li><a href="skillsoverview.php">Skills Overview</a></li>
								<li><a href="resume.php">Resume</a></li>
								<li><a href="worksamples.php">Work Samples</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>

						<section class = "main_content">
							<div class = "background"></div>
							<div class = "text">
								<h2>Hello, I'm Britt.</h2>
								<p>
									<br />
									I'm a front-end developer and nature lover. <br /><br />

									Web design and development engages my mind in a similar way to music, 
									and I treat each language as a new instrument to learn. <br /><br />

									I'm creative and enterprising, always looking for ways to evolve and to live more fully.  
									As an employee you'll find I can happily learn to do just about anything, 
									much faster than you'd expect.  Hire me, and you'll learn the definition of “hard working”.  <br /><br />

									My prior work in social services has taught me to ask the tough questions 
									and to build a vision in all the work that I do.  My websites aren't just code, 
									they are on a mission.  Care to join? <br /><br />
								</p>
							</div>
							
						</section>

					<div class="bottom_nav_push"></div> <!-- empty div to push sticky bottom nav -->

			</div> <!-- end of "bottom_nav_wrapper" div -->

					<section class="bottom_nav">

							<div class="copywrite">
								&copy; 
								<?php 
									date_default_timezone_set('UTC');
									echo date("Y");
								?> 
								Britt Barcroft
								<a href="#">Disclaimer/Privacy Notice</a>
							</div> <!-- end of "copywrite" div -->

							<ul>
								<li><a href="about.php" >About Me</a></li>
								<li><a href="skillsoverview.php">Skills Overview</a></li>
								<li><a href="resume.php">Resume</a></li>
								<li><a href="worksamples.php">Work Samples</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>

					</section> <!-- end of "bottom_nav" section -->

				</section> <!-- end of "main_background" div. This ends here so that the bottom nav will display over the background photo -->
			<div class="footer_push"></div>
		</div> <!-- end of "footer_wrapper" div -->

		<footer>
			<!-- <img src="images/footer.gif" width="100%" alt="footer texture"> -->
		</footer>

	</body>
</html>