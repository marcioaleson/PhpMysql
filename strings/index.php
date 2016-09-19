<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Tipo Strings em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php

           //Função strlen que retorna a quantidade de caracteres de uma string.
           echo strlen("Hello World!");
           echo "<br/>";
           //Função para contar a quantidade de palavras de uma string.
           echo str_word_count("Hello World!");
           echo "<br/>";
           //Função para reverter uma string.
           echo strrev("Hello World!");
           echo "<br/>";
           //Pesquisar por uma substring específica.
           echo strpos("Hello World!","World");
           echo "<br/>";
           //Função para substituir uma substring em uma string.
           echo str_replace("World","Dolly","Hello World!");
           echo "<br/>";
           echo "<a href='http://www.w3schools.com/php/php_ref_string.asp' >Mais sobre funções para manipular strings em PHP Clique aqui!</a>";


       ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
