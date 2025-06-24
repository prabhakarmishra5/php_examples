<?php
// Change this to your page URL
$url = 'http://wwww.your-site-name.domain';

// Initiate cURL request
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Assign value and parameters
$data = "param1=value1&param2=value2";

// Initiate sending data to form
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// Execute cURL request
$result = curl_exec($curl);

//Close cURL request
curl_close($curl);
?>
