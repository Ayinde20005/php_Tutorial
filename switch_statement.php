wdd<?php

   // Switch = replacement to using many elself statements
   //         more efficient ,  less code to write

   $grade = "A";

   switch ($grade) {
    case "A":
      echo " You did Great";
      break;
    case "B":
      echo " You did Good";
      break;
    case "c":
      echo " You did Okay";
      break;
    case "D":
      echo " You did Poorly";
      break;
    case "F":
      echo " You Failed";
      break;
    default:
      echo " {$grade} is not valid ";
      break;
   }


  //  OR


//    if ($grade == "A") {
//     echo " You did great";
//    }
//    elseif($grade == "B"){
//     echo " You did good";
//    }
//    elseif($grade == "C"){
//     echo " You did okay";
//    }
// elseif($grade == "D"){
//   echo " You did poorly";
// }
// elseif($grade == "F"){
//   echo "You failed";
// }
// else{
//   echo " {$grade} is not a valid grade";
// }

//  EXAMPLE TO CHECK CURRENT DATE

$date = date("1");

// $date = "Pizza";

switch ($date) {
  case 'Monday':
    echo "I hate Mondays!";
    break;
  case 'Tuesday':
    echo "It is Taco Tuesday!";
    break;
  case 'Wednesday':
    echo "The work week is half over! ";
    break;
  case 'Thursday':
    echo "It's almost the weekend! ";
    break;
  case 'Friday':
    echo "The weekend is here! ";
    break;
  case 'Saturday':
    echo "Time to party! ";
    break;
  case 'Sunday':
    echo "Time to relax!";
    break;

  
  default:
    echo " {$date} is not a day!";
    break;
}
?>