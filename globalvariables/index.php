<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com variáveis globais em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>

      <?php
     //Variáveis
     $x = 5;
     $y = 25;

     function adicao()
     {
       # code...
       $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
     }
     adicao();
     echo $z;
     echo "</br>";
     echo $_SERVER['PHP_SELF'];
     echo "<br>";
     echo $_SERVER['SERVER_NAME'];
     echo "<br>";
     echo $_SERVER['HTTP_HOST'];
     echo "<br>";
     echo $_SERVER['HTTP_REFERER'];
     echo "<br>";
     echo $_SERVER['HTTP_USER_AGENT'];
     echo "<br>";
     echo $_SERVER['SCRIPT_NAME'];
     echo "</br>";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // collect value of input field
         $name = $_REQUEST['fname'];
         if (empty($name)) {
             echo "Name is empty";
         } else {
             echo $name;
         }
     }
    echo "</br>";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // collect value of input field
         $name = $_POST['fname'];
         if (empty($name)) {
             echo "Name is empty";
         } else {
             echo $name;
         }
     }
?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
