<?php
	session_start();
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	$userEmail= $_GET["email"];
	$userPassword = $_GET["pwd"];
	if (isset ($userEmail) and ($userPassword))
	{
	$sql = "Select Username, UserorAdmin from UserInfo where Email='$userEmail' and Password='$userPassword'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$_SESSION["username"] =$row["Username"];
	$count = mysql_num_rows($result);
	
	if ( $count == 1 )  {
	if ($row["UserorAdmin"]=="Admin")
		{
		header( "Location: http://130.184.26.149:1080/~uateam03/Admin.php ");
	}
	else
	{
	header( "Location: http://130.184.26.149:1080/~uateam03/MyHomePage.php ");	
	}
	}
	else
	{ 
	
	 header( "Location: Welcome.php" );
	}
	
	mysql_close();

	}
	else 
		
		{
			echo "Please enter email / password";
		}
	
	
?>