<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Josefin+Sans|Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
		<title><?=$myTitle?></title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<?php include 'header.php'; ?>
	<?php include 'navigation.php'; ?>

	<?php
		switch(THIS_PAGE)
			{
				case "index.php":
				$myTitle = "Britt Barcroft Yoga";
				break;

				case "blog.php":
				$myTitle = "Britt Barcroft Blog";
				break;

				case "services.php":
				$myTitle = "Britt's Yoga Services";
				break;

				case "orgs.php":
				$myTitle = "Yoga for Organizations";

				case "about.php":
				$myTitle = "About Britt";
				break;

				case "contact.php":
				$myTitle = "Contact Britt";
				break;

				default:
				$myTitle = THIS_PAGE;
			}
	?>