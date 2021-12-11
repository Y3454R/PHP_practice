<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Food Buzz</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--css here-->
<link rel="stylesheet" type="text/css" href="loginstyle.css">

<style>
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}
</style>

</head>
<body>

<div class="header">
  
  <h1>Food Buzz</h1>
  <p>Decide where to eat today.</p>
  <button class = "button" onmouseover="loginShow()">Login</button>
  <button class = "button" onmouseover="signupShow()">Signup</button>


<div class="container" id = "logform">
  <form class="form-inline" method = "post" action="login.php">
  	<?php include('errors.php'); ?>
    <div class="form-group">
      <br>
      <br>
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <br>
    <br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <br>
    <br>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="loginuser">Login</button>
  </form>
</div>


<div id = "signupOption">
  <a href= "business_registration.php"> <button class="button signupbutton">Signup as Business</button> </a>
  <a href="user_registration.php"> <button class="button signupbutton">Signup as Foodie</button> </a>
</div>



</div>

<script>


function loginShow() {

  var x = document.getElementById("logform");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var y = document.getElementById("signupOption");
  y.style.display = "none";
}

function signupShow() {

  var x = document.getElementById("signupOption");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var y = document.getElementById("logform");
  y.style.display = "none";
}


</script>

</body>
</html>
