<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com Loops em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      //Variáveis
      $i = 1;
      $colors = array("red", "green", "blue", "yellow");

      //while
      while ($i <= 10) {
        # code...
        echo "The number is $i </br> ";
        $i++;
      }

      //do...while
      do {
        # code...
        echo "The number is $i </br>";
        $i++;
      } while ($i <= 10);

      //far

      for ($i=0; $i < 10; $i++) {
        # code...
        echo "The number is $i </br>";
      }

      //foreach

      foreach ($colors as $value) {
        # code...
        echo "Color: $value. </br>";
      }

?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
