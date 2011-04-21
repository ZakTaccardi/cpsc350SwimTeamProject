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

<h1>Generate Order Form</h1>
<h2>Here you can generate and submit an order form.</h2>

<h4>Browse by:</h4>
<form action = 'generateOrder.php' method = 'post'>
<select name = 'menu'>
  <option value="National Restaurants">National Restaurants</option>
  <option value="National Retailers">National Retailers</option>
  <option value="Childrens Specialty Stores">Childrens Specialty Stores</option>
  <option value="Movie/Entertainment">Movie/Entertainment</option>
  <option value="Electronic/Technology">Electronic/Technology</option>
  <option value="Office Supplies">Office Supplies</option>
  <option value="Catalog and On-line Stores">Catalog and On-line Stores</option>
  <option value="Pharmacy/Drug Stores">Pharmacy/Drug Stores</option>
  <option value="Book Stores">Book Stores</option>
  <option value="Home Improvement">Home Improvement</option>
  <option value="Hotels and Travel">Hotels and Travel</option>
  <option value="Automobile Care/Gas Cards">Automobile Care/Gas Cards</option>
  <option value="Local Vendors">Local Vendors</option>
  <option value = "all">See All</option>
</select>
<input type = 'submit' value = 'browse'>
</form>

<form method = "POST" action = "addToOrder.php" />
<table>
<tr>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Gift Card</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Cost</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Percent Returned</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Quantity</h3></td>
</tr>
<?php
	/*get all gift card information*/
	include "DB.php";
	//we determine if we need to create a new order!
	$famID = $_SESSION['familyID'];
	$orderQuery = "SELECT * FROM swimteam.order WHERE familyID = $famID
					ORDER BY orderID DESC LIMIT 1;";
	$result = mysqli_query($db, $orderQuery);
	$orderID = -1;
	//is there even a result?
	if ($row = mysqli_fetch_array($result)){
		$confirmed = $row['dateConfirmed'];
		$id = $row['orderID'];
		if ($confirmed == NULL and $id != NULL){
			//use most recent
			$orderID = $row['orderID'];
		}else{
			//create a new one!
				//only insert the famID so we have a famID and orderID
				//no datePlaced => no showing up for confirmation by admin
			$q = "INSERT INTO swimteam.order (familyID) VALUES ('$famID');";
			$r = mysqli_query($db,$q);
			
			//now get the orderID!
			$q = "SELECT * FROM swimteam.order WHERE familyID = $famID
					ORDER BY orderID DESC LIMIT 1;";
			$r = mysqli_query($db,$q);
			while($row = mysqli_fetch_array($r)){
				$orderID = $row['orderID'];
			}
		}
	}else{
		//create a new one!
			//only insert the famID so we have a famID and orderID
			//no datePlaced => no showing up for confirmation by admin
		$q = "INSERT INTO swimteam.order (familyID) VALUES ('$famID');";
		$r = mysqli_query($db,$q);
		
		//now get the orderID!
		$q = "SELECT * FROM swimteam.order WHERE familyID = $famID
				ORDER BY orderID DESC LIMIT 1;";
		$r = mysqli_query($db,$q);
		while($row = mysqli_fetch_array($r)){
			$orderID = $row['orderID'];
		}
	}
	//makes available to add items to cart!
	//lets figure out what kind of gift cards to browse by!
	$option = $_POST['menu'];
	if ($option == 'all' or $option == null){
		//show all of em!
		$giftCardQuery = "SELECT * FROM giftcards WHERE isAvailable > 0 ORDER BY vendor;";
		$option = 'all';
	}else{
		//show the specified type from the user input
		$giftCardQuery = "SELECT * FROM giftcards WHERE isAvailable > 0 AND 
						  type = '$option' ORDER BY vendor;";
	}
	echo "<input type = 'hidden' name = 'orderID' value = '$orderID' />
		  <input type = 'hidden' name = 'type' value = '$option' />";
	//tell em what they're browsing by
	$giftCardResult = mysqli_query($db, $giftCardQuery);
	while($row = mysqli_fetch_array($giftCardResult)) {
		$id = $row['cardID'];
		$name = $row['vendor'];
		$cost = number_format($row['cost'],2);
		$percent = $row['percent'];
		echo "
		<tr>
		<td>$name</td>
		<td width = 60>\$$cost</td>
		<td>$percent%</td>
		<td><input type = 'text' style = 'width:30px;' name = '$id' value = 0 /></td>
		</tr>";
	}
	
	echo "
	<tr><td></td><td></td><td></td><td><input type = 'submit' value = 'Add To Cart'/></td>
	</form>
	
	<form action = 'viewCart.php' method = 'post'>
		<input type = 'hidden' name = 'orderID' value = '$orderID' />
		<td><input type = 'submit' value = 'View Cart'/></td></tr>
	</form>
	"
?> 

</table>

</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>