<?php 

 require 'includes/common.php'; 
//        
//            $email='abc@gmail.com';
//            
//        
//    $user_query="SELECT UserName,Email,Password,Mobile_no,Vehicle_type FROM details WHERE Email=$email ";
//    $user_query_result=mysqli_query($con,$user_query);
//    while($row = mysqli_fetch_array($user_query_result))
//    {
//        echo $row[0];
//    }

//$con=mysqli_connect("localhost","root","","highway");
//// Check connection
//if (mysqli_connect_errno())
//  {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }
  
  $email=mysqli_real_escape_string($con,$_SESSION['email']);
  echo $email;
$sql="SELECT * FROM details WHERE Email='$email' ";

$result=mysqli_query($con,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);
printf ("%s (%s)\n",$row["UserName"],$row["Email"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);

?>