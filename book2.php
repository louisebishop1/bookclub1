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
    <img src="book2.png"/>
    </div>
    <div class ="description">With the Rolling Stones, Keith Richards created the riffs, the lyrics and the songs that roused the world, and over four decades he lived the original rock and roll life: taking the chances he wanted, speaking his mind, and making it all work in a way that no one before him had ever done. Now, at last, the man himself tells us the story of life in the crossfire hurricane. And what a life. Listening obsessively to Chuck Berry and Muddy Waters records as a child in post-war Kent. Learning guitar and forming a band with Mick Jagger and Brian Jones. The Rolling Stones' first fame and success as a bad-boy band. The notorious Redlands drug bust and subsequent series of confrontations with a nervous establishment that led to his enduring image as outlaw and folk hero. Creating immortal riffs such as the ones in 'Jumping Jack Flash' and 'Street Fighting Man' and 'Honky Tonk Women'. Falling in love with Anita Pallenberg and the death of Brian Jones. Tax exile in France, wildfire tours of the US, 'Exile on Main Street' and 'Some Girls'. Ever increasing fame, isolation and addiction.<br />
    </div>
    <div class="arrows">
    <a href="book1.php"><img src="leftarrow.png" width="43" height="49"/></a>
    <a href="book3.php"><img src="rightarrow.png" width="43" height="49" /></a>
    </div>
    <div class="commentbox">
    <form name="reviewBox" id="reviewBox" action="" method="post">
	Username:<br /><input type= "text" id="U2" /><br />
	Review here:<br />
	<textarea cols="50" rows="6" class="commentbox" id="R2"></textarea>
	<br />
	<input class="buttons" type="button" value='Submit' onClick="reviewa('reviewbook1.php');"/>
	</form> 
    </div>
    <div id="reviewbox">
    <input class="buttons" type="button" value='Show Reviews' onClick="showreviewa('checkreview1.php');"/>
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