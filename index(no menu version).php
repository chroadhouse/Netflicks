<!DOCTYPE html> 
	 
	<html lang="en"> 
	<title>Homepage</title>
	<link rel="stylesheet" href="style2.css"> 
	<head> 

		<?php include 'include/connection.php' ?>
	
	    <meta charset="utf-8"> 
	</head>
	<?php 
		$conn = OpenCon();
		?>
	<body> 
	<div class = container1>
		<div class = header>
	<header> NETFLICKS </header> <!-- Main title for website -->
</div>
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

	
</div>

<div>
	<form method="get" action="/project/searchFilter.php">
   	 <button type="submit">--------->    Search filter page   <--------</button>
	</form>
	
</div>





<div class = "user">
	<button type="button1">Log In</button> <!-- Button for account Log In -->
	<button type="button2">Sign Up</button> <!-- Button for account Sign Up -->
</div>


</div>
</div>

<!--<br> </br>-->
<div class = floatContainer>
	<div class = container8>
		<header8> RECOMMENDED FOR YOU
 </header8>
</div>
</div>

<div class = floatContainer>
	<div class = container2>
		<header5> TOP TRENDING </header5> <!-- Headers for redirection to the top trending movies -->
	</div>
	<div class = container3>
		<header6> TOP RATED </header6>
	</div>
	<div class = container4>
		<header7> UPCOMING MOVIES </header7>
	</div>
</div>	

<div class="slideshow-container"> <!-- Carousel containing images for the recommended movies -->

	<div class="mySlides fade">
		<div class="numbertext"> </div>
		<img src="https://images-na.ssl-images-amazon.com/images/I/A1i+4PNnr8L._RI_.jpg" width="253" height="395"> <!-- figure image proportions -->
		<div class="text"> Cellular </div>
	</div>
			<div class="ratingsAndReviews">
			<div class="text"> <p> Hi </p> </div>
		</div>

	<div class="mySlides fade">
		<div class="numbertext"> </div>3
		 <img src="https://upload.wikimedia.org/wikipedia/en/0/05/Jack_Reacher_Never_Go_Back_poster.jpg" width="253" height="395">		<div class="text"> Jack Reacher </div>
		</div>
		<div class="ratingsAndReviews">
			<div class="text"> <p> Hi </p> </div>
		</div>


	<div class="mySlides fade">
		<div class="numbertext"> </div>
		<img src="https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_.jpg" width="253" height="395">
		<div class="text"> Black Panther </div>
	</div>
	<div class="ratingsAndReviews">
			<div class="text"> <p> Hi </p> </div>
		</div>

	<div class="mySlides fade">
		<div class="numbertext"> </div>
		<img src ="https://publish.one37pm.net/wp-content/uploads/2020/05/spiderman-mobile.jpg" width="253" height="395">
		<div class="text"> Spiderman </div>
	</div>
	<div class="ratingsAndReviews">
			<div class="text"> <p> Hi </p> </div>
		</div>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  	<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<script>

	var slideIndex = 0;
	showSlides();
	var slides,dots;
	
	function plusSlides(position) {
		slideIndex += position;
		if (slideIndex > slides.length) {slideIndex = 1}
		else if(slideIndex < 1){slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
		   slides[i].style.display = "none";  
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
	
		  }
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
		}
	
	function currentSlide(index) {
		if (index > slides.length) {index = 1}
		else if(index < 1){index = slides.length}
		for (i = 0; i < slides.length; i++) {
		   slides[i].style.display = "none";  
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
			slides[index-1].style.display = "block";  
			dots[index-1].className += " active";
		}
	
	function showSlides() {
		var i;
		slides = document.getElementsByClassName("mySlides");
		dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
		   slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex> slides.length) {slideIndex = 1}    
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 3000); // Change image every 3 seconds
	}
	
	</script>
	

<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
</div>

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

