
<?php
	$username= "Niharika";
	
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "select Message,Time from Messages where UserNameMessages='$username'";
	
	mysql_connect($host, $user);
	mysql_select_db($db);
	mysql_query($sql);
	mysql_connect($host, $user);
	mysql_select_db($db);
	
	// save data from query
	$result = mysql_query($sql);
	
	// loop through data
	
	while( $row = mysql_fetch_array($result) ) {
	
		echo <p>
			echo <?= $row["Message"] ?>
		echo	<br/>
			echo <?= $row["Time"] ?>
		echo </p>
	}
	
	
	mysql_close();
	
	//echo "Data Saved!";

?>