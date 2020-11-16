<?php
class DB {
	public function getDB() {
		return mysqli_connect('localhost','root','','crud');
	}
}

