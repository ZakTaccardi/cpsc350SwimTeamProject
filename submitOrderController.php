<?php 
session_start();
ob_start();
?>
<!--submitOrderController.php 
Author: Patrick Connelly
First Written:  1 Apr 2011
Last Modified: 8 Apr 2011
general purpose:
	user has clicked the submit button on the generateOrder.php page
		this page inserts the selections as an order into the database
		then re-directs to generate an excel spreadsheet of the order.


current issues:
-->


<?php
	include "DB.php";
	//order and itemized order have already been inserted
		//update the date and total of the order
	$id = $_POST['orderID'];
	$total = $_POST['total'];
	$date = date('Y-m-d',time());
	$updateQ = "UPDATE swimteam.order SET totalPaid = '$total', datePlaced = '$date' WHERE orderID = '$id'";
	//echo "$updateQ<br/>";
	$updateR = mysqli_query($db,$updateQ);
	
		//generate the order form
	
	/*
	
	
	//get all the id's so we can figure out what to insert into the order table//
	$query = "SELECT cardID, orderFormCardID, cost FROM swimteam.giftcards;";
	$result = mysqli_query($db, $query);
	//THESE ARE TO SEE IF WE NEED TO CREATE AN ORDER
	$orderID = -1;
	$orderTotal = 0;
		//iterate through the ids, compare with the $postID = $_POST['$id']
	  //if the $postID > 0, then insert into the db./
	//we iterate through all the gift cards and see if we found 
	//one that was designated as desired on the previous page
	//if it is, we create a new order, and move along to 
	//insert individual items into the itemized order table as well.
	while ($row = mysqli_fetch_array($result)){
		$id = $row['cardID'];
		$quantity = $_POST["$id"];
		if ($quantity > 0){
			echo "found item to insert:  $id) $quantity<br/>";
			$cost = $row['cost'];
			$total = $quantity * $cost;
			//keep a running total
			$orderTotal+=$total;
			
			//we need to set the order id for the first time
			if($orderID == -1){
				echo "creating a new order<br/>";
				$date = date('Y-m-d',time());
				echo "in if<br/>";
				//insert a new order!
				$famID = $_SESSION['familyID'];
				echo $famID."<br/>";
				$newOrderQuery = "INSERT INTO swimteam.order (familyID, datePlaced) VALUES ('$famID','$date');";
				echo $newOrderQuery."<br/>";
				$queryResult = mysqli_query($db, $newOrderQuery);
				$orderID = -2;
				
				//we use mysql_insert_id to get the last insertion id for the newest order, THIS ONE.
				$idQ = "SELECT LAST_INSERT_ID() as id FROM swimteam.order;";
				$res = mysqli_query($db, $idQ);
				$r = mysqli_fetch_array($res);
				$orderID = $r['id'];
			}
			//now we insert the current item into the itemizedOrder table
			$newItemizedOrderQuery = "INSERT INTO swimteam.itemizedorder VALUES ('', $id, $orderID, $quantity, $total);";
			$newItemizedOrderResult = mysqli_query($db, $newItemizedOrderQuery);
		}
		//this updates the order insertion after the total is computed.
		$updateOrderQuery = "UPDATE swimteam.order SET totalPaid = '$orderTotal' WHERE orderID = '$orderID';";
		$updateOrderResult = mysqli_query($db, $updateOrderQuery);
	}*/
?>

<!-- this code redirects to the next html page, generating the actual order form in excel -->
<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=generateOrderFormController.php">
</head>