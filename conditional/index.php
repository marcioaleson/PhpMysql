<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações condicionais em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      //Variáveis
      $t = date("H");

      //If else

      if ($t < "20") {
        # code...
        echo "Have a good day!";
      } else {
        # code...
        echo "Have a god night!";
      }
      echo "</br>";

      //if elseif

      if ($t <"10") {
        # code...
        echo "Have a good morning!";
      }elseif ($t < "20") {
        # code...
        echo "Have a good day!";
      }else {
        # code...
        echo "Have a good night!";
      }


?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
