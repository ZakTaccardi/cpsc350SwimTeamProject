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
<h1>View/Edit Swimmer Information</h1>
<h2>Here, you can select a swimmer whose information you would like to view or edit from your family.</h2>

<select>
  <option value="volvo">Swimmer Name</option>
</select>

<table>
<tr>
<td colspan="2" style="font-weight:bold;padding-right:8px" align="right"><h3>Current Swimmer Information</h3></center></td>
<td style="font-weight:bold;" align="left"><h3>New Swimmer Information</h3></center></td>
</tr>

<tr>
<td>First Name </td>
<td><input type = "text" name = "swimmerFirstName" disabled="disabled"/></td>
<td><input type = "text" name = "swimmerFirstNameNew" /></td>
</tr>
<tr>
<td>Middle Initial </td>
<td><input type = "text" name = "swimmerMiddleInitial" disabled="disabled"/></td>
<td><input type = "text" name = "swimmerMiddleInitialNew" /></td>
</tr>
<tr>
<td>Last Name </td>
<td><input type = "text" name = "swimmerLastName" disabled="disabled"/></td>
<td><input type = "text" name = "swimmerLastNameNew" /></td>
</tr>
<tr>
<td>Birthday </td>
<td><input type = "text" name = "birthday" disabled="disabled"/></td>
<td><input type = "text" name = "birthdayNew" /></td>
</tr>
<tr>
<td>Swim Group</td>
<td><input type = "text" name = "swimGroup" disabled="disabled"/></td>
<td><input type = "text" name = "swimGroupNew" /></td>
</tr>
<tr>
<td><input type = "submit" value = "Update Swimmer Information" /></td>
</tr>
</table>


</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>