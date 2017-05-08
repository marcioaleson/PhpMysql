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

    // Create connection with MySQLi Procedural
    $conn == new mysqli_connect($servername, $username, $password, $dbname);
    // Check connnection
    if (!$conn) {
      # code...
      die("Connection failed: ".mysqli_connect_error());
    }

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com');";
    $sql.="INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql.="INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julia', 'Dooley', 'julia@example.com');";

    if (mysqli_multi_query($conn, $sql)) {
      # code...
      echo "New records created successfully";
    } else {
      # code...
      echo "Error: ".$sql."<br>".mysqli_error($conn);
    }

    mysqli_close($conn);
?>
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
