<?php
//Create string 
$string = 'Hello World';
$string2 = "Hello World";

// echo $string . "<br>";
// echo $string2;

$first_name = "Ruwan";
$last_name = "Chamara";

$name1 = "Hi, My name is $first_name $last_name .";
$name2 = 'Hi, My name is ' . $first_name . ' ' . $last_name;

// String Functions
$string = "Hello World";

echo "strlen -" . strlen($string) . "<br>"; //11
echo "trim -" . trim($string) . "<br>";
echo "ltrim -" . ltrim($string) . "<br>";
echo "str_word_count -" . str_word_count($string) . "<br>"; //2
echo "strrev -" . strrev($string) . "<br>"; //dlroW olleH
echo "strtoupper -" . strtoupper($string) . "<br>"; //HELLO WORLD
echo "strtolower -" . strtolower($string) . "<br>"; //hello world
echo "ucfirst -" . ucfirst("hello") . "<br>"; //Hello
echo "lcfirst -" . lcfirst("HELLO") . "<br>"; //hELLO


?>