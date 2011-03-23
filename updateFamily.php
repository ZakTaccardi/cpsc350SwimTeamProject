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
<h1>View/Edit Family Information<h1>
<h2>Here you can view and edit your family's current information.</h2>

<!-- Current & New Family Information Table-->
<table border="0">
<tr>
<td colspan="2" style="font-weight:bold;padding-right:8px" align="right"><h3>Current Family Information</h3></center></td>
<td style="font-weight:bold;" align="left"><h3>New Family Information</h3></center></td>
</tr>
<tr>
<td> Email Address </td>
<td><input type = "text" name = "email" disabled="disabled" /></td>
<td><input type = "text" name = "emailNew" /></td>
</tr>
<tr>
<td>First Name </td>
<td><input type = "text" name = "parentFirstName" disabled="disabled"/></td>
<td><input type = "text" name = "parentFirstNameNew" /></td>
</tr>
<tr>
<td>Last Name </td>
<td><input type = "text" name = "parentLastName" disabled="disabled"/></td>
<td><input type = "text" name = "parentLastNameNew" /></td>
</tr>
<tr>
<td>Year Joined </td>
<td><input type = "text" name = "yearJoined" disabled="disabled"/></td>
<td><input type = "text" name = "yearJoinedNew" /></td>
</tr>
<tr>
<td>Street Address </td>
<td><input type = "text" name = "streetAddress" disabled="disabled"/></td>
<td><input type = "text" name = "streetAddress" /></td>
</tr>
<tr>
<td>City </td>
<td><input type = "text" name = "city" disabled="disabled"/></td>
<td><input type = "text" name = "cityNew" /></td>
</tr>
<tr>
<td>State </br></td>
<td><input type = "text" name = "state" disabled="disabled"/></td>
<td><input type = "text" name = "stateNew" /></td>
</tr>
<tr>
<td>Zip </br></td>
<td><input type = "text" name = "zip" disabled="disabled"/></td>
<td><input type = "text" name = "zipNew" /></td>
</tr>
<tr>
<td>Home Phone </td>
<td><input type = "text" name = "homePhone" disabled="disabled"/> </br></td>
<td><input type = "text" name = "homePhoneNew" /></td>
</tr>
<tr>
<td>Work Phone </td>
<td><input type = "text" name = "workPhone" disabled="disabled"/></td>
<td><input type = "text" name = "workPhoneNew" /></td>
</tr>
<tr>
<td>Cell Phone </td>
<td><input type = "text" name = "cellPhone" disabled="disabled"/></td>
<td><input type = "text" name = "cellPhoneNew" /></td>
</tr>
<tr>
<td>Access Level </td>
<td><input type = "text" name = "accessLevel" disabled="disabled"/></td>
<td><input type = "text" name = "accessLevelNew" /></td>
</tr>
<tr>
<td>Overall AFD </td>
<td><input type = "text" name = "overallAFD" disabled="disabled"/></td>
<td><input type = "text" name = "overallAFDNew" /></td>
</tr>
<tr>
<td>Current AFD </td>
<td><input type = "text" name = "currentAFD" disabled="disabled"/></td>
<td><input type = "text" name = "currentAFDNew" /></td>
</tr>
<tr>
<td><input type = "submit" value = "Update Family Information" /></td>
</tr>
</table>
</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>