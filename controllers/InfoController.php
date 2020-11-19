<?php

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

	public function add($payload)
	{
		$info = new Info();
		return $info->store($payload['name'], $payload['address']);
	}

	public function delete($payload)
	{
		$info = new Info();
		return $info->delete($payload['id']);
	}


	public function update($payload)
	{
		$info = new Info();
		return $info->update($payload['id'], $payload['name'], $payload['address']);
	}

	public function edit($payload)
	{
		$info = new Info();
		$id = $payload['id'];
		// $name= $payload['name'];
		// $address= $payload['address'];

		// return $info->update($payload['id'], $payload['name'], $payload['address']);
	}
}