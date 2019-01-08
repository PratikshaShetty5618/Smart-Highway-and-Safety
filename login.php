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
        <title>Login</title>
        <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
        <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    </head>
    <body>
        <?php 
    include "includes/header.php";
    ?>
        <br><br>
        
        <h2>Login Form</h2>

<form action="login_submit.php" method="post">
  <div class="imgcontainer">
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar" style="height: 250px; width: 250px;">
  </div>

  <div class="container">
    <label for="uname"><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
   
  </div>

  <div class="container" style="background-color:#f1f1f1">
      <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
   
  </div>
</form>

<!--        <div class="container-fluid">
        <div class="row row_style">
            <div class="col-xs-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>LOGIN</h1>0e a purchase</p>
                    
                    <form action="login_submit.php" method="post">
                        
                       
                        <div class="form-group">
                            
                                LOGIN: <input type="text"  class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            PASSWORD: <input type="password"  class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Login</button>
                        </div>
                        
                            
                    
                    </form>
                </div>
                    <div  class="panel-footer">
                        <p>Don't have an account? Register</p>
                        
                        
                    </div>
                </div>
                
            </div>
            
        </div></div>
    </center>-->
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>
