<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com formulários em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <!--Formulário -->
  <form class="" action="welcome.php" method="post">
    Nome: <input type="text" name="name" value="Nome">
    E-mail: <input type="text" name="email" value="E-mail">
    <input value="Iniciar" type="submit">
  </form>
  <br>
  <p>Form com $_GET</p>
  <br>
  <form class="" action="welcome.php" method="get">
    Nome: <input type="text" name="name" value="Nome">
    E-mail: <input type="text" name="email" value="E-mail">
    <input value="Iniciar" type="submit">
  </form>
  <?php
     //Variáveis

  ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
