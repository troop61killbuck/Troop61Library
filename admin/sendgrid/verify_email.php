<?php

include_once('credentials.php');

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"personalizations\":[{\"to\":[{\"email\":\"$email\",\"name\":\"$name[0] $name[1]\"}],\"dynamic_template_data\":{\"url\":\"troop61library.ml/admin/verifyemail/index.php?verificationCode=$code&email=$email&id=$id\"},\"subject\":\"Please Verify Your Email - Troop 61 Library Administration\"}],\"from\":{\"email\":\"$send_email\",\"name\":\"Troop 61 Library\"},\"reply_to\":{\"email\":\"$send_email\",\"name\":\"Troop 61 Library\"},\"template_id\":\"d-4034cba9971e471b9a374a86c090215b\"}",
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