<?php 
session_start();
ob_start();
?>
<!--
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head> -->

<?php
  include "DB.php";
  
  $swimmerFirstName = mysqli_real_escape_string($db, trim($_POST['swimmerFirstName']));
  $swimmerMI = mysqli_real_escape_string($db, trim($_POST['swimmerMiddleInitial']));
  $swimmerLastName = mysqli_real_escape_string($db, trim($_POST['swimmerLastName']));
  $swimmerBirthday = mysqli_real_escape_string($db, trim($_POST['birthday']));
  $swimmerGroup = mysqli_real_escape_string($db, trim($_POST['swimGroup']));
  
  if($swimmerFirstName == null or
	 $swimmerMI == null or
	 $swimmerLastName == null or
	 $swimmerBirthday == null or
	 $swimmerGroup == null){
			//try for other error catching?
			echo "<h3>Missing data, <a href = 'addSwimmerFamily.php'>please try again</a>";
	 }else{
		$famID = $_SESSION['familyID'];
		$addQuery = "INSERT INTO swimmers (familyID, swimmerFirstName, swimmerMiddleInitial, swimmerLastName, birthday, swimGroup) 
				VALUES ('$famID','$swimmerFirstName', '$swimmerMI', '$swimmerLastName', '$swimmerBirthday', '$swimmerGroup');";
		echo $addQuery;
		$result = mysqli_query($db, $addQuery);
		/*echo "<h3>You have successfully added a swimmer.</h3>
			<h2><a href = 'Home.php'>Go to your homepage</a></h2>";*/
	}
?>
<head>
<meta HTTP-EQUIV="REFRESH" content="0; url=addSwimmerFamily.php">
</head>