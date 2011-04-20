<!--
updateSwimmerFamilyController.php
patrick connelly

-->

<?php
	include "DB.php";
	$famID = $_SESSION['familyID'];
	$first = $_POST['swimmerFirstNameNew'];
	$mi = $_POST['swimmerMiddleInitialNew'];
	$last = $_POST['swimmerLastNameNew'];
	$birthday = $_POST['birthdayNew'];
	$group = $_POST['swimGroupNew'];

	$swimmerID = -1;
	//how get?
	$swimmerID = $_POST['swimID'];
	$update = "UPDATE swimmers SET 
				swimmerFirstName = '$first',
				swimmerMiddleInitial = '$mi',
				swimmerLastName = '$last',
				birthday = '$birthday',
				swimGroup = '$group'
				WHERE swimmerID = '$swimmerID';";
	echo $update;
	$res = mysqli_query($db, $update);
?>
<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=updateSwimmerFamily.php">
</head>
