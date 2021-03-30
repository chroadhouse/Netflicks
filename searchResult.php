<?php include 'include/header.php'?>


<?php 
	if (isset($_POST['searchBar']))
	{
		//SEARCH FOR MOVIE TITLE 
		$movie_title = $_POST['searchBar'];
		$sql = "SELECT * FROM movie WHERE Movie_Original_Title = '$movie_title'";
		$query = $conn -> query($sql);
		$result = $query -> fetch_row();
		//IF THE MOVIE EXISTS ......
		if ($result != null)
		{

			// THIS QUERY GET THE LANGUAGE OF THE MOVIE FROM ITS LANGUAGE CODE
			$sql = "SELECT Language from originallanguage where  LanguageID = '$result[3]'";
			$query = $conn -> query($sql);
			$result2 = $query -> fetch_row();
			$language = $result2[0];

			//THIS QUERY GET THE GENRE OF THE MOVIE
			$sql = "SELECT Genre_Name FROM ((genre inner join genremovie on genre.GenreID = genremovie.GenreID) inner join movie on genremovie.MovieID = movie.MovieID) WHERE movie.MovieID = '$result[0]'"; 
			$query = $conn -> query($sql);


			if (mysqli_num_rows($query) >0)
			{
				$genre = "";
				while ($row = mysqli_fetch_array($query))
				{
					$genre = $genre . ", ". $row[0];
				}
			}

			//THIS QUERY GET THE CAST, IF IT IS KNOWN 
			if (strlen($result[1])>0)
			{
				$sql = "SELECT ActorName, castActor.Character FROM (((actor inner join castactor on actor.ActorID = castactor.ActorID) inner join castteam on castteam.CastID = castactor.CastID) inner join movie on movie.CastID = castteam.CastID) where castteam.CastID = '$result[1]'";
				$query = $conn -> query($sql);


				if (mysqli_num_rows($query) >0)
				{
					$actors = "";
					while ($row = mysqli_fetch_array($query))
					{
						$actors = $actors . ", ". $row[0] . " (" . $row[1] . ") ";
					}
				}
			}
			else 
				$actors = "N/A";
			

			//THIS QUERY GET THE CREW, IF IT IS KNOWN
			if (strlen($result[2])>0)
			{
				$sql = "SELECT crewMembers.CrewMemberName, crewteamcrewmember.CrewMemberJob FROM (((crewMembers inner join crewteamcrewmember on crewMembers.crewMemberID = crewteamcrewmember.crewMemberID) inner join crewteam on crewteam.CrewTeamID = crewteamcrewmember.CrewTeamID) inner join movie on movie.CrewID = crewteam.CrewTeamID) where crewteam.CrewTeamID = '$result[2]'";
				$query = $conn -> query($sql);


				if (mysqli_num_rows($query) >0)
				{
					$crew = "";
					while ($row = mysqli_fetch_array($query))
					{
						$crew = $crew . ", ". $row[0] . " (" . $row[1] . ") ";
					}
				}
			}
			else 
				$crew = "N/A";



			$image = $result[8];
			$newhtml = file_get_html("https://www.google.com/search?q=".$image."&tbm=isch");
			$result_image_search = $newhtml -> find('img',1) -> src; 
			
			echo'<img src="'.$result_image_search.'" style = width="500" height="500">';

			
			
			echo "<p style='color:white ; font-size:50px; text-align:center'>" .$result[6]."</p>";
			echo "<p style='color:white'> Overview : ".$result[7]." </p>";
			echo "<p style='color:white'> Release date : ".$result[5]." </p>";
			if ($result[4] == 0)
				$budget = "N/A";
			else $budget = $result[4];
			echo "<p style='color:white'> Budget : ".$budget." </p>";
			if ($result[9] == 0)
				$revenue = "N/A";
			else $revenue = $result[9];
			echo "<p style='color:white'> Revenue : ".$revenue." </p>";
			echo "<p style='color:white'> Runtime : ".$result[10]." </p>";
			echo "<p style='color:white'> Original language : ".$language." </p>";
			echo "<p style='color:white'> Genre : ". $genre . " </p>";
			if ($result[11] == "")
				$rating = "N/A";
			else $rating = $result[11];
			echo "<p style='color:white'> Rating : ". $rating . " </p>";
			echo "<p style='color:white'> Cast : ". $actors . " </p>";
			echo "<p style='color:white'> Crew : ". $crew . " </p>";


		}
	}
	include ('include/footer.php');
 ?>