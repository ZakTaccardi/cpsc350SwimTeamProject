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
</form>
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
	$famID = $_SESSION['familyID'];
	
	//doesn't scan for in-progress orders or for orders from this individual user, so they can't confirm their own order.
	$query = "SELECT f.parentLastName name, o.orderID orderID, o.familyID familyID, o.datePlaced 
		datePlaced, o.totalPaid total FROM swimteam.order o INNER JOIN families f ON o.dateConfirmed IS NULL AND 
		o.familyID = f.familyID AND o.datePlaced <> '0000-00-00' AND o.familyID <> '$famID' ORDER BY ";
	if ($option == "name"){
		$query = $query."f.parentLastName;";
	}else if($option == "order"){
		$query = $query."o.orderID";
	}else if ($option == "date"){
		$query = $query."o.datePlaced;";
	}else if ($option == "value"){
		$query = $query."o.totalPaid;";
	}else{
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
			<td>	
				<a href ='download.php?download_file=$name$orderID.csv'>Review</a>
			</td>
			
			<td>
				<form action = 'confirmOrderController.php' method = 'post'>
				<input type = 'hidden' value = '$orderID' name = 'orderID'>
				<input type = 'hidden' value = '$familyID' name = 'famID'>
				<input type = 'submit' value = 'confirm' action = 'confirmOrderController.php' />
				</form>
			</td>
		</tr>
		";
	}
?>
</table>
</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>