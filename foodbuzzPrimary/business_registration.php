<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Registration</title>
	<!--css here-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<h2>Restaurant Registration</h2>
	</div>

    <div class = "container" >

        <form method="post" action="user_registration.php" >

            <?php include('errors.php');  ?>

            <div class="input-group">
                <label>Restaurant Name</label>
                <br>
                <input type="text" name="businessname" value="<?php echo $username; ?>" >
            </div>

            <div class="input-group">
                <br>
                <label for="districts">Choose a district:</label>
                <br>
                <select name="districts" id="districts">
                    <option value="Rangpur">Rangpur</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Chattogram">Chattogram</option>
                </select>
                <br>
            </div>

            <div class="input-group">
                <label>Email</label>
                <br>
                <input type="text" name="email" value="<?php echo $email; ?>">
            </div>

            <div class="input-group">
                <label>Password</label>
                <br>
                <input type="password" name="password_1">
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <br>
                <input type="password" name="password_2">
            </div>

            <div class="input-group">
                <button class="btn btn-default" type = "submit" name = "businesssignup">Join</button>
            </div>
        </form>

    </div>


</body>
</html>