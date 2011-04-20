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
<h1>View/Edit Family Information</h1>
<h2>Here, you can select a family whose information you would like to view or edit.</h2>

<form action = 'updateFamilyAdmin.php' method = 'post'>
<?php
//dropdown for the families for browsing
	$query = "SELECT * FROM families;";
	$result = mysqli_query($db, $query);
	echo "<h4>Select Family</h4>";
	echo "<select name = 'option'>";
	while($row = mysqli_fetch_array($result)){
		$id = $row['familyID'];
		$first = $row['parentFirstName'];
		$last = $row['parentLastName'];
		echo "<option value = '$id'>$first $last</option>";
	}
?>
</select>
<input type = 'submit' value = 'edit'>
</form>


<?php
//print out the family info and prepare for edits
	$option = $_POST['option'];
	echo "option: $option";
	if ($option != null){
		$query = "SELECT * FROM families WHERE familyID = $option;";
		$result = mysqli_query($db, $query);
		while ($row = mysqli_fetch_array($result)){
			$email = $row['email'];
			$first = $row['parentFirstName'];
			$last = $row['parentLastName'];
			$streetAddress = $row['streetAddress']; 
			$city = $row['city'];
			$state = $row['state'];
			$zip = $row['zip'];
			$hphone = $row['homePhone'];
			$wphone = $row['workPhone'];
			$cphone =$row['cellPhone'];
			$accessLevel = $row['accessLevel'];
			$currentAFP = $row['currentAFP'];
			$overallAFP = $row['overallAFP'];
			$yearJoined = $row['yearJoined'];
			
			echo "
			<form action = 'updateFamilyAdminController.php' method = 'post'>
			<input type = 'hidden' name = 'famID' value = $option>
			<table>
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
			<td>Year Joined </td>
			<td><input type = 'text' name = 'yearJoined' disabled='disabled' value = '$yearJoined'/></td>
			<td><input type = 'text' name = 'yearJoinedNew' value = '$yearJoined' /></td>
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
			<td>Access Level </td>
			<td><input type = 'text' name = 'accessLevel' disabled='disabled' value = '$accessLevel'/></td>
			<td><input type = 'text' name = 'accessLevelNew' value = '$accessLevel'/></td>
			</tr>
			<tr>
			<td>Overall AFP </td>
			<td><input type = 'text' name = 'overallAFP' disabled='disabled' value = '$overallAFP'/></td>
			<td><input type = 'text' name = 'overallAFPNew' value = '$overallAFP'/></td>
			</tr>
			<tr>
			<td>Current AFP </td>
			<td><input type = 'text' name = 'currentAFP' disabled='disabled' value = '$currentAFP'/></td>
			<td><input type = 'text' name = 'currentAFPNew' value = '$currentAFP'/></td>
			</tr>
			<tr>
			<td><input type = 'submit' value = 'Update Family Information' /></td>
			</tr>
			</table>
			</form>
			";
		}
	}

?>






</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>