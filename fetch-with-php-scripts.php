<?php

// API endpoint
$apiEndpoint = "https://apis.quaapay/v1/banks";

// Data to send
$data = array(
    "country" => "us"
);

// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt($curl, CURLOPT_URL, $apiEndpoint);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: YourProductKeyHere' // Add your Product Key here
));

// Execute cURL session and get response
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);

// Output the response
echo $response;
?>
