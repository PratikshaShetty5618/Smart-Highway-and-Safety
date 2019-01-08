
<!DOCTYPE HTML>
<html>
<head>
<title>Helping Hand</title>

<link href="css/style_1.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<!-- login -->
<?php
include 'includes/header.php';
?>
<br>
	        <div class="login-w3l">	
			<div class="top-img-agileits-w3layouts">
				<h2 class="sub-head-w3-agileits">Receiver Form</h2>
				<p>Fillout the form below to learn more!</p>
				<div class="login-form">	
                                    <form action="receiver_successes.php" method="post">
					<input type="text" name="receiver" placeholder="Receiver" required="" />
                                        <br>
                                        Blood Group:
                                        <select name="blood">
                                            <option value="B+" style="color:whitesmoke">
							B+
						</option>
						<option value="A+" style="color:whitesmoke">
							A+
						</option>
						<option value="B-" style="color:whitesmoke">
							B-
						</option>
						<option value="O+" style="color:whitesmoke">
							O+
						</option>
                                                <option value="O-" style="color:whitesmoke">
							O-
						</option>
                                        </select><br><br>
					<input type="email" name="Email" placeholder="Email" required="" />
					<input type="text" name="mobile_no" placeholder="Mobile No" required="" />
					<input type="text" name="city" placeholder="City" required="" />
					<input type="text" name="hospital_name" placeholder="Hospital Name" required="" />
					<input type="submit" value="Submit">
				</form>	
			</div>
			</div>			
			
			<!-- //login -->
				</div> 
<br>
			<!--//login-->
                        <?php
include 'includes/footer.php';
?>
</body>
</html>