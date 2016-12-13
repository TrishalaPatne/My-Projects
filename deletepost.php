<?php

	$MessageIdIn = $_GET["MessageId"];
	

	$username= "Niharika";
	
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "delete from Messages where MessagesId=$MessageIdIn";
	echo $MessageIdIn;
	mysql_connect($host, $user);
	mysql_select_db($db);
	mysql_query($sql);
	mysql_connect($host, $user);
	mysql_select_db($db);
	//echo "Data Saved!";
	mysql_close();
	header( "Location:  MyWall.php" );
	
?>