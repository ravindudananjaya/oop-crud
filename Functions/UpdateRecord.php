<?php
require '../classes/DB.php';
require '../models/Info.php';
require '../controllers/InfoController.php';

$infoController = new InfoController();

		if($infoController->update($_POST)) {
			header('location: ../table.php?success=1');
		} else {
			header('location: ../table.php?success=0');
		}



?>