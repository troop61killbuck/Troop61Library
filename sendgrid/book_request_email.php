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
  CURLOPT_POSTFIELDS => "{\"personalizations\":[{\"to\":[{\"email\":\"$email\",\"name\":\"$name\"}],\"dynamic_template_data\":{\"Name\":\"$name\",\"Book\":\"$book_name\"},\"subject\":\"Book Request - Troop 61 Library\"}],\"from\":{\"email\":\"$send_email\",\"name\":\"Troop 61 Library\"},\"reply_to\":{\"email\":\"$send_email\",\"name\":\"Troop 61 Library\"},\"template_id\":\"d-8b3243bf49bc42ca8b96ff4609e636ef\"}",
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