<?php 
session_start();
include('header.php');
?>


<html>
<body>

<h2> Login Page </h2>

<form action = "loginController.php" method = "post" />
E-mail:  <input type = "text" name = "email" /> <br/>
Password:  <input type = "password" name = "password" />  <br/>
<input type = "submit" value = "Login" id="submit" />
</form>
<p>Not registered? Register <a href = "createAccount.php"> here </a>!</p>

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
</body>
</html>