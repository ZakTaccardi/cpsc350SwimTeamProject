<!--
	confirmOrderController.php
	updates user's currentAFP
-->

<?php
	include "DB.php";
	$id = $_POST['orderID'];
	$famID = $_POST['famID'];
	$query = "SELECT gc.percent, io.quantityOrdered quantity, io.cost FROM itemizedorder io 
			  INNER JOIN giftcards gc ON io.cardID = gc.cardID AND io.orderID = '$id';";
	$result = mysqli_query($db, $query);
	$total_return = 0;
	while ($row = mysqli_fetch_array($result)){
		//calculate the percent return for each card
		$percent = $row['percent'] / 100;
		$quantity = $row['quantity'];
		$cost = $row['cost'];
		$return = ($quantity * $cost) * $percent;
		$total_return += $return;
	}
	
	//round down (sorry, just want it to be accurate)
	$reduction = round($total_return,2, PHP_ROUND_HALF_DOWN);
	
	$currentAFPQ = "SELECT currentAFP FROM families WHERE familyID = '$famID';";
	$res = mysqli_query($db,$currentAFPQ);
	$current = 0;
	while($row = mysqli_fetch_array($res)){
		$current = $row['currentAFP'];
	}
	echo "debt: $current <br/>total return:$total_return<br/>";
	
	$update = $current - $reduction;
	$reductionQ = "UPDATE families SET currentAFP = '$update' WHERE familyID = '$famID';";
	echo $reductionQ."<br/>";
	$r = mysqli_query($db, $reductionQ);
	$date = date('Y-m-d',time());
	$confirmedQ = "UPDATE `order` SET dateConfirmed = '$date' WHERE orderID = '$id';";
	$r = mysqli_query($db, $confirmedQ);
	echo $confirmedQ;
	
?>

<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=confirmOrder.php">
</head>