<?php 
session_start();
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
		 //Begin a session and create a session variable in
		//the $_SESSION array.
		 $_SESSION['currentuser'] = $usersName;
		echo("<p>You are logged in as ");
		
		echo $_SESSION['currentuser'];
		
		echo("</p>");
   		echo "<p><a href=\"home.php\">Continue</a></p>";	
		$_SESSION['badLogin'] = 0;
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
 
</body>
</html>