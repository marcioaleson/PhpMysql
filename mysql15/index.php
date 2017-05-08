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
    // Create connection with PDO
    $conn == new PDO("mysql:host=$servername;dbname=$dbname" $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Begin the transaction
    $conn->beginTrasaction();
    // Our SQL statements
    $conn ->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com');");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com');");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julia', 'Dooley', 'julia@example.com');");

    // Commit the transaction
    $conn->commit();
    echo "New records created successfully";
  }
    catch(PDOException $e){
        // Roll back the transaction if something failed
        $conn->rollback();
        echo "Error: ".$e->getMessage();
    }
    $conn = null;
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
