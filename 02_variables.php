<?php

// Variable Types - loosly typed
/*
    String
    Integer
    Float / Double
    Boolean - true/false - 
    Null
    Array
    Object
    Resource
*/

//Declare Variable
$last_name = "Siripala";
$full_name = "Nimal $last_name"; //string
$full_name2 = 'Kamal ' . $last_name;
$age = 32; //integer
$city = 'Maharagama'; //string
$height = 5.10; //float
$isMarried = true; //Boolean
$address = null; //null

// Print the variables
echo $full_name . "<br>"; //Nimal Siripala
echo $full_name2;
echo $age . "<br>"; //32
echo $city . "<br>"; //Maharagama
echo $height . "<br>"; //5.10
echo $isMarried . "<br>"; //1
echo $address . "<br>"; //

// Print type of the variable
echo gettype($full_name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($city) . "<br>";
echo gettype($height) . "<br>";
echo gettype($isMarried) . "<br>";
echo gettype($address) . "<br>";

// Print the whole variable
var_dump($full_name, $age);

// Constants
define("ANY_NAME", "Sample constant value");

echo ANY_NAME;

?>