<?php
  /// Logical Operator = combine conditional statements 
  // if (condition1 && condition2)

    // && = True if both condition are true
    // || = True if at least one condition is true
    // ! = True if false ,  False if True

// $temp = 15;
// $cloudy = true;

// if ($temp < 0 || $temp > 30) {
//   echo "The weather is bad.<br>";

// }
// else {
//   echo " The wether is good.<br>";
// }

// if (!$cloudy ) {
//   echo " It's cloudy";
// }
// else{
//   echo " It's Sunny";
// }


//========ELECTION EXAMPLE

// $age = 18;
// $citizen = true;

// if (!$age >= 18 && $citizen) {
// echo " You can vote";
// }
// else{
//   echo " You can't vote";
// }

// EXAMPLE

$child  = true;
$senior = false;
$ticket = null;

if ($child || $senior) {
  $ticket = 10;

}
else {
  $ticket = 15;
}
echo " The ticket price is \${$ticket}";
?>