<!--
updateSwimmerFamilyController.php
patrick connelly

-->

<?php
	include "DB.php";
	$famID = $_SESSION['familyID'];
	$first = mysqli_real_escape_string($db,$_POST['swimmerFirstNameNew']);
	$mi = mysqli_real_escape_string($db,$_POST['swimmerMiddleInitialNew']);
	$last = mysqli_real_escape_string($db,$_POST['swimmerLastNameNew']);
	$birthday = mysqli_real_escape_string($db,$_POST['birthdayNew']);
	$group = mysqli_real_escape_string($db,$_POST['swimGroupNew']);

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
