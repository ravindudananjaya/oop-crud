<?php
require '../classes/DB.php';
require '../models/Info.php';
require '../controllers/InfoController.php';

$infoController = new InfoController();

if (isset($_POST['save'])) {
	$payload = [];

	$payload[] = $_POST['name'];
	$payload[] = $_POST['address'];
	$payload[] = $_POST['name'];

	$infoController->add($payload);
	header('location: ../index.php');
}

// 	if (isset($_POST['save'])) {

// 		$name = $_POST['name'];
// 		$address = $_POST['address'];

// 		$query = "INSERT INTO info (name, address) VALUES ('$name' , '$address')";
// 		mysqli_query($db, $query);


// 		header('location: ../index.php');


// 	}


?>