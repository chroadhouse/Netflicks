<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<link rel="stylesheet" href="SignUp.css">
	</head>
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
					<li><input type="checkbox" />Action </li>
					<li><input type="checkbox" />Adventure</li>
					<li><input type="checkbox" />Crime </li>
					<li><input type="checkbox" />Mystery </li>
					<li><input type="checkbox" />Thriller </li>
					<li><input type="checkbox" />Romance </li>
					<li><input type="checkbox" />Fantasy</li>
					<li><input type="checkbox" />Drama </li>
					<li><input type="checkbox" />Animations</li>
					<li><input type="checkbox" />Family </li>
					<li><input type="checkbox" />Comedy </li>
					<li><input type="checkbox" />Horror </li>
					<li><input type="checkbox" />History </li>
					<li><input type="checkbox" />War</li>
					<li><input type="checkbox" />Science Fiction </li>
					<li><input type="checkbox" />Foreign</li>
					<li><input type="checkbox" />Music </li>
					<li><input type="checkbox" />Western </li>
					<li><input type="checkbox" />Documentary </li>
					<li><input type="checkbox" />TV Movie </li>
				</ul>
			</div>

			<div id = "language" class = "dropdown-check-box" tabindex = "50">
				<span class = "secondDrop">Select language</span>
				<ul class = "items">
					<li><input type="checkbox" />English </li>
					<li><input type="checkbox" />Française</li>
					<li><input type="checkbox" />Deutsch </li>
					<li><input type="checkbox" />Italiano </li>
					<li><input type="checkbox" />Chinese</li>
					<li><input type="checkbox" />Arabic </li>
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