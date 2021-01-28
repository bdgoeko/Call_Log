<?php

require_once(__DIR__.'/config.php');
// set API Access Key

// set email address
$phone_number = '15555555555';

// Initialize CURL:
$ch = curl_init('http://apilayer.net/api/validate?access_key='.$numverifykey.'&number='.$phone_number.'&country_code='.'&format=1');  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$validationResult = json_decode($json, true);

// Access and use your preferred validation result objects
$validationResult['valid'];
$validationResult['country_code'];
$validationResult['carrier'];
$validationResult['number']; 
$validationResult['local_format']; 
$validationResult['international_format']; 
$validationResult['country_prefix'];    
$validationResult['country_code'];    
$validationResult['country_name'];
$validationResult['location'];         
$validationResult['line_type'];          

print_r($validationResult);
   // & country_code = default blank
   // & format = 1




