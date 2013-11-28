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
    <div class="books">
    <img src="book6.png"/>
    </div>
    <div class ="description">Bilbo Baggins lives a quiet, peaceful life in his comfortable hole at Bag End. Bilbo lives in a hole because he is a hobbit—one of a race of small, plump people about half the size of humans, with furry toes and a great love of good food and drink. Bilbo is quite content at Bag End, near the bustling hobbit village of Hobbiton, but one day his comfort is shattered by the arrival of the old wizard Gandalf, who persuades Bilbo to set out on an adventure with a group of thirteen militant dwarves. <br />
    </div>
    <div class="arrows">
    <a href="book5.php"><img src="leftarrow.png" width="43" height="49"/></a>
    <a href="Home.php"><img src="rightarrow.png" width="43" height="49" /></a>
    </div>
       <div class="commentbox">
    <form name="reviewBox" id="reviewBox" action="" method="post">
	Username:<br /><input type= "text" id="U6" /><br />
	Review here:<br />
	<textarea cols="50" rows="6" class="commentbox" id="R6"></textarea>
	<br />
	<input class="buttons" type="button" value='Submit' onClick="reviewe('reviewbook1.php');"/>
	</form> 
    </div>
    <div id="reviewbox">
    <input class="buttons" type="button" value='Show Reviews' onClick="showreviewe('checkreview1.php');"/>
    </div>
    <!-- end .content --></div>
  <div class="sidebar2">
  <?php 
require_once "top2.php";
?>
       <ul class="nav">
      <li><a href="Home.php">Home</a></li>
      <li><a href="Home.php">Log Out</a></li>
    </ul> 
    <!-- end .sidebar2 --></div>
  <!-- end .container --></div>
</body>
</html>