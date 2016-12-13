<?php
	$username= "Niharika";
	$MessageIn=$_GET["messageText"];
	$MessageIdIn=$_GET["msgId"];
//	$TimeIn=strtotime(time,now);
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "update Messages set Message = '$MessageIn' where MessagesId = $MessageIdIn";
	
	mysql_connect($host, $user);
	mysql_select_db($db);
	
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
