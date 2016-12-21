 <?php
	session_start();
	?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>PageView</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
    .row.content {min-height: 1000px;} 
	
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
	
/* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
	

.panel-heading {
    background-color: #37BC9B;
    border: 1px solid #36b898;
    color: white;
	border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    border-bottom: 1px solid #DDD;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
}


 .bottompad
 {
	 margin-bottom: 50px;
 }
 
h2{
text-align: center;
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
      <h3>My TweetBook</h3>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="MyHomePage.php">Home</a></li>
        <li><a href="ProfileInfo.php">Profile Info</a></li>
        <li><a href="EditProfile.php">Edit Profile</a></li>
        <li><a href="MyWall.php">My Wall</a></li>
      </ul><br>
      <form method="get" action="./Pageview.php" enctype="multipart/form-data">
      <div class="input-group">
        <input type="text" class="form-control" name="searchDisplayName" placeholder="Search Posts by username/DisplayName"/>
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
	  </form>
	  <br><h4>U of A Links</h4>
	   <ul class="nav nav-pills nav-stacked">
        <li><a href="http://www.uark.edu/">University of Arkansas</a></li>
        <li><a href="www.arkansasrazorbacks.com/">Razorback Athletics</a></li>
        <li><a href="https://uaconnect.uark.edu/">UAConnect</a></li>
        <li><a href="https://learn.uark.edu/">UARK Blackboard</a></li>
      </ul><br>
    </div>

    <div class="col-sm-6">
	<br>
	 <div class="panel panel-default">
               <div class="panel-heading">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-xs-12 col-sm-4">
						<br><br><br><br><br><br>
                           <figure>
                              <img class="img-circle img-responsive" alt="" src="http://placehold.it/300x300">
                           </figure> 
                           </div>
						   
 <?php
	$user = "uateam03";
	$host = "localhost";
	$db = "uateam03";
	$pass="uateam03";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
	$searchName= $_GET["searchDisplayName"];
	$sql= "Select Username,DisplayName,DateOfBirth,Gender,City,State,Email,RelStatus,PubOrPri from UserInfo where DisplayName='$searchName'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$serachUserName=$row["Username"];
	$ProfileAcc=$row["PubOrPri"];
	if($ProfileAcc=="Public")
	{
	?>
	<h2><?=$row["DisplayName"]?>'s profile</h2>
                        <div class="col-xs-12 col-sm-8">
						<br>
                          <table class="table table-bordered">
						  <tbody>
                           <tr>
                           <td>DisplayName</td>
                           <td><?=$row["DisplayName"]?></td>
                           </tr>
                           <tr>
                           <td>DOB</td>
                           <td><?=$row["DateOfBirth"]?></td>
                           </tr>
                           <tr>
                           <td>Gender</td>
                           <td><?=$row["Gender"]?></td>
                           </tr>
						   <tr>
                           <td>City, State</td>
                           <td><?=$row["City"]?> ,  <?=$row["State"]?></td>
                           </tr>
						   <tr>
                           <td>Email</td>
                           <td><?=$row["Email"]?></td>
                           </tr>
						   <tr>
                           <td>Relationship Status</td>
                           <td><?=$row["RelStatus"]?></td>
                           </tr>
						   
						   </table>
                        </div>
	<? } else {
							echo "<h2>User has restricted access to his Profile</h2>";
						}?>
                     </div>
                  </div>
               </div>
	  
	</div> 

	  <hr>
<?
	  mysql_close();

?>


  <?php
	$user = "uateam03";
	$host = "localhost";
	$pass= "uateam03";
	$db = "uateam03";
	$sql = "select Username,Message,Time from Messages  where Username='$serachUserName' order by Time desc ";
	
	mysql_connect($host, $user,$pass);
	mysql_select_db($db);
	$result = mysql_query($sql);
	
if ($ProfileAcc=="Public")
{?>

      <h4><small>RECENT POSTS</small></h4>
      <hr>
	<? while( $row = mysql_fetch_array($result) ) {
	
	echo "<h5>Post by ".$row["Username"]. " on ". $row["Time"]. " </h5>";
		 
			 echo $row["Message"] ;
				echo "<hr>";
	}
	
	
	mysql_close();
}
	//echo "Data Saved!";

?>
	  
	        
    </div>
	
   <div class="col-sm-3 sidenav navbar-right">
   <form method="get" action="./Logout.php" enctype="multipart/form-data">
   <button type="submit" style="background-color: #00BFFF; float: right" class="btn btn-default btn-sm navbar-right">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button><br><br>
	</form>
      <h4 class="dark-grey"><center>Support Local Fayetteville Businesses<center></h4><br>
<center><layer id="placeholderlayer"></layer><div id="placeholderdiv"></div></center><br>
<center><layer id="placeholderlayer2"></layer><div id="placeholderdiv2"></div></center><br>
<center><layer id="placeholderlayer3"></layer><div id="placeholderdiv3"></div></center>
      </div>
    </div>
  </div>
</div>

<footer class="navbar-default navbar-fixed-bottom" style="background-color: #555; color: white; padding: 15px;">
  <div class="container-fluid">
  <h4>UARKTweetBook.com</h4>
  </div>
</footer>
</body>
</html>
