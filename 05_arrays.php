<?php

// Create array
$employee = ['kamal', 25, 5.6];
$employee2 = array("Nimal", 30, 6.0);

// Print array

print_r($employee);

echo "<pre>";
var_dump($employee);
echo "</pre>";

// Get values by index 
echo $employee[1]; //25

// Set value by index
$employee[0] = "Sunil";

// Check if array has element, ex: 0
var_dump(isset($employee[2]));

// Return number of elements
var_dump(count($employee));

// Add element to the end of array
array_push($employee, "Maharagama");

// Remove element form end of array
array_pop($employee);

$colors = array("Black", "Blue", "Red", "Orange");

$str_colors = implode(",", $colors);
$arr_colors = explode(",", $str_colors);

// Merge arrays
$employee_data = ["No.1, Maharagama", "10220"];

echo "<pre>";
var_dump(array_merge($employee, $employee_data));
echo "</pre>";

/*
Associative Arrays
*/

// Create Associative Array
$employee = array(
    'name' => 'Kamal',
    'age' => 25,
    'height' => 5.6
);

echo "<pre>";
var_dump($employee);
echo "</pre>";

//  Get data form Associative array
echo $employee['age'];

// Set value
$employee['address'] = "Maharagama";

echo "<pre>";
var_dump($employee);
echo "</pre>";

/*
Multidimentional Arrays
*/

$employees = array(
    [
        'name' => 'Kamal',
        'age' => 25,
        'height' => 5.6
    ],
    [
        'name' => 'Nimal',
        'age' => 29,
        'height' => 5.9  
    ],
    [
        'name' => 'Sunil',
        'age' => 35,
        'height' => 6.3
    ]
);

echo "<pre>";
var_dump($employees);
echo "</pre>";


// Get value
echo $employees[1]['age'];


?>