<form method="post">
<input type="text" name="donorname" value="<?=$_POST["donorname"]?>" />
<input type="submit" value="Search" />
</form>
<?php

//I didn't change anything in this file either, but I'd like to point out that if I was turning DONORID
//into a dropdown for any reason, I'd make sure to encrypt the values so the user can't modify them.


// Connect to the database
require "database.inc";

// run the query
$result = $mysqli->query("SELECT * FROM Donor WHERE name like '%" . $_POST['donorname'] . "%'");

// Check that there were results
if(!$result){
  die("No results " . $mysqli->error);
}

// Print number of matching donors
echo "There were ", $result->num_rows,
     " Matching Donors.<br />";

// process results
while ($row = $result->fetch_assoc()) {
  echo "<form method='post' action='hw8-update-insecure.php'>";
  echo "Donor Info<br />";
  echo "<input type='hidden' name='donorid' value='", $row["DONORID"], "'>";
  echo "Donor Name: <input type='text' name='donorname' value ='", $row["name"], "'><br />";
  echo "Donor Email: <input type='text' name='email' value ='", $row["email"], "'><br />";
  echo "Donor Phone Number: <input type='text' name='phone' value='", $row["phone"], "'><br />";
  echo "Donor Address: <input type='text' name='address' value='", $row["address"], "'><br />";
  echo "<input type='submit' value='Save'></form>";
}
 
?>