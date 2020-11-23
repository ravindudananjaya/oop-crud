<?php
require '../classes/DB.php';
require '../models/Users.php';

require '../controllers/UserController.php';



$UserController = new UserController();

		
		if ($UserController->add($_POST)) {
			header('location: ../index.php?edit=5');
		}
		// print_r($User);
	
		// 	if($User->add($_POST)) {
			
		// 	echo "done";
		// } else {
		// 	echo "not";
		// }

	


?>

<?php



