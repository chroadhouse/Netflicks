<!DOCTYPE html> 
	 
	<html lang="en"> 
	<title>Basics Page</title>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/modalStyle.css"> 
	<head> 

		<?php include 'include/connection.php' ?>
	
	    <meta charset="utf-8"> 
	</head>
	<?php 
		$conn = OpenCon();
		?>
	<body> 
	<div class = container1>
	<label for="Language">Select Language: </label> <!-- drop down for language selection -->
	<select name="Language" id="Language">
					<optgroup label = English> 
			        <optgroup label = Française> 
					<optgroup label = Español> 
					<optgroup label = Deutsch> 
					<optgroup label = Italiano>
					<optgroup label = Chinese>	
					<optgroup label = Arabic>					
		</optgroup>
	</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
</optgroup>
	</select>

<div class = Menu>
	<label for="Menu">MENU:</label> <!-- drop down for Menu and access to other webpages -->
	<select name="Menu" id="Menu">
		<optgroup label="Genre">
			<option value="Action">Action</option> 
			<option value="Adventure">Adventure</option> 
			<option value="Crime">Crime</option>
			<option value="Mystery">Mystery</option>
			<option value="Thriller">Thriller</option>
			<option value="Romance">Romance</option>
			<option value="Fantasy">Fantasy</option> 
			<option value="Drama">Drama</option> 
			<option value="Animations">Animations</option>
			<option value="Family">Family</option> 
			<option value="Comedy">Comedy</option>
			<option value="Horror">Horror</option> 
			<option value="History">History</option>
			<option value="War">War</option>
			<option value="Science Fiction">Science Fiction"</option>
			<option value="Foreign">Foreign</option>
			<option value="Music">Music</option>
			<option value="Western">Western</option>
			<option value="Documentary">Documentary</option>
			<option value="TV Movie">TV Movie</option>

		</optgroup>
		<optgroup label="Childrens"> 
			<option value="Animations">Animations</option> 
			<option value="Family Movies">Action</option> 
		</optgroup>
		<optgroup label="Popular"> 
		<option value="Top Trending">Top Trending</option> 
			<option value="Top Rated">Top Rated</option> 
			<option value="Upcoming Movies">Upcoming Movies</option> 
		</optgroup>
		<optgroup label="Account"> 
			<option value="Log In">Log In</option> 
			<option value="Sign Up">Sign Up</option> 
		</optgroup>
		<optgroup label="Basics"> 
			<option value="Account Usage">Account Usage</option> 
			<option value="Support">Support</option> 
		</optgroup>
		<optgroup label="About Us"> 
			<option value="Developers">Developers</option> 
			<option value="Email">Email</option> 
			<option value="Contact Us">Contact Us</option> 
		</optgroup>
		<optgroup label="Legal"> 
			<option value="Privacy">Privacy</option> 
			<option value="Health & Safety">Health & Safety</option> 
			<option value="Conditions of Use">Conditions of Use</option> 
			<option value="Cookies">Cookies</option>
		</optgroup>
	</select>


<div class = header>
	<header> NETFLICKS </header> <!-- Main title for website -->
</div>

<div class = "user">
	<button id ="loginButton" type="button1">Log In</button> <!-- Button for account Log In -->
	<button id ="signUpButton"type="button2">Sign Up</button> <!-- Button for account Sign Up -->
</div>

<script>
    document.addEventListener("DOMContentLoaded",  initialiseWebPage);

    function initialiseWebPage() {
    const loginPageBtn = document.getElementById("loginButton");
    const signUpPageBtn = document.getElementById("signUpButton");
    loginPageBtn.addEventListener("click", redirectToUrl);
    signUpButton.addEventListener("click", redirectToSignUpUrl);

    function redirectToUrl() {
        location.href = "login.php";
        }

    function redirectToSignUpUrl() {
        location.href = "SignUp.php";
    }
}
</script>

<div class = "searchBar">
  <input type="text" placeholder="Search..." id="searchBar"> <!-- Search bar -->
  <script type="text/javascript" src="js/Validate.js"></script>
  <button type ="button" id="search" name="search" onclick="validateSearchBar(document.getElementById('searchBar').value)" >Search</button>
  <button type="button" id="filterBtn" name="filter" onclick="document.getElementById('filterModal').style.display='block'" >Filter</button>
</div>
</div>
</div>
<!-- the modal --> 
<div id="filterModal" class="modal">
  
  <form class="modal-content animate" action="filter.php" method="post">
    <div class="topContainer">
    	<h3>Filter</h3>
        <span onclick="document.getElementById('filterModal').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label for="uname"><b>Genre</b></label>
      <div class="GenreRowOne">
      	<label><input type="checkbox" name="Action">Action</label>
      	<label><input type="checkbox" name="Adventure">Adventure</label>
      	<label><input type="checkbox" name="Crime">Crime</label>
      	<label><input type="checkbox" name="Mystery">Mystery</label>
      	<label><input type="checkbox" name="Thriller">Thriller</label>
      </div>
      <div class="GenreRowTwo">
      	<label><input type="checkbox" name="Romance">Romance</label>
      	<label><input type="checkbox" name="Fantasy">Fantasy</label>
      	<label><input type="checkbox" name="Drama">Drama</label>
      	<label><input type="checkbox" name="Animations">Animations</label>
      	<label><input type="checkbox" name="Family">Family</label>
      </div>
      <div class="GenreRowThree">
      	<label><input type="checkbox" name="Comedy">Comedy</label>
      	<label><input type="checkbox" name="Horror">Horror</label>
      	<label><input type="checkbox" name="History">History</label>
      	<label><input type="checkbox" name="War">War</label>
      	<label><input type="checkbox" name="Science Fiction">Science Fiction</label>
      </div>
      <div class="GenreRowFour">
      	<label><input type="checkbox" name="Foreign">Foreign</label>
      	<label><input type="checkbox" name="Music">Music</label>
      	<label><input type="checkbox" name="Western">Western</label>
      	<label><input type="checkbox" name="Documentary">Documentary</label>
      	<label><input type="checkbox" name="TV Movie">TV Movie</label>
      </div>
<!--<input type="text" placeholder="Enter Username" name="uname" required> -->
	<div>
	  	<label for="Year"><b>Release year: </b><input type="text" id="Year" name="Year"><br></label><br>
  		<label for="Budget"><b>Budget between:</b> <input type="text" id="Budget1" name="Budget1"> - <input type="text" id="Budget2" name="Budget2"></label><br>
  		<label for="Revenue"><b>Revenue between:</b> <input type="text" id="Revenue1" name="Revenue1"> - <input type="text" id="Revenue2" name="Revenue2"></label><br>
  		<label for="Director"><b>Director:</b> <input type="text" id="Director" name="Director"></label><br>
  		<label for="Actor"><b>Actor: </b><input type="text" id="Actor" name="Actor"></label><br>
  		<label for="MovieTitle"><b>Movie Title: </b><input type="text" id="Title" name="Title"></label><br>
	</div>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" value="submit" onclick="document.getElementById('filterModal').style.display='none'" >Confirm</button>
      <button type="button" onclick="document.getElementById('filterModal').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('filterModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!--<br> </br>-->
<div class = floatContainer>
	<div class = container8>
		<header8> BASICS
 </header8>
</div>
</div>

<div class = image1>
	<img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1920,h_1080/https://loobitx.com/wp-content/uploads/2018/01/3881185-big-data-wallpaper.jpg" width="1035" height="450"> 
</div>

<div class = container1>
		<header2> <b>  SUPPORT </b> </header2>
		<p> We will provide support for as many issues as we can. We usually take 24 hours to respond to your emails if we are busy. We like to deal with emails and provide responses based on importance. 
		<br> </br>
		Keeping in mind, the current situation of Covid-19, we have a shortage of staff therefore, our helplines may be slightly busier than usual so remain patient; consider your purpose of calling.  
		<br> </br>
		In the future, we are launching online chats to ensure more queries and issues can be solved allowing our helplines to be more available for necessary calls. 
	</p>
	</div>

	<div class = container1>
		<header3> <b>  ACCOUNT USAGE </b> </header3>
		<p> When making our accounts, the Netflicks services are not intended to be used for children under the age of 13. Any accounts being made for children below the age, should be made by parents or guardians who are able to supervise children correctly. 
		<br> </br>
		We must be provided with correct information to avoid the content that is released on our website from being misused. This can effect the law. policies and privacy of Netflicks. 
		<br> </br>
		<b> We collect certain information from your accounts as listed below: </b>
		<br> </br>
		- Search for information on Netflicks Services
		<br> </br>
		- Subscribe to Services
		<br> </br>
		- Submit content contributions e.g. ratings and movie reviews
		<br> </br>
		- Compile resume and watchlists for movies
		<br> </br>
		- Provide payment information
		<br> </br>
		- Your movie preferences 
		<br> </br>
		- Your IP Address, your name, age and gender
		<br> </br>
		<b> There are certain types of information which can be accessed by the users: </b>
		<br> </br>
		Past Payments 
		<br> </br>
		Subscription Status
		<br> </br>
		Payment Methods
		<br> </br>
		Your content contributions e.g. ratings and movie reviews
		<br> </br>
		Personal information that can be updated e.g. username, email and password
		 </p>

	</div>







<footer> <!-- Page footer -->
<div class = footer>
	<div class = container5> <!-- Containers used for redirections to information about the site -->
	<header2> <b> BASICS </b> </header2>
	<br> </br>
			<button3> <u> Support </u> </button3>
	<br> </br>
			<button3> <u> Account Usage </u> </button3>
	</div>

	<div class = container6>
		<header3> <b>  ABOUT US </b> </header3>
		<br> </br>
			<button3> <u> Developers </u> </button3>
		<br> </br>
			<button3> <u> Email </u> </button3> 
		<br> </br>
			<button3> <u> Contact Us </u> </button3>
	</div>

	<div class = container7>
		<header4> <b> LEGALS </b> </header4>
		<br> </br>
			<button3> <u> Health & Safety </u> </button3>
		<br> </br>
			<button3> <u> Privacy </u> </button3>
		<br> </br>
			<button3> <u> Conditions of Use </u> </button3>
	</div>
</div>
</footer>
</body>
</html>