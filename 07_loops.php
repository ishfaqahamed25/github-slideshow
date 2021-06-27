<?php

// while loop
$count = 1;
while ($count < 20) {
    echo $count . "<br>";

    $count++;
}

// do while loop
$count = 1;
do {
    echo $count . "<br>";

    $count++;
} while ($count < 20);

// for loop
for ($count = 0 ; $count < 10 ; $count++) {
    echo $count . "<br>";
}

 // foreach
 //$colors = ["Black", "White", "Blue", "Red"];
 $person = array(
    'name' => "Kamal",
    'age' => 25,
    'height' => 5.6
 );
 
 foreach ($person as $key => $value) {
     echo $key . " - " . $value . "<br>";
}

?>