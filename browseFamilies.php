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
<h1>View Families</h1>
<h2>Below is a list of all the families currently in the system.</h2>
<?php
// change password, browse giftcards, update account information, place an order 
$query = "SELECT * FROM families ORDER BY parentLastName, parentFirstName";

$result = mysqli_query($db, $query);

echo "<table>\n<tr><th><h3 style=\"text-align:left\">First Name</h3></th>
					<th><h3 style=\"text-align:left\">Last Name</h3></th>
					<th><h3 style=\"text-align:left\">Year Joined</h3></th>
					<th><h3 style=\"text-align:left\">Street</h3></th>
					<th><h3 style=\"text-align:left\">City</h3></th>
					<th><h3 style=\"text-align:left\">State</h3></th>
					<th><h3 style=\"text-align:left\">Zip Code</h3></th>
					<th><h3 style=\"text-align:left\">Home Phone</h3></th>
					<th><h3 style=\"text-align:left\">Work Phone</h3></th>
					<th><h3 style=\"text-align:left\">Cell Phone</h3></th>
					
					</tr>\n\n";

while($row = mysqli_fetch_array($result)) 
{
	$fname = $row['parentFirstName'];
	$lname = $row['parentLastName'];
	$yearJoined = $row['yearJoined'];
	$streetAddress = $row['streetAddress'];
	$city = $row['city'];
	$state = $row['state'];
	$zip = $row['zip'];
	$homePhone = $row['homePhone'];
	$workPhone = $row['workPhone'];
	$cellPhone = $row['cellPhone'];
	
	echo "<tr><td>$fname</td>
			<td>$lname</td>
			<td>$yearJoined</td>
			<td>$streetAddress</td>
			<td>$city</td>
			<td>$state</td>
			<td>$zip</td>
			<td>$homePhone</td>
			<td>$workPhone</td>
			<td>$cellPhone</td>
			
			</tr>\n";
}
echo "</table>\n"; 

?>
</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>