<?php
		//These first 3 lines 
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		//$testArray =array();
		$conn = OpenCon();

		/*if(!$conn){
			die("Connection Failed: ". mysql_connect_error());
		}else{
			echo "Connection is working";
		}*/
		//Selection block to find the correct genre
		if (isset($_POST['Action'])){
			populateGenre('Action');
		}
		else if(isset($_POST['Adventure'])){
			populateGenre('Adventure');
		}
		else if(isset($_POST['Comedy'])){
			populateGenre('Comedy');
		}
		else if(isset($_POST['Romance'])){
			populateGenre('Romance');
		}
		else if(isset($_POST['Fantasy'])){
			populateGenre('Fantasy');
		}
		else if(isset($_POST['Horror'])){
			populateGenre('Horror');
		}
		else if(isset($_POST['Animations'])){
			populateGenre('Animation');
		}
		else if(isset($_POST['Thriller'])){
			populateGenre('Thriller');
		}
		else if(isset($_POST['Drama'])){
			populateGenre('Drama');
		}
		else if(isset($_POST['Family'])){
			populateGenre('Family');
		}
		else if(isset($_POST['History'])){
			populateGenre('History');
		}
		else if(isset($_POST['War'])){
			populateGenre('War');
		}
		else if(isset($_POST['Western'])){
			populateGenre('Western');
		}
		else if(isset($_POST['Musical'])){
			populateGenre('Music');
		}
		else if(isset($_POST['Science_Fiction'])){
			populateGenre('Science Fiction');
		}
		else if(isset($_POST['Crime'])){
			populateGenre('Crime');
		}
		else if(isset($_POST['Mystery'])){
			populateGenre('Mystery');
		}
		else if(isset($_POST['Foreign'])){
			populateGenre('Foreign');
		}
		else if(isset($_POST['Documentary'])){
			populateGenre('Documentary');
		}
		else if(isset($_POST['TV_Movies'])){
			populateGenre('TV Movie');
		}


		//So the method gets the data of genres. We then want to store them in an array - So we can use the data on the genre slide show
		//Because this is an include then it should be global in terms of scope. In the genre page we are going to have a slide show with an image
		//The title and the overview. For now we just need to be able to get that data in there and then when the user presses one of the other buttons
		//It should recall the method and pass the correct genre. The query works. i've tested it myself - it's line 89 which is broken
		//The link underneath is how to store the data in an array - php uses arrays like a dictionary so that should help us
		//If you can get the query working and the data into the array then I can mess around with the rest tomorrow
		//https://stackoverflow.com/questions/19039226/how-to-store-mysql-fetch-array-result-into-different-variables
		function populateGenre($genre){
			$conn = OpenCon();
		
			// Write the sql Query 
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Poster_Path, movie.Movie_Overview FROM ((movie inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID) where genre.genre_name = '$genre'"; // The SQL is working 
			
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
					$arrayInfo[2] = $row[2]; //overview

					$arrayMovies[$i] = $arrayInfo;
					$i = $i+1;
				}

			}
			//MAYBE THE ARRAY NEED TO BE RETURNED 
			//PRINT DATA
			/*foreach($arrayMovies as $array) {
		    	foreach($array as $value) {
		        	echo $value . ",";
		    	}
		    	echo "<br />";
			}*/
		};


	// $array1 = { title poster overvie , title poster overview , , , , ,  }

?>