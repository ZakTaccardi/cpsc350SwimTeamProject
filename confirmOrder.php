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
<h1>Confirm Orders</h1>
<h2>Here an administrator can view submitted orders pending confirmation when payment has been received.</h2>
<select>
  <option value="volvo">Order (by Family Name)</option>
</select>

<table>
<tr>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Gift Card</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Cost</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Percent Returned</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Quantity</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Cost</h3></td>
<td style="font-weight:bold;" align="left"><h3 style="text-decoration:underline;">Amount Raised</h3></td>
</tr>

<tr>
<td>Applebees </td>
<td>$25</td>
<td>8%</td>
<td><input type = "text" style="width:30px;" name = "quantityOrdered" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "cost1" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "amountRaised1" disabled="disabled"/></td>
</tr>
<tr>
<td>Applebees </td>
<td>$50</td>
<td>8%</td>
<td><input type = "text" style="width:30px;" name = "quantityOrdered" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "cost2" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "amountRaised2" disabled="disabled"/></td>
</tr>
<td>Outback </td>
<td>$25</td>
<td>11%</td>
<td><input type = "text" style="width:30px;" name = "quantityOrdered" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "cost3" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "amountRaised3" disabled="disabled"/></td>
</tr>
<td>Outback </td>
<td>$50</td>
<td>11%</td>
<td><input type = "text" style="width:30px;" name = "quantityOrdered" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "cost4" disabled="disabled"/></td>
<td>$<input type = "text" style="width:60px;" name = "amountRaised4" disabled="disabled"/></td>
</tr>
<tr>
<tr></tr><tr></tr><tr></tr>
<td></td><td></td><td></td><td><h3>Totals:</h3></td>
<td style="border-style:solid;border-top-style:solid;">$<input type = "text" style="width:60px;" name = "totalCost" disabled="disabled"/></td>
<td style="border-top-style:solid;">$<input type = "text" style="width:60px;" name = "totalAmountRaised" disabled="disabled"/></td>
</tr>
<td></td><td></td><td></td><td></td>
<td colspan="2"><input type = "submit" value = "Confirm Order" /</td>
</table>
</div> <!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>