<!DOCTYPE html> 
	 
	<html lang="en"> 
	<title>Homepage</title>
	
	<head> 

		<?php include 'connection.php' ?>
		<?php include 'simple_html_dom.php' // Write about this in implemntation?>
		<link rel="stylesheet" href="css/style2.css"> 
		<link rel="stylesheet" type="text/css" href="css/modalStyle.css"> 
	    <meta charset="utf-8"> 
	</head>
	<?php 
		$conn = OpenCon();
		?>
	<body> 
<div class = container1>
	<label for="Language">Select Language: </label> <!-- drop down for language selection -->
	<select name="Language" id="Language">
					<optgroup label = English> </optgroup>
			        <optgroup label = Française> </optgroup>
					<optgroup label = Español> </optgroup>
					<optgroup label = Deutsch> </optgroup>
					<optgroup label = Italiano></optgroup>
					<optgroup label = Chinese>	</optgroup>
					<optgroup label = Arabic>	</optgroup>				
	</select>
<form action="genre.php" method="POST">
        <input type="submit" name="genreButton" value="Genre"/>
</form>

<div class = header>
	<header> <a id = "homepage" href="index.php"> NETFLICKS </a> </header> <!-- Main title for website -->
	<style type="text/css">
		color: white;
		background-color: transparent;
		text-decoration: none;
	</style>
</div>

<div class = "rightButtons">

	<button id ="loginButton" type="button1">Log In</button> <!-- Button for account Log In -->
	<button id ="signUpButton"type="button2">Sign Up</button> <!-- Button for account Sign Up -->
	<!--<form action="genre.php" method="POST">
        <input type="submit" name="genreButton" value="Genre"/>
    </form>-->

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


  <form method="POST" name="searchBarForm" id="searchBarForm" action="/searchResult.php">
  	<input type="text" placeholder="Search..." id="searchBar" name="searchBar"> <!-- Search bar -->
  	<script type="text/javascript" src="js/Validate.js"></script>	
  </form>	


	<button type ="button" value="Search" id="search" name="search" onclick="validateSearchBar(document.getElementById('searchBar').value)" >Search</button>
  	<button type="button" id="filterBtn" name="filter" onclick="document.getElementById('filterModal').style.display='block'" >Filter</button>

  </div>
</div>
<!-- the modal --> 
<div id="filterModal" class="modal">
  
  <form class="modal-content" method="POST" action="/filterResult.php" id="modal-content"> <!--Was able t-->
    <div class="topContainer">
    	<h3>Filter</h3>
        <span onclick="document.getElementById('filterModal').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label for="uname"><b>Genre</b></label>
		<div class="GenreRowOne">
		<label><input type="checkbox" name="genre[]" id="Action" value="Action">Action</label>
		<label><input type="checkbox" name="genre[]" id="Adventure" value="Adventure">Adventure</label>
		<label><input type="checkbox" name="genre[]" id="Crime" value="Crime">Crime</label>
		<label><input type="checkbox" name="genre[]" id="Mystery" value="Mystery">Mystery</label>
		<label><input type="checkbox" name="genre[]" id="Thriller" value="Thriller">Thriller</label>
		</div>
		<div class="GenreRowTwo">
		<label><input type="checkbox" name="genre[]" id="Romance" value="Romance">Romance</label>
		<label><input type="checkbox" name="genre[]" id="Fantasy" value="Fantasy">Fantasy</label>
		<label><input type="checkbox" name="genre[]" id="Drama" value="Drama">Drama</label>
		<label><input type="checkbox" name="genre[]" id="Animations" value="Animation">Animations</label>
		<label><input type="checkbox" name="genre[]" id="Family" value="Family">Family</label>
		</div>
		<div class="GenreRowThree">
		<label><input type="checkbox" name="genre[]" id="Comedy" value="Comedy">Comedy</label>
		<label><input type="checkbox" name="genre[]" id="Horror" value="Horror">Horror</label>
		<label><input type="checkbox" name="genre[]" id="History" value="History">History</label>
		<label><input type="checkbox" name="genre[]" id="War" value="War">War</label>
		<label><input type="checkbox" name="genre[]" id="Science Fiction" value="Science Fiction">Science Fiction</label>
		</div>
		<div class="GenreRowFour">
		<label><input type="checkbox" name="genre[]" id="Foreign" value="Foreign">Foreign</label>
		<label><input type="checkbox" name="genre[]" id="Music" value="Music">Music</label>
		<label><input type="checkbox" name="genre[]" id="Western" value="Western">Western</label>
		<label><input type="checkbox" name="genre[]" id="Documentary" value="Documentary">Documentary</label>
		<label><input type="checkbox" name="genre[]" id="TV Movie" value="TV Movie">TV Movie</label>
		</div>
<!--<input type="text" placeholder="Enter Username" name="uname" required> -->
	<div>
	  	<label for="Year"><b>Release year: </b><input type="text" id="Year" name="Year"><br></label><br>
  		<label for="Budget"><b>Budget between:</b> <input type="text" id="Budget1" name="Budget1"> - <input type="text" id="Budget2" name="Budget2"></label><br>
  		<label for="Revenue"><b>Revenue between:</b> <input type="text" id="Revenue1" name="Revenue1"> - <input type="text" id="Revenue2" name="Revenue2"></label><br>
  		<label for="Director"><b>Director:</b> <input type="text" id="Director" name="Director"></label><br>
  		<label for="Actor"><b>Actor: </b><input type="text" id="Actor" name="Actor"></label><br>
	</div>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick=" validateFilterSearch();" >Confirm</button>
      <button type="button" onclick="document.getElementById('filterModal').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
</body>


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


