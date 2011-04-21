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
<h1>Delete Family Information<h1>
<h2>Please select a family from the drop down list to mark for deletion</h2>

<!-- Family Selecter drop box -->


	<form action = "deleteFamily.php" method = "post" />
	<select name = "familyID">
	<?php
		$currentUserFamilyID = $_SESSION['familyID'];
		$query = "SELECT * FROM families WHERE familyID <> '$currentUserFamilyID';";
		$result = mysqli_query($db, $query) or die("Error Querying Database");
		// $familyNames[0][0] = 0;
				$count= 0;
				while($row = mysqli_fetch_array($result)) {
					$_SESSION['familyNames'];
					$familyNames[$count][0] = $row['parentFirstName'] . " " . $row['parentLastName'];
					$familyNames[$count][1] = $row['familyID'];
					$x = $familyNames[$count][1];
					$y = $familyNames[$count][0];
					
					echo '<option value="' ;
					echo $x;
					echo '">';
					echo $y;
					echo '</option>';
					$count++;
				}
			?>
	</select>
	<input type = "submit" value = "Select Family" />
	</form>
<br /><br />

<!-- Query -->
<?php
$familyID = $_POST['familyID'];
if($familyID > 0){
$query = "select * from families WHERE familyID = '$familyID';";
      
   $result = mysqli_query($db, $query);
   if ($row = mysqli_fetch_array($result)){
	$email = $row['email'];
    $parentFirstName = $row['parentFirstName'];
	$parentLastName = $row['parentLastName'];
	$yearJoined = $row['yearJoined'];
	$streetAddress = $row['streetAddress'];
	$city = $row['city'];
	$state = $row['state'];
	$zip = $row['zip'];
	$homePhone = $row['homePhone'];
	$workPhone = $row['workPhone'];
	$cellPhone = $row['cellPhone'];
	$accessLevel = $row['accessLevel'];
	$overallAFP = $row['overallAFP'];
	$currentAFP = $row['currentAFP'];
	
}
}
?>




<!-- Family Information Table-->
<table border="0">
<tr>
<td colspan="2" style="font-weight:bold" align="center"><h3>Family Information</h3></td>
</tr>
<tr>
<td> Email Address </td>
<td><input type = "text" name = "email" disabled="disabled" value="<?php echo $email; ?>"/></td>
</tr>
<tr>
<td>First Name </td>
<td><input type = "text" name = "parentFirstName" disabled="disabled" value="<?php echo $parentFirstName; ?>"/></td>
</tr>
<tr>
<td>Last Name </td>
<td><input type = "text" name = "parentLastName" disabled="disabled" value="<?php echo $parentLastName ; ?>"/></td>
</tr>
<tr>
<td>Year Joined </td>
<td><input type = "text" name = "yearJoined" disabled="disabled" value="<?php echo $yearJoined ; ?>"/></td>
</tr>
<tr>
<td>Street Address </td>
<td><input type = "text" name = "streetAddress" disabled="disabled" value="<?php echo $streetAddress ; ?>"/></td>
</tr>
<tr>
<td>City </td>
<td><input type = "text" name = "city" disabled="disabled" value="<?php echo $city ; ?>"/></td>
</tr>
<tr>
<td>State </br></td>
<td><input type = "text" name = "state" disabled="disabled" value="<?php echo $state ; ?>"/></td>
</tr>
<tr>
<td>Zip </br></td>
<td><input type = "text" name = "zip" disabled="disabled" value="<?php echo $zip ; ?>"/></td>
</tr>
<tr>
<td>Home Phone </td>
<td><input type = "text" name = "homePhone" disabled="disabled" value="<?php echo $homePhone ; ?>"/> </br></td>
</tr>
<tr>
<td>Work Phone </td>
<td><input type = "text" name = "workPhone" disabled="disabled" value="<?php echo $workPhone ; ?>"/></td>
</tr>
<tr>
<td>Cell Phone </td>
<td><input type = "text" name = "cellPhone" disabled="disabled" value="<?php echo $cellPhone ; ?>"/></td>
</tr>
<tr>
<td>Access Level </td>
<td><input type = "text" name = "accessLevel" disabled="disabled" value="<?php echo $accessLevel ; ?>"/></td>
</tr>
<tr>
<td>Overall AFP </td>
<td><input type = "text" name = "overallAFD" disabled="disabled" value="<?php echo $overallAFP ; ?>"/></td>
</tr>
<tr>
<td>Current AFP </td>
<td><input type = "text" name = "currentAFD" disabled="disabled" value="<?php echo $currentAFP ; ?>"/></td>
</tr>
<tr>
<td>
<a href="deleteFamilyController.php?familyID=<?php echo $familyID; ?>"><button style="">Delete Family</button></a><br>
</tr>
</table>

</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>