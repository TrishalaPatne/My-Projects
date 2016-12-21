<head>
 <title>About US</title>
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
    .row.content {min-height: 1500px;} 
	
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
  
  p {text-align:center;}
  
  ul.nav > li > a:hover {
	background-color: #6A5ACD;
	color: #FFFFFF;
	border-style: none;
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
        <li class="hidden"><a href="Welcome.php">Login</a></li>
        <li class="hidden"><a href="MyProfile.php">Profile Info</a></li>
        <li><a href="RegistrationPage.php">Registration Page</a></li>
        <li><a href="Welcome.php">Login Page</a></li>
      </ul><br>

	   <br><h4>U of A Links</h4>
	   <ul class="nav nav-pills nav-stacked">
        <li><a href="http://www.uark.edu/">University of Arkansas</a></li>
        <li><a href="www.arkansasrazorbacks.com/">Razorback Athletics</a></li>
        <li><a href="https://uaconnect.uark.edu/">UAConnect</a></li>
        <li><a href="https://learn.uark.edu/">UARK Blackboard</a></li>
      </ul><br>
    </div>

    <div class="col-sm-6">
		<div class="page-header" align="center"><h1>About Us</h1></div>
		<br>
		<p>UA Tweetbook is the destination for all University of Arkansas students, alumni, faculty and staff to share their meaningless thoughts and feelings every second of the day.<br><br>
			We are proud to provide this awesome website for everyone who wants to share their thoughts and feelings about things. This ground-breaking site was designed as the brainchild of the great Andrew Mackey.</p><br>
	 
	 
	 	<div class="page-header" align="center"><h1>Meet Our Staff</h1></div>
		<br>
		<p>Our amazing staff members have more than 15 years of combined experience and are always available to assist you.</p><br>
	 
	 <div class="col-sm-2" align="center"><img src="Jenny.png" class="img-circle img-responsive"></div>
	 <div>Jenny is originally from Texas and has lived in Arkansas for the past two years. She has ten years of experience in marketing, operations and management. The thing Jenny loves most about UATweetbook is when a page actually works as it should!</div><br><br>
	 
	 <div class="col-sm-2" align="center"><img src="Niharika.png" class="img-circle img-responsive"></div>
     <div>Niharika is originally from India and lived in US for the past two years. She has five years of experience in Database programming and Data Analysis. She loves to travel and spend time with her family.</div><br><br><br>
	 
	 <div class="col-sm-2" align="center"><img src="trishala.png" class="img-circle img-responsive"></div>
     <div>Trishala is originally from India and has lived in Arkansas for the past year. She has seven years of experience in operations and Product Development. She loves coding and enjoys solving puzzles!</div><br><br>
	 	 
	 	<div class="page-header" align="center"><h1>Contact Us</h1></div>
		<br>
		<p>By email: contact@uarktweetbook.com</p>
		<p>By phone: 515-123-4567</p>
		<p>By mail: 4455 University, Fayetteville, AR 72701</p>
	 </div>


  <div class="col-sm-3 sidenav navbar-right">
<br>
      <h4 class="dark-grey"><center>Support Local Fayetteville Businesses<center></h4><br>
<center><layer id="placeholderlayer"></layer><div id="placeholderdiv"></div></center><br>
<center><layer id="placeholderlayer2"></layer><div id="placeholderdiv2"></div></center><br>
<center><layer id="placeholderlayer3"></layer><div id="placeholderdiv3"></div></center>
 <div class="clearfix visible-lg"></div>
      </div>
</div>
</div>

<footer class="navbar-default navbar-fixed-bottom" style="background-color: #555; color: white; padding: 15px;">
  <div class="container-fluid">
  <h4>UARKTweetBook.com</h4>
<div class="clearfix visible-lg"></div>  
  </div>
</footer>

</body>
</html>
