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
    <img src="book1.png"/>
    </div>
    <div class ="description">Harvard professor Robert Langdon receives an urgent late-night phone call while on business in Paris: the elderly curator of the Louvre has been brutally murdered inside the museum. Alongside the body, police have found a series of baffling codes. As Langdon and a gifted French cryptologist, Sophie Neveu, begin to sort through the bizarre riddles, they are stunned to find a trail that leads to the works of Leonardo Da Vinci - and suggests the answer to a mystery that stretches deep into the vault of history. Unless Langdon and Neveu can decipher the labyrinthine code and quickly assemble the pieces of the puzzle, a stunning historical truth will be lost forever...<br />
    </div>
    <div class="arrows">
    <a href="Home.php"><img src="leftarrow.png" width="43" height="49"/></a>
    <a href="book2.php"><img src="rightarrow.png" width="43" height="49" /></a>
    </div>
    <div class="commentbox">
    <form name="reviewBox" id="reviewBox" action="" method="post">
	Name:<br /><input type= "text" id="U1" /><br />
	Review here:<br />
	<textarea cols="50" rows="6" class="commentbox" id="R1"></textarea>
	<br />
	<input class="buttons" type="button" value='Submit' onClick="review('reviewbook1.php');"/>
	</form> 
    </div>
    <div id="reviewbox">
    <input class="buttons" type="button" value='Show Reviews' onClick="showreview('checkreview1.php');"/>
    </div>

  <!-- end .content --></div>
  <div class="sidebar2">
         <?php 
require_once "top2.php";
?>
       <ul class="nav">

      <li><a href="Home.php">Home</a></li>
      <li><a href="Logout.php">Log Out</a></li>
    </ul> 
    <!-- end .sidebar2 --></div>
  <!-- end .container --></div>
</body>
</html>