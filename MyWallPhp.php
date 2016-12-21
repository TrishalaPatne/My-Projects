<?php
		session_start();
	$username= $_SESSION["username"]; 
	$MessageIn=$_GET["MessageInput"];
//	$TimeIn=strtotime(time,now);
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	$sql = "insert into Messages (Username,Message) values ('$username','$MessageIn') ";
	
	mysql_connect($host, $user, $pass);
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
	 
	$username= $_SESSION["username"]; 
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	$sql = "select MessagesId,Message,Time from Messages where Username='$username' order by Time desc";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	$result = mysql_query($sql);
	
	// loop through data
	
	while( $row = mysql_fetch_array($result) ) {
	
	echo "<h5>Post by ".$username. " on ". $row["Time"]. " </h5>";
		
			 echo $row["Message"] ;
			 echo "<br/>";
			?><a href="./editpost.php?MessageId=<?= $row["MessagesId"] ?> &Message=<?=$row["Message"]?>">Edit</a>
			&nbsp;
			<a href="./deletepost.php?MessageId=<?= $row["MessagesId"] ?>">Delete</a>
			
				<?php echo "<hr/>";
				
	}
	
	
	mysql_close();
	
?>