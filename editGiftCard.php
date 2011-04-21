<?php 
session_start();
include('header.php');
?>


<html>
<body>
<?php
include('siteNavigator.php');
?>


<h1>Manage Gift Cards</h1>
<form action = "editGiftCard.php" method = "POST">
<table>

	<tr>
		<td>Search for gift cards</td>
		<td><input type = "text" name = "searchtext"></td>
	</tr>
	<tr>
		<td>Look up by vendor ID</td>
		<td><input type = "radio" name = "searchtype" value = 'vendorID'/></td>
	</tr>
	<tr>
		<td>Look up by vendor name</td>
		<td><input type = "radio" name = "searchtype" value = 'vendorName' CHECKED /></td>
	</tr>
	<tr><td><br/>
		<input type = "submit" value = "Search" id="submit" />
	</td></tr>
	<!--<tr><td></td></tr> -->
</table>
</form>
<form action = 'giftCardEditor.php' method = 'post'>
<?php
	//we can only display this page if user is admin.
	include "DB.php";
	$searchtype = $_POST['searchtype'];
	if ($searchtype != ''){
		echo "
			<table>
			<tr>
				<th>Name</th>
				<th>Cost</th>
				<th>Percent</th>
				<th>Available?</th>
			</tr>";
		$query = "SELECT vendor, orderFormCardID id, cost, percent, isAvailable FROM giftcards WHERE ";
		if ($searchtype == 'vendorID'){
			$vendorIDtext = $_POST['searchtext'];
			$sanitizedText = mysqli_real_escape_string($db, $vendorIDtext);
			$query = $query."orderFormCardID = $sanitizedText;";
		}else if ($searchtype == 'vendorName'){
			$vendorName = $_POST['searchtext'];
			$sanitizedText = mysqli_real_escape_string($db, $vendorName);
			$query = $query."vendor LIKE '%$sanitizedText%';";	
		}
	
		$result = mysqli_query($db, $query);
		while ($row = mysqli_fetch_array($result)){
			$id = $row['id'];
			$vendor = $row['vendor'];
			$cost = "$".$row['cost'].".00";
			$percent = $row['percent']."%";
			if ($row['isAvailable'] == 1){
				$isAvailable = 'yes';
			}else{
				$isAvailable = 'no';
			}
			echo "
				<tr>
					<td>$vendor</td>
					<td>$cost</td>
					<td>$percent</td>
					<td>$isAvailable</td>
					<td><input type = 'submit' value = 'edit' name = '$id'/></td>
				</tr>";
		}
	}
?>
</table></form>


<!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>