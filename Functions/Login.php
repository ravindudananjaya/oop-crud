<?php

require '../classes/DB.php';
require '../models/Users.php';



$User = new Users();

	$User->login($_POST);
	 // print_r($_POST);

		// if() {
			
		// 	header('location: ../table.php');
		// } else {
		// 	header('location: ../table.php?success=0');
		// }



?>

<?php
 // $r = $_POST;
 // print_r($r);
 // $p = $r[pass];
 // echo $p;


	//get values from form in index.php
	// $r = $_POST;
	// $username = $r['username'];
	// $password = $r['password'];
	// echo $username, $password;

	//to prevent mysqli injection
	// $username = stripcslashes($username);
	// $password = stripcslashes($password);
	// $username = mysql_real_escape_string($username);
	// $password = mysql_real_escape_string($password);

	//connect to server and select database
	// mysqli_connect('localhost','root','','login');
	// $id = 1;
	// //query db for user
	// $results = mysqli_query("SELECT * FROM users WHERE id = '$id");
	// $row = mysqli_fetch_row($results);


	// 	$query = "INSERT INTO info (name, address) VALUES ('$name' , '$address')";
	// 	mysqli_query($db, $query);
	// print_r($row)

	// if ($row['username'] == $username && $row['password'] == $password) {
	// 	echo "Login Success Welcome".$row['username'];
	// } else {
	// 	echo "Faild to login";
	// }
?>