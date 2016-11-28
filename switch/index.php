<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com Switch em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      //Variáveis
      $favcolor = "red";

      //Switch

      switch ($favcolor) {
        case "red":
          # code...
          echo "Your favorite color is red!";
          break;
        case "blue":
          # code...
          echo "Your favorite color is blue!";
          break;
        case "green":
          # code...
          echo "Your favorite color is green!";
          break;
        default:
          # code...
          echo "Your favorite color is neither red, blue, nor green!";
          break;
      }



?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
