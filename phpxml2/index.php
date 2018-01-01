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
       $xml = simplexml_load_file("note.xml") or die("Error: Connot create object");
       echo $xml->to . "<br>";
       echo $xml->from . "<br>";
       echo $xml->heading . "<br>";
       echo $xml->body;
          ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
