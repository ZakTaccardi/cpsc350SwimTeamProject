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
<h1>Session Variables</h1>
<h2>View your session variables here.</h2>
<form name="familyID" action = "deleteFamily.php" method = "post" />

	<select>
	<option value="1">Zak Taccardi</option>
	<option value="2">Tim Taccardi</option>	
	</select>
	<input type = "submit" value = "Select Family" />

</form>


<?php



echo "<br /> Family ID:		" . $_SESSION['familyID'];
echo "<br />  userFirstName: " . $_SESSION['userFirstName'];
echo "<br /> userLastName:	" . 	$_SESSION['userLastName'];
echo "<br /> yearJoined:	" . 	$_SESSION['yearJoined'];
echo "<br /> Street Address: " . 	$_SESSION['streetAddress'];
echo "<br /> city:	" .	$_SESSION['city'];
echo "<br /> state:	" .	$_SESSION['state'];
echo "<br /> zip:	" .	$_SESSION['zip'];
echo "<br /> homePhone:	" .	$_SESSION['homePhone'];
echo "<br /> workPhone:	" .	$_SESSION['workPhone'];
echo "<br /> cellPhone:	" .	$_SESSION['cellPhone'];
echo "<br /> accessLevel:	" .	$_SESSION['accessLevel'];
echo "<br /> overallAFP:	" .	$_SESSION['overallAFD'];
echo "<br /> currentAFP:	" .	$_SESSION['currentAFD'];
echo "<br /> loggedIn:	" .	$_SESSION['loggedIn'];

?>
</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html> 
 
 
 