<?php
		
	$username= $_GET["UsernameInput"]; 
//	$TimeIn=strtotime(time,now);
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	$sql = "select MessagesId,Message,Time from Messages where Username='$username' order by Time desc";
	
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