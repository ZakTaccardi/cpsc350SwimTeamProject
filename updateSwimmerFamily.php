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
<h1>View/Edit Swimmer Information</h1>
<h2>Here, you can select a swimmer whose information you would like to view or edit from your family.</h2>

<form action = 'updateSwimmerFamily.php' method = 'post'>
<?php
	$famID = $_SESSION['familyID'];
	$query = "SELECT * FROM swimmers WHERE familyID = '$famID';";
	$result = mysqli_query($db, $query);
	echo "<h4>Select Swimmer</h4>";
	echo "<select name = 'option'>";
	while($row = mysqli_fetch_array($result)){
		$id = $row['swimmerID'];
		$first = $row['swimmerFirstName'];
		$middle = $row['swimmerMiddleInitial'];
		echo "<option value = '$id'>$first $middle</option>";
	}
?>
</select>
<input type = 'submit' value = 'edit'/>
</form>


<?php
	$option = $_POST['option'];
	if ($option != null){
		$query = "SELECT * FROM swimmers WHERE swimmerID = $option;";
		$result = mysqli_query($db, $query);
		while ($row = mysqli_fetch_array($result)){
			$first = $row['swimmerFirstName'];
			$middle = $row['swimmerMiddleInitial'];
			$last = $row['swimmerLastName'];
			$bday = $row['birthday'];
			$group = $row['swimGroup'];
			echo "
			<form action = 'updateSwimmerFamilyController.php' method = 'post'>
			<table>
			<tr>
			<td colspan='2' style='font-weight:bold;padding-right:8px' align='right'><h3>Current Swimmer Information</h3></center></td>
			<td style='font-weight:bold;' align='left'><h3>New Swimmer Information</h3></center></td>
			</tr>
			<tr>
			<td><input type = hidden name = 'swimID' value = '$option'/></td>
			</tr>
			<td>First Name </td>
			<td><input type = 'text' name = 'swimmerFirstName' value = '$first' disabled='disabled'/></td>
			<td><input type = 'text' name = 'swimmerFirstNameNew' value = '$first'/></td>
			</tr>
			<tr>
			<td>Middle Initial </td>
			<td><input type = 'text' name = 'swimmerMiddleInitial' disabled='disabled' value = '$middle'/></td>
			<td><input type = 'text' name = 'swimmerMiddleInitialNew' value = '$middle'/></td>
			</tr>
			<tr>
			<td>Last Name </td>
			<td><input type = 'text' name = 'swimmerLastName' disabled='disabled' value ='$last'/></td>
			<td><input type = 'text' name = 'swimmerLastNameNew' value ='$last'/></td>
			</tr>
			<tr>
			<td>Birthday </td>
			<td><input type = 'text' name = 'birthday' disabled='disabled' value = '$bday'/></td>
			<td><input type = 'text' name = 'birthdayNew' value = '$bday'/></td>
			</tr>
			<tr>
			<td>Swim Group</td>
			<td><input type = 'text' name = 'swimGroup' disabled='disabled' value = '$group'/></td>
			<td><input type = 'text' name = 'swimGroupNew' value = '$group'/></td>
			</tr>
			<tr>
			<td><input type = 'submit' value = 'Update Swimmer Information' /></td>
			</tr>
			</table>
			</form>";
		}
	}
?>

</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>