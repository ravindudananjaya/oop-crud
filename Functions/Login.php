<?php

require '../classes/DB.php';
require '../models/Users.php';



$User = new Users();

	$user = $User->login($_POST['username']);

	$pass = $_POST['password'];
	$uname = $_POST['username'];

	



	
		if ($uname == null and $pass == null) {
			header('location: ../index.php?edit=0');
		} elseif ($uname == null ) {
			header('location: ../index.php?edit=1');
		} elseif ($pass == null) {
			header('location: ../index.php?edit=2');
		} elseif  ($user == null) {
					header('location: ../index.php?edit=3');
		} elseif ($password = ($user[2]) and $password == $pass )  {
					 
						
					header('location: ../welcome.php');
		} else {
			header('location: ../index.php?edit=4');
		}
			
				
		
		



?>

