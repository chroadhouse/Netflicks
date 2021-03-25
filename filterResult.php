<?php include 'include/header.php'?>

<?php 
	if (isset($_POST['Year'], $_POST['Budget1'], $_POST['Budget2'], $_POST['Revenue1'], $_POST['Revenue2'], $_POST['Actor'], $_POST['Director']))
	{

		if(isset($_POST['genre'])) //  Checking for both 
		{
			$genre = $_POST['genre'];
			$string = implode("','", $genre);
			$string =  "'".$string."'";
		}
		else{
			//Add a string with all the genre in 
			$string = "'Action','Adventure','Crime,Mystery','Thriller','Romance','Fantasy','Drama','Animation','Family','Comedy','Horror','War','Science Fiction','Foreign','Music','Western','TV Movie'";
		}
		


		
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



		if ($actor!="" && $director == "")
		{
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Overview,movie.Movie_Release_date, movie.Movie_Runtime, movie.Movie_Original_Language, movie.Movie_Budget, movie.Movie_Revenue, movie.Rating, movie.MovieID FROM 
			(((((actor inner join castactor on actor.ActorID = castactor.ActorID) inner join castteam on castteam.CastID = castactor.CastID) inner join movie on movie.CastID = castteam.CastID) inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID)

			WHERE ((Movie_Release_date like '%$year') AND (Actor.ActorName like '%$actor') AND (movie.Movie_Budget between $budgetMin and $budgetMax) AND (movie.Movie_Revenue between $revenueMin and $revenueMax) AND (genre.genre_name in ($string)))
					GROUP BY movie.MovieID";
		}
		else if ($director != "" && $actor == "")
		{
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Overview,movie.Movie_Release_date, movie.Movie_Runtime, movie.Movie_Original_Language, movie.Movie_Budget, movie.Movie_Revenue, movie.Rating, movie.MovieID FROM 
			(((((crewMembers inner join crewteamcrewMember on crewMembers.CrewMemberID = crewteamcrewMember.CrewMemberID) inner join crewteam on crewteam.CrewTeamID = crewteamcrewMember.CrewTeamID) inner join movie on movie.CrewID = crewteam.CrewTeamID) inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID)

			WHERE ((Movie_Release_date like '%$year') AND (CrewMembers.CrewMemberName like '%$director') AND (crewteamcrewMember.CrewMemberJob = 'Director') AND (movie.Movie_Budget between $budgetMin and $budgetMax) AND (movie.Movie_Revenue between $revenueMin and $revenueMax) AND (genre.genre_name in ($string)))
					GROUP BY movie.MovieID";
		}
		else if ($director != "" && $actor != "")
		{
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Overview,movie.Movie_Release_date, movie.Movie_Runtime, movie.Movie_Original_Language, movie.Movie_Budget, movie.Movie_Revenue, movie.Rating, movie.MovieID FROM 
			((((((((crewMembers inner join crewteamcrewMember on crewMembers.CrewMemberID = crewteamcrewMember.CrewMemberID) inner join crewteam on crewteam.CrewTeamID = crewteamcrewMember.CrewTeamID) inner join movie on movie.CrewID = crewteam.CrewTeamID) inner join castteam on castteam.CastID = movie.CastID) inner join castactor on castactor.CastID = castteam.CastID) inner join actor on actor.ActorID = castactor.ActorID) inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID)


			WHERE ((Movie_Release_date like '%$year') AND (CrewMembers.CrewMemberName like '%$director') AND (Actor.ActorName like '%$actor') AND (crewteamcrewMember.CrewMemberJob = 'Director') AND (movie.Movie_Budget between $budgetMin and $budgetMax) AND (movie.Movie_Revenue between $revenueMin and $revenueMax) AND (genre.genre_name in ($string)))
					GROUP BY movie.MovieID";
		}
		else 
		{
			$sql = "SELECT movie.Movie_Original_Title, movie.Movie_Overview,movie.Movie_Release_date, movie.Movie_Runtime, movie.Movie_Original_Language, movie.Movie_Budget, movie.Movie_Revenue, movie.Rating, movie.MovieID
			FROM ((movie inner join genremovie on movie.movieID = genremovie.movieID) inner join genre on genre.genreID = genremovie.genreID)
			WHERE ((movie.Movie_Release_date like '%$year') AND (movie.Movie_Budget between $budgetMin and $budgetMax) AND (movie.Movie_Revenue between $revenueMin and $revenueMax) AND (genre.genre_name in ($string)))
					GROUP BY movie.MovieID";
		}

		
		$query = $conn -> query($sql);
		
		if (mysqli_num_rows($query) >0)
			{
				while ($row = mysqli_fetch_array($query))
				{ 
					//$row = mysqli_fetch_array($query)[0];
					echo "<p style='color:white ; font-size:50px; text-align:center'>" .$row[0]."</p>";
					echo "<p style='color:white'> Overview : ".$row[1]." </p>";
					echo "<p style='color:white'> Release date : ".$row[2]." </p>";
					if ($row[5] == 0)
						$budget = "N/A";
					else $budget = $row[5];
					echo "<p style='color:white'> Budget : ".$budget." </p>";
					if ($row[6] == 0)
						$revenue = "N/A";
					else $revenue = $row[6];
					echo "<p style='color:white'> Revenue : ".$revenue." </p>";
					echo "<p style='color:white'> Runtime : ".$row[3]." </p>";

					$sql1 = "SELECT Language from originallanguage where  LanguageID = '$row[4]'";
					$query1 = $conn -> query($sql1);
					$result2 = $query1 -> fetch_row();
					$language = $result2[0];
					echo "<p style='color:white'> Original language : ".$language." </p>";

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

					echo "<p style='color:white'> Genre : ". $genre . " </p>";

					if ($row[7] == "")
						$rating = "N/A";
					else $rating = $row[7];
					echo "<p style='color:white'> Rating : ". $rating . " </p>";
					
					$genre = "";
				}
			}
	}
?>