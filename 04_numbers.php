<?php

// Create numbers
$x = 13;
$y = 5;
$z = 5.3;

// Arithmetic operations

echo $x + $y . "<br>"; // 13 + 5 = 18
echo $x - $y . "<br>"; // 8
echo $x * $y . "<br>"; // 65
echo $x / $y . "<br>"; // 2.6
echo $x % $y . "<br>"; // 3

// Assignment with math operators

// $x += $y; echo $x . "<br>"; // $x + $y
// $x -= $y; echo $x . "<br>"; // $x - $y
// $x *= $y; echo $x . "<br>"; // $x * $y
// $x /= $y; echo $x . "<br>"; // $x / $y
// $x %= $y; echo $x . "<br>"; // $x % $y

// Increment operator

echo $x++;
echo ++$x;

// Decrement operator

echo $x--;
echo --$x;

// Number checking functions
is_float(5.3); // true
is_integer(5.3); // false
is_numeric("5.3"); // true

// Number functions
echo "abs -" . abs(-8) . "<br>"; // 8
echo "pow -" . pow(2, 4) . "<br>"; //16 
echo "sqrt -" . sqrt(25) . "<br>"; // 4
echo "max -" . max(5,8,13,2) . "<br>"; // 13
echo "min -" . min(5,8,13,2) . "<br>"; // 2
echo "round 5.8 -" . round(5.8) . "<br>"; // 6
echo "round 5.3 -" . round(5.3) . "<br>"; // 5
echo "floor 5.8 -" . floor(5.8) . "<br>"; // 5
echo "ceil 5.8 -" . ceil(5.8) . "<br>"; // 6

?>