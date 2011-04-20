<?php 
session_start();
include('header.php');
?>
<html>
<body>
<?php
include('siteNavigator.php');
?>

<!--
	last modified by patrick
	fixed so you could actually see the swimmers in the family on dropdown
	select to bring up info
	and delete with button
-->


<!-- Page info goes below-->
<h1>Remove Swimmer</h1>
<h2>Here, you can select a swimmer to remove from your family.</h2>
<!--
<select>
  <option value="volvo">Swimmer Name</option>
</select> -->
<form action = 'deleteSwimmerFamily.php' method = 'post'>
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
<input type = 'submit' value = 'view'/>
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
			<form action = deleteSwimmerFamilyController.php method ='post'>
			<input type = hidden value = $option name = 'swimmerID'>
			<table border='0'>
			<tr>
			<td colspan='2' style='font-weight:bold' align='center'><h3>Swimmer Information</h3></td>
			</tr>

			<tr>
			<td>First Name </td>
			<td><input type = 'text' name = 'swimmerFirstName' disabled='disabled' value = '$first'/></td>
			</tr>
			<tr>
			<td>Middle Initial </td>
			<td><input type = 'text' name = 'swimmerMiddleInitial' disabled='disabled' value = '$middle'/></td>
			</tr>
			<tr>
			<td>Last Name </td>
			<td><input type = 'text' name = 'swimmerLastName' disabled='disabled' value = '$last'/></td>
			</tr>
			<tr>
			<td>Birthday </td>
			<td><input type = 'text' name = 'birthday' disabled='disabled' value = '$bday'/></td>
			</tr>
			<tr>
			<td>Swim Group</td>
			<td><input type = 'text' name = 'swimGroup' disabled='disabled' value = '$group'/></td>
			</tr>
			<tr>
			<td><input type = 'submit' value = 'Remove Swimmer' /></td>
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