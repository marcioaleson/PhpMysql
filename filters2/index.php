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
  /* variable to check */
  $int = 122;
  /* min value */
  $min = 1;
  /* max value */
  $max = 200;
  // Variable to check
  $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
  //Variable to check
  $url = "http://www.w3schools.com";
  // Variable to check
  $str = "<h1>Hello WorldÆØÅ!</h1>";

  if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max)))=== false) {
    # code...
    echo "Variable value is not within the legal range!<br>";
  } else {
    # code...
    echo "Variable value is within the legal range!<br>";
  }

  //Validate ip as IPv6
  if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    # code...
    echo "$ip is a valid IPv6 address!<br>";
  } else {
    # code...
    echo "$ip is not a valid IPv6 address!<br>";
  }
  //Validate url
  if (!filter_var($url, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED) === false) {
    # code...
    echo "$url is a valid URL!<br>";
  } else {
    # code...
    echo "$url is not valid URL!<br>";
  }

  // Remove HTML tags and all characters with ASCII value > 127
  $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  echo $newstr.".<br>";
   ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
