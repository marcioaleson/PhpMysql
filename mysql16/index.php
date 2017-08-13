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
    //Example with MySQLi
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if($conn -> connect_error){
      die("Connection failed: " . $conn -> connect_error);
    }

    //Prepare and bind
    $stmt = $conn -> prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    //Set parameters and execute

    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    $firstname = "Mary";
    $lastname = "Doe";
    $email = "mary@example.com";
    $stmt->execute();

    echo "New records created successfylly";

    $stmt->close();
    $conn->close();
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
