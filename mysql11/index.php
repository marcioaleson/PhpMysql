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
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //Check connection
    if (!$conn) {
      # code...
      die("Connection failed: ".mysqli_connect_error());
    }

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@examle.com')";

    if (mysqli_query($conn, $sql)) {
      # code...
      $last_id = mysqli_insert_id($conn)
      echo "New record created successfully. Last inserted ID is: ".$last_id;
    } else {
      # code...
      echo "Error: ". $sql . "<br>".mysqli_error($conn);
    }

    mysqli_close($conn);

?>
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
