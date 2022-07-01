<?php 

session_start();

error_reporting(0);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="authentication.php" method="POST" class="login-ID">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="ID" placeholder="StudentID" name="studID" value="<?php echo $StudID; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="lastName" value="<?php echo $_POST['Lname']; ?>" required>
			</div>
			<div class="input-group">
				<button type="submit" name="submit" class="btn" value="submit">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>