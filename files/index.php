<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com arquivos em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
  echo "<p>";
  echo readfile("files/webdictionary.txt");
  echo "</p>";
  $myfile = fopen("files/webdictionary.txt","r") or die("Unable to open file!");
  echo "<br>";
  echo "<p>";
  echo fread($myfile,filesize("files/webdictionary.txt"));
  echo "</p>";
  fclose($myfile);
  $myfile = fopen("files/webdictionary.txt", "r") or die("Unable to opne file!");
  echo "<br>";
  echo "<p>";
  echo fgets($myfile);
  echo "</p>";
  fclose($myfile);
  $myfile = fopen("files/webdictionary.txt","r") or die("Unable to opne the file.");
echo "<br>";
echo "<p>";
  while (!feof($myfile)) {
    # code...
    echo fgets($myfile)."<br>";
  }
  echo "</p>";
  fclose($myfile);
  $myfile = fopen("files/newfile.txt", "w") or die("Unable to open the file.");
  $txt = "John Doe\n";
  fwrite($myfile, $txt);
  $txt = "John Doe\n";
  fwrite($myfile, $txt);
  fclose($myfile);
?>
<form class="" action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" value="" id="fileToUpload">
  <input type="submit" name="submit" value="Upload Image">
</form>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
