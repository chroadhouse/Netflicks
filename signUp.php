<!DOCTYPE html>
<html>
	<head>
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
					<li><input type="radio" name ="genre"/>Action </li>
					<li><input type="radio" name ="genre"/>Adventure</li>
					<li><input type="radio" name ="genre"/>Crime </li>
					<li><input type="radio" name ="genre"/>Mystery </li>
					<li><input type="radio" name ="genre"/>Thriller </li>
					<li><input type="radio" name ="genre"/>Romance </li>
					<li><input type="radio" name ="genre"/>Fantasy</li>
					<li><input type="radio" name ="genre"/>Drama </li>
					<li><input type="radio" name ="genre"/>Animations</li>
					<li><input type="radio" name ="genre"/>Family </li>
					<li><input type="radio" name ="genre"/>Comedy </li>
					<li><input type="radio" name ="genre"/>Horror </li>
					<li><input type="radio" name ="genre"/>History </li>
					<li><input type="radio" name ="genre"/>Science Fiction </li>
					<li><input type="radio" name ="genre"/>Foreign</li>
					<li><input type="radio" name ="genre"/>Music </li>
					<li><input type="radio" name ="genre"/>Western </li>
					<li><input type="radio" name ="genre"/>Documentary </li>
					<li><input type="radio" name ="genre"/>TV Movie </li>
				</ul>
			</div>

			<div id = "language" class = "dropdown-check-box" tabindex = "50">
				<span class = "secondDrop">Select language</span>
				<ul class = "items">
					<li><input type="radio" name ="language"/>English </li>
					<li><input type="radio" name ="language"/>Française</li>
					<li><input type="radio" name ="language"/>Deutsch </li>
					<li><input type="radio" name ="language"/>Italiano </li>
					<li><input type="radio" name ="language"/>Chinese</li>
					<li><input type="radio" name ="language"/>Arabic </li>
				</ul>
			</div>

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