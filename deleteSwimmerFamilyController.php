<!--
	deleteSwimmerFamilyController.php
	patrick connelly
-->
<?php
	include "DB.php";
	$id = $_POST['swimmerID'];
	$q = "DELETE FROM swimmers WHERE swimmerID = $id";
	$r = mysqli_query($db,$q);
?>
<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=deleteSwimmerFamily.php">
</head>