<?php
// change password, browse giftcards, update account information, place an order 
include ('DB.php');
include ('siteNavigator.php');

$query = "SELECT * FROM gift_cards ORDER BY name";

$result = mysqli_query($db, $query);

echo "<table>\n<tr><th>Card Name</th><th>Cost</th><th>Percent Awarded</th></tr>\n\n";

while($row = mysqli_fetch_array($result)) 
{
	$name = $row['name'];
	$cost = $row['cost'];
	$percent = $row['percent'];
	echo "<tr><td width = 1000>$name</td><td width = 1000>\$$cost</td><td width = 800>$percent%</td><td width = 500></tr>\n";
}
echo "</table>\n"; 



?>