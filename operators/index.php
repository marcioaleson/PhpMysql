<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Tipo de Operações em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      //Variáveis
      $x = 10;
      $y = 6;
      echo "Operadores Aritiméticos</br>";
      echo "A soma de".$x."+"."$y"."=".($x+$y);
      echo "</br>";
      echo "A subtração de".$x."-".$y."=".($x-$y);
      echo "</br>";
      echo "A multiplicação de".$x."*".$y."=".($x*$y);
      echo "</br>";
      echo "A divisão de".$x."/".$y."=".($x/$y);
      echo "</br>";
      echo "O mode da divisão de".$x."%".$y."=".($x%$y);
      echo "</br>";
      echo "O exponencial de".$x."**".$y."=".($x**$y);
      echo "</br>";
      echo "Operadores de Atribuição</br>";
      echo "A atribuição simples de".$x."=".$y;
      echo "</br>";
      echo "A atribuição soma de".$x."+=".$y."=".($x+=$y);
      echo "</br>";
      echo "A atribuição subtração de".$x."-=".$y."=".($x-=$y);
      echo "</br>";
      echo "A atribuição multiplicação de".$x."*=".$y."=".($x*=$y);
      echo "</br>";
      echo "A atribuição divisão de".$x."/=".$y."=".($x/=$y);
      echo "</br>";
      echo "A atribuição modulo de".$x."%=".$y."=".($x%=$y);
      echo "</br>";
       ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
