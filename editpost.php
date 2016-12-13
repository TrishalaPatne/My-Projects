<?php

	$MessageIdIn = $_GET["MessageId"];
	$MessageIn=$_GET["Message"];
/*
	$username= "Niharika";
	
	$user = "maks527";
	$host = "localhost";
	$db = "test";
	$sql= "select Message from Messages where MessagesId=$MessageIdIn";
	$sql = "delete from Messages where MessagesId=$MessageIdIn";
	echo $MessageIdIn;
	mysql_connect($host, $user);
	mysql_select_db($db);
	$result= mysql_query($sql);
	$row = mysql_fetch_array($result);
	$Message
	mysql_connect($host, $user);
	mysql_select_db($db);
	//echo "Data Saved!";
	mysql_close();
	header( "Location:  MyWall.php" );*/
	
?>



<<!DOCTYPE html>
<html lang="en">
<head>
 <title>MyPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
		<script>
 jQuery(document).ready(function() {
  var sideHeight = jQuery('.row').height();
  jQuery('.content').css('height', sideHeight + 'px');
});
</script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {min-height: 300px;} 
	
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
	
/* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>


<script language="JavaScript1.2">

		
		
var howOften = 6; //number often in seconds to rotate
var howOften2 = 6;
var howOften3 = 6;
var current = 0; //start the counter at 0
var current2 = 3;
var current3 = 5;
var ns6 = document.getElementById&&!document.all; //detect netscape 6

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<a href='http://onf.coop/' ><img alt='image0 (9K)' src='Ozark.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[1]="<a href='http://www.thefarmerstablecafe.com/'><img alt='image1 (9K)' src='Farmerstable.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[2]="<a href='http://arsagas.com/'><img alt='image2 (9K)' src='Arsagas.png' height='200' width='200' border='0' /></a>"; //a linked image
	items[3]="<a href='http://www.nwaescaperoom.com/'><img alt='image3 (9K)' src='Escaperoom.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[4]="<a href='https://khanaindiangrill.com/'><img alt='image4 (9K)' src='Khana.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[5]="<a href='http://stonemillbread.net/'><img alt='image5 (18K)' src='Stonemill.png' height='200' width='200' border='0' /></a>"; //a linked image
	items[6]="<a href='http://puritancoffeebeer.com/'><img alt='image4 (9K)' src='Puritan.png' height='200' width='200' border='0' /></a>"; //a linked image
    items[7]="<a href='https://www.fayettechill.com/'><img alt='image5 (18K)' src='Fayettechill.png' height='200' width='200' border='0' /></a>"; //a linked image
	
   
function rotater() {
    if(document.layers) {
        document.placeholderlayer.document.write(items[current]);
        document.placeholderlayer.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
        if(document.all)
            placeholderdiv.innerHTML=items[current];

    current = (current==items.length-1) ? 0 : current + 1; //increment or reset
    setTimeout("rotater()",howOften*1000);
}

function rotater2() {
	if(document.layers) {
        document.placeholderlayer2.document.write(items[current2]);
        document.placeholderlayer2.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv2").innerHTML=items[current2]
        if(document.all)
            placeholderdiv2.innerHTML=items[current2];

    current2 = (current2==items.length-1) ? 0 : current2 + 1; //increment or reset
    setTimeout("rotater2()",howOften2*1000);
}

function rotater3() {
	if(document.layers) {
        document.placeholderlayer3.document.write(items[current3]);
        document.placeholderlayer3.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv3").innerHTML=items[current3]
        if(document.all)
            placeholderdiv3.innerHTML=items[current2];

    current3 = (current3==items.length-1) ? 0 : current3 + 1; //increment or reset
    setTimeout("rotater3()",howOften3*1000);
}

function rotaterall() {
	rotater();
	rotater2();
	rotater3();
	}


window.onload=rotaterall;



</script>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>My TweetBook</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="Mypage.php">Home</a></li>
        <li><a href="ProfileInfo.php">Profile Info</a></li>
        <li><a href="EditProfile.php">Edit Profile</a></li>
        <li><a href="MyWall.php">My Wall</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Posts by username/DisplayName">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-6">
	<br>
	 <form role="form" method="get" action="editposthandle.php" enctype="multipart/form-data">
        <div class="form-group" >
          <textarea class="form-control"  name="messageText" value="<?= "$MessageIn" ?>" rows="3" required><?= "$MessageIn" ?></textarea>
		  <input type="hidden" name="msgId" value="<?="$MessageIdIn"?>"/>
        </div>
        <button type="submit"  class="btn btn-success">Submit</button>
      </form>
	  <br>
	  <hr>
	  <br>
	  
      
	
	
   <div class="col-sm-3 sidenav navbar-right">
   <div class="logout" style="float: right"><a href="#" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out </a></div><br><br>
      <h4 class="dark-grey"><center>Support Local Fayetteville Businesses<center></h4><br>
<center><layer id="placeholderlayer"></layer><div id="placeholderdiv"></div></center><br>
<center><layer id="placeholderlayer2"></layer><div id="placeholderdiv2"></div></center><br>
<center><layer id="placeholderlayer3"></layer><div id="placeholderdiv3"></div></center>
      </div>
    </div>
  </div>
</div>




<footer class="container-fluid">
  <h4>UA TweetBook</h4>
</footer>

</body>
</html>
