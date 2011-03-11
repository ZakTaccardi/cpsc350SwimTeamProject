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
<h1>Login</h1>

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
$_SESSION['badLogin'] = 0;
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


</body>
</html>