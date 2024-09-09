<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="for_loop.php" method="post">

<label for="">Enter a number to count-down from a number to:</label>
  <input type="text" name="Counter">
  <input type="submit" value="start">

</form>
</body>
</html>







<?php
 // for loop = repeat some code a certain # of times

//  for ($i=10; $i>0 ; $i--) { 
// echo $i. "<br>";
//  }
//=====================================
$Counter  = $_POST["Counter"];

for ($i=$Counter; $i>0 ; $i--) { 
 echo $i. "<br>";
}
?>