<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com Include e Require em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="menu">
      <?php include 'menu.php'; ?>
    </div>
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text...</p>
  <?php
  include 'vars.php';
  echo "I have a $color $car.";
  include 'footer.php';
   ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
