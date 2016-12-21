<?php

	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	$MessageIdIn = $_GET["MessageId"];
	$sql = "delete from Messages where MessagesId=$MessageIdIn";
	mysql_query($sql);
		mysql_close();
	header( "Location:  Admin.php" );
	
?>