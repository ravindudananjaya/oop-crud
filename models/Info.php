<?php
require '../classes/DB.php';

class Info {

	protected $db;

	public function __construct() {
		$this->db = (new DB())->getDB();
	}

	public function getAll()
	{
		return mysqli_query($this->db, "SELECT * FROM info");
	}
}