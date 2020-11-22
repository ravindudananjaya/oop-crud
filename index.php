<?php

require 'classes/DB.php';
require 'models/Users.php';

// initialize controller object


?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>PHP Sample</title>
</head>
<body>
     

  <?php
  if(isset($_GET['edit'])){

    if($_GET['edit'] == 0) {
     echo '<div  class="alert alert-warning" >You cant leave Username and Password Empty</div>';
    } elseif ($_GET['edit'] == 1) {
     echo '<div  class="alert alert-warning" >You cant leave Username Empty</div>';
    } elseif ($_GET['edit'] == 2) {
      echo '<div  class="alert alert-warning" >You cant leave Password Empty</div>';
    } elseif ($_GET['edit'] == 3) {
      echo '<div  class="alert alert-warning" >Check Username</div>';
    } elseif ($_GET['edit'] == 4) {
      echo '<div  class="alert alert-warning" >Incorrect Password </div>';
    }


    
  }
  ?>
</div>
 
  <div id="frm" class="container" style="padding: 50px;">
    <h1 class="display-1 "> LOGIN <a href="signup.php" class="display-4">or sign up</a></h1>
  
    <form action="Functions/Login.php" method="POST">
      <div class="form-group">
      <p>
        <label>Username:</label>
        <input class="form-control"  type="text" id="username" name="username">
      </p>
    </div>
     <div class="form-group">
      <p>
        <label>Password:</label>
        <input class="form-control" type="text" id="password" name="password">
      </p>
    </div>
       <div class="form-group">
      <p>
        <input class="btn btn-dark" type="submit" id="btn" value="Login">
      </p>
    </div>
    </form>
  </div>






  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  -->
</body>
</html>
