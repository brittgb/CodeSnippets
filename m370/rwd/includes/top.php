<?php include 'switch.php'; ?>

<!DOCTYPE html>
<html>
<head>
 <title><?=$myTitle?></title>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width" />
 <link rel="stylesheet"  type="text/css" href="css/alice.css" />
 <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
 <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>

<body>
<header>
  <img src="images/<?=$myPic?>" class="icon" alt="" />
  <h2 class="pageid"><?=$myPageID?></h2>
  <h1>Alice in Wonderland</h1>
  <!-- START NAVIGATION (Main) -->
  <nav class="main center">
	<ul>
    <?php
      echo makeLinks($nav1);
    ?>
<!--
		<li class="current"><a href="index.php">Home</a></li>
    <li><a href="alice.php">Alice</a></li>
    <li><a href="queen.php">The Queen</a></li>
    <li><a href="rabbit.php">The Rabbit</a></li>
    <li><a href="madhatter.php">The Hatter</a></li>
    <li><a href="gallery.php">The Gallery</a></li>  -->
	</ul>
  </nav>
  <!-- END NAVIGATION (Main) -->
</header>  