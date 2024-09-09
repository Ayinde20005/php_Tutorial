<?php 
// Associative Array = An array made of Key "=>" value pairs

// countries => capitals
// id => username 
// item => price

// $capitals = array(
  // "USA"=>  "washington D.C.",
  //  "JAPAN"=> "Kyoto",
  //   "SOUTH-KOREA"=> "Seoul",
  //    "INDIA"=> "New Delhi") ;
     
// $capitals["USA"] = "Las Vegas";    // to change the value to a new one 
// $capitals ["china"] = "Beijing";      // To add a new value to the array
// array_pop($capitals);                   // to remove the last two pair in the array
// array_shift($capitals);                    // to remove the first two pair element
//=======================================================================
////  if u need the key only
//  $keys = array_keys($capitals);
// foreach($keys as $key){
// echo "{$key} <br>";
// }
//======================================
// if u need the value only 
// $values = array_values($capitals);

// foreach($values as $values){
//   echo "{$values} <br>";
// }
//================================================ flipping function
//  $capitals = array_flip($capitals);
// foreach( $capitals as $key => $value){
//   echo "{$key} = {$value} <br>";
// }
//==================================================== to reverse the array
//  $capitals = array_reverse($capitals);
//     foreach($capitals as $key => $value){
//       echo "{$key} =  {$value} <br>";
//     }
//============================================== Amount of key value 
// echo count( $capitals);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="associative_array.php" method="post">
<label for="">Enter a Counter</label>
<input type="text" name="country" >
<input type="submit">
  </form>
</body>
</html>

<?php

$capitals = array(
   "USA"=>  "washington D.C.",
    "JAPAN"=> "Kyoto",
     "SOUTH-KOREA"=> "Seoul",
     "INDIA"=> "New Delhi") ;
     
    $capital = $capitals[$_POST["country"]];
     echo " The capital is {$capital}" ;
    
?>
