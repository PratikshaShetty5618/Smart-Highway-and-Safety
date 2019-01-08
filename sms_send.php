<?php

if(isset($_POST['submit']))
{
    $number = $_POST['number'];
    $message = $_POST['message'];

    
    $fields = array(
    "sender_id" => "FSTSMS",
    "message" => "$message",
    "language" => "english",
    "route" => "p",
    "numbers" => "$number",
    "flash" => "0"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 500,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: Xn4BP6YkCtab0iTuSgH8WEzJONveKUpIhwARlDx3MZroqFcmVQcD8kBNCzfen2FPpIlsHtZKmJ47X9gi",
    "accept: */*",
    "cache-control: no-cache",
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
}

?>

