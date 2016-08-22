<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Tipos de dados em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      //Variáveis tipo srting.
      $string1 = "Aprendendo PHP!";
      $string2 = "w3schools.com";

      echo $string1;
      echo "<br>";
      echo $string2;
      echo "<br>";
      //Variáveis do tipo integer.
      $x = 1234;
      var_dump($x);
      echo "<br>";
      //Variáveis do tipo float.
      $y = 123.345;
      var_dump($y);
      echo "<br>";
      //Variáveis do tipo boolean.
      $true = true;
      $false = false;
      echo $true, " ", $false;
      echo "<br>";
      //Variáveis do tipo Array.
      $cars = array("Volvo", "BMW", "Toyota");
      var_dump($cars);
      echo "<br>";
      //Variáveis do tipo abject.
      /**
       * Class car.
       */
      class Car
      {

        function car()
        {
          # code...
          $this -> model = "BMW";
        }
      }
      //Criando o objeto.
      $herbie = new Car();
      //Mostrando a propriedade do objeto.
      echo $herbie->model;
      echo "<br>";
      //Variável do tipo null.
      $k = "Texto de exemplo para o uso da variável do tipo null.";
      $k = null;
      var_dump($k);
       ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
