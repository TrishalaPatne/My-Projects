<?php

	$userNameIn= $_GET["UsernameInput"];
	$passwordIn=$_GET["PasswordInput"];
	$DisplayNameIn=$_GET["DisplayNameInput"];
	$DateofbirthIn=$_GET["DateofbirthInput"];
	$indorbusIn=$_GET["indorbusInput"];
	$puborpriIn=$_GET["puborpriInput"];
	$genderIn=$_GET["genderInput"];
	$emailIn=$_GET["emailInput"];
	$cityIn=$_GET["cityInput"];
	$stateIn=$_GET["stateInput"];
	$countryIn=$_GET["countryInput"];
	$relstatIn=$_GET["relstatInput"];
	
	
	
	
	//$userPassword = $_GET["pwd"];
	
	//echo $userEmail;
	//echo $userPassword;
	
	
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "insert into test1
(username,Password,DateOFBirth, DisplayName , IndOrBusnot, Gender, Email, City, State, Country, RelStatus, PubOrPri) values 
('$userNameIn','$passwordIn','$DateofbirthIn','$DisplayNameIn','$indorbusIn','$genderIn','$emailIn','$cityIn','$stateIn','$countryIn','$relstatIn','$puborpriIn')";
	
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
	
	header( "Location: Welcome.php" )

?>