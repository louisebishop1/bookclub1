<?php
session_start();
?>


<div id="top">

<?php

	if (isset($_SESSION["userID"])){
echo "".$_SESSION['userID']."";
}else{
	echo "Please Log In";
}
?>
</div>