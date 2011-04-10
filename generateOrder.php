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
<h1>Generate Order Form</h1>
<h2>Here you can generate and submit an order form.</h2>

<form method = "POST" action = "submitOrderController.php" />
<table>
<tr>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Gift Card</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Cost</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Percent Returned</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Quantity</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Cost</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Amount Raised</h3></td>
</tr>

<?php
	/*get all gift card information*/
	include "DB.php";
	$giftCardQuery = "SELECT * FROM giftcards WHERE isAvailable > 0 ORDER BY vendor;";
	$giftCardResult = mysqli_query($db, $giftCardQuery);
	while($row = mysqli_fetch_array($giftCardResult)) {
		$id = $row['cardID'];
		$name = $row['vendor'];
		$cost = $row['cost'];
		$percent = $row['percent'];
		echo "
		<tr>
		<td>$name</td>
		<td>\$$cost</td>
		<td>$percent%</td>
		<td><input type = 'text' style = 'width:30px;' name = '$id' value = 0 /></td>
		</tr>";
	}
?> 


<tr>
<tr></tr><tr></tr><tr></tr>
<td></td><td></td><td></td><td><h3>Totals:</h3></td>
<td style="border-style:solid;border-top-style:solid;">$<input type = "text" style="width:60px;" name = "totalCost" disabled="disabled"/></td>
<td style="border-top-style:solid;">$<input type = "text" style="width:60px;" name = "totalAmountRaised" disabled="disabled"/></td>
</tr> 
<td></td><td></td><td></td><td></td>
<td colspan="2"><input type = "submit" value = "Generate and Submit Order"/></td>


</table>
</form>

</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>