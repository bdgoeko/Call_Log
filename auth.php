<?php

error_reporting(E_ALL); 
ini_set( 'display_errors','1');
require_once(__DIR__.'/simple_html_dom.php');
$opencnam = 'https://api.opencnam.com/v2/phone/+155555555';
$host = 'obi110'; //hostname or IP
$pagename = 'callhistory.htm';
$item = null;
$pagenum = 0;
$scheme = 'http';
$url = "{$scheme}://{$host}/{$pagename}?{$pagenum}";
$username = "admin";
$password = "admin";

$options = array(
        CURLOPT_URL            => $url,
        CURLOPT_HEADER         => true,    
        CURLOPT_VERBOSE        => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_NOPROXY => '*', // do not use proxy
        CURLOPT_SSL_VERIFYPEER => false,    // for https
        CURLOPT_USERPWD        => $username . ":" . $password,
        CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST
);

$ch = curl_init();

curl_setopt_array( $ch, $options );

try {
  $raw_response  = curl_exec( $ch );

  // validate CURL status
  if(curl_errno($ch))
      throw new Exception(curl_error($ch), 500);

  // validate HTTP status code (user/password credential issues)
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  if ($status_code != 200)
      throw new Exception("Response with Status Code [" . $status_code . "].", 500);

} catch(Exception $ex) {
    if ($ch != null) curl_close($ch);
    throw new Exception($ex);
}

if ($ch != null) curl_close($ch);

echo $raw_response;


