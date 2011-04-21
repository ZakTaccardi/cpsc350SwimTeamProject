<?php 
session_start();
include('header.php');
?>
<html>
<body>
<?php
include('siteNavigator.php');
?>
<!--generateOrder.php
last modified by Patrick 10 Apr 2011
displays all available gift cards within the database

-->

<!-- Page info goes below-->

<h1>Order Cancelled</h1>
<h2>You have successfully cancelled your order</h2>

<!--
	cancelOrder.php
-->

<?php
	$id = $_POST['orderID'];
	if ($id != null){
		$removalQ = "DELETE FROM itemizedorder WHERE orderID = $id";
		$removalR = mysqli_query($db,$removalQ);
		$removalQ = "DELETE FROM swimteam.order WHERE orderID = $id";
		$removalR = mysqli_query($db,$removalQ);
	}
?>

<a href = 'generateOrder.php'>Return to ordering</a>