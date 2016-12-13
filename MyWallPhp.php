<?php
	$username= "Niharika";
	$MessageIn=$_GET["MessageInput"];
//	$TimeIn=strtotime(time,now);
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "insert into Messages (UserNameMessages,Message,Time) values ('$username','$MessageIn','0') ";
	
	mysql_connect($host, $user);
	mysql_select_db($db);
	mysql_query($sql);
	mysql_connect($host, $user);
	mysql_select_db($db);
	
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
	$sql = "select Message,Time from Messages where UserNameMessages='$username' order by Time desc";
	
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
				echo "<hr/>";
	}
	
	
	mysql_close();
	
	//echo "Data Saved!";

?>