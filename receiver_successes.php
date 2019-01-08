<?php
    require "includes/common.php";
    
$email=$_POST['Email'];
$regex_email="/^[a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email))
{
    echo "Incorrect E-mail";
    header('location:index.php?email_error=Enter correct email');
            
}
$email=mysqli_real_escape_string($con,$email);



     $receiver=$_POST['receiver'];
     $blood_type=$_POST['blood'];
     
     $city=$_POST['city'];
     $mob_no=$_POST['mobile_no'];
     $hospital_name=$_POST['hospital_name'];
     
     
    $user_reg_query="INSERT INTO receiver(Name,blood_group,email,mob_no,city,hosp_name) values('$receiver','$blood_type','$email','$mob_no','$city','$hospital_name')";
    $user_reg_submit= mysqli_query($con,$user_reg_query) or die(mysqli_error($con));
    echo "User successfully inserted";
    
    $user_reg_query1="SELECT mobileno FROM fake WHERE city='$city'";
    $user_reg_submit1= mysqli_query($con,$user_reg_query1) or die(mysqli_error($con));
    echo "successfully Fetched";
    $row= mysqli_fetch_array($user_reg_submit1);
    $contact = $row['mobileno'];
    
    $number=$contact;
    $message=$receiver+""+"needs blood group"+$blood_type+"hospital"+$hospital_name+"contact on "+$mob_no; 
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

   ?>     