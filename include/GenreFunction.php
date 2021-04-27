<?php
		$conn = OpenCon();
		$genreTitle = 'Title';
		$arrayMovies = array();
		
		//If statement finds out what genre has been selected 
		//Calls the function and sets the title variable 
		if (isset($_POST['Action'])){
			$genreTitle = 'Action';
			populateGenre('Action');
		}
		else if(isset($_POST['Adventure'])){
			$genreTitle = 'Adventure';
			populateGenre('Adventure');
		}
		else if(isset($_POST['Comedy'])){
			$genreTitle = 'Comedy';
			populateGenre('Comedy');
		}
		else if(isset($_POST['Romance'])){
			$genreTitle = 'Romance';
			populateGenre('Romance');
		}
		else if(isset($_POST['Fantasy'])){
			$genreTitle = 'Fantasy';
			populateGenre('Fantasy');
		}
		else if(isset($_POST['Horror'])){
			$genreTitle = 'Horror';
			populateGenre('Horror');
		}
		else if(isset($_POST['Animations'])){
			$genreTitle = 'Animations';
			populateGenre('Animation');
		}
		else if(isset($_POST['Thriller'])){
			$genreTitle = 'Thriller';
			populateGenre('Thriller');
		}
		else if(isset($_POST['Drama'])){
			$genreTitle = 'Drama';
			populateGenre('Drama');
		}
		else if(isset($_POST['Family'])){
			$genreTitle = 'Family';
			populateGenre('Family');
		}
		else if(isset($_POST['History'])){
			$genreTitle = 'History';
			populateGenre('History');
		}
		else if(isset($_POST['War'])){
			$genreTitle = 'War';
			populateGenre('War');
		}
		else if(isset($_POST['Western'])){
			$genreTitle = 'Western';
			populateGenre('Western');
		}
		else if(isset($_POST['Musical'])){
			$genreTitle = 'Musical';
			populateGenre('Music');
		}
		else if(isset($_POST['Science_Fiction'])){
			$genreTitle = 'Science Fiction';
			populateGenre('Science Fiction');
		}
		else if(isset($_POST['Crime'])){
			$genreTitle = 'Crime';
			populateGenre('Crime');
		}
		else if(isset($_POST['Mystery'])){
			$genreTitle = 'Mystery';
			populateGenre('Mystery');
		}
		else if(isset($_POST['Foreign'])){
			$genreTitle = 'Foreign';
			populateGenre('Foreign');
		}
		else if(isset($_POST['Documentary'])){
			$genreTitle = 'Documentary';
			populateGenre('Documentary');
		}
		else if(isset($_POST['TV_Movies'])){
			$genreTitle = 'TV Movies';
			populateGenre('TV Movie');
		}
		//Takes the genre as a parameter 
		function populateGenre($genre){
			$conn = OpenCon();
			global $arrayMovies;
			// Sql query finds films with this genre 
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Poster_Path, movie.Movie_Overview FROM ((movie inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID) where genre.genre_name = '$genre'";  
			//Query is run here 
			$query = $conn -> query($sql);
			$arrayInfo = array();
			
			$i = 0;
			if (mysqli_num_rows($query) >0)
			{
				while ($row = mysqli_fetch_array($query))
				{ 
					$arrayInfo[0] = $row[0];  //title
					$arrayInfo[1] = $row[1];  // image
					$arrayInfo[2] = $row[2]; //overview
					$arrayInfo[3] = $genre;

					$arrayMovies[$i] = $arrayInfo;
					$i = $i+1;
				}
			}
		};
	

?>