<?php

$height = 5;
$age = 25;

// if statement
if ($height > 6) {
 echo "True, Height is greater than 4";
}

// single line
if ($height > 4) echo "yes. it's true";

// if else statement
if ($height > 6) {
 echo "True";
} else {
 echo "False";
}

// Different between == and ===
// $height == 5; //true
// $height === 5; //true

// $height == "5"; //true
// $height === "5"; //false

if ($height === "5") {
 echo "True";
} else {
 echo "False";
}

// if statement with AND , &&
if ($height > 6 AND $age == 25) {
 echo "True";
} else {
 echo "False";
}

// if statement with OR , ||
if ($height > 6 OR $age == 25) {
 echo "True";
} else {
 echo "False";
}

echo $height > 6 ? "True" : "False";

// if (true):

// else:

// endif;

// if ($height > 6) { // greater than 6

// } elseif ($height > 4) { //6,5

// } else { // 5 > (4,3,2,.....) 

// }

// Switch

$user_type = "user1"; // user, editors

switch ($user_type) {
    case "admin":
        echo "Yes, I'm admin";
        break;
    case "user":
        echo "Yes, I'm user";
        break;
    case "editor":
        echo "Yes, I'm editor";
        break;
    default:
        echo "Unknown user type";
}

?>