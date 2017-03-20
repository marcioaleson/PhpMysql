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

   try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // Set PDO error mode to exception
     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         // sql to create table
         $sql = "CREATE TABLE MyGuests (
         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         firstname VARCHAR(30) NOT NULL,
         lastname VARCHAR(30) NOT NULL,
         email VARCHAR(50),
         reg_date TIMESTAMP
         )";
   //User exec() because no results are returned
   $conn-> exec($sql);
   echo "Table was created successfully!";
 } catch (PDOException $e) {
     echo $sql . "<br>" . $e -> getMessage();
   }
   $conn = null;
?>
    ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
