<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "comiccentsdb";

$connection = mysql_connect($host,$user,$pass) or die(mysql_error());
 mysql_select_db($database,$connection) or die(mysql_error());

?>