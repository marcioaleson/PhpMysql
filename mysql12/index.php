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

    // Create connection
    $conn == new mysqli($servername, $username, $password, $dbname);
    // Check connnection
    if ($conn->connect_error) {
      # code...
      die("Connection failed: ".$conn->connect_error);
    }

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com');";
    $sql.="INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql.="INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julia', 'Dooley', 'julia@example.com');";

    if ($conn->multi_query($sql) === TRUE) {
      # code...
      echo "New records created successfully";
    } else {
      # code...
      echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
