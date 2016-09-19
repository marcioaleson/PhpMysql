<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Tipo Constantes em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      //Declanrando uma constante em PHP.
      define("GREETING","Welcome to w3schools.com");
      echo GREETING;
      echo "<br/>";
      //Declarando uma constante case-insensitive.
      define("WELCOME","Welcome to w3shools.com");
      echo welcome;
      echo "<br/>";
      echo WELCOME;
      //Constantes em PHP são globais.
      define("HELLO","Hello to w3schools.com");

      function meuTeste(){
        echo HELLO;
      }
      echo "<br/>";
      meuTeste();
       ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
