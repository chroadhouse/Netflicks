<?php
	//Starts a session so that the log in data will be saved from one page to another 
	session_start();
	include 'connection.php';
	include 'decrypt.php';
	//If they are logged in then the function is called 
	if(isset($_POST['username'],$_POST['password'])){
		logInCheck();
	}

	function logInCheck(){
		//Sets the session to false which will be used to 
		$_SESSION['loggedIn'] = false;
		//$loggedIn = false;
		$conn = OpenCon();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql2 = "SELECT * FROM user WHERE user.UserUserName = '$username' ";
		$logInResult = $conn -> query($sql2);
		//Gets the username and password data from the they have logged in 
		if(mysqli_num_rows($logInResult) > 0)
		{

			while ($row = mysqli_fetch_array($logInResult)){

				$passwordDecrypted = decrypt($conn, $row[4]);
				if($password == $passwordDecrypted){
					
					//If the decrypted password is the same then session is true 
					$_SESSION['loggedIn'] = true;
				
					 	$userGenreID = $row[6];
					 	$_SESSION['GenreID'] = $userGenreID;
						//Sets the genreid to a session to be used later 
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