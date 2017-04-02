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

    try {
      $conn = new PDO("mysql:host=$servername; dbname=$dbname", $uesrname, $password);
      //Set the PDO error mode to exception
      $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('john', 'Doe', 'john@example.com')";
      //Use exec() because no results are returned
      $conn -> exec($sql);
      $last_id = $conn -> lastInserted();
      echo "New record created successfully. Last inserted ID is: ".$last_id;
    } catch (Exception $e) {
      echo $sql . "<br>" . $e -> getMessage();
    }

    $conn = null;

?>
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
