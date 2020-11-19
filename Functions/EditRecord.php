 <?php
require '../classes/DB.php';
require '../models/Info.php';
require '../controllers/InfoController.php';

$infoController = new InfoController();
	
	$r = $infoController->edit($_POST);
	// print_r($r);
	header('location: ../edit.php')
	



?> 

