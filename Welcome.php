<!DOCTYPE html>
<html>






<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  p {text-align:center;}
  </style>
</head>
<body>

<div class="container">
<br>
<br>
<br>
<br>
<br>
  <h2>Welcome to UA TweetBook</h2>
  <form method="get" action="./Login.php">
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
	<p> Don't have an account <A HREF="SignUp.html">SignUp Now!</A></p>
  </form>
</div>

</body> 
</html>
