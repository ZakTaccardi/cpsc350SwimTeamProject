<?php
session_start();
include "DB.php";

$email = $_POST["email"];
$password = $_POST["password"];
$parentFirstName = $_POST["parentFirstName"];
$parentLastName = $_POST["parentLastName"];
$yearJoined = $_POST["yearJoined"];
$streetAddress = $_POST["streetAddress"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$homePhone = $_POST["homePhone"];
$workPhone = $_POST["workPhone"];
$cellPhone = $_POST["cellPhone"];
$accessLevel = $_POST["accessLevel"];
$overallAFD = $_POST["overallAFD"];
$currentAFD = $_POST["currentAFD"];


  $query = "INSERT INTO families VALUES ('','$email', SHA('$password'), '$parentFirstName', '$parentLastName', '$yearJoined', '$streetAddress', '$city', '$state', '$zip', '$homePhone', '$workPhone', '$cellPhone', '$accessLevel', '$overallAFD', '$currentAFD');";

  
#$email
#$password
#$parentFirstName
#$parentLastName
#$yearJoined
#$streetAddress
#$city
#$state
#$zip
#$homePhone
#$workPhone
#$cellPhone
#$accessLevel
#$overallAFD
#$currentAFD

	mysqli_query($db, $query);
  
		//Begin a session and create a session variable in
		//the $_SESSION array.
		 $_SESSION['currentuser'] = $username;
		 echo ("<p style='font-size:18px;'>");
		 echo($email . "<br>");
		 echo($password . "<br>");
		 echo($parentFirstName . "<br>");
		 echo($parentLastName . "<br>");
		 echo($yearJoined . "<br>");
		 echo($streetAddress . "<br>");
		 echo($city . "<br>");
		 echo($state . "<br>");
		 echo($zip . "<br>");
		 echo($homePhone . "<br>");
		 echo($workPhone . "<br>");
		 echo($cellPhone . "<br>");
		 echo($accessLevel . "<br>");
		 echo($overallAFD . "<br>");
		 echo($currentAFD . "<br>");
		 
		 echo("</p>");
   		 echo "<p><a href=\"home.php\">Continue</a></p>";
echo($query);
?>

