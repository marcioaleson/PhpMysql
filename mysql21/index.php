<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com o MySQL em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection">
  </head>
  <body>
    <?php
    $servername = "localhost:3303";
    $username = "root";
    $password = "";
    $dbname = "test";

    try{
      $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
      //Set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTB_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //sql to delete a record
      $sql = "DELETE FROM MyGuests WHERE id=3";

      //use exec() becauseno results are returned
      $conn->exec($sql)
    }catch(PDOException $e){
      echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
          ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
