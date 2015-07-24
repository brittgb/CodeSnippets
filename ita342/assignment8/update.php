<?php
// Get value from HTML form
$photographerid = $_POST['photographerid'];
$photographername = $_POST['photographername'];
$email = $_POST['email'];
$companyid = (int) $_POST['companyid'];
 
// Connect using your username and password.
$connection = mysql_connect("parshall.ovid.u.washington.edu:3131","brittgb", "fud794zf");
if (!$connection) {
die("Error connecting to database " . mysql_error());
}
// Secure the data before it is used
$photographerid = mysql_real_escape_string($photographerid);
$photographername = mysql_real_escape_string($photographername);
$email= mysql_real_escape_string($email);
$companyid = mysql_real_escape_string($companyid);


// select the proper database
mysql_select_db("brittgb");

// Create the query
$email = !empty($email) ? "'$email'" : "NULL";
$photographername = !empty($photographername) ? "'$photographername'" : "NULL";
$companyid = !empty($companyid) ? "$companyid" : "NULL";


$result =
mysql_query("UPDATE HomeworkPhotographer SET name = $photographername,
email = $email, COMPANYID = '$companyid'  WHERE PHOTOGRAPHERID = '$photographerid'");

$num_rows = mysql_affected_rows();
echo $num_rows . " rows were updated";

?> 