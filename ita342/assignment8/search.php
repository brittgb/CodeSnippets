<?php
// Get value from HTML form
$photographer = $_POST['photographer'];


// Connect using your username and password.
$connection = mysql_connect('parshall.ovid.u.washington.edu:3131', 'brittgb', 'fud794zf');
if (! $connection) 
{
	die('Error connecting to database ' .
	mysql_error());
}

// Secure the data before it is used
$photographer = mysql_real_escape_string($photographer);


// select the proper database (your username)
mysql_select_db('brittgb');

// run the query with the properly escaped string
$result = mysql_query(
"SELECT name, email, PHOTOGRAPHERID, COMPANYID
FROM HomeworkPhotographer  
WHERE name like '%$photographer%'"
);

// Check that there were results
if(!$result)
{
	die('No results ' . mysql_error());
}

// Print number of matching donors
echo 'There were ', mysql_num_rows($result), ' Matching Photographers<br /><br />';

// process results
while ($row = mysql_fetch_array($result)) 
{
	mysql_query("SELECT * FROM HomeworkCompany");
	$email = (isset($row['email']) && $row['email'] != null) ? $row['email'] : 'N/A';
	echo "<form method='post' action='update.php'>";
	echo "Photographer Info<br />";
	echo "<input type='hidden' name='photographerid' value='$row[PHOTOGRAPHERID]' />\n";
	echo "Photographer Name: <input type='text' name='photographername' value='$row[name]' /><br />\n";
	echo "Photographer Email: <input type='text' name='email' value='$row[email]' /><br />\n";
	echo "Company: <input type='text' name='companyid' value='$row[COMPANYID]' /><br />\n";
	echo "<input type='submit' value='Save' />\n</form><br /><br /><br />";
	}


?> 