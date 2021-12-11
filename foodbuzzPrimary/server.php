<?php

	session_start();
	$username = "";
	$email = "";
	$password_1 = "";
	$password_2 = "";
	$district =""; // business profile
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration'); //connect to databse

	//if reg button is clicked
	if(isset($_POST['usersignup'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	

		if(empty($username)) {
			array_push($errors, "Username is required");
		}
		if(empty($email)) {
			array_push($errors, "Email is required");
		}
		if(empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if($password_1 != $password_2) {
			array_push($errors, "Password is not confirmed");
		}
		
		//check user table
		$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		//check business table
		$user_check_query = "SELECT * FROM business WHERE res_name='$username' OR email='$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_queryl);
		$user1 = mysqli_fetch_assoc($result);
		//checked business table

		if ($user || $user1) { // if user exists in user or user1
			if ($user['username'] === $username || $user1['res_name'] === $username) {
				array_push($errors, "Username already exists");
			}
	
		if ($user['email'] === $email || $user1['email'] === $email) {
			array_push($errors, "email already exists");
			}
		}
		
		if(count($errors) == 0) {
			$password = md5($password_1);
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}
	}

	//business profile / restaurant registration
	if(isset($_POST['businesssignup'])) {
		$username = mysqli_real_escape_string($db, $_POST['businessname']);
		$district = mysqli_real_escape_string($db, $_POST['districts']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	

		if(empty($username)) {
			array_push($errors, "Username is required");
		}
		if(empty($district)) {
			array_push($errors, "District is required");
		}
		if(empty($email)) {
			array_push($errors, "Email is required");
		}
		if(empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if($password_1 != $password_2) {
			array_push($errors, "Password is not confirmed");
		}
		
		//check user table
		$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		//check business table
		$user_check_query = "SELECT * FROM business WHERE res_name='$username' OR email='$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user1 = mysqli_fetch_assoc($result);
		//checked business table

		if ($user || $user1) { // if user exists in user or user1
			if ($user['username'] === $username || $user1['res_name'] === $username) {
				array_push($errors, "Username already exists");
			}
	
		if ($user['email'] === $email || $user1['email'] === $email) {
			array_push($errors, "email already exists");
			}
		}
		
		if(count($errors) == 0) {
			$password = md5($password_1);
			$sql = "INSERT INTO business (res_name, email, password, district)
					VALUES ('$username', '$email', '$password', '$district')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}
	}





	// LOGIN USER //business login not updated
	if (isset($_POST['loginuser'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['pwd']);
	
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
	
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			//business
			$query = "SELECT * FROM business WHERE res_name='$username' AND password='$password'";
			$results1 = mysqli_query($db, $query);
			//business finished

			if (mysqli_num_rows($results) == 1 || mysqli_num_rows($results1) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>