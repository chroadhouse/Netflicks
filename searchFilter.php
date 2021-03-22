<!DOCTYPE html> 
	 
	<html lang="en"> 
	<title>Search Filter</title>
	<link rel="stylesheet" href="css/style2.css"> 
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
					<optgroup label = English> </optgroup>
			        <optgroup label = Française> </optgroup>
					<optgroup label = Español> </optgroup>
					<optgroup label = Deutsch> </optgroup>
					<optgroup label = Italiano> </optgroup>	
					<optgroup label = Chinese>	</optgroup>
					<optgroup label = Arabic>	</optgroup>				
	</select>
<form name="form1" action="" method="post">
<div class = Filters>
	<label for="Filters">Search filters:</label> <!-- drop down for Menu and access to other webpages -->
	<br>
		<input type="checkbox" id="Action" name="Action" value="Action">
	<label for="Action">Action</label><br>
		<input type="checkbox" id="Adventure" name="Adventure" value="Adventure">
	<label for="Adventure">Adventure</label><br>
		<input type="checkbox" id="Horror" name="Horror" value="Horror">
	<label for="Horror">Horror</label><br>

  	<label for="Year">Release year: <input type="text" id="Year" name="Year"><br></label><br>
  	<label for="Budget">Budget between: <input type="text" id="Budget1" name="Budget1"> - <input type="text" id="Budget2" name="Budget2"></label><br>
  	<label for="Revenue">Revenue between: <input type="text" id="Revenue1" name="Revenue1"> - <input type="text" id="Revenue2" name="Revenue2"></label><br>
  	<label for="Director">Director: <input type="text" id="Director" name="Director"></label><br>
  	<label for="Actor">Actor: <input type="text" id="Actor" name="Actor"></label><br>
  	<label for="MovieTitle">Movie Title: <input type="text" id="Title" name="Title"></label><br>

  	<input type ="submit" value="submit">
  </form>

		
</div>
	


<br>

<footer> <!-- Page footer -->
<div class = footer>
	<div class = container5> <!-- Containers used for redirections to information about the site -->
		<header2> BASICS </header2>
			<p> Support </p>
			<p> Account Usage </p>
	
	</div>

	<div class = container6>
		<header3> ABOUT US
			<p> Developers </p>
			<p> Email </p>
			<p> Contact Us </p>
		</header3>
	</div>

	<div class = container7>
		<header4> LEGALS
			<p> Health & Safety </p>
			<p> Privacy </p>
			<p> Conditions of Use </p>
		</header4>
	</div>
</div>
</footer>
</body>

</html>

