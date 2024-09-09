<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="mathrealted.php" method="post">
  <label for="">x:</label>
  <input type="text" name="x"> 
  <label for="">y:</label>
  <input type="text" name="y"> 
  <label for="">z:</label>
  <input type="text" name="z"> 
  <input type="submit" value="total">
  </form>
</body>
</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

//$total = abs($x);  // this change the (+ve) sign to (-ve) sign
//$total = round($x);  // this round the number
// $total = floor($x);   //   this floor the number by not written the decimal number
// $total = ceil($x);     // this ceil the number even the number of decimal number is not up to 5, if round it up.
// $total = pow($x , $y);
// $total = sqrt($x);
// $total = max($x, $y, $z);  // this give the greatest variable between the three variable 
//$total = min($x, $y, $z);
// $total = pi();
$total = rand(1, 6);
echo $total;
?>