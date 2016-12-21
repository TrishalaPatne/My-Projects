<?php
session_start();
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	$UsernameIn = $_GET["UsernameInput"];
	$sql = "delete from UserInfo where Username='$UsernameIn'";
	mysql_query($sql);
		mysql_close();
header( "Location: Admin.php" );
?>