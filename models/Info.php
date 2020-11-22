<?php

class Info extends DB{

	public function login($username)
	{
		return mysqli_query($this->db,  "SELECT * FROM users WHERE username=$username");
	}

	public function getAll()
	{
		return mysqli_query($this->db, "SELECT * FROM info");
	}

	

	public function store($name, $address)
	{
		return mysqli_query($this->db, "INSERT INTO info (name, address) VALUES ('$name' , '$address')");
	}

	public function delete($id)
	{
		return mysqli_query($this->db, "DELETE FROM info WHERE id= '$id'");
	}

	public function update($id, $name, $address)
	{
		return mysqli_query($this->db, "UPDATE info SET name = '$name', address = '$address' WHERE  id= '$id'");
	}

	public function edit($id)
	{

		return mysqli_query($this->db,  "SELECT * FROM info WHERE id=$id");
		
		// return mysqli_query($this->db,  "SELECT * FROM info WHERE id=$id");
	}
}
