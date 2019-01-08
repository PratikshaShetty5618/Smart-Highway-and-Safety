

<header>
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="index.html">Anony<span><i class="fab fa-empire"></i></span>mous</a>&nbsp;&nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
        <?php                 
                if (!isset($_SESSION['email'])) { ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link scroll" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link scroll" href="#services">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="login.php">Login</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link " href="signup.php">SignUp</a>
      </li>
      
      
                <?php } else{ ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link scroll" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link scroll" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php">Logout</a>
      </li>
      <?php } ?>
	   
    </ul>
    <div class="navbar-text">

     <p class="right-p"><i class="fas fa-phone" aria-hidden="true"></i>098-765-4321</p>
    </div>
  </div>
</nav>
		</div>
</header>
          