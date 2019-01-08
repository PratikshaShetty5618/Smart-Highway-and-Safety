<?php
    require "includes/common.php";
    
        

    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=md5($_POST['password']);
    $user_query="SELECT id,email,password FROM details WHERE email=$email and password=$password ";
    $user_query_result=mysqli_query($con,$user_query);
    if(mysqli_num_rows($user_query_result)==0)
    {
        
    }
    else
    {
        $row=mysqli_fetch_array($user_query_result);
    }
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location: index.php');
?>

