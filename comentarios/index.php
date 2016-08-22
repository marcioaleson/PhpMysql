<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Comentários</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/prefixfree.js"></script>
  </head>
  <body>
      <?php
          echo "Exemplo de uso dos comentários:";echo "<br>";
          //Comentário de uma linha.
          #Esse também é um comentário de uma linha.
          /*
          Esse é um comentário de multiplas linhas.
          */
          //Você também pode comentar partes do seu código.
          $x = 5 /* +15 */ + 5;
          echo $x;
       ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
