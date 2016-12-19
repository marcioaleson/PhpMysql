<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com formulários em PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <!--Formulário -->
  <h2>PHP Form Validation Example</h2>
  <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  Nome: <input type="text" name="name" value=""><br>
  E-mail: <input type="text" name="email" value=""><br>
  Website: <input type="text" name="website" value=""><br>
  Comment: <textarea name="comment" rows="8" cols="80"></textarea><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" name="submit" value="Iniciar">
  </form>
  <?php
  //Varible
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $website = test_input($_POST['website']);
    $comment = test_input($_POST['comment']);
    $gender = test_input($_POST['gender']);
  }

  function test_input($data)
  {
    # code...
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
     echo "<h2>Your Input:</h2>";
     echo $name; echo "<br>";
     echo $email;echo "<br>";
     echo $website; echo "<br>";
     echo $comment; echo "<br>";
     echo $gender;
  ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
