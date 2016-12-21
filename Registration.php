<?php

	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	
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
	
	$sql = "insert into UserInfo
(Username,Password,DateOFBirth, DisplayName , IndOrBusnot, Gender, Email, City, State, Country, RelStatus, PubOrPri, ProfilePicture,UserorAdmin) values 
('$userNameIn','$passwordIn','$DateofbirthIn','$DisplayNameIn','$indorbusIn','$genderIn','$emailIn','$cityIn','$stateIn','$countryIn','$relstatIn','$puborpriIn','$target_file','User')";
	
	
	mysql_query($sql);
	header( "Location: Welcome.php" )
	

?>