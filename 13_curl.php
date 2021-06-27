<?php 

$url = 'https://jsonplaceholder.typicode.com/users';

// Sample curl API request
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);

$userJson = curl_exec($resource);

echo $userJson;
curl_close($resource);

?>