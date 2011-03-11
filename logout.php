<?php 
session_start();
session_destroy();
include('header.php');
?>
<html>
<body>
<?php
$_SESSION['accessLevel'] = 0;
include('siteNavigator.php');
?>

<!-- Page info goes below-->
<h1>You are now logged out </h1>

<h2>Login</h2>

<form action = "loginController.php" method = "post" />
<table>
<tr>
<td>E-mail:</td>  
<td> <input type = "text" name = "email" /> </td> <br/>
</tr><tr>
<td>Password:</td> 
<td>  <input type = "password" name = "password" /> </td>  <br/>
</tr>
</table>
<input type = "submit" value = "Login" id="submit" />
<p>Not registered? Register <a href = "createAccount.php"> here </a>!</p>
</form>

<?php
if($_SESSION['badLogin'] == 1)
{
?>
<script type = "text/javascript">
alert("Incorrect Login Information");
</script>
<?php
}
else
{
}
?>
<!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>