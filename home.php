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
	<?php
	if($_SESSION['userFirstName'] != NULL){
		$name = $_SESSION['userFirstName'];
		echo "<h1>Welcome $name!</h1>";
	}else{
		echo "<h1>Welcome Guest!</h1>";
	}
	?>
</h1> 

<p>Please feel free to browse the site!</p>
<!-- Page info goes above-->
<?php
include('footer.php');
?>
</body>
</html>