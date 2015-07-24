<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Contact Simple</title>
	<meta name="viewport" content="initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <style type="text/css">
		* {padding:0; margin:0;}
		html {background-color:#ccc;}
		body {
			font-family: Arial, Helvetica, sans-serif;
			max-width:960px; /* keeps from getting too large on wide screen */
			width:90%; /* shrink to fit screen */
			margin:auto; /* center in html element */
			background-color:#fff;
			padding:1%;
			min-height:100%; /* keeps from getting too large on wide screen */
			}
		p {margin:10px;}
		h1,h2,h3,h4,h5,h6{
			font-weight:normal;
			margin:10px;
			}
		h1.masthead {margin-top:0;}
		footer {
			text-align:center;
			clear:both; /* ride below all items */
			}
		nav{
			text-align:center; /* centers the nav */
		}
		
		nav ul {
				list-style:none; /* removes the bullets */
			}
		nav ul li
			{
				display:inline-block; /* makes horizontal, but able to declare margins */
				margin:0 2%; /* margin left-right, gets smaller as necessary */
			}
		nav a:hover{
			text-decoration: none;
		}
		
		/* reCAPTCHA styles */
		
		/* writes to small text above reCAPTCHA upon failure */
		.dateFeedback{
			font-style:italic;
			font-size:70%;
			font-weight:bold;
			color:#f00;
		}
		body {
			min-width:320px; /* reCAPTCHA is 318px */
		}
		/* these 2 rules reposition the reCAPTCHA widget a bit to the left */
		#recaptcha_widget_div{position:relative;}
		#recaptcha_area {
			position:relative;
			left:-4px;
		}
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header role="banner">
		<h1 class="masthead">Our Website</h1>
		<nav>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
				<li><a href="#">Link 6</a></li>
			</ul>
		</nav>
	</header>
    <main role="main">
	 <header><h3>Contact Us!</h3></header>
	<?php
		include 'includes/contact-simple.php';
	?>
	 <p class="clear-recaptcha"></p>
     </main>
    <footer>
      <small>&copy; 2013, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
</body>
</html>
