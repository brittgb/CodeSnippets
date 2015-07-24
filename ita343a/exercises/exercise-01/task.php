<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Your Feedback</title>
</head>
<body>
<?php // Script 3.3 handle_form.php 

// This page receives the data from feedback.html.
// It will receive: title, name, email, response, comments, and submit in $_POST.

// Create shorthand versions of the variables:
$title = $_POST['title'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address_line1 = $_POST ['address_line1'];
$address_line2 = $_POST ['address_line2'];
$city_state = $_POST ['city_state'];
$zip = $_POST ['zip'];
$comments = $_POST['comments'];

// Print the received data:
print "<p>Thank you, $title $name, for your comments.</p>
<p>You stated the following:</p>
<p>Phone: $phone </p>
<p> Email: $email </p>
<p> Address for lesson (optional): $address_line1, $address_line2, $city_state, $zip </p>
<p> $comments </p>
<p> If any of this is incorrect, feel free to resubmit.  Thank you, and I look forward to getting in touch with you! </p>";

?>
</body>
</html>