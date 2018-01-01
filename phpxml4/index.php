<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com XML e PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection">
  </head>
  <body>
    <?php
       $xml = simplexml_load_file("book.xml") or die("Error: Connot create object");
       foreach ($xml->children() as $books) {
         # code...
         echo $books->title . ", ";
         echo $books->author . ", ";
         echo $books->year . ", ";
         echo $books->price . "<br>";
       }
          ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
