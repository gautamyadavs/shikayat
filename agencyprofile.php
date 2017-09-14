<?php
	//Start the session to see if the user is authencticated user.
    session_start();
    //Check if the user is authenticated first. Or else redirect to login page
    if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
        //Connect to mysql server
        define("DB_SERVER","localhost");
        define("DB_USER","root");
        define("DB_PASSWORD","");
        define("DB_DATABASE","db");
        $link = mysql_connect('localhost', 'root', '', 'db');
        /*Check link to the mysql server*/
        if(!$link){
            die('Failed to connect to server: ' . mysql_error());
        }
        /*Select database*/
        $db = mysql_select_db('db',$link);
        if(!$db){
            die("Unable to select database");
        }
		else{
			$aid=$_SESSION['aid'];
			$query="SELECT username,agencyField,address,aphone from agency where aid=$aid";
			$result=mysql_query($query);
			if($result==true){
			
				while($row = mysql_fetch_assoc($result)){
				echo'
					<html>
					<head>
					  <meta charset="UTF-8">
					  <meta http-equiv="X-UA-Compatible" content="IE=edge">
					  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
					  <meta name="viewport" content="width=device-width, initial-scale=1">
					  <link rel="shortcut icon" href="assets/images/logo-128x128.png" type="image/x-icon">
					  <meta name="description" content="Web Builder Description">
					  <title>Web Builder Title</title>
					  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
					  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
					  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
					  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
					  <link rel="stylesheet" href="assets/tether/tether.min.css">
					  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
					  <link rel="stylesheet" href="assets/dropdown/css/style.css">
					  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
					  <link rel="stylesheet" href="assets/theme/css/style.css">
					  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
					  
					  
					  
					</head>
					<body>
					<section id="ext_menu-1f">

						<nav class="navbar navbar-dropdown navbar-fixed-top">
							<div class="container">

								<div class="mbr-table">
									<div class="mbr-table-cell">

										<div class="navbar-brand">
											<a href="#" class="navbar-logo"><img src="assets/images/logo-128x128.png" alt="Mobirise"></a>
											<a class="navbar-caption" href="#"></a>
										</div>

									</div>
									<div class="mbr-table-cell">

										<button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
											<div class="hamburger-icon"></div>
										</button>

										<ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="agencyhome.html">COMPLAIN</a></li><li class="nav-item"><a class="nav-link link" href="agencyworkmen.html">WORKMEN</a></li><li class="nav-item"><a class="nav-link link" href="#">PROFILE</a></li></ul>
										<button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
											<div class="close-icon"></div>
										</button>

									</div>
								</div>

							</div>
						</nav>

					</section>

					<section class="engine"><a rel="external" href="#">#</a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="deltapieditor-u" style="background-color: rgb(255, 255, 255);"> 
							
					<style>p{color:white;}</style>
						<div class="mbr-section__container mbr-section__container--isolated container">
							<div class="row block">
								<div class="tiny"><div class="container-fluid"><p></p><br><p></p><br><p></p></div>
					<div class="container-fluid">
					  <div class="row">
						<div class="fb-profile">
							
						   
						</div>
					  </div>
					</div> <!-- /container fluid-->  
					<div class="container-fluid">
					  <div class="col-sm-8">
						  
						   <div class="fb-profile-text">
								<h1>'.$row['aname'].'</h1>
								
							</div>

								<div class="tab-pane active" id="tab_default_1">
					 
								  <h4>Username</h4>
								  <p style = " color: black">
									'.$row['username'].' 
								  </p>
							<h4>Field </h4>
							<p style = " color: black">'.$row['agencyField'].'</p>
							<h4>Address </h4>
								  <p>'.$row['address'].'</p>
								  <h4>Phone </h4>
								  <p style = " color: black">'.$row['aphone'].'</p>
								</div>
					  </div>
					 
					</div></div>
							</div>
						</div>

					</section>

					<section class="mbr-section article mbr-section__container" id="content1-s" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

						<div class="container">
							<div class="row">
								<div class="col-xs-12 lead"></div>
							</div>
						</div>

					</section>

					<section class="mbr-section mbr-section__container" id="buttons1-t" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="text-xs-center"><a class="btn btn-primary" href="#">EDIT PROFILE</a> </div>
								</div>
							</div>
						</div>

					</section>

					<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-q" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
						
						<div class="container">
							<div class="mbr-contacts row">
								<div class="col-sm-8">
									<div class="row">
										<div class="col-sm-6">
											<p><strong>Address</strong><br>IIITDM JABALPUR<br><br><br>
					<strong>Contacts</strong><br>+91-9999999999</p>
										</div>
										<div class="col-sm-6"><p class="mbr-contacts__text"><strong>Links</strong></p><ul class="mbr-contacts__list"><span style="font-size: 14px; line-height: 25px;"><a href="about.html">About</a></span><br></ul></div>
									</div>
								</div>
								<div class="col-sm-4" data-form-type="formoid">
									<div data-form-alert="true">
										<div hidden="" data-form-alert-success="true">Thanks for filling out form!</div>
									</div>
									<form action="#" method="post" data-form-title="MESSAGE">
										<input type="hidden" value="aZXwu7tcmYT4V/IVOfYe3AsydsCvpVkR58+fKBkvUbHWRPtONwfv0CRu/5XGKakgyNxNYHucX+ZVPlDNGRBkw4MclfteedCvqW/kTzmx4ZRckY7C3mfTpPllEiOyzbuw" data-form-email="true">
										<div class="form-group">
											<label class="form-control-label" for="contacts4-q-name">Name<span class="form-asterisk">*</span></label>
											<input type="text" class="form-control input-sm input-inverse" name="name" required="" data-form-field="Name" id="contacts4-q-name">
										</div>
										<div class="form-group">
											<label class="form-control-label" for="contacts4-q-email">Email<span class="form-asterisk">*</span></label>
											<input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-q-email">
										</div>
										
										<div class="form-group">
											<label class="form-control-label" for="contacts4-q-message">Message</label>
											<textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-q-message"></textarea>
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
					  <script src="assets/dropdown/js/script.min.js"></script>
					  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
					  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
					  <script src="assets/theme/js/script.js"></script>
					  <script src="assets/formoid/formoid.min.js"></script>
					  
					  
					  <input name="animation" type="hidden">
					  </body>
					</html>'; 
			}
		}
	}
	}?>