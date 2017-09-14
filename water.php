<?php 
//Start the session to see if the user is authenticated user. 
session_start();
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
} 
else{ 
exit(); 
} 
?> 
<html> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-128x128.png" type="image/x-icon">
  <meta name="description" content="Lodge complain">
  <title>complain</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

<script>window.addEventListener('load', geolocation, false);</script>
</head>
<body> 
<body>
<section id="ext_menu-1r">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="#" class="navbar-logo"><img src="assets/images/logo-128x128.png" alt="Mobirise"></a>
                        
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="#"></a></li><li class="nav-item"><a class="nav-link link" href="https://mobirise.com/"></a></li><li class="nav-item"><a class="nav-link link" href="citizenhome.html"><p>dashboard</p></a></li><li class="nav-item"><a class="nav-link link" href="logout.php"><p>logout</p></a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
<section class="engine"><a rel="external" href="#">Web Page Maker</a></section><section class="mbr-section mbr-parallax-background mbr-after-navbar" id="content5-1s" style="background-image: url(assets/images/desert2.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <h3 class="mbr-section-title display-2">LODGE COMPLAIN</h3>
        <div class="lead">PLEASE FILL THE FOLLOWING DETAILS. WE'LL GET YOUR PROBLEM SORTED AS SOON AS POSSIBLE.</div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="deltapieditor-1t" style="background-color: rgb(255, 255, 255);">





<p>Click the button to get your coordinates.</p>

<!--<button onclick="getlocation()">Try It</button>-->

<p id="demo"></p>

<script>
var x1 = document.getElementById("demo");

onload = function getlocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x1.innerHTML = "Geolocation is not supported by this browser.";
    }
	window.addEventListener('load', geolocation, false);
}

function showPosition(position) {
	getLocation();
	document.getElementById("lat").value = position.coords.latitude;
	document.getElementById("long").value = position.coords.longitude;
	
	
}

geolocation();
</script>
<style>p{color:white;}</style>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row block">
			<div class="tiny">

<form action="add_complain.php" method="post"> 


<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Problem</label>
  <div class="col-md-4">
    <select id="selectbasic" name="job" class="form-control">
	<option value="not selected">0. Select SHIKAYAT</option>
    <option value="Insufficient water supply">1. Insufficient water supply</option>
    <option value="Pipe Leakage">2. Pipe Leakage</option>
    <option value="Inappropriate behaviour of workers">3. Inappropriate behaviour of workers</option>
    <option value="Unclean water supply">4. Unclean water supply</option>
    </div>
</div>
  <br><br>
 
<div class="row"><p></p><br><p></p><br></div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Problem Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="description">Write here</textarea>
  </div>
</div>

<div class="row"><p></p><br><p></p><br></div>


<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Problem Site Picture</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<div class="row"><p></p><br><p></p></div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Your Location is:</label>
  <div class="col-md-4">
    <textarea class="form-control" type="double" name="lat" id="lat" value="0">Latitude</textarea>
	<textarea class="form-control" type="double" name="long" id="long" value="80">Longitude</textarea>
  </div>
</div>

<div class="row"><p></p><br><p></p></div>


  
  
  
  <div class="row"><p></p><br><p></p></div>
  <center>
 <input class="btn btn-sm btn-black" type="submit" name="submit" value="Insert">  
  

 </center>
 

 
 
</form> 
</div>
</div>
</div>
<center>
<p id="demo1">See the map!!</p>

<!--<button onclick="getLocation()">Try It</button>-->

<div id="mapholder"></div>

<script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyAoS38JukssNN58RMaAUr_T4YZwEfSI9p8"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    latlon = new google.maps.LatLng(lat, lon)
    mapholder = document.getElementById('mapholder')
    mapholder.style.height = '250px';
    mapholder.style.width = '500px';
	document.getElementById("lat").value = position.coords.latitude;
	document.getElementById("long").value = position.coords.longitude;
	
    var myOptions = {
    center:latlon,zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP,
    mapTypeControl:false,
    navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    }
    
    var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
    var marker = new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>
</center>

</section>

<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-1q" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
    
    <div class="container">
        <div class="mbr-contacts row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong>Address</strong><br>IIITDM Jabalpur<br><br>
<strong>Contacts</strong><br>
Phone: +9999999999<br><br></p>
                    </div>
                    <div class="col-sm-6"><p class="mbr-contacts__text"><strong>Links</strong></p><ul class="mbr-contacts__list"><span style="font-size: 14px; line-height: 25px;"><a href="about.html">About</a></span><br></ul></div>
                </div>
            </div>
            <div class="col-sm-4" data-form-type="formoid">
                <div data-form-alert="true">
                    <div hidden="" data-form-alert-success="true">Thanks for filling out form!</div>
                </div>
                <form action="https://mobirise.com/" method="post" data-form-title="MESSAGE">
                    <input type="hidden" value="ZLuNtek8OnK77lZWATOKk4XVgqJWf0aGaNcioKG7HbQVbNMMcAZmfmvF88W/uJP6xOh3IWLYzKuyaFDENR3FyojMyaG5jiV7AcSpiBnPHK+VS1StPLX8md+hwAb2V5O7" data-form-email="true">
                    
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-1q-email">Email<span class="form-asterisk">*</span></label>
                        <input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-1q-email">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-1q-phone">Phone</label>
                        <input type="tel" class="form-control input-sm input-inverse" name="phone" data-form-field="Phone" id="contacts4-1q-phone">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-1q-message">Message</label>
                        <textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-1q-message"></textarea>
                    </div>
                    <div class="mbr-buttons mbr-buttons--right btn-inverse"><button type="submit" class="btn btn-sm btn-black">Contact us</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  <input name="animation" type="hidden">

</body> 
</html>