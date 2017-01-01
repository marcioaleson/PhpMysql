<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com Datas em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
      echo "Today is ". date("Y/m/d")."<br>";
      echo "Today is ". date("Y.m.d")."<br>";
      echo "Today is ".date("Y-m-d")."<br>";
      echo "Todays is ".date("l");
?>
<br>
&copy; 2017- <?php echo date("Y"); ?>
<br>
<?php
echo "The time is ".date("h:i:sa");
echo "<br>";
date_default_timezone_set("America/New_York");
echo "The time is ".date("h:i:sa");
echo "<br>";
$d = mktime(10,00,00,01,01,17);
echo "Create date is ".date("Y-m-d h:i:s a .",$d);
echo "<br>";
$d = strtotime("10:00pm January 01 2017");
echo "Created date is ".date("Y-m-d h:i:s a.",$d);
echo "<br>";
$d = strtotime("tomorrow");
echo date("Y-m-d h:i:s a.",$d);
echo "<br>";
$d = strtotime("next Saturday");
echo date("Y-m-d h:i:s a.",$d);
echo "<br>";
$d = strtotime("+3 Months");
echo date("Y-m-d h:i:s a.",$d);
echo "<br>";
$startdate = strtotime("Sanday");
$enddate = strtotime("+6 weeks",$startdate);
while ($startdate < $enddate) {
  # code...
  echo date("M d", $startdate)."<br>";
  $startdate = strtotime("+1 week",$startdate);
}
$d1 = strtotime("September 07");
$d2 = ceil(($d1-time())/60/60/24);
echo "There are ".$d2."days until 7th of Setember.";
 ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
