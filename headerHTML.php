<!DOCTYPE html>
<html lang="en">
  <head>
    <title>VamosElectronics</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />    
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="text-center navDiv">
        <h1><a id="navA" class="text-white" href="index.html">VamosElectronics</a></h1>
        
      </div>
      <?php 
      // header("Content-type: text/javascript");
      $location = basename($_SERVER['PHP_SELF']);
      if(($location == "productsHTML.php"||$location == "addProductHTML.php" ) && isset($_COOKIE["username"])) {
      ?>
        <div class="pull-right">
        <form type="post" action = "logout.php">
          <h1><button type="submit" class="btn btn-danger text-white">Logout</button></h1>    
        </form>    
        </div>        
      <?php } ?>
    </nav>