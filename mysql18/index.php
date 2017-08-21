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
    if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      //Output data of each row
      while($row = $result->fetch_assoc()){
        echo "Id: ".$row["id"]." - Name: ". $row["firstname"]. " ". $row["lastname"]. " <br>";
      }
    }else{
      echo "0 results ...";
    }
    $conn->close();
          ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
