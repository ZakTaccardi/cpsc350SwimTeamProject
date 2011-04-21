<?php 
session_start();
ob_start();
?>
<!--
giftCardEditor.php
-->
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
<h2>You can update gift card information on this page</h2>
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
<?php
	$query = "SELECT orderFormCardID id FROM giftcards;";
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)){
	$id = $row['id'];
		if (!empty($_REQUEST["$id"])){
			$query = "SELECT * FROM giftcards WHERE orderFormCardID = '$id';";
			$result2 = mysqli_query($db, $query);
			if ($row2 = mysqli_fetch_array($result2)){
				$name = $row2['vendor'];
				$cost = $row2['cost'];
				$percent = $row2['percent'];
				if($row2['isAvailable'] == 1){
					$available = "yes";
				}else{
					$available = "no";
				}
			}
			//still need to make a form here!
			echo "
			<table>
				<tr>
					<td><h1>$name</h1></td>
				</tr>
				<tr>
					<td>Cost: </td>
					<td><input type = 'text' value = '$$cost.00' disabled = 'disabled'/></td>
					<td><input type = 'text' name = 'cost'>
				</tr>
				<tr>
					<td>Percent Return:</td>
					<td><input type = 'text' value = '$percent%' disabled = 'disabled'></td></td>	
					<td><input type = 'text' name = 'percent'/></td>
				</tr>
				<tr>
					<td>Availability:</td>
					<td><input type = 'text' value = '$available' disabled = 'disabled'></td></td>	
					<td><input type = 'text' name = 'available'/></td>
				</tr>
				<tr><td><input type = 'submit' value ='submit'/></td>
				</tr>
			</table>
			";
		}
	}
?>

</div>
<!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>