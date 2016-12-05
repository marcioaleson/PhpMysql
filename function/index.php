<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com funções em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      function mensagem() {
          echo "Olá programador!";
      }

      function familia($fnome) {
          echo "$fnome.<br>";
      }

      function familia2($fnome, $ano) {
          echo "$fnome, Nacido em $ano.<br>";
      }

      function setAltura($altura = 50) {
          echo "A altura é: $altura.<br>";
      }

      function soma($x, $y) {
          $z = $x + $y;
          return $z;
      }

      mensagem();
      echo "</br>";
      familia("Jani");
      familia("Hege");
      echo "</br>";
      familia2("Jani","1999");
      familia2("Hege","1999");
      echo "</br>";
      setAltura(350);
      setAltura(); //Irá usar o valor padrão 50.
      echo "</br>";
      echo "5 + 10 = " . soma(5, 10) . "<br>";
      echo "7 + 13 = " . soma(7, 13) . "<br>";


?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
