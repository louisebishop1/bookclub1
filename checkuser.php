<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'leb17';
$dbpass = 'leb17';
$dbname = 'leb17_bw';
$dbtable = 'users';


$q=$_GET["userID"];
$p=$_GET["passWD"];
$con = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$con)
 {
 	die('Could not connect: ' . mysql_error());
 }
$dbselect = mysql_select_db($dbname,$con);

$sql="SELECT * FROM $dbtable WHERE userID='$q'";

$result = mysql_query($sql);


if (mysql_num_rows($result)==0) { 
	echo "Invlaid Log In.";
} else {
	while($row = mysql_fetch_array($result))
 {

 if (($row['passWD'])==$p) {

   $_SESSION['userID'] = $q;
   echo "Welcome $q";
} else { echo "PLease create an Account.";} 

}

} 
mysql_close($con);

?>
