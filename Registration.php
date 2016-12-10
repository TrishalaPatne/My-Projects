<?php

	$userNameIn= $_POST["UsernameInput"];
	$passwordIn=$_POST["PasswordInput"];
	$DisplayNameIn=$_POST["DisplayNameInput"];
	$DateofbirthIn=$_POST["DateofbirthInput"];
	$indorbusIn=$_POST["indorbusInput"];
	$puborpriIn=$_POST["puborpriInput"];
	$genderIn=$_POST["genderInput"];
	$emailIn=$_POST["emailInput"];
	$cityIn=$_POST["cityInput"];
	$stateIn=$_POST["stateInput"];
	$countryIn=$_POST["countryInput"];
	$relstatIn=$_POST["relstatInput"];
	
	$target_dir = "profile_images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql = "insert into test2
(username,Password,DateOFBirth, DisplayName , IndOrBusnot, Gender, Email, City, State, Country, RelStatus, PubOrPri, profile_pic) values 
('$userNameIn','$passwordIn','$DateofbirthIn','$DisplayNameIn','$indorbusIn','$genderIn','$emailIn','$cityIn','$stateIn','$countryIn','$relstatIn','$puborpriIn','$target_file')";
	
	mysql_connect($host, $user);
	mysql_select_db($db);
	mysql_query($sql);
	header( "Location: Welcome.php" )
	//$row = mysql_fetch_array($result);

//echo $row["username"];
	
	//$count = mysql_num_rows($result);
	
	//echo $count;
	/*
if ( $count == 1 )  {
		
		header( "Location: http://130.184.26.149:1080/~maks527/Mypage.php ");
		
	}
	else
	{ 
		
	 header( "Location: Welcome.php" );
	}
	
	mysql_close();
	
	header( "Location: Welcome.php" )*/

?>