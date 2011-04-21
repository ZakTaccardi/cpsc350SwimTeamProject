<?php 
session_start();
include('header.php');
?>
<html>
<body>
<?php
include('siteNavigator.php');
?>


<!--
	viewCart.php
	shows the current status of order before confirming
-->
<h1>Viewing Your Cart</h1>
<h2>Here is what you've put down so far</h2>
<?php
	$orderID = $_POST['orderID'];
	$q = "SELECT gc.vendor name, io.quantityOrdered quantity, io.cost
		FROM giftcards gc INNER JOIN itemizedorder io
		ON io.cardID = gc.cardID AND io.orderID = '$orderID';";
	$r = mysqli_query($db,$q);
	echo"
		<table>
		<tr>
			<th style='font-weight:bold;' align='left' width = 200><h3 style='text-decoration:underline;'>Gift Card</h3></th>
			<th style='font-weight:bold;' align='left' width = 90><h3 style='text-decoration:underline;'>Quantity</h3></th>
			<th style='font-weight:bold;' align='left' width = 90><h3 style='text-decoration:underline;'>Cost</h3></th>
			<th style='font-weight:bold;' align='left' width = 90><h3 style='text-decoration:underline;'>Total</h3></th>
		</tr>
	";
	//show what's in the cart!
	$running_total = 0;
	while($row = mysqli_fetch_array($r)){
		$name = $row['name'];
		$quantity = $row['quantity'];
		$cost = $row['cost'];
		$total = $cost * $quantity;
		$running_total += $total;
		echo"
		<table>
		<tr>
			<td width = 200>$name</td>
			<td width = 90>$quantity</td>
			<td width = 90>$$cost.00</td>
			<td width = 90>$$total.00</td>
		</tr>
		";
	}
	echo "
	<tr><td></td><td></td><td></td><td></td></tr>
	<tr><td></td><td></td><td><h3>Order Total:</h3></td><td><strong>$$running_total.00</strong></td><tr/>";
	
	//need a complete order button
	echo "<tr><td></td><td></td><td></td><td><form action = 'completeOrder.php' method = 'post'>
			<input type = 'hidden' name = 'orderID' value = '$orderID'>
			<input type = 'submit' value = 'Complete order'>
			</form></td></tr>
			<td></td><td></td><td></td><td><form action = 'cancelOrder.php' method = 'post'>
			<input type = 'hidden' name = 'orderID' value = '$orderID'>
			<input type = 'submit' value = 'Cancel order'>
			</form></td></tr></table>";
	
	
	//need a cancel order button
	
?>


</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>