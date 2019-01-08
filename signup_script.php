<?php
    require "includes/common.php";
    

$email=$_POST['email'];
$regex_email="/^[a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email))
{
    echo "Incorrect Password";
    header('location:index.php?email_error=Enter correct email');
            
}
$password=md5($_POST['password']);

$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);

$dup_query="SELECT id FROM details WHERE email=$email";
$dup_query_result=mysqli_query($con,$dup_query);
if(mysqli_num_rows($dup_query_result)>0)
{
    echo"E-mail id already exists";
}
 else 
{
     $name=$_POST['username'];
     $veh_no=$_POST['veh_no'];
     $veh_type=$_POST['veh_type'];
     $mob_no=$_POST['mob_no'];
     
     
    $user_reg_query="INSERT INTO details(UserName,Email,Password,Vehicle_no,Vehicle_type,Mobile_no) values('$name','$email','$password','$veh_no','$veh_type','$mob_no')";
    $user_reg_submit= mysqli_query($con,$user_reg_query) or die(mysqli_error($con));
    echo "User successfully inserted";

    
    
    $_SESSION['id']=mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION['username']=$name;
    $_SESSION['veh_no']=$veh_no;
    $_SESSION['veh_type']=$veh_type;
    $_SESSION['mob_no']=$mob_no;
    header('location: index.php');
}

   ?>     
    