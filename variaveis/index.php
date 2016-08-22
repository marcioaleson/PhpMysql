<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Variáveis em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/prefixfree.js"></script>
  </head>
  <body>
      <?php
          //Declarando variáveis
          $string = "Algum texto qualquer...";//Variável global.
          $int = 1;//Variável global.
          $float = 10.1;//Variável global.
          $soma;//Variável vazia.
          $br = "<br />";//O uso de tags html.
          echo "Exemplo de output de variáveis $string, $int e". $float.".<br />";
          echo $int + 4;
          //Uso vairáveis globais.
          function meuTeste(){
            $vLocal = "Teste de variável local...";//Variável local da função meuTeste().
            //Uso de uma variável global em uma função vai gerar um erro.
            echo "<p>O uso da variável $int dentro de uma função gerá erro.</p>";
            //Mas o uso de uma variável local da função não gerá erros.
            echo $vLocal;
            //Acessar variáveis globais com a ajude de global.
            global $int, $float, $soma;// Ou $GLOBALS['soma'] ...
             $soma =  $int + $float;
          }
          //Chamando a função meuTeste().
          meuTeste();
          echo "<p>O uso da variável $int fora da função não gerá erros.</p>";
          //Teste do uso de global na função meuTeste().
          echo $soma;
          echo $br;
          function vStatic(){
            static $z = 0;
            echo $z;
            echo $GLOBALS['br'];
            $z++;
          }
          vStatic();
          vStatic();
          vStatic();

       ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
