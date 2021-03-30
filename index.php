<?php include ('include/header.php')?>

<!--<br> </br>-->
<body>
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
		<header7> CHILDREN MOVIES </header7>
	</div>
</div>	

<!--original slideshow -->
<div class="slideshow-container"> <!-- Carousel containing images for the recommended movies -->

    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="https://images-na.ssl-images-amazon.com/images/I/A1i+4PNnr8L._RI_.jpg" style = "width:100%" width="253" height="395"> <!-- width="253" height="395" figure image proportions -->
        <div class="text"> Cellular </div>
    </div>
    

    <div class="mySlides fade">
        <div class="numbertext"> style="b"</div>3
         <img src="https://upload.wikimedia.org/wikipedia/en/0/05/Jack_Reacher_Never_Go_Back_poster.jpg" style = "width:100%" width="253" height="395"> 
        <div class="text"> Jack Reacher </div>
        </div>
    
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Black Panther </div>
    </div>


    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src ="https://publish.one37pm.net/wp-content/uploads/2020/05/spiderman-mobile.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Spiderman </div>
    </div>
    
    <a class="prev" onclick="plusSlidesTopRated(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopRated(1)">&#10095;</a>
</div>

<!--Top trending slideshow -->

<div class="slideshowTopTrending-container"> <!-- Carousel containing images for the recommended movies -->
     <?php // Add the image 
       $sql = "SELECT movie.Movie_Poster_Path FROM movie WHERE movie.MovieID = '10000'";
        $query = $conn -> query($sql); 
        //while($row = sql_fetch_array($query)){ //Take the row out }
        $test = "/mdfFmAd1dXPa02GvZTnGDPWLut6.jpg"; // Get from the query 
        //These two lines are imp
        $newhtml = file_get_html("https://www.google.com/search?q=".$test."&tbm=isch");        
        $result_image_search = $newhtml -> find('img',1) -> src; // Index one for the image 
       // echo '<img src="'.$result_image_search.'">';
    ?>
    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
        <?php echo'<img src="'.$result_image_search.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> Jurassic Park </div>
    </div>
    

    <div class="mySlides2 fade">
        <div class="numbertext2"> style="b"</div>3
         <img src="https://upload.wikimedia.org/wikipedia/en/e/e1/MissionImpossiblePoster.jpg" style = "width:100%" width="253" height="395">   
        <div class="text"> Mission Impossible </div>
        </div>


    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
        <img src="https://upload.wikimedia.org/wikipedia/en/c/c2/Back_to_the_Future_Part_II.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Back to the Future </div>
    </div>

    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
        <img src ="https://lumiere-a.akamaihd.net/v1/images/star-wars-the-rise-of-skywalker-theatrical-poster-1000_ebc74357.jpeg?region=0%2C0%2C891%2C1372" style = "width:100%" width="253" height="395">
        <div class="text"> Star Wars </div>
    </div>

    <a class="prev" onclick="plusSlidesTopTrending(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopTrending(1)">&#10095;</a>

      <!--<link rel="stylesheet" href="css/behaviour.css" type="text/css"> -->
</div>

<!--Childrens Movies slideshow -->

<div class="slideshowChildrensMovies-container"> <!-- Carousel containing images for the recommended movies -->


    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <img src="https://images-na.ssl-images-amazon.com/images/I/91OJO5jFyqL._RI_.jpg" style = "width:100%" width="253" height="395"> <!-- width="253" height="395" figure image proportions -->
        <div class="text"> Shrek </div>
    </div>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
         <img src="https://upload.wikimedia.org/wikipedia/en/7/7f/Madagascar2poster.jpg" style = "width:100%" width="253" height="395"> 
        <div class="text"> Madagascar 2 </div>
        </div>


    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <img src="https://images-na.ssl-images-amazon.com/images/I/91D6ISx-RaL._AC_SL1500_.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Hotel Transylvania </div>
    </div>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <img src ="https://m.media-amazon.com/images/M/MV5BODJkZTZhMWItMDI3Yy00ZWZlLTk4NjQtOTI1ZjU5NjBjZTVjXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Kung Fu Panda </div>
    </div>

    <a class="prev" onclick="plusSlidesChildMovies(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesChildMovies(1)">&#10095;</a>

    
</div>

<br>
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
</div>

<!--Code for top trending below -->

    <div style="text-align:left">
    <span class="dot" onclick="currentSlide2(1)"></span>
    <span class="dot" onclick="currentSlide2(2)"></span>
    <span class="dot" onclick="currentSlide2(3)"></span>
    <span class="dot" onclick="currentSlide2(4)"></span>
    </div>

    <!--Code for the children's slideShow-->
    <div style="text-align:right">
    <span class="dot" onclick="currentSlide3(1)"></span>
    <span class="dot" onclick="currentSlide3(2)"></span>
    <span class="dot" onclick="currentSlide3(3)"></span>
    <span class="dot" onclick="currentSlide3(4)"></span>
    <script type="text/javascript" src="js/slideShow.js"></script>
    </div>

<?php include ('include/footer.php') ?>
</body>
</html>
