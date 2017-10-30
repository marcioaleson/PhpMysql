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
    //Create connection
    $conn  = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$conn) {
      # code...
      die("Connection failed: ".mysqli_connect_error());
    }

    $sql = "UPDATE MyGuest SET lastname = 'Doe' WHERE id = 2";

    if (mysqli_query($conn, $sql)) {
      # code...
      echo "Record updated successfully";
    } else {
      # code...
      echo "Error updatind record: ".mysqli_error($conn);
    }

    mysqli_close($conn);

          ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
