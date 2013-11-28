<?php
session_start();
$db_host = 'localhost';
$db_user = 'leb17';
$db_pwd = 'leb17';
$database = 'leb17_bw';
$table = 'book1';

$bid=$_GET["bookID"];


if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");
$result = mysql_query("SELECT userID,Review FROM $table WHERE bookID='$bid'");

if (!$result) {
    die("Query to show fields from table failed");
}
$fields_num = mysql_num_fields($result);
echo "<h2>Reviews</h2>";
echo "<table border='1'><tr>";
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<th>{$field->name}</th>";
}
echo "</tr>\n";
while($row = mysql_fetch_row($result))
{
    echo "<tr>";
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";

}
echo "</table>";
mysql_free_result($result);
?>