<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com filters em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection">
  </head>
  <body>
  <?php
  //Variable
  $str = "<h1>Hello World!</h1>";
  $newstr;
  $int = 100;
  $int2 = 0;
  $ip = "127.0.0.1";
  $email = "john.doe@example.com";
  $url = "http://www.w3schools.com";
  $newstr = filter_var($str, FILTER_SANITIZE_STRING);
  echo $str;
  echo "Sanitize string is ".$newstr.".<br>";
  if (!filter_var($int,FILTER_VALIDATE_INT) === false) {
    # code...
    echo "Integer is valid!<br>";
  }else {
    # code...
    echo "Integer is not valid!<br>";
  }

  if (filter_var($int2, FILTER_VALIDATE_INT) === 0 || !filter_var($int2, FILTER_VALIDATE_INT) === false) {
    # code...
    echo "Integer is valid!<br>";
  } else {
    # code...
    echo "Integer is not valid!<br>";
  }

  if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
      echo("$ip is a valid IP address!<br>");
  } else {
      echo("$ip is not a valid IP address!<br>");
  }
  // Remove all illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  // Validate e-mail
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      echo("$email is a valid email address!<br>");
  } else {
      echo("$email is not a valid email address!<br>");
  }
  // Remove all illegal characters from a url
  $url = filter_var($url, FILTER_SANITIZE_URL);

  // Validate url
  if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
      echo("$url is a valid URL!<br>");
  } else {
      echo("$url is not a valid URL!<br>");
  }
   ?>
    <table>
      <tr>
          <td >Filter Name</td>
          <td>Filter ID</td>
      </tr>
  <?php
      foreach (filter_list() as $id => $filter) {
        # code...
        echo "<tr><td>".$filter."</td><td>".filter_id($filter)."</td></tr>";
      }
  ?>
</table>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
