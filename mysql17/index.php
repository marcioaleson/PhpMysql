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
try {
  $conn = new PDO("myslq:host=$servername; dbname=$dbname", $username, $password);
  // Set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Prepare sql bind paremeters
  $stmt = $conn->prepare("INSERTE INTO MyGuests (firstname, lastname, email) VALUES(:fistname, :lastname, :email)");
  $stmt->bindParam('firstname', $firstname);
  $stmt->bindParam('lastname', $lastname);
  $stmt->bindParam('email', $email);

  //Insert a row
  $firstnem = "John";
  $lastname = "Doe";
  $email = "jonh@example.com";
  $stmt->execute();

  //Insert another row
  //Insert a row
  $firstnem = "Mary";
  $lastname = "Doe";
  $email = "mary@example.com";
  $stmt->execute();

  echo "New records created successfully";
} catch (Execption $e) {
  echo "Error: ".$e->getMessage();
}

        ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
