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
<h1> Register Family</h1>

<form action = "createAccountController.php" method = "post">

<table border="0">
<tr>
<td> Email Address </td>
<td><input type = "text" name = "email" /></td>
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
<td>First Name </td>
<td><input type = "text" name = "parentFirstName" /></td>
</tr>
<tr>
<td>Last Name </td>
<td><input type = "text" name = "parentLastName" /></td>
</tr>
<tr>
<td>Year Joined </td>
<td><input type = "text" name = "yearJoined" /></td>
</tr>
<tr>
<td>Street Address </td>
<td><input type = "text" name = "streetAddress" /></td>
</tr>
<tr>
<td>City </td>
<td><input type = "text" name = "city" /></td>
</tr>
<tr>
<td>State </br></td>
<td><input type = "text" name = "state" /></td>
</tr>
<tr>
<td>Zip </br></td>
<td><input type = "text" name = "zip" /></td>
</tr>
<tr>
<td>Home Phone </td>
<td><input type = "text" name = "homePhone" /> </br></td>
</tr>
<tr>
<td>Work Phone </td>
<td><input type = "text" name = "workPhone" /></td>
</tr>
<tr>
<td>Cell Phone </td>
<td><input type = "text" name = "cellPhone" /></td>
</tr>
<tr>
<td>Access Level </td>
<td><input type = "text" name = "accessLevel" /></td>
</tr>
<tr>
<td>Overall AFD </td>
<td><input type = "text" name = "overallAFD" /></td>
</tr>
<tr>
<td>Current AFD </td>
<td><input type = "text" name = "currentAFD" /></td>
</tr>
<tr>
<td><input type = "submit" value = "Register Family"/></td>
</tr>
</table>

</form>
<!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>





</html>