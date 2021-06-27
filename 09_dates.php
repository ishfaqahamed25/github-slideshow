<?php
// change the timezone
date_default_timezone_set('Asia/Colombo');

// Print current date and time
echo date("Y-m-d H:i:s") . "<br>";

// Print yesterday
//echo date("Y-m-d H:i:s", strtotime("-1 day"));

echo date("F j Y, H:i:s") . "<br>";

?>