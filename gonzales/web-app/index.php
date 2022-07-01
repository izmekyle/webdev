<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="https://iannico322.github.io/My-web-page/images/icon.png" type="image/x-icon">
	<link rel="icon" href="images/icon.png">
	<title>Login Tab</title>
</head>
<body>
	<?php include("SQLConnect.php"); ?>
	<div class="loginpage">

		<div class="boxform">
                <br>
				<div class="boxbutton">
				<div id="btn"></div>
					
                    <button type="button" class="tap" onclick="login()">Log In</button></a>
					<button type="button" class="tap" onclick="register()">Register</button>
			</div>
                
				<form id="login" class="form" method="POST" action="authentication.php" >
					<input type="text"class="input" name="studID" placeholder="ID Number"  required="required">
					<input type="Password" class="input" name="lastName" placeholder="Password" required="required">
                    <br><br><br>
					<button type="submit" class="submit-btn">Login</button>
				</form>
			
				<form id="register" class="form" method="POST" action="register.php">
					<input type="text" class="input" name="studID" placeholder="Student ID" required="required" >
					<input type="text" class="input" name="firstName" placeholder="First Name" required="required">
					<input type="text" class="input" name="lastName" placeholder="Last Name" required="required">
					<input type="text" class="input" name="MI" placeholder="MI" required="required">
					<input type="text" class="input" name="course" placeholder="Course" required="required">
					<input type="text" class="input" name="yearLevel" placeholder="Year Level" required="required">
                    <br> <br>
					<button type="submit" class="submit-btn">Register</button>
				</form>
			</div>
		</div>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>