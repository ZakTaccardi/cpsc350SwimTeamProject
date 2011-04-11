<?php 
session_start();
include('header.php');
?>
<html>
<body>
<?php
include('siteNavigator.php');
?>

<!-- Page info goes below-->
<h1>Confirm Orders</h1>
<h2>View submitted orders pending confirmation when payment has been received.</h2>
<h3>Order by:</h3>
<form action = 'confirmOrder.php' method = 'post'>
<select name = 'menu'>
  <option value="name">Family Name</option>
  <option value="order">Order Number</option>
  <option value="date">Date</option>
  <option value="value">Total Paid</option>
</select>
<br/><input type = "submit" value = "Sort" />

<table>
<tr>
	<th>Family Name</th>
	<th>Order Number</th>
	<th>Date Placed</th>
	<th>Total Paid</th>
</tr>

<?php
	include "DB.php";
	$option = $_POST['menu'];
	$query = "SELECT f.parentLastName name, o.orderID orderID, o.familyID familyID, o.datePlaced 
		datePlaced, o.totalPaid total FROM swimteam.order o INNER JOIN families f ON o.dateConfirmed IS NULL AND 
		o.familyID = f.familyID ORDER BY ";
	if ($option == "name"){
		echo "name";
		$query = $query."f.parentLastName;";
	}else if($option == "order"){
		echo "order";
		$query = $query."o.orderID";
	}else if ($option == "date"){
		echo "date";
		$query = $query."o.datePlaced;";
	}else if ($option == "value"){
		echo "value";
		$query = $query."o.totalPaid;";
	}else{
		echo "derp";
		$query = $query."o.orderID";
	}
	$result = mysqli_query($db,$query);
	while ($row = mysqli_fetch_array($result)){
		$name = $row['name'];
		$orderID = $row['orderID'];
		$familyID = $row['familyID'];
		$datePlaced = $row['datePlaced'];
		$total = $row['total'];
		echo "
		<tr>
			<td>$name</td>
			<td>$orderID</td>
			<td>$datePlaced</td>
			<td>$total</td>
			<td><input type = 'submit' value = 'review' action = 'home.php'/></td>
			<td><input type = 'submit' value = 'confirm' action = 'home.php'</td>
		</tr>
		";
	}
?>
</table>

</form>


<!--
<table>
<tr>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Gift Card</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Cost</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Percent Returned</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Quantity</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Cost</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Amount Raised</h3></td>
</tr>

<tr>
<td>Applebees </td>
<td>$25</td>
<td>8%</td>
<td><input type = "text" style="width:30px;" name = "quantityOrdered" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "cost1" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "amountRaised1" disabled="disabled"/></td>
</tr>
<tr>
<td>Applebees </td>
<td>$50</td>
<td>8%</td>
<td><input type = "text" style="width:30px;" name = "quantityOrdered" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "cost2" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "amountRaised2" disabled="disabled"/></td>
</tr>
<td>Outback </td>
<td>$25</td>
<td>11%</td>
<td><input type = "text" style="width:30px;" name = "quantityOrdered" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "cost3" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "amountRaised3" disabled="disabled"/></td>
</tr>
<td>Outback </td>
<td>$50</td>
<td>11%</td>
<td><input type = "text" style="width:30px;" name = "quantityOrdered" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "cost4" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "amountRaised4" disabled="disabled"/></td>
</tr>
<tr>
<tr></tr><tr></tr><tr></tr>
<td></td><td></td><td></td><td><h3>Totals:</h3></td>
<td style="border-style:solid;border-top-style:solid;">$<input type = "text" style="width:60px;" name = "totalCost" disabled="disabled"/></td>
<td style="border-top-style:solid;">$<input type = "text" style="width:60px;" name = "totalAmountRaised" disabled="disabled"/></td>
</tr>
<td></td><td></td><td></td><td></td>
<td colspan="2"><input type = "submit" value = "Confirm Order" /</td>
</table> -->
</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>