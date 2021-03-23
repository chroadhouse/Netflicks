<?php 
	function insertUser($conn, $firstName, $lastName, $age, $username, $password, $email, $genre, $language)
	{
		$sql = "SELECT COUNT(*) FROM user";
		$query = $conn -> query($sql);
						
		$result = $query -> fetch_row();
		$nextID = $result[0]+1;

		$fullname = $firstName . " " . $lastName;


		$sql = "SELECT GenreID FROM genre WHERE Genre_Name = '$genre'";
		$query = $conn -> query($sql);
		$result = $query -> fetch_row();
		$genreID = $result[0];
		

		$sql = "SELECT LanguageID FROM originallanguage WHERE Language = '$language'";
		$query = $conn -> query($sql);
		$result = $query -> fetch_row();
		$languageID = $result[0];


		//CIPHER METHOD CHOSEN TO ENCRYPT, IN THIS CASE BLOWFISH
		$cipher_method = 'blowfish';
		
		//CREATE THE KEY HASHING THE STRING 'Rome' AND SAVE THE HASH STRING IN ENC_KEY
		$enc_key = openssl_digest('Rome', 'SHA256', TRUE);
		
		//GENERATE A STRING OF RANDOM BYTES WITH THE NUMBER OF BITES DETERMINATED BY THE LENGTH OF CIPHER METHOD
		$enc_iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));
		
		//ENCRYPT $CCNUM USING GIVEN METHOD AND KEY. THE IV IN HEX IS INCLUDED IN ORDER TO DO THE DECRYPTION. IT IS DIVIDED FROM THE STRING BY '::'
		$crypted_password = openssl_encrypt($password, $cipher_method, $enc_key, 0, $enc_iv) . "::" . bin2hex($enc_iv);



		$sql = "INSERT INTO user VALUES ('$nextID','$fullname','$email','$username','$crypted_password','$age','$genreID','$languageID')";
		if($conn->query($sql) === FALSE)
		{
			echo "Error: " .$sql. "<br>".mysqli_error($conn);
		}
	}
?>