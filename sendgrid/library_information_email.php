<?php

require_once('includes/sendgrid_credentials.php');


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"personalizations\":[{\"to\":[{\"email\":\"$email\",\"name\":\"$name\"}],\"dynamic_template_data\":{\"libraryName\":\"$lib_name\",\"libraryDescription\":\"$lib_description\",\"libraryEmail\":\"$lib_email\"},\"subject\":\"Please Verify Your Email - Troop 61 Library Administration\"}],\"from\":{\"email\":\"$send_email\",\"name\":\"Troop 61 Library\"},\"reply_to\":{\"email\":\"$send_email\",\"name\":\"Troop 61 Library\"},\"template_id\":\"d-b479320b340a4b2eaa43c975f7e4180c\"}",
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
print($code);