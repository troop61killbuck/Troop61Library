<?php

include_once('credentials.php');

//Temporary
$email = "jackveney03@gmail.com";
$fname = "jack2";
$lname = "veney2";
//End Temporary

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sendgrid.com/v3/marketing/contacts",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "{\"list_ids\":[\"\"],\"contacts\":[{\"email\":\"$email\",\"first_name\":\"$fname\",\"last_name\":\"$lname\",\"custom_fields\":{}}]}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer $apiKey",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

echo "<br><br><br>";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sendgrid.com/v3/marketing/contacts/search",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"query\":\"email LIKE '$email'\"}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer $apiKey",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;

echo "<br><br><br>";

$json = json_decode($response, true);
echo $json['result'][0]['id'];
}