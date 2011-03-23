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
<h1>Delete Family Information<h1>
<h2>Please select a family from the drop down list to mark for deletion</h2>

<select>
  <option value="volvo">Family Name</option>
</select>

<table border="0">
<tr>
<td colspan="2" style="font-weight:bold" align="center"><h3>Family Information</h3></td>
</tr>
<tr>
<td> Email Address </td>
<td><input type = "text" name = "email" disabled="disabled" /></td>
</tr>
<tr>
<td>First Name </td>
<td><input type = "text" name = "parentFirstName" disabled="disabled"/></td>
</tr>
<tr>
<td>Last Name </td>
<td><input type = "text" name = "parentLastName" disabled="disabled"/></td>
</tr>
<tr>
<td>Year Joined </td>
<td><input type = "text" name = "yearJoined" disabled="disabled"/></td>
</tr>
<tr>
<td>Street Address </td>
<td><input type = "text" name = "streetAddress" disabled="disabled"/></td>
</tr>
<tr>
<td>City </td>
<td><input type = "text" name = "city" disabled="disabled"/></td>
</tr>
<tr>
<td>State </br></td>
<td><input type = "text" name = "state" disabled="disabled"/></td>
</tr>
<tr>
<td>Zip </br></td>
<td><input type = "text" name = "zip" disabled="disabled"/></td>
</tr>
<tr>
<td>Home Phone </td>
<td><input type = "text" name = "homePhone" disabled="disabled"/> </br></td>
</tr>
<tr>
<td>Work Phone </td>
<td><input type = "text" name = "workPhone" disabled="disabled"/></td>
</tr>
<tr>
<td>Cell Phone </td>
<td><input type = "text" name = "cellPhone" disabled="disabled"/></td>
</tr>
<tr>
<td>Access Level </td>
<td><input type = "text" name = "accessLevel" disabled="disabled"/></td>
</tr>
<tr>
<td>Overall AFD </td>
<td><input type = "text" name = "overallAFD" disabled="disabled"/></td>
</tr>
<tr>
<td>Current AFD </td>
<td><input type = "text" name = "currentAFD" disabled="disabled"/></td>
</tr>
<tr>
<td><input type = "submit" value = "Delete Family" /></td>
</tr>
</table>

</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>