<?php

	$userNameIn= $_GET["UsernameInput"];
	echo $userNameIn;
	//$userPassword = $_GET["pwd"];
	
	//echo $userEmail;
	//echo $userPassword;
	
	
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "Insert into testregi (username) values ('$userNameIn')";
	
	mysql_connect($host, $user);
	mysql_select_db($db);
	mysql_query($sql);
	echo "data saved";
	//$row = mysql_fetch_array($result);

//echo $row["username"];
	
	/*$count = mysql_num_rows($result);
	
	//echo $count;
	
	
	if ( $count == 1 )  {
		
		header( "Location: http://130.184.26.149:1080/~maks527/Mypage.php ");
		
	}
	else
	{ 
		
	 header( "Location: Welcome.php" );
	}
	*/
	mysql_close();

?>