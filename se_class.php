<?php

 /// VARAIBLES IN PHP
$name = "muhammad";   // strings
$food = "abdulwadud";
$email = "muhammadabdulwadud28@gamil.com";
// integer
$age = 21;
$users = 2; // int
$quantity = 4;
// float task
$gpa = 4.23;
$price = 5.99; // floating point number
$tax_rate = 5.1;

// boolean
$employed =  true;
$online = false;  // true or false 
$tax_sale = true;

//====================================================================
 
// // integer
// echo"Hello {$name} <br>";
// echo "Your name is {$food} <br>";
// echo "your email is {$email} <br>";

// echo"You are {$age} years old<br>";
// echo" There are {$users} users online <br>";
// echo" you would like to buy {$quantity} items <br>";

// // float
// echo "Yor gpa is: {$gpa} <br>";
// echo "Your pizza is \${$price} <br>";
// echo "The sales tax rate is: {$tax_rate}% <br>";

// // booleans

// echo "online status: {$online} <br>";
// echo "online status: {$employed} <br>";
// echo "online status: {$tax_sale} <br>";
//==============================================================================

$total = null;


echo "you have ordered {$quantity} * {$food}s <br> ";
$total = $quantity * $price;
echo "your total is: \${$total} "
?>