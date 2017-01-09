<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com session em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <a href="session.php">Set the sessions values.</a>
  <br>
  <?php
  print_r($_SESSION);
  echo "<br>";
  echo "Favorite color is ".$_SESSION["favcolor"].".<br>";
  echo "Favorite animal is ".$_SESSION["favanimal"].".<br>";
  //remove all session variables
  session_unset();
  // destroy the session
  session_destroy();
  echo "<strong>Sessions:</strong> destroyed and <strong>Variables:</strong> removed.";
   ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
