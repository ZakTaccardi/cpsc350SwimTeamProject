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
<h1>View/Edit Family Information<h1>
<h2>Here you can view and edit your family's current information.</h2>

<!-- Current & New Family Information Table-->

<?php
	$famID = $_SESSION['familyID'];
	$q = "SELECT * FROM families WHERE familyID = $famID";
	$result = mysqli_query($db, $q);
	while($row = mysqli_fetch_array($result)){
		$email = $row['email'];
		$password = $row['password'];
		$first = $row['parentFirstName'];
		$last = $row['parentLastName'];
		$streetAddress = $row['streetAddress']; 
		$city = $row['city'];
		$state = $row['state'];
		$zip = $row['zip'];
		$hphone = $row['homePhone'];
		$wphone = $row['workPhone'];
		$cphone =$row['cellPhone'];
		echo "
		<form action = updateFamilyController.php method = 'post'>
		<table border='0'>
		<tr>
		<td colspan='2' style='font-weight:bold;padding-right:8px' align='right'><h3>Current Family Information</h3></center></td>
		<td style='font-weight:bold;' align='left'><h3>New Family Information</h3></center></td>
		</tr>
		<tr>
		<td> Email Address </td>
		<td><input type = 'text' name = 'email' disabled='disabled' value = '$email'/></td>
		<td><input type = 'text' name = 'emailNew' value = '$email'/></td>
		</tr>
		<tr>
		<td>First Name </td>
		<td><input type = 'text' name = 'parentFirstName' disabled='disabled' value = '$first'/></td>
		<td><input type = 'text' name = 'parentFirstNameNew' value = '$first'/></td>
		</tr>
		<tr>
		<td>Last Name </td>
		<td><input type = 'text' name = 'parentLastName' disabled='disabled' value = '$last'/></td>
		<td><input type = 'text' name = 'parentLastNameNew' value = '$last'/></td>
		</tr>
		<tr>
		<td>Street Address </td>
		<td><input type = 'text' name = 'streetAddress' disabled='disabled' value = '$streetAddress'/></td>
		<td><input type = 'text' name = 'streetAddressNew' value = '$streetAddress'/></td>
		</tr>
		<tr>
		<td>City </td>
		<td><input type = 'text' name = 'city' disabled='disabled' value = '$city'/></td>
		<td><input type = 'text' name = 'cityNew' value = '$city'/></td>
		</tr>
		<tr>
		<td>State </br></td>
		<td><input type = 'text' name = 'state' disabled='disabled' value = '$state'/></td>
		<td><input type = 'text' name = 'stateNew' value = '$state'/></td>
		</tr>
		<tr>
		<td>Zip </br></td>
		<td><input type = 'text' name = 'zip' disabled='disabled' value = '$zip'/></td>
		<td><input type = 'text' name = 'zipNew' value = '$zip'/></td>
		</tr>
		<tr>
		<td>Home Phone </td>
		<td><input type = 'text' name = 'homePhone' disabled='disabled' value = '$hphone'/> </br></td>
		<td><input type = 'text' name = 'homePhoneNew' value = '$hphone'/></td>
		</tr>
		<tr>
		<td>Work Phone </td>
		<td><input type = 'text' name = 'workPhone' disabled='disabled' value = '$wphone'/></td>
		<td><input type = 'text' name = 'workPhoneNew' value = '$wphone'/></td>
		</tr>
		<tr>
		<td>Cell Phone </td>
		<td><input type = 'text' name = 'cellPhone' disabled='disabled' value = '$cphone'/></td>
		<td><input type = 'text' name = 'cellPhoneNew' value = '$cphone'/></td>
		</tr>
		<tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type = submit value = 'submit changes' /></td>
		<input type = hidden name = 'famID' value = '$famID'/>
		</table>
		</form>
		";
	}
?>
</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>