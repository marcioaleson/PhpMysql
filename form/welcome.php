<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome PHP!</title>
  </head>
  <body>
    Welcome <?php  echo $_POST['name']; ?><br>
    Your e-mail address is: <?php echo $_POST['email']; ?>
    <br>
    Welcome <?php  echo $_GET['name']; ?><br>
    Your e-mail address is: <?php echo $_GET['email']; ?>
  </body>
</html>
