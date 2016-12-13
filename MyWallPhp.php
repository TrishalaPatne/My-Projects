<?php
	$username= "Niharika";
	$MessageIn=$_GET["MessageInput"];
//	$TimeIn=strtotime(time,now);
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "insert into Messages (UserNameMessages,Message) values ('$username','$MessageIn') ";
	
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
	
	//echo "Data Saved!";
?>
	  <?php
	$username= "Niharika";
	
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "select MessagesId,Message,Time from Messages where UserNameMessages='$username' order by Time desc";
	
	mysql_connect($host, $user);
	mysql_select_db($db);
	mysql_query($sql);
	mysql_connect($host, $user);
	mysql_select_db($db);
	
	// save data from query
	$result = mysql_query($sql);
	
	// loop through data
	
	 
	
	while( $row = mysql_fetch_array($result) ) {
	
	echo "<h5>Post by ".$username. " on ". $row["Time"]. " </h5>";
		
			 echo $row["Message"] ;
			 echo "<br/>";
			?><a href="./editpost.php?MessageId=<?= $row["MessagesId"] ?> &Message=<?=$row["Message"]?>">Edit</a>
			
			<a href="./deletepost.php?MessageId=<?= $row["MessagesId"] ?>">Delete</a>
			
				<?php echo "<hr/>";
				
	}
	
	
	mysql_close();
	
	//echo "Data Saved!";

?>