<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Case sensitivy PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/prefixfree.js"></script>
  </head>
  <body>
      <?php
      $br = "<br />";
      $cor = "vermelho";
          echo "Case sensitivy teste!!!";
          echo $br;
          ECHO "CASE SENSITIVY TESTE!!!";
          echo $br;
          EcHo "CaSe SensiTiVy TeSTe!!!";
          echo $br;
          //Case sensitivy para variáveis
          echo "O meu carro é ".$cor.".";
          echo $br;
          echo "O minha casa é ".$Cor.".";
          echo $br;
          echo "O neu barco é ".$COR.".";
       ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
