<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Display em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      //Variáveis
      $string1 = "Aprendendo PHP!";
      $string2 = "w3schools.com";
      $x = 2;
      $y = 4;
      //Usando tags html com echo.
          echo "<h2>PHP</h2>";
          print "Hello world!<br>";
          print "Eu estou estudando PHP!<br>";
          echo "Olha ","como", "usar", "multiplos parmetros";
          echo "<h2>".$string1."</h2>";
          echo "Estudar  PHP pelo ".$string2."<br>";
          echo "Soma de ",$x," mais ",$y," é igual a ",$x + $y,".";
       ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
