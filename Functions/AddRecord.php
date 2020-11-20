<?php
require '../classes/DB.php';
require '../models/Info.php';
require '../controllers/InfoController.php';



$infoController = new InfoController();

		if($infoController->add($_POST)) {
			
			header('location: ../index.php');
		} else {
			header('location: ../index.php?success=0');
		}



?>