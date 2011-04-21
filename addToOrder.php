<!--addToOrder.php
-->

<?php
	include "DB.php";
	$orderID = $_POST['orderID'];
	$type = $_POST['type'];
	//let's scrape for things to insert
	$query = "SELECT cardID, orderFormCardID, cost FROM swimteam.giftcards";
	if ($type == 'all' or $type == null){
		//get all of em!
		$query = $query.";";
	}else{
		$query = $query." WHERE `type` = '$type';";
	}
	$result = mysqli_query($db, $query);
	while($row = mysqli_fetch_array($result)){
		$id = $row['cardID'];
		$quantity = $_POST["$id"];
		if ($quantity > 0){//new item to insert into itemized order
			$cost = $row['cost'];
			$insertQ = "INSERT INTO itemizedorder VALUES('', '$id', '$orderID', '$quantity', '$cost');";
			$insertR = mysqli_query($db,$insertQ);
		}
	}
?>

<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=generateOrder.php">
</head>
</head> 