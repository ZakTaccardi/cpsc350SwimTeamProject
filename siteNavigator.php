<?php
session_start();
?>

<head> 
<title>Swim Rays</title> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
<meta name="keywords" content="[[tag.Meta_Keywords]]" /> 
<meta name="description" content="[[tag.Meta_Description]]" /> 
<link rel="stylesheet" href="stylesheet.css" type="text/css" /> 
 
<link rel="stylesheet" type="text/css" href="graphics/scripts/jquery.lightbox-0.5.css" media="screen" /> 
 
<script type="text/javascript" src="/freedom_html/common/ulmenu.js"></script> 
</head> 
<body id="page" onload="initULMenu('menu_main')"> 
<div id="header" class="canvas"> 
  <div id="headerTransparent"> 
    <div id="logo"><a href="index.php?src="><h1>Stingrays Swim Team</h1></a></div><!-- end logo --> 
    <div id="headerMenu"></div> 
  </div> 
</div> 

<div id="content" class="canvas"> 
 <div id="contentTop"> 
 <div id="contentBot"> 
  <div class="left"> 
    <div id="menu_main"> 
  <ul class="menu_main"> 
	 <li class="item1"><a class="first" href="Home.php" >Home</a></li> 
     <?php
	 if($_SESSION['currentuser'] == NULL){
	 ?>
	 <li class="item2"><a  href="login.php" >Login</a></li> 
     <?php
	 }else{?>
	 <li class="item3"><a  href="logout.php" >Logout</a></li>
	 <?php
	 } 
	 $user_type = $_SESSION['accessLevel'];
	 if($user_type > 1){
	 ?>
	 <li class="item3"><a  href="createAccount.php" >Register a Family</a></li> 
	 <?php
	 }
	 ?>
  </ul> 
</div> 
</div> 
<div class="center"> 
    <div class="webpageWrapper">