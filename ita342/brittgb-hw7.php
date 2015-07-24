<!DOCTYPE html>
<html>
	<head>
		<title>Assignment 7</title>
		<link rel="stylesheet" type="text/css" href="brittgb-hw7.css" />
	</head>
	<?php

		$connection = mysql_connect("parshall.ovid.u.washington.edu:3131", "brittgb", "fud794zf");

		if(!$connection) 
			{
				die ("Connection to database failed." . mysql_error());
			}

		mysql_select_db("brittgb");

		$result = mysql_query
		("SELECT hp.name, hp.email, hc.name AS company
			FROM HomeworkPhotographer hp 
			INNER JOIN HomeworkCompany hc 
			ON hp.COMPANYID = hc.COMPANYID");

		if ($result) 
		{
			echo '<table align="center" cellspacing="2" cellpadding="2" width="50%">
				<tr><td align="left"><b>Photographer Name</b></td><td align="left"><b>Email</b></td>
				<td align="left"><b>Company</b></td></tr>';

			$i = 0;
			while ($row = mysql_fetch_array($result))
			{	
				$email = (isset($row['email']) && $row['email'] != null) ? $row['email'] : 'N/A';
				echo ($i % 2)?'<tr class="odd">':'<tr class="even">';
				echo '<td align="left">' 
				. $row['name'] 
				. '</td><td align="left">' 
				. $email
				.'</td><td align="left">' 
				. $row['company']
				. '</td></tr>';
				$i++;
			}

			echo '</table>';
		}

	?>
</html>