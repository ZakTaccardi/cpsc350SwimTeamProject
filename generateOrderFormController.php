<?php 
session_start();
ob_start();
?>
<!-- generateOrderFormController.php
Author: Patrick Connelly
Created: 01 Apr 2011
Last modified:
General purpose:
	this file generates a .csv file that serves as a printable order form
		-spreadsheet copy stays on server for paperwork maintainence/tracking
		
Current issues:
	figure out how to get all the itemized order data
		still using .csv to get all i/o info for order form?
		
-->

<?php
	include "DB.php";
	//we use this in our queries.
	$userID = $_SESSION['familyID'];
	
	//this query gets the most recent order for the current user.
	$orderNumber = "";
	$phone = "";
	$name = "";
	
	$recentOrderQuery = "SELECT * FROM swimteam.order WHERE familyID = '$userID' ORDER BY orderID DESC LIMIT 1;";
	$recentOrderResult = mysqli_query($db, $recentOrderQuery); 
	while ($row = mysqli_fetch_array($recentOrderResult)){
		$orderID = $row['orderID'];
		$date = $row['datePlaced'];
		//do i need to get vars for the rest of the items here as well?
	}
	
	//this query gets order form header information (phone and last name)
	$familyDataQuery = "SELECT parentLastName last, homePhone phone FROM swimteam.families WHERE familyID = $userID;";
	$familyDataResult = mysqli_query($db, $familyDataQuery);
	//get variables out of the values we found for header info
	while ($row = mysqli_fetch_array($familyDataResult)){
		$phone = $row['phone'];
		$name = $row['last'];
	}
	
	//open the input and output files
	$header = fopen("orderforms/MANNAHeader.csv","r");
	$body = fopen("orderforms/MANNABody.csv","r");
	$fileName = "orderforms/".$name.$orderID.".csv"; 
	$orderForm = fopen($fileName, "w");
	
	//write the header information
	fputcsv($orderForm,Array("RAYS Special Order Manna 2010-2011"));
	fputcsv($orderForm,Array());
	fputcsv($orderForm,Array("In Partnership with www.unitedscrip.com"));
	fputcsv($orderForm,Array("Family Name: ","$name",'','','','','Payment Method: '));
	fputcsv($orderForm,Array("Phone:","'$phone'",'','','','',"Check#: ","Cash: "));
	fputcsv($orderForm,Array("Date: ","$date",'','','','',"Massad Y Spotsy Y","","",""));
	fputcsv($orderForm,Array("Item","Description",'','','','','',"Qty","Price","Total"));
	
	$query = "SELECT gc.orderFormCardID id, gc.vendor vendor, i.quantityOrdered qty, i.cost c
			FROM swimteam.itemizedorder i INNER JOIN swimteam.giftcards gc
			ON i.orderID = $orderID AND i.cardID = gc.cardID;";
	$result = mysqli_query($db, $query);
	/*while ($row = mysqli_fetch_array($result)){
		foreach($row as $key => $value){
			echo "$key => $value <br/>";
		}
		echo "<br/>";
	}*/
	$orderTotal = 0;
	while($row = mysqli_fetch_array($result)){
		$total = $row['qty'] * $row['c'];
		$orderTotal += $total;
		$formattedTotal= "$".number_format($total,2);
		$id = $row['id'];
		$vendor = $row['vendor'];
		$qty = $row['qty'];
		$cost = "$".number_format($row['c'],2);
		echo "$id $vendor $qty $cost $total<br/>";
		fputcsv($orderForm,Array("$id","$vendor",'','','','','',"$qty","$cost","$formattedTotal"));
	}
	$formattedTotal = "$".number_format($orderTotal,2);
	fputcsv($orderForm,Array());
	fputcsv($orderForm,Array('','','','','','','','',"Total: ", "$formattedTotal"));
	
	fclose($header);
	fclose($body);
	fclose($orderForm);
?>

<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=orderComplete.php">
</head> 