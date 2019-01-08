<html><?php 
    require "includes/common.php";
    
    ?>
<!DOCTYPE html>
<head>
	<title>Anonymous</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	


	<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);


}
#help{
	position: relative;
	bottom: 25%;
	left: 7%;
}

</style>
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        

	<!-- for geolocation -->
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
</head>

<body>
<?php 
    include "includes/header.php";
    ?>
<!--/banner-->
	<section class="banner-top">
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
							<h3>A Vision for Safety</h3>
						<p align="center">
The Department of Transportation and the National Highway Traffic Safety Administration are working to 
</p><p>support the development of automated vehicle safety technologies because of their potential to save lives.

</p>
								<a href="help.php" class="button">HELP</a>
								

								

					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3> Pay E-Toll</h3>
						<p>Avoid long traffic and reach safely and fast to your home.</p>
                                                <a href="help.php" class="button">HELP</a>
							

					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
							<h3>Helping Hand</h3>
				<p>Alert today – Alive tomorrow</p>
                                <a href="help.php" class="button">HELP</a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="row">
			<div class="col-lg-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-3 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<span class="fab fa-amazon-pay" size="7px" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 wthree_banner_bottom_grid_right">
							<h4>TOLL</h4>
							<p>E-Toll,Fast Pay</p>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-3 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<span class="fas fa-ambulance" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 wthree_banner_bottom_grid_right">
							<h4>ACCIDENT</h4>
							<p>Start Early,Drive Slowly,Reach Safely</p>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-3 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<span class="fas fa-handshake" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 wthree_banner_bottom_grid_right">
							<h4>HELPING HAND</h4>
							<p>Alert today – Alive tomorrow</p>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<!-- //banner-bottom -->

	</div>
	</section>
	
<br><br><br>
	<!--//banner-->
		<section class="serv-grids">
			<div class="row">
			<div class="col-md-4 serv-grid1">
				<div class="inner_grid">
					<h3>Toll payment</h3>
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed.</p>
					<a href="PayUMoney_form.php">Pay Now</a>
				</div>
			</div>
			<div class="col-md-4 serv-grid2">
				<div class="inner_grid">
					<h3>Accident issues</h3>
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed.</p>
					<a href="help.php">Help</a>
				</div>
			</div>
			<div class="col-md-4 serv-grid3">
				<div class="inner_grid">
					<h3>Helping Hand</h3>
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed.</p>
                                        <a href="helpinghand.php">Need Blood ??</a>
				</div>
			</div>
			</div>
	</section>


	
	<!-- services-main -->
	<div class="testimonials  py-5" id="services">
		<div class="container  py-md-3">
			<div class="w3-head-all  mb-5">
				<h3>Our Services</h3>
			</div>
			<div class="w3_testimonials_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
												<!-- s1 -->
								<div class="about-top w3ls-agile row">
									<div class="col-md-6 ser_w3">
										<img class="img-responsive img-fluid" src="images/service1.jpg" alt="">
									</div>
									<div class="col-md-6 come">
										<div class="about-wel">
											<h5>A Few Words About Our
												<span>Toll Services</span>
											</h5>
											<p>We need to unnecessarily stand in queue just to pay toll .Instead of waiting in those long queues we are providing following solutions :</p>
											<ul>
												<li>
													<i class="fas fa-check"></i>Instant Notification within 2KMs area regarding toll pay</li>
												<li>
													<i class="fas fa-check"></i>Hassel free toll pay</li>
												<li>
													<i class="fas fa-check"></i>100% satisfied visitors</li>
												<li>
													<i class="fas fa-check"></i>Instant Verification via QR Code</li>
												
												<li>
													<i class="fas fa-check"></i>Promoting cashless Transaction</li>
													
											</ul>
										</div>
										
									</div>
									
								</div>
						
									<!-- //welcome -->
	
							</li>
							<li>
							<div class="about-top w3ls-agile row">
								<div class="col-md-6 come">
									<div class="about-wel">
										<h5>Quick Service provided after
											<span>Accident Mishaps</span>
										</h5>
										<p>
											Even though people are willing to help Victims,they are unable to do so because of lack of awareness of the nearby Hospitals and Police Stations.we have proposed following so;utions : 
										</p>
										<ul>
												<li>
													<i class="fas fa-check"></i>Quickly find nearby hospitals</li>
												<li>
													<i class="fas fa-check"></i>Help Button for instant Notification of current location of victim</li>
												<li>
													<i class="fas fa-check"></i>Instantly notify nearby Police stations and Hospitals</li>
												<li>
													<i class="fas fa-check"></i>Help Police in Hit and Run Case</li>
													
											</ul>
									</div>
									
								</div>
								<div class="col-md-6 ser_w3">
									<img class="img-responsive img-fluid" src="images/service2.jpg" alt="">
								</div>
								
							</div>
							</li>
	
							<li>
								<div class="about-top w3ls-agile row">
				<div class="col-md-6 ser_w3">
					<img class="img-responsive img-fluid" src="images/service3.jpg" alt="">
				</div>
				<div class="col-md-6 come">
					<div class="about-wel">
						<h5>A Few Words About Our
							<span>Helping Hand</span>
						</h5>
						<p>In case of Accident if Victim is severely injured and is in need of blood urgently.The blood requirement of victim can be easily handled through our helping hand services. </p>
						<ul>
												<li>
													<i class="fas fa-check"></i>User Friendly Web-Portal</li>
												<li>
													<i class="fas fa-check"></i>Instant notification to donor</li>
												<li>
													<i class="fas fa-check"></i>Faster services to Victim</li>									
											</ul>
									</div>
					
								</div>
				
								</div>
				
			
							</li>
						</ul>
					</div>
				</section>

			</div>
		</div>
	</div>
			<!-- map -->
                        <h1 style="color:blue"><b> Our Headquarter:</b></h1>
<div class="w3l-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15025.214777706058!2d70.8300067637306!3d19.699690432255363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be71c92fbd91e67%3A0x2a3ce68676417a45!2sSt.+John+College+of+Engineering+and+Management!5e0!3m2!1sen!2sin!4v1538559645705" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- Newsletter -->
<section class="newsletter text-center py-5">
	<div class="container py-md-3">
		<h3 class="heading text-center text-uppercase mb-5">For smooth and safe Highway travelling  </h3>
		

		<div class="subscribe_inner">
			<p class="mb-4">Have a Safe Journey. </p>
			
		</div>
		
	</div>
</section>
<!--footer-->
<br><br>
<div id="about">
    <center><h1><b>About Us.</b> </h1></center>
    <center><h3>we have tried to cover problems faced while travelling on highay thereby helpng common people travel smoothly.</h3></center>
</div><br>
<?php 
    include "includes/footer.php";
    ?>
<!-- footer -->




<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->


<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
<!-- bars.js -->   
	<script src="js/bars.js"></script>
	<!-- //bars.js -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->
	<!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
<!--popup-js-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>
<!--//popup-js-->
<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	
	<!-- smooth scrolling js -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->
		<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
        
        <!--location and directions-->
        <script>
      
       function initMap() {
        var geocoder = new google.maps.Geocoder;
        if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition(function(position){
                    console.log(position);
                    
                    var lat = position.coords.latitude;
                    var long = position.coords.longitude;
                    geocodeLatLng(geocoder,lat,long);
        });
      }
    }
      function geocodeLatLng(geocoder,lat,long) {
        
        var latlng = {lat: parseFloat(lat), lng:parseFloat(long) };
        geocoder.geocode({'location': latlng}, function(results, status) {
          console.log(results);
          console.log(results[0].formatted_address);
          
          var tolls=["Bombay Port Trust Rd, Darukhana, Mazgaon, Mumbai, Maharashtra 400010, India","Khadi Pul New Mumbai / Toll Naka, Navi Mumbai, India","Mumbai, A Block BKC, Bandra West, Mumbai, Maharashtra 400050, India","178/2, Near Toll Naka, Dharna Village,, Mumbra-Panvel Highway,Taloja,, Mumbai, Maharashtra 410206, India"];
          
          var source=results[0].formatted_address;
          
          
          for(i=0;i<4;i++){
                
               distance(source,tolls[i]); 
          }
          
        });
      }
      
      

      function distance(source,destination){
        var dist;
        var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
                    var duration = response.rows[0].elements[0].duration.text;
                    
                    // output4.innerHTML = "";
                    // output4.innerHTML += "Distance: " + distance + "<br />";
                    // output4.innerHTML += "Duration:" + duration;

                    var dist1 = distance.slice(0,3);
                    console.log(distance);
                    dist =parseInt(dist1);
                    var flag={};
                    flag.id=0;
                    console.log(dist);
                    console.log(dist>2.00);
                    if(dist>2.00){
                        
                      alert("distance is less than 2km");
                      flag.id=1;
                      $.ajax({
                          url:"sms.php",
                          method:"post",
                          data:flag,
                          success:function(flag){
                              console.log(flag);
                          }
                      })
                      
                    }else{
                        alert("distance is greater than 2km");
                        flag.id=0;
                      $.ajax({
                          url:"sms.php",
                          method:"post",
                          data:flag,
                          success:function(flag){
                              console.log(flag);
                          }
                      })
                        
                    }
                  }
              });
          }          
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2RLxk9WNqOcOOsrRZ6FKc35-aoRl6Kfw&callback=initMap">
    </script>
 </body>
</html>
