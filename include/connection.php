<?php
//Sets up the connection to the database
function OpenCon()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "moviedb";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

	if ($conn -> connect_errno) {
		echo "Connection failed: " .$conn->connect_error;
		exit();
	}

	return $conn;
}

//Used to close the connection to the database
function CloseCon ($conn)
{
	$conn -> close();
}

?>