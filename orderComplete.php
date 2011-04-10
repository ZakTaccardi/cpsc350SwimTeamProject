<?php 
session_start();
ob_start();
?>

<!--orderComplete.php 
need to further include:
	viewing older orders
-->

<?php
	include "DB.php";
	$userID = $_SESSION['familyID'];
	$query = "SELECT orderID FROM swimteam.order WHERE familyID = '$userID' ORDER BY orderID DESC LIMIT 1;";
	$result = mysqli_query($db,$query);
	while ($row = mysqli_fetch_array($result)){
		$orderID = $row['orderID'];
	}
	$name = $_SESSION['userLastName'];
	echo "<a href ='download.php?download_file=$name$orderID.csv'>Download here</a>"
?>
