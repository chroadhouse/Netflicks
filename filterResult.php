<?php include 'include/header.php'?>


<?php 
	//Checks to see if some of filter options are set 
	if (isset($_POST['Year'], $_POST['Budget1'], $_POST['Budget2'], $_POST['Revenue1'], $_POST['Revenue2'], $_POST['Actor'], $_POST['Director']))
	{
		//Checks genre seperatley 
		if(isset($_POST['genre'])) //  Checking for both 
		{
			$genre = $_POST['genre'];
			$string = implode("','", $genre);
			$string =  "'".$string."'";
		}
		else{
			//Add a string with all the genre in 
			$string = "'Action','Adventure','Crime','Mystery','Thriller','Romance','Fantasy','Drama','Animation','Family','Comedy','Horror','War','Science Fiction','Foreign','Music','Western','TV Movie'";
		}
		


		//Variables are set
		$year = $_POST['Year'];
		$actor = $_POST['Actor'];
		$budgetMin = $_POST['Budget1'];
		$budgetMax = $_POST['Budget2'];
		$revenueMin = $_POST['Revenue1'];
		$revenueMax = $_POST['Revenue2'];
		$director = $_POST['Director'];

		if ($budgetMin=="")
		{
			$budgetMin = 0;
		}
		if ($budgetMax=="")
		{
			$budgetMax = 10000000000000;
		}

		if ($revenueMin=="")
		{
			$revenueMin = 0;
		}
		if ($revenueMax=="")
		{
			$revenueMax = 10000000000000;
		}
		//Empty values are handled 

		//Different SQL depending on what the user entered 
		if ($actor!="" && $director == "")
		{
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Overview,movie.Movie_Release_date, movie.Movie_Runtime, movie.Movie_Original_Language, movie.Movie_Budget, movie.Movie_Revenue, movie.Rating, movie.MovieID,movie.Movie_Poster_Path FROM 
			(((((actor inner join castactor on actor.ActorID = castactor.ActorID) inner join castteam on castteam.CastID = castactor.CastID) inner join movie on movie.CastID = castteam.CastID) inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID)

			WHERE ((Movie_Release_date like '%$year') AND (Actor.ActorName like '%$actor') AND (movie.Movie_Budget between $budgetMin and $budgetMax) AND (movie.Movie_Revenue between $revenueMin and $revenueMax) AND (genre.genre_name in ($string)))
					GROUP BY movie.MovieID";
		}
		else if ($director != "" && $actor == "")
		{
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Overview,movie.Movie_Release_date, movie.Movie_Runtime, movie.Movie_Original_Language, movie.Movie_Budget, movie.Movie_Revenue, movie.Rating, movie.MovieID,movie.Movie_Poster_Path FROM 
			(((((crewMembers inner join crewteamcrewMember on crewMembers.CrewMemberID = crewteamcrewMember.CrewMemberID) inner join crewteam on crewteam.CrewTeamID = crewteamcrewMember.CrewTeamID) inner join movie on movie.CrewID = crewteam.CrewTeamID) inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID)

			WHERE ((Movie_Release_date like '%$year') AND (CrewMembers.CrewMemberName like '%$director') AND (crewteamcrewMember.CrewMemberJob = 'Director') AND (movie.Movie_Budget between $budgetMin and $budgetMax) AND (movie.Movie_Revenue between $revenueMin and $revenueMax) AND (genre.genre_name in ($string)))
					GROUP BY movie.MovieID";
		}
		else if ($director != "" && $actor != "")
		{
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Overview,movie.Movie_Release_date, movie.Movie_Runtime, movie.Movie_Original_Language, movie.Movie_Budget, movie.Movie_Revenue, movie.Rating, movie.MovieID, movie.Movie_Poster_Path
			 FROM 
			((((((((crewMembers inner join crewteamcrewMember on crewMembers.CrewMemberID = crewteamcrewMember.CrewMemberID) inner join crewteam on crewteam.CrewTeamID = crewteamcrewMember.CrewTeamID) inner join movie on movie.CrewID = crewteam.CrewTeamID) inner join castteam on castteam.CastID = movie.CastID) inner join castactor on castactor.CastID = castteam.CastID) inner join actor on actor.ActorID = castactor.ActorID) inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID)


			WHERE ((Movie_Release_date like '%$year') AND (CrewMembers.CrewMemberName like '%$director') AND (Actor.ActorName like '%$actor') AND (crewteamcrewMember.CrewMemberJob = 'Director') AND (movie.Movie_Budget between $budgetMin and $budgetMax) AND (movie.Movie_Revenue between $revenueMin and $revenueMax) AND (genre.genre_name in ($string)))
					GROUP BY movie.MovieID";
		}
		else 
		{
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Overview,movie.Movie_Release_date, movie.Movie_Runtime, movie.Movie_Original_Language, movie.Movie_Budget, movie.Movie_Revenue, movie.Rating, movie.MovieID, movie.Movie_Poster_Path
			FROM ((movie inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID)
			WHERE ((movie.Movie_Release_date like '%$year') AND (movie.Movie_Budget between $budgetMin and $budgetMax) AND (movie.Movie_Revenue between $revenueMin and $revenueMax) AND (genre.genre_name in ($string)))
					GROUP BY movie.MovieID";
		}

		//Query is run 
		$query = $conn -> query($sql);
		
		if (mysqli_num_rows($query) >0)
			{
				while ($row = mysqli_fetch_array($query)) // Goes through each of the resiults 
				{ 
					//Gets the image using the link and the HMTL DOM parser
					$image = $row[9];
					$newhtml = file_get_html("https://www.google.com/search?q=".$image."&tbm=isch");
					$result_image_search = $newhtml -> find('img',1) -> src; 
					echo'<img src="'.$result_image_search.'" style = width="500" height="500">';

					//The title, overview and the release date
					echo "<h1 style='color:white ; font-size:50px; text-align:center'>" .$row[0]."</h1>";
					echo "<p style='color:white'> Overview : ".$row[1]." </p>";
					echo "<p style='color:white'> Release date : ".$row[2]." </p>";
					//If there is no budget data prints N/A
					if ($row[5] == 0)
						$budget = "N/A";
					else $budget = $row[5];
					echo "<p style='color:white'> Budget : ".$budget." </p>";

					//If there is no data for the revenue then it prints N/A
					if ($row[6] == 0)
						$revenue = "N/A";
					else $revenue = $row[6];
					echo "<p style='color:white'> Revenue : ".$revenue." </p>";

					echo "<p style='color:white'> Runtime : ".$row[3]." </p>";
					//Runs second query to get the language from the language table 
					$sql1 = "SELECT Language from originallanguage where  LanguageID = '$row[4]'";
					$query1 = $conn -> query($sql1);
					$result2 = $query1 -> fetch_row();
					$language = $result2[0];
					echo "<p style='color:white'> Original language : ".$language." </p>";
					//Runs a third query to get the genre of the films 
					$sql1 = "SELECT Genre_Name FROM ((genre inner join genremovie on genre.GenreID = genremovie.GenreID) inner join movie on genremovie.MovieID = movie.MovieID) WHERE movie.MovieID = '$row[8]'"; 
					$query1 = $conn -> query($sql1);


					if (mysqli_num_rows($query1) >0)
					{
						$genre = "";
						while ($row1 = mysqli_fetch_array($query1))
						{
							$genre = $genre . ", ". $row1[0];
						}
					}
					//Genre is then printed 
					echo "<p style='color:white'> Genre : ". $genre . " </p>";

					
					if ($row[7] == "")
						$rating = "N/A";
					else $rating = $row[7];
					echo "<p style='color:white'> Rating : ". $rating . " </p>";
					
					$genre = "";
				}
			}
	}
	include ('include/footer.php');
?>