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
//	$TimeIn=strtotime(time,now);
	
	$sql = "update Messages set Message = '$MessageIn' where MessagesId = $MessageIdIn";
	
	if ($MessageIn != null)
	{
	mysql_query($sql);
	}
	
	// save data from query
	
	// loop through data
	/*
	while( $row = mysql_fetch_array($result) ) {
	
		echo <p>
			echo <?= $row["Message"] ?>
		echo	<br/>
			echo <?= $row["Time"] ?>
		echo </p>
	}
	*/
	
	mysql_close();
	
		header( "Location: MyWall.php" );
			
	//echo "Data Saved!";
?>
