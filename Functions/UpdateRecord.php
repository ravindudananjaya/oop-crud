<?php
require '../classes/DB.php';
require '../models/Info.php';
require '../controllers/InfoController.php';

$infoController = new InfoController();

		if($infoController->update($_POST)) {
			header('location: ../index.php?success=1');
		} else {
			header('location: ../index.php?success=0');
		}



?>