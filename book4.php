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
    <img src="book4.png"/>
    </div>
    <div class ="description">
The world is divided into two - the dark-skinned Crosses, and the light-skinned Noughts. The Crosses are the rulers, the privileged race; the Noughts are second-class citizens, erstwhile slaves of the Crosses, and still without equal rights in a world torn apart by race and class. Sephy is a Cross, the daughter of the powerful Kamal Hadley. Callum is a Nought, the son of Maggie McGregor, Sephy's nanny. Their childhood friendship turns to love - each is incomplete without the other, and cannot envisage a life apart from each other. Till one day the terrorist group which calls itself the Liberation Militia explodes a bomb in the shopping mall; the bomb wreaks havoc not only in the mall but also in the lives of Sephy and Callum. Noughts and Crosses is sometimes distressing, sometimes disturbing, and sometimes heart-rendingly sad. It is about discrimination and injustice and brutal violence. Yet it is also about love and tenderness.
      <br />
    </div>
    <div class="arrows">
    <a href="book3.php"><img src="leftarrow.png" width="43" height="49"/></a>
    <a href="book5.php"><img src="rightarrow.png" width="43" height="49" /></a>
    </div>
       <div class="commentbox">
    <form name="reviewBox" id="reviewBox" action="" method="post">
	Username:<br /><input type= "text" id="U4" /><br />
	Review here:<br />
	<textarea cols="50" rows="6" class="commentbox" id="R4"></textarea>
	<br />
	<input class="buttons" type="button" value='Submit' onClick="reviewc('reviewbook1.php');"/>
	</form> 
    </div>
    <div id="reviewbox">
    <input class="buttons" type="button" value='Show Reviews' onClick="showreviewc('checkreview1.php');"/>
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