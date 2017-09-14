<?php 
	
//Start the session to see if the user is authenticated user. 
session_start();
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
 define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "db");
$link = mysql_connect('localhost', 'root', '', 'db'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('db', $link); 
if(!$db){ 
die("Unable to select database"); 
} 
$c=$_SESSION["cid"];
$c=$_SESSION['cid'];

		$qry='SELECT cname FROM citizen WHERE cid='.$c;
		$result = mysql_query($qry);
		$name=mysql_fetch_array($result);
		//$name=$c;
		} 
else{ 
exit(); 
} 

echo '<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-128x128.png" type="image/x-icon">
  <meta name="description" content="citizen home">
  <title>citizen</title>
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
  
  
  
</head>
<body>
<section id="ext_menu-t">

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

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="yourcomplaints.html"><p>Your Complaints</p></a></li><li class="nav-item"><a class="nav-link link" href="localcomplaints2.php"><p>Local Complaints</p></a></li><li class="nav-item"><a class="nav-link link" href="citizenprofile.php"><p>Profile</p></a></li><li class="nav-item"><a class="nav-link link" href="logout.php"><p>logout</p></a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="#">Mobirise</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-m" style="background-image: url(assets/images/desert-2000x943.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">WELCOME,';
																	echo " ".$name['cname'];
																	
				echo '</h3>
                <div class="lead"><p>HELLO!</p></div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="deltapieditor-r" style="background-color: rgb(255, 255, 255);"> 
		
<style>    @import url(//fonts.googleapis.com/css?family=Lato:400,900);
    @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
    body {
		padding: 60px 0px;
	}
	.animate {
		-webkit-transition: all 0.3s ease-in-out;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		-ms-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}
	.info-card {
		width: 100%;
		border: 1px solid rgb(215, 215, 215);
		position: relative;
		font-family: "Lato", sans-serif;
		margin-bottom: 20px;
		overflow: hidden;
	}
	.info-card > img {
		width: 100px;
		margin-bottom: 60px;
	}
	.info-card .info-card-details,
	.info-card .info-card-details .info-card-header  {
		width: 100%;
		height: 100%;
		position: absolute;
		bottom: -100%;
		left: 0;
		padding: 0 15px;
		background: rgb(255, 255, 255);
		text-align: center;
	}
	.info-card .info-card-details::-webkit-scrollbar {
		width: 8px;
	}
	.info-card .info-card-details::-webkit-scrollbar-button {
		width: 8px;
		height: 0px;
	}
	.info-card .info-card-details::-webkit-scrollbar-track {
		background: transparent;
	}
	.info-card .info-card-details::-webkit-scrollbar-thumb {
		background: rgb(160, 160, 160);
	}
	.info-card .info-card-details::-webkit-scrollbar-thumb:hover {
		background: rgb(130, 130, 130);
	}           

	.info-card .info-card-details .info-card-header {
		height: auto;		
		bottom: 100%;
		padding: 10px 5px;
	}
	.info-card:hover .info-card-details {
		bottom: 0px;
		overflow: auto;
		padding-bottom: 25px;
	}
	.info-card:hover .info-card-details .info-card-header {
		position: relative;
		bottom: 0px;
		padding-top: 45px;
		padding-bottom: 25px;
	}
	.info-card .info-card-details .info-card-header h1,	
	.info-card .info-card-details .info-card-header h3 {
		color: rgb(62, 62, 62);
		font-size: 22px;
		font-weight: 900;
		text-transform: uppercase;
		margin: 0 !important;
		padding: 0 !important;
	}
	.info-card .info-card-details .info-card-header h3 {
		color: rgb(142, 182, 52);
		font-size: 15px;
		font-weight: 400;
		margin-top: 5px;
	}
	.info-card .info-card-details .info-card-detail .social {
		list-style: none;
		padding: 0px;
		margin-top: 25px;
		text-align: center;
	}
	.info-card .info-card-details .info-card-detail .social a {
		position: relative;
		display: inline-block;
		min-width: 40px;
		padding: 10px 0px;
		margin: 0px 5px;
		overflow: hidden;
		text-align: center;
		background-color: rgb(215, 215, 215);
		border-radius: 40px;
	}

	a.social-icon {
		text-decoration: none !important;
		box-shadow: 0px 0px 1px rgb(51, 51, 51);
		box-shadow: 0px 0px 1px rgba(51, 51, 51, 0.7);
	}
	a.social-icon:hover {
		color: rgb(255, 255, 255) !important;
	}
	a.facebook {
		color: rgb(59, 90, 154) !important;
	}
	a.facebook:hover {		
		background-color: rgb(59, 90, 154) !important;
	}
	a.twitter {
		color: rgb(45, 168, 225) !important;
	}
	a.twitter:hover {
		background-color: rgb(45, 168, 225) !important;
	}
	a.github {
		color: rgb(51, 51, 51) !important;
	}
	a.github:hover {
		background-color: rgb(51, 51, 51) !important;
	}
	a.google-plus {
		color: rgb(244, 94, 75) !important;
	}
	a.google-plus:hover {
		background-color: rgb(244, 94, 75) !important;
	}
	a.linkedin {
		color: rgb(1, 116, 179) !important;
	}
	a.linkedin:hover {
		background-color: rgb(1, 116, 179) !important;
	}</style>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row block">
			<div class="tiny"> <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row block">
			<div class="tiny"><div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row block">
			<div class="tiny"><div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row block">
			<div class="tiny">    <div class="container">
            
             <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Lodge a complaint</h3>      
            </div>
                </div>
            
		      
		<div class="row">
			<div class="[ col-sm-3 col-md-offset-0 col-md-3 ]">
				
					 
                            <button style="border: 0px solid white; background:rgb(255,255,255);" id="continue" name="continue" class="btn btn-success"><a href="complain.php">
                                <img style="width: 100%" src="assets/images/icons/road.png">
                              
                                </a></button>  
                
                <h4><center> Roads</center></h4>
                                
                            <p></p>
							
					
					</div>
            <div class="[ col-sm-3 col-md-offset-0 col-md-3 ]">
				 
						
                            <button style="border: 0px solid white; background:rgb(255,255,255);" id="continue" name="continue" class="btn btn-success"><a href="sanitation.php">
                                <img style="width: 100%" src="assets/images/icons/sanitation.png">
                              
                                </a></button>  
                
                 <h4> <center>Sanitation</center></h4>
                                
                            <p></p>
							
						
					</div>
            <div class="[ col-sm-3 col-md-offset-0 col-md-3 ]">
				
                            <button style="border: 0px solid white; background:rgb(255,255,255);" id="continue" name="continue" class="btn btn-success"><a href="water.php">
                                <img style="width: 100%" src="assets/images/icons/water.png">
                              
                                </a></button> 
                
                
					  <h4><center> Water</center></h4>
                                
                            <p></p>
							
					
					</div>
            <div class="[ col-sm-3 col-md-offset-0 col-md-3 ]">
				
                           <button style="border: 0px solid white; background:rgb(255,255,255);" id="continue" name="continue" class="btn btn-success"><a href="law.php">
                                <img style="width: 100%" src="assets/images/icons/electricity.png">
                               
                                </a></button> 
                
                
                <h4><center> Electrical Hazards</center></h4>
                            <p></p>
							
						
					</div>
				</div>
		</div>
        
	</div></div>
        </div>
    </div>
</div>
        </div>
    </div></div>
        </div>
    </div></div>
        </div>
    </div>

</section>

<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-l" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
    
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
                    <input type="hidden" value="m5RAZEhyre+DnGN2yyz9BC1l88ZE1nTEedJHeP/+IlFxlNzpHWOQaRUwa+0BsDQ/k8ViAw2nbMHhrUImSJfETu29JclvOX99tw1N6jCMqQlQCGcH25Qhl3OLuBiFlOA/" data-form-email="true">
                    
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-l-email">Email<span class="form-asterisk">*</span></label>
                        <input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-l-email">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-l-phone">Phone</label>
                        <input type="tel" class="form-control input-sm input-inverse" name="phone" data-form-field="Phone" id="contacts4-l-phone">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-l-message">Message</label>
                        <textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-l-message"></textarea>
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
</html>';?>
