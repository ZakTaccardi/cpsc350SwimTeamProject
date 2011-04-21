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
<!--
	completeOrder.php
-->
<h1>Final Confirmation</h1>
<h2>Last chance to modify your order</h2>
<?php
	//confirm, cancel, or 
	$id = $_POST['orderID'];
	$total = $_POST['total'];
	echo
	"
	<form action = 'submitOrderController.php' method = 'post'>
		<input type = 'hidden' name = 'orderID' value = '$id'/>
		<input type = 'hidden' name = 'total' value = '$total'/>
		<input type = 'submit' value = 'Complete and submit order'>
	</form>
	<br/><br/>
	<form action = 'cancelOrder.php' method = 'post'>
		<input type = 'hidden' name = 'orderID' value = '$id'/>
		<input type = 'submit' value = 'Cancel Order'>
	</form>
	<br/><br/>
	<form action = 'generateOrder.php' method = 'post'>
		<input type = 'submit' value = 'Back to ordering'>
	</form>
	"
?>

</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>