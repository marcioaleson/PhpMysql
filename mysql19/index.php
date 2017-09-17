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
    if($conn -> connect_error){
      die("Connection failed: ".$conn->connect_error);
    }

    //sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if($conn->query($sql) == TRUE){
      echo "Record deleted successfully";;
    }else{
      echo "Error deleting record: ".$conn->error;
    }
    $conn->close();
          ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
