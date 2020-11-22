<?php
session_start();
class InfoController {

	public $info;

	public function __construct() {
		$this->info = new Info();
	}




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
		if ( $payload['name'] == null) {

			$_SESSION['msg'] = "<div>You cant leave name field empty</div>";
			
		 	
		 
		 } else { 

		 	if ($payload['address'] == null) {
		 			$_SESSION['msg'] = "<div>You cant leave address field empty</div>";
		 		} else {	
		 	return $info->store($payload['name'], $payload['address']);
		 	}
		 }
		
		
		
		
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

	public function edit($id)
	{
		$info = new Info();
		$results = $info->edit($id);

		
		
		$row = mysqli_fetch_row($results);
		
		// $id = $records[0];
		// $name = $records[1];
		// $address = $records[2];

		// echo $id,$name,$address;
		// print_r($records);
		return $row;
		// print_r($row); 
	
		
	}
}