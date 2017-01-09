<?php
  //Variáveis
  $cookie_name = "user";
  $cookie_value = "John Doe";
  setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/"); //86400 = 1 day
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com cookies em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
  if (!isset($_COOKIE[$cookie_name])) {
    # code...
    echo "Cookie named '".$cookie_name."' is not set!";
  } else {
    # code...
    echo "Cookie '".$cookie_name."' is set!<br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
  }
  echo "<br>";
  if (count($_COOKIE) > 0) {
    # code...
    echo "Cookies are enable!";
  } else {
    # code...
    echo "Cookies are disabled.";
  }


   ?>
   <p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
