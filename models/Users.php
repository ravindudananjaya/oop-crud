<?php
session_start();
class Users extends DB{


	public function login($username)
	{

		$sql1 = "SELECT * FROM users WHERE username='$username' ";
		$results1 = mysqli_query($this->db, $sql1) or die( mysqli_error($this->db));
		$row1 = mysqli_fetch_row($results1);
		return $row1;

	}

}




