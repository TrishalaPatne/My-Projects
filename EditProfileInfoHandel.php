<?php
	
	session_start();
	$username=$_SESSION["username"];
	$passwordIn=$_POST["PasswordInput"];
	$DisplayNameIn=$_POST["DisplayNameInput"];
	$DateofbirthIn=$_POST["DateofbirthInput"];
	$puborpriIn=$_POST["puborpriInput"];
	$emailIn=$_POST["emailInput"];
	$cityIn=$_POST["cityInput"];
	$stateIn=$_POST["stateInput"];
	$countryIn=$_POST["countryInput"];
	$relstatIn=$_POST["relstatInput"];
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	$sql = "Update UserInfo set 
	City='$cityIn',Password='$passwordIn', DateOFBirth='$DateofbirthIn',DisplayName='$DisplayNameIn',Email='$emailIn',City='$cityIn', State='$stateIn',
	Country='$countryIn',RelStatus='$relstatIn',PubOrPri='$puborpriIn' where Username='$username'";

	mysql_query($sql);
	header( "Location: ProfileInfo.php" )
	
	

?>