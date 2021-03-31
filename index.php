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
	<?php // Add the image 
       $sql1 = "SELECT movie.Movie_Original_Title, movie.Movie_Poster_Path FROM movie  WHERE (movie.Rating = '5') && (movie.Movie_Poster_Path!='null')";
 
       	$query1 = $conn -> query($sql1);
		$arrayInfoRating = array();
		$arrayMoviesRating = array();
		$j = 0;
		if (mysqli_num_rows($query1) >0)
		{
			while ($row1 = mysqli_fetch_array($query1))
			{ 
				$arrayInfoRating[0] = $row1[0];  //title
				$arrayInfoRating[1] = $row1[1];  // image
				$arrayMoviesRating[$j] = $arrayInfoRating;
				$j = $j+1;
			}

		}

		
		//Array movies has got all the animations movie. Each element is an array which has in pos0 title and pos1 img

		$size1Rating = rand(0,sizeof ($arrayMoviesRating));
		$size2Rating = rand(0,sizeof ($arrayMoviesRating));
		$size3Rating = rand(0,sizeof ($arrayMoviesRating));
		$size4Rating = rand(0,sizeof ($arrayMoviesRating));


		$movie1Rating = $arrayMoviesRating[$size1Rating]; 
		$movie2Rating = $arrayMoviesRating[$size2Rating]; 
		$movie3Rating = $arrayMoviesRating[$size3Rating];
		$movie4Rating = $arrayMoviesRating[$size4Rating]; 

		$title1Rating = $movie1Rating[0];
		$title2Rating = $movie2Rating[0];
		$title3Rating = $movie3Rating[0];
		$title4Rating = $movie4Rating[0];
		///fsrZN0cU6JciLkV0mNbCWRYjjl1.jpg
        $newhtml1Rating = file_get_html("https://www.google.com/search?q=".$movie1Rating[1]."&tbm=isch");   
        $newhtml2Rating = file_get_html("https://www.google.com/search?q=".$movie2Rating[1]."&tbm=isch");  
        $newhtml3Rating = file_get_html("https://www.google.com/search?q=".$movie3Rating[1]."&tbm=isch");       
        $newhtml4Rating = file_get_html("https://www.google.com/search?q=".$movie4Rating[1]."&tbm=isch");  

        $result_image_search1Rating = $newhtml1Rating -> find('img',1) -> src; // Index one for the image 
        $result_image_search2Rating = $newhtml2Rating -> find('img',1) -> src; // Index one for the image 
        $result_image_search3Rating = $newhtml3Rating -> find('img',1) -> src; // Index one for the image 
        $result_image_search4Rating = $newhtml4Rating -> find('img',1) -> src; // Index one for the image  

        //result image echo the error if src is null. 

    ?>
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php echo'<img src="'.$result_image_search1Rating.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title1Rating ?></div>
    </div>
    

    <div class="mySlides fade">
        <div class="numbertext"> </div>
          <?php echo'<img src="'.$result_image_search2Rating.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title2Rating ?></div>
        </div>
    
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php echo'<img src="'.$result_image_search3Rating.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title3Rating ?></div>
    </div>


    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php echo'<img src="'.$result_image_search4Rating.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title4Rating ?></div>
    </div>
    
    <a class="prev" onclick="plusSlidesTopRated(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopRated(1)">&#10095;</a>
	
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
 </div>
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
        <div class="numbertext2"></div>
         <img id ="pic2"src="https://upload.wikimedia.org/wikipedia/en/e/e1/MissionImpossiblePoster.jpg" style = "width:100%" width="253" height="395">   
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
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
   </div>
</div>

<!--Childrens Movies slideshow -->

<div class="slideshowChildrensMovies-container"> <!-- Carousel containing images for the recommended movies -->
	<?php // Add the image 
       $sql = "SELECT movie.Movie_Original_Title, movie.Movie_Poster_Path FROM ((movie inner join genremovie on movie.MovieID = genremovie.MovieID) inner join genre on genremovie.genreID = genre.genreID) WHERE (genre.genre_name = 'Animation') && (movie.Movie_Poster_Path!='null')";
 
       	$query = $conn -> query($sql);
		$arrayInfo = array();
		$arrayMovies=array();
		$i = 0;
		if (mysqli_num_rows($query) >0)
		{
			while ($row = mysqli_fetch_array($query))
			{ 
				$arrayInfo[0] = $row[0];  //title
				$arrayInfo[1] = $row[1];  // image
				$arrayMovies[$i] = $arrayInfo;
				$i = $i+1;
			}

		}

		
		//Array movies has got all the animations movie. Each element is an array which has in pos0 title and pos1 img

		$size1 = rand(0,sizeof ($arrayMovies));
		$size2 = rand(0,sizeof ($arrayMovies));
		$size3 = rand(0,sizeof ($arrayMovies));
		$size4 = rand(0,sizeof ($arrayMovies));


		$movie1 = $arrayMovies[$size1]; 
		$movie2 = $arrayMovies[$size2]; 
		$movie3 = $arrayMovies[$size3];
		$movie4 = $arrayMovies[$size4]; 

		$title1 = $movie1[0];
		$title2 = $movie2[0];
		$title3 = $movie3[0];
		$title4 = $movie4[0];

        $newhtml1 = file_get_html("https://www.google.com/search?q=".$movie1[1]."&tbm=isch");   
        $newhtml2 = file_get_html("https://www.google.com/search?q=".$movie2[1]."&tbm=isch");  
        $newhtml3 = file_get_html("https://www.google.com/search?q=".$movie3[1]."&tbm=isch");       
        $newhtml4 = file_get_html("https://www.google.com/search?q=".$movie4[1]."&tbm=isch");  

        $result_image_search1 = $newhtml1 -> find('img',1) -> src; // Index one for the image 
        $result_image_search2 = $newhtml2 -> find('img',1) -> src; // Index one for the image 
        $result_image_search3 = $newhtml3 -> find('img',1) -> src; // Index one for the image 
        $result_image_search4 = $newhtml4 -> find('img',1) -> src; // Index one for the image     
    ?>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <?php echo'<img src="'.$result_image_search1.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title1 ?></div>
    </div>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <?php echo'<img src="'.$result_image_search2.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title2 ?> </div>
        </div>


    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <?php echo'<img src="'.$result_image_search3.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title3 ?> </div>
    </div>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <?php echo'<img src="'.$result_image_search4.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title4 ?> </div>
    </div>

    <a class="prev" onclick="plusSlidesChildMovies(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesChildMovies(1)">&#10095;</a>
	
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>
</div>

<br>
<!--<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
</div>-->

<!--Code for top trending below -->

    <!--<div style="text-align:left">
    <span class="dot" onclick="currentSlide2(1)"></span>
    <span class="dot" onclick="currentSlide2(2)"></span>
    <span class="dot" onclick="currentSlide2(3)"></span>
    <span class="dot" onclick="currentSlide2(4)"></span>
    </div>-->

    <!--Code for the children's slideShow-->
    <!--<div style="text-align:right">
    <span class="dot" onclick="currentSlide3(1)"></span>
    <span class="dot" onclick="currentSlide3(2)"></span>
    <span class="dot" onclick="currentSlide3(3)"></span>
    <span class="dot" onclick="currentSlide3(4)"></span>-->
    <script type="text/javascript" src="js/slideShow.js"></script>
    <!--</div>-->

<?php include ('include/footer.php') ?>
</body>
</html>
