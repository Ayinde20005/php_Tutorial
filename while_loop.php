<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="while_loop.php">
    <input type="submit" name="stop" value="stop">
  </form>
</body>
</html>




<?php
   // While loop = do code infinitely while some condition remain true
 
   $sec = 0;
   $run = true;

   while($run){

    if (isset($_POST["stop"])) {
      $run = false;
    }
    else{
// wait 1 seconds
    $sec ++;
    echo $sec . "<br>";
    }

    
   }

?>