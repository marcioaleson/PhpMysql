<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com erros em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection">
  </head>
  <body>
  <?php
    $file=fopen("welcome.txt","r");

    if(!file_exists("welcome.txt")) {
    die("File not found");
  } else {
    $file=fopen("welcome.txt","r");
  }

  $test=2;
  if ($test>=1) {
    trigger_error("Value must be 1 or below");
  }

  //error handler function
  function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script";
    die();
}
/*
  //set error handler
  set_error_handler("customError",E_USER_WARNING);
  //trigger handler
  if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
  }

  //error handler function
  function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Webmaster has been notified";
    error_log("Error: [$errno] $errstr",1,
    "someone@example.com","From: webmaster@example.com");
  }

  //set error handler
  set_error_handler("customError",E_USER_WARNING);

  //trigger error
  if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
  }
*/
   ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
