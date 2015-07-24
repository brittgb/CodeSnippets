<?php // Script 9.3 - customize.php #2
//session_start();

//apply user's preferences to itself. (take into account the fact that cookies aren't immediately available)
//on first access, customize.php uses default values, then a selection is made, and the page reloads.
//close the browser, and on re-accessing the page the $_COOKIE values are applied
//changing the settings again reloads the page and accesses the $_POST array to update the cookie. 
//make the form sticky so that it reflects the user's current choices

// Handle the form if it has been submitted:
$font_size = "";
$font_color = "";

if (isset($_POST['font_size'], $_POST['font_color'])) 
	{
		// Send the cookies:
		setcookie('font_size', $_POST['font_size'], time()+10000000, '/');
		setcookie('font_color', $_POST['font_color'], time()+10000000, '/');

		//reload the page: 
		header('Location: customize.php');
	}

if (isset($_COOKIE['font_size'])){
		$font_size = ($_COOKIE['font_size']);
		$font_color = ($_COOKIE['font_color']);
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Customize Your Settings</title>
	<style type="text/css">
		body {
			<?php
				// Check for a font_size value:
			if (isset($_COOKIE['font_size'])) 
				{
					print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";		
				} 
			else 
				{
					print "\t\tfont-size: medium;";
				}


			// Check for a font_color value:
			if (isset($_COOKIE['font_color'])) 
				{
					print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
				} 
			else 
				{
					print "\t\tcolor: #000;";
				}
			?>
		}
	</style>
</head>
<body>
<p>Use this form to set your preferences:</p>

<form action="customize.php" method="post">
	<select name="font_size">
		<option value="">Font Size</option>
		<option <?php if ($font_size == "xx-small") echo 'selected="selected"'; ?> value="xx-small">xx-small</option>
		<option <?php if ($font_size == "x-small") echo 'selected="selected"'; ?> value="x-small">x-small</option>
		<option <?php if ($font_size == "small") echo 'selected="selected"'; ?> value="small">small</option>
		<option <?php if ($font_size == "medium") echo 'selected="selected"'; ?> value="medium">medium</option>
		<option <?php if ($font_size == "large") echo 'selected="selected"'; ?> value="large">large</option>
		<option <?php if ($font_size == "x-large") echo 'selected="selected"'; ?> value="x-large">x-large</option>
		<option <?php if ($font_size == "xx-large") echo 'selected="selected"'; ?> value="xx-large">xx-large</option>
	</select>
		<select name="font_color">
		<option value="">Font Color</option>
		<option <?php if ($font_color == "999") echo 'selected="selected"'; ?> value="999">Gray</option>
		<option <?php if ($font_color == "0c0") echo 'selected="selected"'; ?> value="0c0">Green</option>
		<option <?php if ($font_color == "00f") echo 'selected="selected"'; ?> value="00f">Blue</option>
		<option <?php if ($font_color == "c00") echo 'selected="selected"'; ?> value="c00">Red</option>
		<option <?php if ($font_color == "000") echo 'selected="selected"'; ?> value="000">Black</option>
	</select>
	<input type="submit" name="submit" value="Set My Preferences" />
</form>
<p><a href="reset.php">Reset Your Settings</a></p>
</body>
</html>