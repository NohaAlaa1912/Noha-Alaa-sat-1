<?php


$x = 3 ; $y=$x++;
$y+= ++$x;

/*  when $x =3 ==> y=3 because  $x++ return value of x then increment x by 1 
and change value x became 4 

------------------------------------

when y =3 , x = 4 
$y+= ++$x  ==> $y = $y + $x + 1
so new value of y = 8
*/ 


if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
 }
//This condition will not be fulfilled
//  The value of x will not be printed because the value of $y != 7

else if ($y == 8){
 	$x--;
 	echo $x ."<br>";
	}

/*
This condition will be fulfilled  and printed value of x = 4
because when the value of $x is 4 the value of $y will be equal to 8 
*/

else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
//This condition will not be fulfilled
//  The value of x will not be printed because the value of $y != 9

else { 
	$x= 0;
	echo $x ."<br>"; }

 
?>