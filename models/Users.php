<?php

class Users extends DB{


	public function login($payload)
	{

		// $allUsers = mysqli_query($this->db, "SELECT * FROM info");
		// // $Users = mysqli_fetch_all($allUsers);
		// // print_r($Users);

		// // $username = ($payload['username']);

		// while ($Users = mysqli_fetch_array($allUsers))  {
		// 	$records[] = $Users;
		// }

		// print_r ($records); 


		$username = ($payload['username']);

		$sql = "SELECT * FROM users WHERE username='$username'";
		$results = mysqli_query($this->db, $sql) or die( mysqli_error($this->db));
		
		// // $username = ($payload['username']);
		// // $results = mysqli_query($this->db,  "SELECT * FROM users WHERE username=$username");
		$row = mysqli_fetch_array($results);
		
		print_r($row);
	
	}
}

