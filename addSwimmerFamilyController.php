<?php 
session_start();
ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php
  include "DB.php";
  
  $swimmerFirstName = mysqli_real_escape_string($db, trim($_POST['swimmerFirstName']));
  $swimmerMI = mysqli_real_escape_string($db, trim($_POST['swimmerMiddleInitial']));
  $swimmerLastName = mysqli_real_escape_string($db, trim($_POST['swimmerLastName']));
  $swimmerBirthday = mysqli_real_escape_string($db, trim($_POST['birthday']));
  $swimmerGroup = mysqli_real_escape_string($db, trim($_POST['swimGroup']));
  
  $addQuery = "INSERT INTO swimmers (swimmerFirstName, swimmerMiddleInitial, swimmerLastName, birthday, swimGroup) 
				VALUES ('$swimmerFirstName', '$swimmerMI', '$swimmerLastName', '$swimmerBirthday', '$swimmerGroup');";
  $result = mysqli_query($db, $addQuery);
  echo "swimmer was added using this query: ";
  echo $addQuery;
  
?>