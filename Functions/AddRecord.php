<?php
require '../classes/DB.php';
require '../models/Info.php';
require '../controllers/InfoController.php';



$infoController = new InfoController();

		if($infoController->add($_POST)) {
			
			header('location: ../table.php');
		} else {
			header('location: ../table.php?success=0');
		}



?>