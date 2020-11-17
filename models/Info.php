<?php

class Info extends DB{

	public function getAll()
	{
		return mysqli_query($this->db, "SELECT * FROM info");
	}
}