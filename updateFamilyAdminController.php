<!--
	updateFamilyAdminController.php
	patrick connelly
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
	$oAFP= mysqli_real_escape_string($db, $_POST['overallAFPNew']);
	$cAFP=mysqli_real_escape_string($db, $_POST['currentAFPNew']);
	$aL = mysqli_real_escape_string($db, $_POST['accessLevelNew']);
	$yJoined = mysqli_real_escape_string($db, $_POST['yearJoinedNew']);
	
	
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
		cellPhone = '$cphone',
		yearJoined = '$yJoined',
		overallAFP = '$oAFP',
		currentAFP = '$cAFP',
		accessLevel = '$aL'
	WHERE familyID = $famID";
	$r = mysqli_query($db, $q);
?>
<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=updateFamilyAdmin.php">
</head>
?>