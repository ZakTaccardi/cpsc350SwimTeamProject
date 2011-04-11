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
	include "DB.php";
	$id = $_SESSION['familyID'];
	$query = "SELECT password FROM swimteam.families WHERE familyID = '$id';";
	$old = '';
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)){
		$old = $row['password'];
	}	
	$checktext = $_POST['oldPassword'];
	$sanitized = mysqli_real_escape_string($db, $checktext);
	$query2 = "SELECT SHA('$sanitized') sha;";
	$result = mysqli_query($db, $query2);
	$entered = '';
	while($row = mysqli_fetch_array($result)){
		$entered = $row['sha'];
	}
	
	//make sure the entered old password matches the actual.
	if($entered != $old){
		echo "<h3>Username and password do not match</h3>
			  <h2><a href = 'changePassword.php'>Please try again here</a></h2>";
	}else{
		//make sure new password matches
		$newPassword1 = $_POST['password'];
		$newPassword2 = $_POST['password2'];
		if ($newPassword1 != $newPassword2){
			//don't reset if it's not matching.
			echo "<h3>Failed to comfirm new password - entries do not match</h3>
				  <h2><a href = 'changePassword.php'>Please try again here</a></h2>";
		}else{
			//reset if we've found a match!
			$updateQuery = "UPDATE swimteam.families SET password = SHA('$newPassword1') WHERE familyID = '$id';";
			$result = mysqli_query($db,$updateQuery);
			echo "<h3>You have successfully changed your password</h3>
				  <h2><a href = 'Home.php'>Go to your homepage</a></h2>";
		}
	}
?>
<!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>