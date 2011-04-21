<?php
session_start();
include "DB.php";
include('header.php');
?>
<html>
<body>
<?php

$email = $_POST["email"];
$password = $_POST["password"];
$parentFirstName = $_POST["parentFirstName"];
$parentLastName = $_POST["parentLastName"];
$yearJoined = $_POST["yearJoined"];
$streetAddress = $_POST["streetAddress"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$homePhone = $_POST["homePhone"];
$workPhone = $_POST["workPhone"];
$cellPhone = $_POST["cellPhone"];
$accessLevel = $_POST["accessLevel"];
$overallAFD = $_POST["overallAFD"];
$currentAFD = $_POST["currentAFD"];

#$email
#$password
#$parentFirstName
#$parentLastName
#$yearJoined
#$streetAddress
#$city
#$state
#$zip
#$homePhone
#$workPhone
#$cellPhone
#$accessLevel
#$overallAFD
#$currentAFD
	$query = "INSERT INTO families VALUES ('','$email', SHA('$password'), '$parentFirstName', '$parentLastName', '$yearJoined', '$streetAddress', '$city', '$state', '$zip', '$homePhone', '$workPhone', '$cellPhone', '$accessLevel', '$overallAFD', '$currentAFD');";
	mysqli_query($db, $query);
	

include('siteNavigator.php');
echo "<H1>You have successfully registered the " . $parentLastName . " family.</H1>";
?>

<!-- Page info goes below-->



</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>

