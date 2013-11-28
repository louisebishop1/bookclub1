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
    <img src="book5.png"/>
    </div>
    <div class ="description">In the sequel to Russell's best-selling biography 'My Booky Wook' we follow the now sober but still scandalous, sex-fuelled star on his electrifying rise to international fame. A roller coaster ride through tours, films, stand up and tabloids -- this time, it's personal. So begins Russell Brand's electrifying memoir of his rapid ascent into the upper realms of fame. Rarely has a sequel delivered on the promise of the original with such literary and comic gusto. In My Booky Wook 2: This Time It's Personal, Russell Brand takes off where his international best-seller My Booky Wook left off. Brand is sober and, after dedicating his life and compromising his sanity in the pursuit of fame, he has had his first taste of national notoriety. Does fame bring happiness and inner peace? <br />
    </div>
    <div class="arrows">
    <a href="book4.php"><img src="leftarrow.png" width="43" height="49"/></a>
    <a href="book6.php"><img src="rightarrow.png" width="43" height="49" /></a>
    </div>
       <div class="commentbox">
    <form name="reviewBox" id="reviewBox" action="" method="post">
	Username:<br /><input type= "text" id="U5" /><br />
	Review here:<br />
	<textarea cols="50" rows="6" class="commentbox" id="R5"></textarea>
	<br />
	<input class="buttons" type="button" value='Submit' onClick="reviewd('reviewbook1.php');"/>
	</form> 
    </div>
    <div id="reviewbox">
    <input class="buttons" type="button" value='Show Reviews' onClick="showreviewd('checkreview1.php');"/>
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