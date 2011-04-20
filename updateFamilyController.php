<!--
	updateFamilyController.php
-->

<?php
	include "DB.php";
	$famID = $_POST['famID'];
	$email = mysqli_real_escape_string($db,$_POST['emailNew']);
	$first = mysqli_real_escape_string($db, $_POST['parentFirstNameNew']);
	$last = mysqli_real_escape_string($db, $_POST['parentLastNameNew']);
	$add = mysqli_real_escape_string($db,$_POST['streetAddressNew']);
	$city = mysqli_real_escape_string($db,$_POST['cityNew']);
	$state = mysqli_real_escape_string($db,$_POST['stateNew']);
	$zip = mysqli_real_escape_string($db,$_POST['zipNew']);
	$hphone= mysqli_real_escape_string($db,$_POST['homePhoneNew']);
	$wphone= mysqli_real_escape_string($db,$_POST['workPhoneNew']);
	$cphone= mysqli_real_escape_string($db,$_POST['cellPhoneNew']);
	
	$q = "UPDATE families SET
		email = '$email',
		parentFirstName = '$first',
		parentLastName = '$last',
		streetAddress = '$add',
		city = '$city',
		state = '$state',
		zip = '$zip',
		homePhone = '$hphone',
		workPhone = '$wphone',
		cellPhone = '$cphone'
	WHERE familyID = $famID";
	$r = mysqli_query($db, $q);
?>
<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=updateFamily.php">
</head>