<?php
require '../models/Info.php';


class InfoController {
	public function getAll()
	{
		$info = new Info();
		$results = $info->getAll();

		// structuring records
		$records = [];
		while ($row = mysqli_fetch_array($results)) {
			$records[] = $row;
		}

		return $records;
	}
}