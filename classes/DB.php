<?php
class DB {
	protected $db;

	public function __construct() {
		$this->db = mysqli_connect('localhost','root','','crud');
	}
}

