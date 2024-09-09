<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="post.php" method="post">
  <label for="">Usrename:</label><br>
  <input type="text" name="username"><br>
  <label for="">Password:</label><br>
  <input type="password" name="password"><br>
  <input type="submit" value="Log in">
  </form>
</body>
</html> -->

<?php
// echo $_POST["username"] . "<br>";
// echo"{$_POST["password"]} <br>";
?>

<?php 

// $GET, $_POST = Special varaible used to collect data from an HTML form 
//                data is used to the file in the action attribute of <form>
//                <form action="some_file.php" method="get">

// $GET = Data is appended to the url 
//        NOT SECURE
//        char limit ]
//        Bookmark is possible w/ values
//        GET request can be cached
//        Better for a search page


// $_POST = Data is pakaged inside the body of the PHP request
//          MORE SECURE 
//          No data limit 
//         Cannot bookmark 
//         GET request are not cached
//         Better for Submitting Credentials
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="post.php" method="post">
    <label for="">quantity</label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
  </form>
</body>
</html>
<?php
 $item = "pizza";
 $price = 5.99;
  $quantity = $_POST["quantity"];
$total = null;

$total = $quantity  * $price;

  echo " You have ordered {$quantity} * {$item}/s <br>";
echo "Your total is: \${$total}";
?>