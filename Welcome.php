<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  p {text-align:center;}
  h2 {text-align:center;}



.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active >   
 a:hover, .navbar-default .navbar-nav > .active > a:focus {
color: white; /*BACKGROUND color for active*/
background-color: #C0C0C0;
 margin-bottom: 0;
}

  .navbar-default {
    background-color: #87CEEB;
    border-color: #87CEEB;
	 margin-bottom: 0;
}


.navbar-default .navbar-nav > li > a:hover {
	background-color: #0080ff;
	color: #FFFFFF;
	border-style: none;
}



		   
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  
  .imagerestrict {
	  max-width: 1140px;
	  max-height: 371px;
  }
  
  .pagebackground {
	  background-color: #D0D0D0 ;
  }

  </style>
</head>
<body>
<nav class="navbar navbar-default navbar-backgrnd">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <a class="navbar-brand" href="#">UARKTweetBook.com</a>
	<!-- <img class="navbar-brand pull-left" src="./uarklogo.jpeg" width=auto height="100"> -->
	</div>
	  <ul class="nav navbar-nav">
        <li class="active"><a href="Welcome.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="AboutUs.php">About Us</a></li>
	 </ul>
	    <ul class="nav navbar-nav navbar-right">
      <li><a href="RegistrationPage.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	</ul>
	</div>
</nav>

<div class="col-lg-12 container pagebackground">
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner imagerestrict" role="listbox">
      <div class="item active">
        <img src="./walton.png" alt="Walton College" width="460" height="345">
      </div>

      <div class="item">
        <img src="./campus.jpeg" alt="Old Main" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="./students.jpg" alt="Students" width="460" height="345">
      </div>

      <div class="item">
        <img src="./hogs.jpg" alt="UofA" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<div class="container">
  <h2>Welcome to UARKTweetBook.com</h2>
  <form method="get" action="./Login.php">
  <div class="row">	
   <div class="col-md-6 col-md-offset-3">
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
	<p> Don't have an account <A HREF="RegistrationPage.php">SignUp Now!</A></p>
  </form>
</div>
</div>
</div>
</div>

</body> 
</html>
