<?php
    require "includes/common.php";
 ?>   
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SignUp</title>
        
        <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
    </head>
    <body>
       
            
        <?php 
    include "includes/header.php";
    ?>
            <br><br>
            
            <form action="signup_script.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>


                        
                            <label for="username"><b>User Name</b></label>
                            <input type="text"   required="true" placeholder="UserName" name="username" >
                        
                            <label for="password"><b>Password</b></label>
                            <input type="password"  required="true" name="password" placeholder="Password" >
                            
                            <label for="veh_type"><b>Vehicle Type</b></label>
<!--                            <input type="text"  name="veh_type" placeholder="E-mail" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">-->
                            <select name="veh_type">
                                <option  value="3-wheeler" style="background-color: whitesmoke;">3-Wheeler</option>
                                <option value="4-wheeler" style="background-color: whitesmoke;">4-Wheeler</option>
                                <option value="heavy_weight" style="background-color: whitesmoke;">Heavy-Weight</option>
                            </select> 
                            <br><br>
                            
                            <label for="veh_no"><b>Vehicle Number</b></label>
                            <input type="text"   required="true" name="veh_no" placeholder="Vehicle Number">
                        
                        
                            <label for="mob_no"><b>Mobile Number</b></label>
                            <input type="text"   name="mob_no" placeholder="Mobile Number">
                        
                        
                            <label for="e_mail"><b>E-mail</b></label>
                            <input type="text"   name="email" placeholder="Email">
                        
                      
                            <input type="submit" value="Submit" class="btn btn-primary">
                        
    <hr>
    

    
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>


         <?php
                    include "includes/footer.php";
                    ?> 
    </body>
    

</html>