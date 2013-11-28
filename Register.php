<?php
session_start();

	function logged_in() {
		return isset($_SESSION['userID']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("Register.php");
		}
	}
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
    <form name="registerForm" action="" method="post" >
UserName:<br /><input type="text" id="userName" /><br />
First name:<br /><input type="text" id="fname" /><br />
Surname:<br /><input type="text" id="sname" /><br />
Password:<br /><input type="password" id="password" maxlength="12"/><br />
Re-Enter Password:<br /><input type="password" id="password1" maxlength="12"/><br />
<h6>(password must be longer than 4 characters and contain at least one digit)<br /></h6>
<input class="buttons" type="button" value="Submit" onclick="checkPassword(); registerUser('RegisterNewUser.php');"/><br />
</form>
    <!-- end .content --></div>
  <div class="sidebar2">
         <?php 
require_once "top.php";
?>
       <ul class="nav">
      <li><a href="Home.php">Home</a></li>
      <li><a href="Register.php">Register</a></li>
    </ul> 
    <p>Log In</p>
  <form name="loginForm" id="loginForm" action="" method="post">
UserName:<br /><input type= "text" id="userName1" /><br />
Password:<br /><input type="password" id="password2"/><br />
<input class="buttons" type="button" value='Log In' onClick="logIn('checkuser.php');"/>
</form> 
    <!-- end .sidebar2 --></div>
  <!-- end .container --></div>
</body>
</html>