<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="home.js"></script>
<title>Untitled Document</title>
<link href="REAL.css" rel="stylesheet" type="text/css" /><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
<div id="top">


</div>
</head>

<body>

<div class="container">
<div class="logo">
<img src="bounce2.png" width="100%" />
</div>
  <div class="content">
  <div class="titles">
    Read. Rate. Review. Login to begin.
    </div>
    <div class="books">
    <a href="book1.php"><img src="book1.png"/></a>
    <a href="book2.php"><img src="book2.png"/></a>
    <a href="book3.php"><img src="book3.png"/></a>
    <a href="book4.php"><img src="book4.png"/></a>
    <a href="book5.php"><img src="book5.png"/></a>
    <a href="book6.php"><img src="book6.png"/></a>
    </div>
    <!-- end .content --></div>
  <div class="sidebar2">
         <?php 
require_once "top.php";
?>
       <ul class="nav">
      <li><a href="Home.php">Home</a></li>
      <li><a href="Register.php">Register</a></li>
    </ul> 
  <form name="loginForm" id="loginForm" action="" method="post">
UserName:<br /><input type= "text" id="userName1" /><br />
Password:<br /><input type="password" id="password2"/><br />
<input class="buttons" type="button" value='Log In' onClick="logIn('checkuser.php');"/>
</form> 
    <!-- end .sidebar2 --></div>
  <!-- end .container --></div>
</body>
</html>