<?php
//Start the session
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operações com session em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
  //Set session variable
  $_SESSION["favcolor"] = "green";
  $_SESSION["favanimal"] = "cat";
  echo "Session variables are set.";
   ?>
   <br>
   <a href="index.php">Home</a>
   <!-- JQuery -->
   <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
