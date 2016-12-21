<?php
	session_start();
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	$MessageIn=$_GET["messageText"];
	$MessageIdIn=$_GET["msgId"];
	
	$sql = "update Messages set Message = '$MessageIn' where MessagesId = $MessageIdIn";
	
	if ($MessageIn != null)
	{
	mysql_query($sql);
	}
	

	
	mysql_close();
	
		header( "Location: Admin.php" );
			
?>
