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
    $conn = mysqli_connect($servername,$username,$password,$bdname);
    //Check connection
    if (!$conn) {
      # code...
      die("Connection failed: " . mysqli_connect_error());
    }
    //Sql to create table
    $sql = "CREATE TABLE MyGuests (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      firstname VARCHAR(30) NOT NULL,
      lastname VARCHAR(30) NOT NULL,
      email VARCHAR(50),
      reg_date TIMESTAMP
      )";

     if (mysql_query($conn, $sql) {
       # code...
       echo "Table Created successfully!";
     } else {
       # code...
       echo "Error creating table: " . mysqli_error($conn);
     }

     mysql_close($conn);
?>
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
