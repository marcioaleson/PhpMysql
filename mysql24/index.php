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
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      //Set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE MyGuest SET lastname = 'Doe' WHERE id = 2";

      //Prepare statement
      $stmt = $conn->prepare($sql);

    // Execute the query
    $stmt->execute();

    //Echo a message to say the UPDATE succeeded
    echo $stmt->rowCOunt()."records UPDATED successfully";
  } catch (PDOException $e) {
      echo $sql."<br>".$e->getMessage();
    }

    $conn = null;

          ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
