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
<h1>Add Swimmer</h1>
<h2>Here, you can add a swimmer to your family.</h2>



<form action = "addSwimmerFamilyController.php" method = "post">

<table border="0">
<tr>
<tr>
<td>First Name </td>
<td><input type = "text" name = "swimmerFirstName" /></td>
</tr>
<tr>
<td>Middle Initial </td>
<td><input type = "text" name = "swimmerMiddleInitial" /></td>
</tr>
<tr>
<td>Last Name </td>
<td><input type = "text" name = "swimmerLastName" /></td>
</tr>
<tr>
<td>Birthday </td>
<td><input type = "text" name = "birthday" /></td>
</tr>
<tr>
<td>Swim Group</td>
<td><input type = "text" name = "swimGroup" /></td>
</tr>
<tr>
<td><input type = "submit" value = "Add Swimmer"/></td>
</tr>
</table>

</form>


</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>