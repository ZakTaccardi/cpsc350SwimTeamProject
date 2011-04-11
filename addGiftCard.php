<?php 
session_start();
ob_start();
?>
<html>
<body>
<?php
include('siteNavigator.php');
include "DB.php";
?>
<!--
addGiftCard.php
-->
<h3>Add a new gift card</h3>
<h2>just enter the necessary information below</h2>
<form method = "POST" action = "">
<table>
	<tr>
		<td>
			Vendor Name: 
		</td>
		<td>
			<input type = "text" name = "name"/> (i.e. "McDonald's")
		</td>
	</tr>
	<tr>
		<td>
			Vendor ID #:  
		</td>
		<td>
			<input type = "text" name = "id"/>  (i.e. "9999")
		</td>
	</tr>
	<tr>
		<td>
			Cost (in dollars):
		</td>
		<td>
			<input type = "text" name = "cost"/>.00  (i.e. 50)
		</td>
	</tr>
	<tr>
		<td>
			Percent Return (whole number): 
		</td>
		<td>
			<input type = "text" name = "percent" />% (i.e. 10)
		</td>
	</tr>
	<tr><td><input type = "submit" value = "Submit" /></td></tr>
</table>
</form>

<?php

	//pull inputs from post
	$name = $_POST['name'];
	$cost = $_POST['cost'];
	$percent = $_POST['percent'];
	$id = $_POST['id'];
	
	$sanitizedName = mysqli_real_escape_string($db, $name);
	$sanitizedCost = mysqli_real_escape_string($db,$cost);
	$sanitizedPercent = mysqli_real_escape_string($db,$percent);
	$sanitizedId = mysqli_real_escape_string($db,$id);
	if ($cost < 0 or $percent < 0 or $percent > 100){
		//error message
	}else if (1 /*we have non-int values in int fields*/){
	
	}else{ //go for it!
		//ask if they're sure...but how?
		$sure  = false;
		if ($sure){
			$query = "INSERT INTO giftcards VALUES ('','$$sanitizedID','$sanitizedName','$sanitizedCost','$sanitizedPercent',1);";
			$result = mysqli_query($db,$query);
			echo "<h3> your insertion was successful! </h3>";
		}else{
			echo "<h3>canceled gift card insertion</h3>";
		}
	}
	//sanitize inputs
	//check for good inputs
		//percent 0 < return < 100
	//confirm submission?
	//insert new row into gc table
	//return success
?>

