<?php

class UserController {



	

	public function add($payload)
	{

		

		$Users = new Users();
		if ( $payload['username'] == null) {

			header('location: ../signup.php?edit=1');
			
		 	
		 
		 } else { 

		 	if ($payload['password'] == null) {
		 			header('location: ../signup.php?edit=2');
		 		} else {	
		 	return $Users->add($payload['username'], $payload['password']);
		 	
		 	}
		 }
		
		
		
		
	}

}