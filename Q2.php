<?php

// Answer Question 2

$digit = 8;
 $value =match($digit)
 {
     0 => 'Zero',
     1 => 'One',
     2 => 'Two',
     3 => 'Three',
     4 => 'Four',
     5 => 'Five',
     6 => 'Six',
     7 => 'Seven',
     8 => 'Eight',
     9 => 'Nine',
     default => 'Enter Number In Range 0:9',
 };

 echo "$value <br>";

// فى حاله انى عايزة اطبع الرقم وبعده كتابته بالانجليزى ممكن اكتب الكود كده 
// echo  "digit = $digit : $value" ;   

// 
// switch ($digit) {
//     case '0':
//         $value ="Zero";
//         break;
//     case '1':
//         $value = "One";
//         break;
//     case '2':
//         $value = "Two";
//         break;
//     case '3':
//         $value = "Three";
//         break;
//     case '4':
//         $value = "Four";
//         break;
//     case '5':
//         $value = "Five";
//         break;
//     case '6':
//         $value = "Six";
//         break;
//     case '7':
//         $value = "Seven";
//         break;
//     case '8':
//         $value = "Eight";
//         break;
//     case '9':
//         $value = "Nine";
//         break;
        


//     default:

//        $value ="Enter Number In Range 0:9";
// }
// echo $value;




?>