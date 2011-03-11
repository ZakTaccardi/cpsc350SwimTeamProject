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

<body>
<div id="contents">
<?php
  include "DB.php";
  
  $email = $_POST['email'];
  $password = $_POST['password'];
   $query = "select * from families WHERE email = '$email' AND password = SHA('$password')";
      
   $result = mysqli_query($db, $query);
   if ($row = mysqli_fetch_array($result))
   {
	$_SESSION['userFirstName'] = $row['parentFirstName'];
	#echo($_SESSION['userFirstName'] . "<br>");
	$_SESSION['userLastName'] = $row['parentLastName'];
	#echo($_SESSION['userLastName'] . "<br>");
	$_SESSION['yearJoined'] = $row['yearJoined'];
	echo($_SESSION['yearJoined'] . "<br>");
	$_SESSION['streetAddress'] = $row['streetAddress'];
	echo($_SESSION['streetAddress'] . "<br>");
	$_SESSION['city'] = $row['city'];
	echo($_SESSION['city'] . "<br>");
	$_SESSION['state'] = $row['state'];
	echo($_SESSION['state'] . "<br>");
	$_SESSION['zip'] = $row['zip'];
	echo($_SESSION['zip'] . "<br>");
	$_SESSION['homePhone'] = $row['homePhone'];
	echo($_SESSION['homePhone'] . "<br>");
	$_SESSION['workPhone'] = $row['workPhone'];
	echo($_SESSION['workPhone'] . "<br>");
	$_SESSION['cellPhone'] = $row['cellPhone'];
	echo($_SESSION['cellPhone'] . "<br>");
	$_SESSION['accessLevel'] = $row['accessLevel'];
	echo($_SESSION['accessLevel'] . "<br>");
	$_SESSION['overallAFD'] = $row['overallAFD'];
	echo($_SESSION['overallAFD'] . "<br>");
	$_SESSION['currentAFD'] = $row['currentAFD'];
	echo($_SESSION['currentAFD'] . "<br>");
	$_SESSION['loggedIn'] = "true";
	
     	//Begin a session and create a session variable in
		//the $_SESSION array.
		$_SESSION['user'] = $userName;
		echo("<p>You are logged in as ");
		
		echo($_SESSION['userFirstName']);
		
		echo("</p>");
   		echo "<p><a href=\"home.php\">Continue</a></p>";	
		//Handle if admin
		#if($row['accessLevel'] = 3){
		 #$_SESSION['accessLevel'] = 3;
		#}else if($row['accessLevel'] = 2){
		# $_SESSION['accessLevel'] = 2;
	    #}else{
		# $_SESSION['accessLevel'] = 1;
	    #}
		#$_SESSION['badLogin'] = 0;
   }
   else
    {
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php
$_SESSION['badLogin'] = 1;
}
?>
  
</div>
<?php
header('Location: home.php');
ob_flush();
?>
 
</body>
</html>