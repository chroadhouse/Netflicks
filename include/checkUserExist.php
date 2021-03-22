<?php 


	
	function checkExist($conn,$username)
	{
		
	
		$exist=false;
		
		$sql = "SELECT * FROM user";
		$result = $conn -> query($sql);
		
		if (mysqli_num_rows($result) >0)
		{

			while ($row = mysqli_fetch_array($result))
			{						
				$usernameExisting = $row['UserUserName'];


				if($usernameExisting==$username)
				{
					$exist=true;
				}
			}
		}
		return $exist;
	}
?>