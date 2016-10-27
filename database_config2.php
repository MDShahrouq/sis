<?php    
error_reporting(E_ALL ^ E_DEPRECATED);
$username = "root";
$password = "";
$hostname = "localhost";
	
$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	
$selected = mysql_select_db("schooldb", $dbhandle);
?>