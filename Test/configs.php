<?php
/*******************************
 * @desciption : Connect to the database
 * @method : establish the connection to database
 *******************************/
class Config
{
	function configs()
	{
// Create connection
		$conn = new mysqli("localhost","root","admin","emp");

// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}else{
			return $conn;
		}
	}
}
?>