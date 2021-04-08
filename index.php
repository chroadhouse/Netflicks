<?php include ('include/header.php')?>


<!--<br> </br>-->
<?php
	//Put all the php methods here 
	function ratingSQL(){
			$conn = OpenCon();
	    	$sql1 = "SELECT movie.Movie_Original_Title, movie.Movie_Poster_Path FROM movie  WHERE (movie.Rating = '5') && (movie.Movie_Poster_Path!='null')";
	 
	       	$query1 = $conn -> query($sql1);
			
			global $arrayMoviesRating;
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
			//Make them unique by wrapping in fucntion and having a condition to pass. Else run 
			//We need to make sure that they are not the same
			$movie1Rating = $arrayMoviesRating[$size1Rating]; 
			$movie2Rating = $arrayMoviesRating[$size2Rating]; 
			$movie3Rating = $arrayMoviesRating[$size3Rating];
			$movie4Rating = $arrayMoviesRating[$size4Rating]; 

			//echo $movie2Rating; 
			global $title1Rating;
			global $title2Rating;
			global $title3Rating;
			global $title4Rating;
			$title1Rating = $movie1Rating[0];
			$title2Rating = $movie2Rating[0];
			$title3Rating = $movie3Rating[0];
			$title4Rating = $movie4Rating[0];
			///fsrZN0cU6JciLkV0mNbCWRYjjl1.jpg
			//$movie1Rating[1] = '/fsrZN0cU6JciLkV0mNbCWRYjjl1.jpg';
			if(strlen($movie1Rating[1]) == 32 && strlen($movie2Rating[1]) == 32 && strlen($movie3Rating[1]) == 32 && strlen($movie4Rating[1]) == 32){
		        $newhtml1Rating = file_get_html("https://www.google.com/search?q=".$movie1Rating[1]."&tbm=isch");   
		        $newhtml2Rating = file_get_html("https://www.google.com/search?q=".$movie2Rating[1]."&tbm=isch");  
		        $newhtml3Rating = file_get_html("https://www.google.com/search?q=".$movie3Rating[1]."&tbm=isch");       
		        $newhtml4Rating = file_get_html("https://www.google.com/search?q=".$movie4Rating[1]."&tbm=isch");  
		        try{
			     	$result_image_search1Rating = $newhtml1Rating -> find('img',1);  // Index one for the image
			        $result_image_search2Rating = $newhtml2Rating -> find('img',1);  // Index one for the image 
			        $result_image_search3Rating = $newhtml3Rating -> find('img',1);  // Index one for the image 
			        $result_image_search4Rating = $newhtml4Rating -> find('img',1);  // Index one for the image
		       	}catch(Exception $e){
		       		ratingSQL();
		       	}
		        if($result_image_search1Rating == null || $result_image_search2Rating == null || $result_image_search3Rating == null || $result_image_search4Rating==null){
		        	//Call the function to redo the sql
		        	ratingSQL();
		        }else{
		        	global $image_search1Rating;
		        	global $image_search2Rating;
		        	global $image_search3Rating;
		        	global $image_search4Rating;
		        	$image_search1Rating = $result_image_search1Rating -> src;
		        	$image_search2Rating = $result_image_search2Rating -> src;
		        	$image_search3Rating = $result_image_search3Rating -> src; 
		        	$image_search4Rating = $result_image_search4Rating -> src;
		        }
		    }
		    else{
		    	ratingSQL(0);
		    }
	}

	function trendingSQL(){
    	$conn = OpenCon();
       	$sql2 = "SELECT movie.Movie_Original_Title, movie.Movie_Poster_Path FROM movie  WHERE movie.Movie_Original_Title in ('Jurassic Park','Young Einstein','Mona Lisa','Toy Story','Toy Story 2','Brother Bear','Saint','Blueberry','Honey','Joan of Arc','December 7th','Saints and Soldiers','Bloodwork','Desperation','See No Evil','Avatar 2','Mary Shelley','Mobile Homes','Alien: Covenant','Smurfs: The Lost Village','Justice League','Pirates of the Caribbean: Dead Men Tell No Tales','Amityville: The Awakening')";
 
       	$query2 = $conn -> query($sql2);
		$arrayInfoTrending = array();
		$arrayMoviesTrending = array();
		global $arrayMoviesTrending;
		$k = 0;
		if (mysqli_num_rows($query2) >0)
		{
			while ($row2 = mysqli_fetch_array($query2))
			{ 
				$arrayInfoTrending[0] = $row2[0];  //title
				$arrayInfoTrending[1] = $row2[1];  // image
				$arrayMoviesTrending[$k] = $arrayInfoTrending;
				$k = $k+1;
			}

		}

		//Array movies has got all the animations movie. Each element is an array which has in pos0 title and pos1 img
		$size1Trending = rand(0,sizeof ($arrayMoviesTrending));
		$size2Trending = rand(0,sizeof ($arrayMoviesTrending));
		$size3Trending = rand(0,sizeof ($arrayMoviesTrending));
		$size4Trending = rand(0,sizeof ($arrayMoviesTrending));


		$movie1Trending = $arrayMoviesTrending[$size1Trending]; 
		$movie2Trending = $arrayMoviesTrending[$size2Trending]; 
		$movie3Trending = $arrayMoviesTrending[$size3Trending];
		$movie4Trending = $arrayMoviesTrending[$size4Trending]; 

		global $title1Trending;
		global $title2Trending;
		global $title3Trending;
		global $title4Trending;
		$title1Trending = $movie1Trending[0];
		$title2Trending = $movie2Trending[0];
		$title3Trending = $movie3Trending[0];
		$title4Trending = $movie4Trending[0];
		if(strlen($movie1Trending[1]) == 32 && strlen($movie2Trending[1]) == 32 && strlen($movie3Trending[1]) == 32 && strlen($movie4Trending[1]) == 32){
	        $newhtml1Trending = file_get_html("https://www.google.com/search?q=".$movie1Trending[1]."&tbm=isch");   
	        $newhtml2Trending = file_get_html("https://www.google.com/search?q=".$movie2Trending[1]."&tbm=isch");  
	        $newhtml3Trending = file_get_html("https://www.google.com/search?q=".$movie3Trending[1]."&tbm=isch");      
	        $newhtml4Trending = file_get_html("https://www.google.com/search?q=".$movie4Trending[1]."&tbm=isch");  
	    	try{
	       		$result_image_search1Trending = $newhtml1Trending -> find('img',1); // Index one for the image
	        	$result_image_search2Trending = $newhtml2Trending -> find('img',1); // Index one for the image 
	        	$result_image_search3Trending = $newhtml3Trending -> find('img',1); // Index one for the image 
	        	$result_image_search4Trending = $newhtml4Trending -> find('img',1); // Index one for the image 
	        }catch(Exception $e){
	    		trendingSQL();
	    	}
	        if($result_image_search1Trending == null || $result_image_search2Trending == null ||$result_image_search3Trending == null ||$result_image_search4Trending == null) {
	        	trendingSQL();
	        }else{
	        	global $image_search1Trending;
	        	global $image_search2Trending;
	        	global $image_search3Trending;
	        	global $image_search4Trending;
	        	$image_search1Trending = $result_image_search1Trending -> src;
	        	$image_search2Trending = $result_image_search2Trending -> src;
	        	$image_search3Trending = $result_image_search3Trending -> src;
	        	$image_search4Trending = $result_image_search4Trending -> src;
	        }
	    }
	    else{
	    	trendingSQL();
	    }
    }

    function loggedInSQL($value){
    	$conn = OpenCon();// Opened conneciton
    	$sql3 = "SELECT movie.Movie_Original_Title, movie.Movie_Poster_Path from ((movie INNER JOIN genremovie on movie.MovieID = genremovie.MovieID) inner join genre on genre.GenreID = genremovie.GenreID) WHERE genre.GenreID = '$value'";
			$query3 = $conn -> query($sql3);
		$arrayInfo = array();
		$arrayMovies=array();
		global $arrayMovies;
		$i = 0;
		if (mysqli_num_rows($query3) >0)
		{
			while ($row = mysqli_fetch_array($query3))
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

		global $title1;
		global $title2;
		global $title3;
		global $title4;
		$title1 = $movie1[0];
		$title2 = $movie2[0];
		$title3 = $movie3[0];
		$title4 = $movie4[0];
		if(strlen($movie1[1]) == 32 && strlen($movie2[1]) == 32 && strlen($movie3[1]) == 32 && strlen($movie4[1]) == 32){
	        $newhtml1 = file_get_html("https://www.google.com/search?q=".$movie1[1]."&tbm=isch");   
	        $newhtml2 = file_get_html("https://www.google.com/search?q=".$movie2[1]."&tbm=isch");  
	        $newhtml3 = file_get_html("https://www.google.com/search?q=".$movie3[1]."&tbm=isch");       
	        $newhtml4 = file_get_html("https://www.google.com/search?q=".$movie4[1]."&tbm=isch");  
	        try{
		        $result_image_search1 = $newhtml1 -> find('img',1); // Index one for the image 
		        $result_image_search2 = $newhtml2 -> find('img',1); // Index one for the image 
		        $result_image_search3 = $newhtml3 -> find('img',1); // Index one for the image 
		        $result_image_search4 = $newhtml4 -> find('img',1); // Index one for the image
		    }catch(Exception $e){
		    	loggedInSQL($value);
		    }
		    if($result_image_search1 == null || $result_image_search2 == null ||$result_image_search3 == null ||$result_image_search4 == null){
		    	loggedInSQL();
		    }else{
	    		global $image_search1;
        		global $image_search2;
        		global $image_search3;
        		global $image_search4;
        		$image_search1 = $result_image_search1 -> src;
        		$image_search2 = $result_image_search2 -> src;
        		$image_search3 = $result_image_search3 -> src;
        		$image_search4 = $result_image_search4 -> src;
		    }
        }else{
        	loggedInSQL($value);
        } 
    }

    function childrenSQL(){
				$conn = OpenCon();
		       	$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Poster_Path FROM ((movie inner join genremovie on movie.MovieID = genremovie.MovieID) inner join genre on genremovie.genreID = genre.genreID) WHERE (genre.genre_name = 'Animation') && (movie.Movie_Poster_Path!='null')";
		 
		       	$query = $conn -> query($sql);
				$arrayInfo = array();
				$arrayMovies=array();
				global $arrayMovies;
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

				global $title1;
				global $title2;
				global $title3;
				global $title4;
				$title1 = $movie1[0];
				$title2 = $movie2[0];
				$title3 = $movie3[0];
				$title4 = $movie4[0];
				if(strlen($movie1[1]) == 32 && strlen($movie2[1]) == 32 && strlen($movie3[1]) == 32 && strlen($movie4[1]) == 32){
			        $newhtml1 = file_get_html("https://www.google.com/search?q=".$movie1[1]."&tbm=isch");   
			        $newhtml2 = file_get_html("https://www.google.com/search?q=".$movie2[1]."&tbm=isch");  
			        $newhtml3 = file_get_html("https://www.google.com/search?q=".$movie3[1]."&tbm=isch");       
			        $newhtml4 = file_get_html("https://www.google.com/search?q=".$movie4[1]."&tbm=isch");  
			        try{
				        $result_image_search1 = $newhtml1 -> find('img',1); // Index one for the image 
				        $result_image_search2 = $newhtml2 -> find('img',1); // Index one for the image 
				        $result_image_search3 = $newhtml3 -> find('img',1); // Index one for the image 
				        $result_image_search4 = $newhtml4 -> find('img',1); // Index one for the image
				    }catch(Exception $e){
				    	childrenSQL();
				    }
				    if($result_image_search1 == null || $result_image_search2 == null ||$result_image_search3 == null ||$result_image_search4 == null){
				    	childrenSQL();
				    }else{
			    		global $image_search1;
		        		global $image_search2;
		        		global $image_search3;
		        		global $image_search4;
		        		$image_search1 = $result_image_search1 -> src;
		        		$image_search2 = $result_image_search2 -> src;
		        		$image_search3 = $result_image_search3 -> src;
		        		$image_search4 = $result_image_search4 -> src;
				    }
		        }else{
		        	childrenSQL();
		        }   
	        }

?>
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
		<?php
/*	
			//If logged in true - Make title the genre var
			//else make it children movies 
		$loggedIn = false;
	// This line can be readded later 
		if(isset($_POST['username'],$_POST['password'])){
			//$userGenre;
			$userGenreID;
			$conn = OpenCon();
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql2 = "SELECT * FROM user WHERE user.UserUserName = '$username' ";
			$logInResult = $conn -> query($sql2);
			global $userGenreID;
			if(mysqli_num_rows($logInResult) > 0){
				while ($row = mysqli_fetch_array($logInResult)){
					$passwordDecrypted = decrypt($conn, $row[4]);
					if($password == $passwordDecrypted){
						$loggedIn = true;
						$userGenreID = $row[6];
						global $userGenreName;
						$sqlGenreName = "SELECT genre.Genre_Name from genre where genre.GenreID = '$userGenreID'";
						$genreResult = $conn -> query ($sqlGenreName);
						while ($row = mysqli_fetch_array($genreResult)) {
							$userGenreName = $row[0];
							break;
						}
						echo '<header5>'.strtoupper($userGenreName).'</header5>';
					}
					else 
					{
						echo "<header5> CHILDREN MOVIES </header5>";
					}
					break;
				}
			}
		} // IMPORTATNT 
		else{
			echo "<header5> CHILDREN MOVIES </header5>";
		}*/
		echo "<header5> CHILDREN MOVIES </header5>";
		?>
	</div>
</div>	

<!--original slideshow -->
<div class="slideshow-container"> <!-- Carousel containing images for the recommended movies -->
	<?php // Add the image 
		$arrayInfoRating = array();
		$arrayMoviesRating = array();
		ratingSQL(); 
    ?>
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php echo'<img src="'.$image_search1Rating.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title1Rating ?></div>
    </div>
    

    <div class="mySlides fade">
        <div class="numbertext"> </div>
          <?php echo'<img src="'.$image_search2Rating.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title2Rating ?></div>
        </div>
    
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php echo'<img src="'.$image_search3Rating.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title3Rating ?></div>
    </div>


    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php echo'<img src="'.$image_search4Rating.'" style = "width:100%" width="253" height="395">' ?>
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
    $arrayInfoTrending = array();
	$arrayMoviesTrending = array();
	trendingSQL();
    ?>
    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
        <?php echo'<img src="'.$image_search1Trending.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title1Trending ?></div>
    </div>
    

    <div class="mySlides2 fade">
        <div class="numbertext2"></div>
        <?php echo'<img src="'.$image_search2Trending.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title2Trending ?></div>
        </div>


    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
        <?php echo'<img src="'.$image_search3Trending.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title3Trending ?></div>
    </div>

    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
       <?php echo'<img src="'.$image_search4Trending.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title4Trending ?></div>
    </div>

    <a class="prev" onclick="plusSlidesTopTrending(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopTrending(1)">&#10095;</a>

      <!--<link rel="stylesheet" href="css/behaviour.css" type="text/css"> -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide2(1)"></span>
    <span class="dot" onclick="currentSlide2(2)"></span>
    <span class="dot" onclick="currentSlide2(3)"></span>
    <span class="dot" onclick="currentSlide2(4)"></span>
   </div>
</div>

<!--Childrens Movies slideshow -->

<div class="slideshowChildrensMovies-container"> <!-- Carousel containing images for the recommended movies -->
	<?php // Add the image
	$arrayInfo = array();
	$arrayMovies=array();
	if($loggedIn==false){
        childrenSQL();
    }
    else{
        loggedInSQL($userGenreID);
    }  
    ?>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <?php echo'<img src="'.$image_search1.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title1 ?></div>
    </div>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <?php echo'<img src="'.$image_search2.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title2 ?> </div>
        </div>


    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <?php echo'<img src="'.$image_search3.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title3 ?> </div>
    </div>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <?php echo'<img src="'.$image_search4.'" style = "width:100%" width="253" height="395">' ?>
        <div class="text"> <?php echo $title4 ?> </div>
    </div>

    <a class="prev" onclick="plusSlidesChildMovies(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesChildMovies(1)">&#10095;</a>
	
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide3(1)"></span>
    <span class="dot" onclick="currentSlide3(2)"></span>
    <span class="dot" onclick="currentSlide3(3)"></span>
    <span class="dot" onclick="currentSlide3(4)"></span>
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
