<?php
require 'classes/DB.php';
require 'models/Info.php';
require 'controllers/InfoController.php';

// initialize controller object
$infoController = new InfoController();

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

  <table class="table">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Address</th>
    </tr>
    <?php
    // loop through records
    foreach ($infoController->getAll() as $key => $value) {
      ?>
      <tr>
        <td>
          <?php echo $value['id']; ?>
        </td>
        <td>
          <?php echo $value['name']; ?>
        </td>
        <td>
          <?php echo $value['address']; ?>
        </td>
      </tr>
      <?php
    }

    ?>

  </table>

<div class="container">
  
  <form method="post" action="Functions/AddRecord.php" >

    <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control"name="name" placeholder="" value="" >
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control"name="address" placeholder=""
        value="" >
      </div>
      <div class="input-group">
     
      <button type="submit" name="save" class="btn btn-dark" >Submit</button>
    
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
