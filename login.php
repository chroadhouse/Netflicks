<!DOCTYPE html>
<html>
	<head>
		<?php include 'include/loginCheck.php'; ?>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="css/loginStyle.css" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<!-- The Form posts to a seperate php -->
			<form method="post">
				<label for="username"></label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password"></label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>