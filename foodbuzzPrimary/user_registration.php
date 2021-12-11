<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!--css here-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<a href= "login.php"> <h2> Back </h2> </a>
	</div>

	<form method="post" action="user_registration.php">
		<?php include('errors.php');  ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div>
			<button type = "submit" class="btn" name = "usersignup">Signup</button>
		</div>
	</form>

</body>
</html>