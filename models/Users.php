<?php

class Users extends DB{


	public function login($payload)
	{


		$username = ($payload['username']);
		$password = ($payload['password']);

		$sql = "SELECT * FROM users WHERE username='$username' and password = '$password'";
		$results = mysqli_query($this->db, $sql) or die( mysqli_error($this->db));
		
	
		$row = mysqli_fetch_array($results);
		if ($row == null) {
			echo "Failed to login";
		}
		print_r($row);
	
	}
}

