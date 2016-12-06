<?php

	$userEmail= $_GET["email"];
	$userPassword = $_GET["pwd"];
	
	//echo $userEmail;
	//echo $userPassword;
	
	
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "Select username from UserProfiles_maks527 where Email='$userEmail' and Password='$userPassword'";
	
	mysql_connect($host, $user);
	mysql_select_db($db);
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	//echo $row["username"];
	
	$count = mysql_num_rows($result);
	
	//echo $count;
	
	
	if ( $count == 1 )  {
		
		header( "Location: http://130.184.26.149:1080/~maks527/Mypage.php ");
		
	}
	else
	{ 
		
	 header( "Location: Welcome.php" );
	}
	
	mysql_close();

?>