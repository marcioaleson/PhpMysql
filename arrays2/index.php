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
      $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
      );
      echo $cars[0][0]."In stock: ".$cars[0][1].", sold: ".$cars[0][2]."<br>";
      echo $cars[1][0]."In stock: ".$cars[1][1].", sold: ".$cars[1][2]."<br>";
      echo $cars[2][0]."In stock: ".$cars[2][1].", sold: ".$cars[2][2]."<br>";
      echo $cars[3][0]."In stock: ".$cars[3][1].", sold: ".$cars[3][2]."<br>";

      for ($i=0; $i < 4 ; $i++) {
        # code...
        echo "<p><b>Row number $i</b></p>";
        echo "<ul>";
            for ($j=0; $j <3 ; $j++) {
              # code...
              echo "<li>".$cars[$i][$j]."</li>";
            }
            echo "</ul>";
      }



?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
