<?php
 /*
 * no-captcha.php is a CAPTCHA free version of contact.php, a postback application designed to provide a 
 * contact form for users to email our clients.  contact.php references 
 * recaptchalib.php as an include file which provides all the web service plumbing 
 * to connect and serve up the CAPTCHA image and verify we have a human entering data.
 *
 * no-captcha.php is a version that does not use reCAPTCHA which is seen a security violation to free hosting companies
 *
 * See document in package for installation instructions.
 *
 * @package nmCAPTCHA
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 2.01 2013/01/28
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "horsey01@seattlecentral.edu";  //place your/your client's email address here - EDISON/ZEPHIR WILL ONLY EMAIL seattlecentral.edu ADDRESSES!
$toName = "JIMI HENDRIX"; //place your client's name here
$website = "GUITAR GODZ";  //place NAME of your client's website here
$sendEmail = true; //if true, will send an email, otherwise just show user data.
#--------------END CONFIG AREA ------------------------#
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
if (isset($_POST["Email"]))
{# Attempt to send email
          handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);#process form elements, format and send email.
         #Here we can enter the data sent into a database in a later version of this file
?>
        <!-- format HTML here to be your 'thank you' message -->
		<div align="center"><h2>Your Comments Have Been Received!</h2></div>
        <div align="center">Thanks for the input!</div>
        <div align="center">We'll respond via email within 48 hours, if you requested information.</div>
<?php
}else{#show form   
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
<?php
}
?>
