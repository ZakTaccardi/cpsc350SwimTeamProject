<?php 
session_start();
include('header.php');
?>
<html>
<body>
<?php
include('siteNavigator.php');
?>

<!-- Page info goes below-->
<h1>View Gift Cards</h1>
<h2>Below is a list of all the gift cards currently available for purchase</h2>
<?php
// change password, browse giftcards, update account information, place an order 
$query = "SELECT * FROM giftCards ORDER BY vendor";

$result = mysqli_query($db, $query);

echo "<table>\n<tr><th><h3 style=\"text-align:left\">Card Name</h3></th><th><h3 style=\"text-align:left\">Cost</h3></th><th><h3 style=\"text-align:left\">Percent Awarded</h3></th></tr>\n\n";

while($row = mysqli_fetch_array($result)) 
{
	$name = $row['vendor'];
	$cost = $row['cost'];
	$percent = $row['percent'];
	echo "<tr><td width = 1000>$name</td><td width = 1000>\$$cost</td><td width = 800>$percent%</td><td width = 500></tr>\n";
}
echo "</table>\n"; 



?>


</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>