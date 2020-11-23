<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>sign up</title>
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
    } elseif ($_GET['edit'] == 5) {
      echo '<div  class="alert alert-warning" >User Added. Login to Continue</div>';
    }  


    
  }
  ?>

	  <div id="frm" class="container" style="padding: 50px;">
    <h1 class="display-1 "> SIGN UP <a href="index.php" class="display-4">or login</a></h1>
  
    <form action="Functions/AddUser.php" method="POST">
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
        <input class="btn btn-dark" type="submit" id="btn" value="Sign Up">
      </p>
    </div>
    </form>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>