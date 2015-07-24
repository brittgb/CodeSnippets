<?php
/**
 * contact.php is a postback application designed to provide a 
 * contact form for users to email our clients.  contact.php references 
 * recaptchalib.php as an include file which provides all the web service plumbing 
 * to connect and serve up the CAPTCHA image and verify we have a human entering data.
 *
 * See document in package for installation instructions.
 *
 * @package nmCAPTCHA
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 2.1 2014/01/20
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

# For each customer/domain, get a key from https://www.google.com/recaptcha/admin#whyrecaptcha (DON'T LET A CUSTOMER USE YOUR KEY) 
# Seattle Central edison ONLY reCAPTCHA keys are below:
$publickey = "6Lf8FMkSAAAAAIR0DTQO4f0zjP-hlyBVcVTjRNB-";
$privatekey = "6Lf8FMkSAAAAAKsfveeLDuVJBWTNOm8PvRqL9lNm";

#EDIT THE FOLLOWING:
$toAddress = "horsey01@seattlecentral.edu";  //place your/your client's email address here - EDISON/ZEPHIR WILL ONLY EMAIL seattlecentral.edu ADDRESSES!
$toName = "JIMI HENDRIX"; //place your client's name here
$website = "GUITAR GODZ";  //place NAME of your client's website here
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$recaptchaTheme = "white"; //options are 'white', 'black', 'clean' or none (empty)
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
#--------------END CONFIG AREA ------------------------#
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
if (isset($_POST["recaptcha_response_field"]))
{# Check for reCAPTCHA response
    $resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
	if ($resp->is_valid)
	{#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
         handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);        
         #Here we can enter the data sent into a database in a later version of this file
?>
	<!-- START HTML THANK YOU MESSAGE -->
	<div class="contact-feedback">
		<h2>Your Comments Have Been Received!</h2>
		<p>Thanks for the input!</p>
		<p>We'll respond via email within 48 hours, if you requested information.</p>
	</div>    
    <!-- END HTML THANK YOU MESSAGE -->        
<?php
    }else{#reCATPCHA response says data not valid - prepare for feedback
            $error = $resp->error;
			$feedback = dateFeedback($dateFeedback);
            send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }
}
if(!isset($_POST["recaptcha_response_field"])|| $error != "")
{#show form, either for first time, or if data not valid per reCAPTCHA  
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
			How Did You Hear About Us?:<br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
				<option value="Phone">Phone</option>
				<option value="Web">Web</option>
				<option value="Magazine">Magazine</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
			<input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
			<input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
		</label>
	</div>	
	<div>
		<?php 
		echo $feedback;
		echo recaptcha_get_html($publickey, $error); 
		?>
	</div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
<?php
}
?>