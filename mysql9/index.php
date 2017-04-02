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
   $conn = new mysqli($servername, $username, $password, $dbname);
   //Check connection
   if ($conn -> connect_error) {
     # code...
     die("Connection failed: " . $conn -> connection_error);
   }

   $sql = "ISERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

   if ($conn -> query($sql) === TRUE) {
     # code...
     $last_id = $conn -> insert_id;
     echo "New record created successfully. Last inserted ID is: ".$last_id;
   }else {
     # code...
     echo "Error: ".$sql."<br>".$conn->error;
   }
?>
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
