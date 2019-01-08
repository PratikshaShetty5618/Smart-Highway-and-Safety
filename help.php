<?php
include "includes/header.php";
?>
	<title>Help</title>
        <head>
            <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        

	<!-- for geolocation -->
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script>
      var alldist=[];
      var info=[];
      var text = '{"Hospitals":[' +
'{"Name":"Kedar", "address":"206, 2nd floor, Mazgaon Apartment, RB Mehta Marg, Naralwadi, Sewri, Mumbai, Maharashtra 400010","contact":"9673776984","lat":"18.9749","long":"72.8412"},' +
'{"Name":"MGM New Bombay Hospital Vashi", "address":"Plot no - 35,, Sector 3, Vashi, Atmashanti Society, Sector 3, Vashi, Navi Mumbai, Maharashtra 400703","contact":"8550971066","lat":"19.0623","long":"72.9321"},' +
'{"Name":"Holy Family Hospital and Medical Research Center", "address":"St, St Andrews Rd, Bandra West, Mumbai, Maharashtra 400050","contact":"9922716338","lat":"19.0513","long":"72.8225"},' +
'{"Name":"City Hospital", "address":"Plot No 32, Sector 4, Kalamboli, Sai Nagar, Khidukpada, Kalamboli, Panvel, Navi Mumbai, Maharashtra 410218","contact":"9673776984","lat":"19.0304","long":"73.0799"},' +
'{"Name":"Harneshwar Hospital", "address":"Harneshwer hospital, Talegaon Dabhade, Maharashtra 410507","contact":"8550971066","lat":"18.7139","long":"73.6107"},' +
'{"Name":"Vedant Hospital", "address":"Ghodbandar Road, Kasarvadavali, Thane West, Thane, Owale, Thane West, Thane, Maharashtra 400615","contact":"9922716338","lat":"19.2308","long":"72.8264"},' +
'{"Name":"AL Shifa Multi Speciality Hospital", "address":"Dream Corner, Plot No 18, Sect 34A,, Kharghar, Sector 34-B, Parsi, Kharghar, Navi Mumbai, Maharashtra 410210","contact":"7020461215","lat":"19.2623","long":"72.813"}]}';

    var names=['Kedar','MGM New Bombay Hospital Vashi','Holy Family Hospital and Medical Research Center',
    'City Hospital','Harneshwar Hospital','Vedant Hospital','AL Shifa Multi Speciality Hospital'];
       function initMap() {
        var geocoder = new google.maps.Geocoder;
        obj = JSON.parse(text);
        console.log(obj.Hospitals[0].address);
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
   
          var address=results[0].formatted_address;
          
obj = JSON.parse(text);
obj.Hospitals[0].address;
          
          
          for(i=0;i<6;i++){
                
               distance(address,obj.Hospitals[i].address,obj.Hospitals[i].Name,obj.Hospitals[i].contact); 
          }
          
         
          
        });
      }

      function distance(source,destination,hname,hcontact){
        var dist;
        var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status,source,destination,hname,hcontact) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
                    var duration = response.rows[0].elements[0].duration.text;
                    
                    // output4.innerHTML = "";
                    // output4.innerHTML += "Distance: " + distance + "<br />";
                    // output4.innerHTML += "Duration:" + duration;

                    var dist1 = distance.slice(0,3);
                    console.log(distance);
                    dist =parseInt(dist);
                    
                    info.push(dist);
                    console.log(info);
                    
                    minfo=Math.min(info);
                 
                    console.log(minfo);
                    var index = oinfo.indexOf(minfo);
                    
                    output.innerHTML=obj.Hospitals[0].address;
                    output1.innerHTML=obj.Hospitals[0].contact;
                    output2.innerHTML=obj.Hospitals[0].Name;
                    output3.innerHTML=obj.Hospitals[0].distance;
                     console.log(obj.Hospitals[0].address);
                     console.log(Hospitals[0].contact); 
                     console.log(obj.Hospitals[0].Name); 
                     console.log(obj.Hospitals[0].distance);
                    
                    
              

                                     }
              });
          }
     function min(){
         mindist=Math.min(alldist);
         
     }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2RLxk9WNqOcOOsrRZ6FKc35-aoRl6Kfw&callback=initMap">
    </script>
</head>
<body>
    <br>
    <br>
<!--	<h1 align="center">Help</h1>-->
        <div><p id="output"></p>
        <p id="output1"></p>
        <p id="output2"></p>
        <p id="output3"></p>
        <br><br>
        </div>


<?php
include "includes/footer.php";
?>
</body>