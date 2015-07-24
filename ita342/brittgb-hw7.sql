homework photographer table w/ email and company

$connection = ("ovid.u.washington.edu:5611", "brittgb", "llwruBbj1")

if(!$connection) 
	{
		die ("Connection to database failed." . mysql_error());
	}

mysql_select_db("databasename");

$result = mysql_quary("SELECT * FROM HomeworkPhotographer")
while ($row = mysql_fetch_array($result))
	{	
		echo '<tr><td align="left">' 
		. $row['name'] 
		. '</td><td align="left">' 
		. $row['email']
		. '</td><td align="left">' 
		. $row['COMPANYID']
		. '</td></tr>';
	}

