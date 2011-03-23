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
<h1>Remove Swimmer</h1>
<h2>Here, you can select a swimmer to remove from your family.</h2>

<select>
  <option value="volvo">Swimmer Name</option>
</select>

<table border="0">
<tr>
<td colspan="2" style="font-weight:bold" align="center"><h3>Swimmer Information</h3></td>
</tr>

<tr>
<td>First Name </td>
<td><input type = "text" name = "swimmerFirstName" disabled="disabled"/></td>
</tr>
<tr>
<td>Middle Initial </td>
<td><input type = "text" name = "swimmerMiddleInitial" disabled="disabled"/></td>
</tr>
<tr>
<td>Last Name </td>
<td><input type = "text" name = "swimmerLastName" disabled="disabled"/></td>
</tr>
<tr>
<td>Birthday </td>
<td><input type = "text" name = "birthday" disabled="disabled"/></td>
</tr>
<tr>
<td>Swim Group</td>
<td><input type = "text" name = "swimGroup" disabled="disabled"/></td>
</tr>
<tr>
<td><input type = "submit" value = "Remove Swimmer" /></td>
</tr>
</table>

</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>