<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com arrays em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
    //Array indexado.
    $car = array("Volvo", "BMW", "Toyota");
    //Array associativo
    $people = array('Peter' => 35, 'Ben' => 14, 'Joe' => 37 );

    echo "I like ".$car[0]. ", ".$car[1]." and ".$car[2].".";
    echo "</br>";
    echo "Quantidade de elementos:".count($car);
    echo "</br>";
    for ($i=0; $i < count($car) ; $i++) {
      # code...
      echo "Car: ".$car[$i];
      echo "</br>";
    }

    echo "Peter is ".$people['Peter']." years old.";
    echo "</br>";
    foreach ($people as $key => $value) {
      # code...
      echo "Key=". $key.", Value=".$value;
      echo "</br>";
    }

?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
