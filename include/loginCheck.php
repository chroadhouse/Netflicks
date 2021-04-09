<?php
	session_start();
	include 'connection.php';
	include 'decrypt.php';
	if(isset($_POST['username'],$_POST['password'])){
		logInCheck();
	}

	function logInCheck(){
		//global $loggedIn;
		$_SESSION['loggedIn'] = false;
		//$loggedIn = false;
		$conn = OpenCon();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql2 = "SELECT * FROM user WHERE user.UserUserName = '$username' ";
		$logInResult = $conn -> query($sql2);
		
		if(mysqli_num_rows($logInResult) > 0)
		{

			while ($row = mysqli_fetch_array($logInResult)){

				$passwordDecrypted = decrypt($conn, $row[4]);
				if($password == $passwordDecrypted){
					
			
					$_SESSION['loggedIn'] = true;
				
						 $userGenreID = $row[6];
						 $_SESSION['GenreID'] = $userGenreID;
						 //global $userGenreName;
						 $sqlGenreName = "SELECT genre.Genre_Name from genre where genre.GenreID = '$userGenreID'";
						 $genreResult = $conn -> query ($sqlGenreName);
						 while ($row = mysqli_fetch_array($genreResult)) {
						 	$userGenreName = $row[0];
						 	$_SESSION['userGenreName'] = $userGenreName;
						 	break;
						 }
					
				}
			
			}
		}
		echo "<script>location.href = 'index.php'</script>";
	}

?>