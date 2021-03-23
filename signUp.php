<!DOCTYPE html>
<html>
	<head>
		<?php include 'include/connection.php' ?>
		<?php include 'include/insertUser.php' ?>
		<?php include 'include/checkUserExist.php' ?>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<link rel="stylesheet" href="css/SignUp.css">
	</head>
	<?php 
		$conn = OpenCon();
		?>
	<body>
		<div class="SignUp">
			<h1>Sign Up</h1>
			<!--Make a link for the PHP below, in the form action -->
			<form action="" method="post" >
				<label for="first name"></label>
				<input type="text" name="firstName" placeholder="First Name" id="firstName" required>

                <label for="last name"></label>
				<input type="text" name="lastName" placeholder="Last Name" id="lastName" required>

                <label for="age"></label>
				<input type="int" name="age" placeholder="Age" id="age" required>

                <label for="username"></label>
				<input type="text" name="username" placeholder="Username" id="username" required>

				<label for="password"></label>
				<input type="password" name="password" placeholder="Password" id="password" required>

				<label for="email"></label>
				<input type="email" name="email" placeholder="Email" id="email" required>

			<div id = "genre" class = "dropdown-check-box" tabindex = "50">
				<span class = "firstDrop">Select Favourite Genre </span>
				<ul class = "items">
					<li><input type="radio" name ="genre" value ="Action"/>Action </li>
					<li><input type="radio" name ="genre" value ="Adventure"/>Adventure</li>
					<li><input type="radio" name ="genre" value ="Crime"/>Crime </li>
					<li><input type="radio" name ="genre" value = "Mystery"/>Mystery </li>
					<li><input type="radio" name ="genre" value = "Thriller"/>Thriller </li>
					<li><input type="radio" name ="genre" value = "Romance"/>Romance </li>
					<li><input type="radio" name ="genre" value = "Fantasy"/>Fantasy</li>
					<li><input type="radio" name ="genre" value = "Drama"/>Drama </li>
					<li><input type="radio" name ="genre" value = "Animations"/>Animations</li>
					<li><input type="radio" name ="genre" value = "Family"/>Family </li>
					<li><input type="radio" name ="genre" value = "Comedy"/>Comedy </li>
					<li><input type="radio" name ="genre" value = "Horror"/>Horror </li>
					<li><input type="radio" name ="genre" value = "History"/>History </li>
					<li><input type="radio" name ="genre" value = "Science Fiction"/>Science Fiction </li>
					<li><input type="radio" name ="genre" value = "Foreign"/>Foreign</li>
					<li><input type="radio" name ="genre" value = "Music"/>Music </li>
					<li><input type="radio" name ="genre" value = "Western"/>Western </li>
					<li><input type="radio" name ="genre" value = "Documentary"/>Documentary </li>
					<li><input type="radio" name ="genre" value = "TV Movie"/>TV Movie </li>
				</ul>
			</div>

			<div id = "language" class = "dropdown-check-box" tabindex = "50">
				<span class = "secondDrop">Select language</span>
				<ul class = "items">
					<li><input type="radio" name ="language" value = "English"/>English </li>
					<li><input type="radio" name ="language" value = "French"/>Française</li>
					<li><input type="radio" name ="language" value = "Spanish"/>Español</li>
					<li><input type="radio" name ="language" value = "German"/>Deutsch </li>
					<li><input type="radio" name ="language" value = "Italian"/>Italiano </li>
					<li><input type="radio" name ="language" value = "Chinese"/>Chinese</li>
					<li><input type="radio" name ="language" value = "Arabic"/>Arabic </li>
				</ul>
			</div>
			<?php
				if (isset($_POST['firstName'],$_POST['lastName'],$_POST['age'], $_POST['username'], $_POST['password'], $_POST['email'], $_POST['genre'], $_POST['language'])) 
				{
					$firstName = $_POST['firstName'];
					$lastName = $_POST['lastName'];
					$age = $_POST['age'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$email = $_POST['email'];
					$genre = $_POST['genre'];
					$language = $_POST['language'];

					$exist=checkExist($conn,$username);
						
					if ($exist==false)
					{						
						insertUser($conn, $firstName, $lastName, $age, $username, $password, $email, $genre, $language);
						header("location: index.php");
						exit;
					}
					else echo "Username already taken";	
				}
			?>
			<script>
				var checkList = document.getElementById("genre");
				
				checkList.getElementsByClassName("firstDrop")[0].onclick = 
				function(evt) {
					if (checkList.classList.contains("visible"))
					checkList.classList.remove("visible");
				else
					checkList.classList.add("visible");
				}
			</script>
			<script>
				var languageList = document.getElementById("language");
				languageList.getElementsByClassName("secondDrop")[0].onclick = 
				function(evt) {
					if (languageList.classList.contains("visible"))
					languageList.classList.remove("visible");
				else
					languageList.classList.add("visible");
				}
			</script>

				<input type="submit" value="Register">
			</form>

		</div>
	</body>
</html>