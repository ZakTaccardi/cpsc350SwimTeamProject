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
<h1>Change Password<h1>
<h2>Here you can change your password</h2>

<form action = "createAccountController.php" method = "post">

<table border="0">
<tr>
<td> Email Address </td>
<td><input type = "text" name = "email" /></td>
</tr>
<tr>
<td>Old Password</td>
<td><input type = "password" name = "oldPassword" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type = "password" name = "password" /></td>
</tr>
<tr>
<td>Retype Password</td>
<td><input type = "password" name = "password2" /></td>
</tr>
<tr>
<tr>
<td><input type = "submit" value = "Change Password"/></td>
</tr>
</table>

</form>

</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>