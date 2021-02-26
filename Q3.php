<?php
// Answer Question 3
 // Make a loop and put another loop inside it
// in the first loop put the range 5 turns in each loop, print the value of y  in the second loop and replace it *
// first turns 0 - second 0 1 -  third 0 1 2 - so 0 1 2 3 so 0 1 2 3 4

for ($n =0; $n<=5; $n++)
{
    for($y=0; $y < $n; $y++){
        echo " * ";
    }
    echo "<br> <br>";
}

for ($n =5; $n >= 0; $n--)
{
    for($y=0; $y<$n; $y++){
        echo " * ";
    }

    echo "<br> <br>";
    
    
}
?>