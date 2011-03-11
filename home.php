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
<h1>Welcome,&nbsp;
	<?php
	echo($_SESSION['userFirstName']);
	?>
</h1> 

<!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>