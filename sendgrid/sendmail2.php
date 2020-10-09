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
  CURLOPT_POSTFIELDS => "{\"personalizations\":[{\"to\":[{\"email\":\"jackveney03@gmail.com\",\"name\":\"Jack Veney\"}],\"dynamic_template_data\":{\"url\":\"troop61library.ml\"},\"subject\":\"Testing 1,2,3\"}],\"from\":{\"email\":\"troop61woosterlibrary@gmail.com\",\"name\":\"Troop 61 Library\"},\"reply_to\":{\"email\":\"troop61woosterlibrary@gmail.com\",\"name\":\"Troop 61 Library\"},\"template_id\":\"d-4034cba9971e471b9a374a86c090215b\"}",
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