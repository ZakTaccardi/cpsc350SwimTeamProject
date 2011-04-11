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
<!--orderComplete.php 
need to further include:
	viewing older orders
-->

<h1>Order Form History</h1>
<h2>View your transaction history</h2>
<table>
	<tr>
		<th>Date</th>
		<th>Total Cost</th>
		<th>Download</th>
	</tr>
<?php
	include "DB.php";
	$userID = $_SESSION['familyID'];
	$recentOrderQuery = "SELECT * FROM swimteam.order WHERE familyID = '$userID' ORDER BY orderID DESC;";
	$result = mysqli_query($db,$recentOrderQuery);
	$name = $_SESSION['userLastName'];
	while ($row = mysqli_fetch_array($result)){
		$orderID = $row['orderID'];
		$datePlaced = $row['datePlaced'];
		$total = $row['totalPaid'];
		echo "<tr>
				<td>$datePlaced</td>
				<td>$total</td>
				<td>
					<a href ='download.php?download_file=$name$orderID.csv'>$name$orderID.csv</a>
				</td>
			  </tr>";
	}
?>
</table>

<!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>