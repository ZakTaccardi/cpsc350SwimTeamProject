<!--addToOrder.php
-->

<?php
	include "DB.php";
	$orderID = $_POST['orderID'];
	$type = $_POST['type'];
	//let's scrape for things to insert
	$query = "SELECT cardID, orderFormCardID, cost FROM swimteam.giftcards WHERE `type` = '$type';";
	echo "searching through $type<br/>";
	$result = mysqli_query($db, $query);
	while($row = mysqli_fetch_array($result)){
		echo "in while<br/>";
		$id = $row['cardID'];
		$quantity = $_POST["$id"];
		echo "quantity: $quantity<br/>";
		if ($quantity > 0){//new item to insert into itemized order
			echo "found an item, inserting:<br/>";
			$cost = $row['cost'];
			$insertQ = "INSERT INTO itemizedorder VALUES('', '$id', '$orderID', '$quantity', '$cost');";
			echo "$insertQ<br/>";
			$insertR = mysqli_query($db,$insertQ);
		}
	}
?>

<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=generateOrder.php">
</head>