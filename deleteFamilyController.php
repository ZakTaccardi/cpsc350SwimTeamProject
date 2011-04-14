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
<?php
#grabs familyID from URL
$familyID = $_GET['familyID'];

#queries database to return the family with the given familyID
$query = "SELECT parentLastName FROM families WHERE familyID = '$familyID';";
$result = mysqli_query($db, $query) or die("Error Querying Database");
	while($row = mysqli_fetch_array($result)) {
	$familyLastName = $row['parentLastName'];
	}

#deletes that family from the database
$query = "DELETE FROM families WHERE familyID = '$familyID';";
mysqli_query($db, $query) or die("Error Querying Database");



?>
<H1>Success!</H1>
<H2>You have successfully deleted the <?php echo $familyLastName; ?> family from the database.</H2>




</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>