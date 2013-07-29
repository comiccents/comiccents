<?php 
$host = "localhost"; 
$database = "comiccentsdb"; 
$username = "root"; 
$password = "";

$connection = mysql_connect($host,$username,$password)or die(mysql_error());; mysql_select_db($database,$connection)or die(mysql_error());;
?>