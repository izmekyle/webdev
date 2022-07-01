<?php 
include 'SQLConnect.php';
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form </title>
</head>
<body>
	<div class="container">
		<form action="connect.php" method="POST" class="login-ID">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="StudentID" name="studID" value="<?php echo $studID ; ?>" required >
			</div>
			<div class="input-group">
				<input type="text" placeholder="LastName" name="Lname" value="<?php echo $Lname; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="FirstName" name="Fname" value="<?php echo $Fname; ?>" required>
            </div>
            <div class="input-group">
				<input type="text" placeholder="MI" name="MInitial" value="<?php echo $MInitial; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Course" name="Course" value="<?php echo $Course; ?>" required>
            </div>
			<div class="input-group">
				<input type="text" placeholder="YearLevel" name="YearLevel" value="<?php echo $YearLevel; ?>" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>

</body>
</html>