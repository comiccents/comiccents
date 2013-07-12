<?php
$host = "localhost";
$database = "comiccentsdb";
$username = "root";
$password = "";

$connection = mysql_connect($host,$username,$password);
 mysql_select_db($database,$connection);

?>
