<?php
class DB {

	// public $name;
	protected $db;
	// public $path;
	// private $db;

	public function __construct() {
		$this->db = mysqli_connect('localhost','root','','crud');
		// $this->path = 'imgwe'

		// $this->name = $name;
	}

	// public function getName() {
	// 	return $this->name;
	// }

	// public function getPath(){
	// 	return $this->path;
	// }
}

