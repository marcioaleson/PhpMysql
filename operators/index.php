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
      $str1 = "Esse é ";
      $str2 = "um teste!";
      $array1 = array('a' => "Red",'b' => "Green" );
      $array2 = array('c' => "Blue",'e' => "Yellow" );
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
      echo "Operações de atribuição logicas</br>";
      echo "A atribuição dupla de".$x."==".$y."=".($x==$y);
      echo "</br>";
      echo "A atribuição tripla de".$x."===".$y."=".($x===$y);
      echo "</br>";
      echo "A atribuição maior que de".$x.">".$y."=".($x>$y);
      echo "</br>";
      echo "A atribuição maior ou igual que de".$x.">=".$y."=".($x>=$y);
      echo "</br>";
      echo "A atribuição menor que de".$x."<".$y."=".($x<$y);
      echo "</br>";
      echo "A atribuição menor ou igual que de".$x."<=".$y."=".($x<=$y);
      echo "</br>";
      echo "A atribuição deferente que de".$x."<>".$y."=".($x<>$y);
      echo "</br>";
      echo "A atribuição deferente que de".$x."!=".$y."=".($x!=$y);
      echo "</br>";
      echo "A atribuição deferente que de".$x."!==".$y."=".($x!==$y);
      echo "</br>";
      echo "Operadores de autoincremente</br>";
      echo "A  autoincremente prefixado que de ++".$x."=".(++$x);
      echo "</br>";
      echo "A  autoincremente posfixado que de ".$x."++=".($x++);
      echo "</br>";
      echo "A  decremento prefixado que de --".$x."=".(--$x);
      echo "</br>";
      echo "A  decremente posfixado que de ".$x."--=".(--$x);
      echo "</br>";
      echo "Operações Logicas</br>";
      echo "A  operação and de ".$x."and".$y."=".($x and $y);
      echo "</br>";
      echo "A  operação or de ".$x."or".$y."=".($x or $y);
      echo "</br>";
      echo "A  operação xor de ".$x."xor".$y."=".($x xor $y);
      echo "</br>";
      echo "A  operação && de ".$x."&&".$y."=".($x && $y);
      echo "</br>";
      echo "A  operação || de ".$x."||".$y."=".($x || $y);
      echo "</br>";
      echo "A  operação ! de "."!".$y."=".(! $y);
      echo "</br>";
      echo "Operação de concatenação de Strings</br>";
      echo "A concatenação de ".$str1.".".$str2." é ".($str1.$str2);
      echo "</br>";
      echo "A concatenação de ".$str1.".=".$str2." é ".($str1.=$str2);
      echo "</br>";
      echo "Operações com Arrays</br>";
      echo "A operação de união de ";print_r($array1+$array2);
      echo "</br>";
      echo "A operação de igualdade de";var_dump($array1==$array2);
      echo "</br>";
      echo "A operação de identidade de";var_dump($array1===$array2);
      echo "</br>";
      echo "A operação de inegualdade de";var_dump($array1!=$array2);
      echo "</br>";
      echo "A operação de inegualdade de";var_dump($array1<>$array2);
      echo "</br>";
      echo "A operação de diferença de";var_dump($array1!==$array2);
      echo "</br>";

?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
