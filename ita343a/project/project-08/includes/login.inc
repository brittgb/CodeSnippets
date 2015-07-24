		<h2> Login Page </h2>
		<!-- main page content -->
		<p>
		Hi there, how are you? Please login here:
		</p>

		<div style="color:red;font-weight:bold">
			<span id="formerrors">&nbsp;</span><br /><br />
		</div>

		<form action="login.php" method="post">
		<p>User Name: <input type="text" name="username" size="20" /></p>
		<p>Password: <input type="password" name="password" size="20" /></p>
		<input type="submit" name="submit" value="Log Me In!" />
		</form>

		<p>
			Not registered? Click <a href="registration.php"> here</a> to do so!
		</p>

		<script src="js/login.js"></script>
	