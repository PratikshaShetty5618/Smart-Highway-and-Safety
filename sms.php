<?php
print_r($_POST);
$flag=$_POST;
print_r($flag);
//$temp=$flag['id'];
$temp=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMS SEND</title>
</head>
<body>
    <?php if($temp==1){ 
    
    $number=9922716338;
    $message="You are nearer to the toll plaza."; 
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
  echo "<script>console.log($response);</script>";
}
} 




    
    
    ?>
</body>
</html>