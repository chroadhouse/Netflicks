<?php 
	//Takes the connection and username as parameters 
	function checkExist($conn,$username)
	{
		$exist=false; // Sets boolean to false 
		
		$sql = "SELECT * FROM user";
		$result = $conn -> query($sql);
		
		if (mysqli_num_rows($result) >0)
		{

			while ($row = mysqli_fetch_array($result))
			{						
				$usernameExisting = $row['UserUserName'];


				if($usernameExisting==$username)
				{
					$exist=true; // Sets true if the username is in the database 
				}
			}
		}
		return $exist; // Returns the boolean 
	}
?>