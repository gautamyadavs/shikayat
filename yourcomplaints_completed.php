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
			$cid=$_SESSION['cid'];
			$query="SELECT job,description,votes,complainStatus,longitude,latitude from complain where cid=$cid";
			$result=mysql_query($query);
			if($result==true){
				
				echo '
			

				<html>
				<head>
				  <meta charset="UTF-8">
				  <meta http-equiv="X-UA-Compatible" content="IE=edge">
				  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
				  <meta name="viewport" content="width=device-width, initial-scale=1">
				  <link rel="shortcut icon" href="assets/images/logo-128x128.png" type="image/x-icon">
				  <meta name="description" content="Your complaints">
				  <title>Your complaints</title>
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
				<section id="ext_menu-1z">

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

									<ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="#"></a></li><li class="nav-item"><a class="nav-link link" href="#"></a></li><li class="nav-item"><a class="nav-link link" href="citizenhome.html"><p>dashboard</p></a></li><li class="nav-item"><a class="nav-link link" href="logout.php"><p>logout</p></a></li></ul>
									<button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
										<div class="close-icon"></div>
									</button>

								</div>
							</div>

						</div>
					</nav>

				</section>

				<section class="engine"><a rel="external" href="#">Web Creator</a></section><section class="mbr-section mbr-parallax-background mbr-after-navbar" id="content5-20" style="background-image: url(assets/images/desert2.jpg); padding-top: 120px; padding-bottom: 120px;">

					<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
					</div>

					<div class="container">
						<h3 class="mbr-section-title display-2">YOUR COMPLAINTS</h3>
						<div class="lead"><p>Heres the list of complaints that you have lodged.</p></div>
					</div>

				</section>

				<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="deltapieditor-2c" style="background-color: rgb(255, 255, 255);"> 
						
				<style><style>    @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
					@import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
					body {
						padding: 60px 0px;
						background-color: rgb(220, 220, 220);
					}
					
					.event-list {
						list-style: none;
						font-family: "Lato", sans-serif;
						margin: 0px;
						padding: 0px;
					}
					.event-list > li {
						background-color: rgb(255, 255, 255);
						box-shadow: 0px 0px 5px rgb(51, 51, 51);
						box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
						padding: 0px;
						margin: 0px 0px 20px;
					}
					.event-list > li > time {
						display: inline-block;
						width: 100%;
						color: rgb(255, 255, 255);
						background-color: rgb(197, 44, 102);
						padding: 5px;
						text-align: center;
						text-transform: uppercase;
					}
					.event-list > li:nth-child(even) > time {
						background-color: rgb(165, 82, 167);
					}
					.event-list > li > time > span {
						display: none;
					}
					.event-list > li > time > .day {
						display: block;
						font-size: 56pt;
						font-weight: 100;
						line-height: 1;
					}
					.event-list > li time > .month {
						display: block;
						font-size: 24pt;
						font-weight: 900;
						line-height: 1;
					}
					.event-list > li > img {
						width: 100%;
					}
					.event-list > li > .info {
						padding-top: 5px;
						text-align: center;
					}
					.event-list > li > .info > .title {
						font-size: 17pt;
						font-weight: 700;
						margin: 0px;
					}
					.event-list > li > .info > .desc {
						font-size: 13pt;
						font-weight: 300;
						margin: 0px;
					}
					.event-list > li > .info > ul,
					.event-list > li > .social > ul {
						display: table;
						list-style: none;
						margin: 10px 0px 0px;
						padding: 0px;
						width: 100%;
						text-align: center;
					}
					.event-list > li > .social > ul {
						margin: 0px;
					}
					.event-list > li > .info > ul > li,
					.event-list > li > .social > ul > li {
						display: table-cell;
						cursor: pointer;
						color: rgb(30, 30, 30);
						font-size: 11pt;
						font-weight: 300;
						padding: 3px 0px;
					}
					.event-list > li > .info > ul > li > a {
						display: block;
						width: 100%;
						color: rgb(30, 30, 30);
						text-decoration: none;
					} 
					.event-list > li > .social > ul > li {    
						padding: 0px;
					}
					.event-list > li > .social > ul > li > a {
						padding: 3px 0px;
					} 
					.event-list > li > .info > ul > li:hover,
					.event-list > li > .social > ul > li:hover {
						color: rgb(30, 30, 30);
						background-color: rgb(200, 200, 200);
					}
					.facebook a,
					.twitter a,
					.google-plus a {
						display: block;
						width: 100%;
						color: rgb(75, 110, 168) !important;
					}
					.twitter a {
						color: rgb(79, 213, 248) !important;
					}
					.google-plus a {
						color: rgb(221, 75, 57) !important;
					}
					.facebook:hover a {
						color: rgb(255, 255, 255) !important;
						background-color: rgb(75, 110, 168) !important;
					}
					.twitter:hover a {
						color: rgb(255, 255, 255) !important;
						background-color: rgb(79, 213, 248) !important;
					}
					.google-plus:hover a {
						color: rgb(255, 255, 255) !important;
						background-color: rgb(221, 75, 57) !important;
					}

					@media (min-width: 768px) {
						.event-list > li {
							position: relative;
							display: block;
							width: 100%;
							height: 120px;
							padding: 0px;
						}
						.event-list > li > time,
						.event-list > li > img  {
							display: inline-block;
						}
						.event-list > li > time,
						.event-list > li > img {
							width: 120px;
							float: left;
						}
						.event-list > li > .info {
							background-color: rgb(245, 245, 245);
							overflow: hidden;
						}
						.event-list > li > time,
						.event-list > li > img {
							width: 120px;
							height: 120px;
							padding: 0px;
							margin: 0px;
						}
						.event-list > li > .info {
							position: relative;
							height: 120px;
							text-align: left;
							padding-right: 40px;
						}	
						.event-list > li > .info > .title, 
						.event-list > li > .info > .desc {
							padding: 0px 10px;
						}
						.event-list > li > .info > ul {
							position: absolute;
							left: 0px;
							bottom: 0px;
						}
						.event-list > li > .social {
							position: absolute;
							top: 0px;
							right: 0px;
							display: block;
							width: 40px;
						}
						.event-list > li > .social > ul {
							border-left: 1px solid rgb(230, 230, 230);
						}
						.event-list > li > .social > ul > li {			
							display: block;
							padding: 0px;
						}
						.event-list > li > .social > ul > li > a {
							display: block;
							width: 40px;
							padding: 10px 0px 9px;
						}
					}
				</style>
					<div class="mbr-section__container mbr-section__container--isolated container">
						<div class="row block">
							<div class="tiny"><center>
				<div class="container">
				  <br>
				  <div class="btn-group">
					<a href="yourcomplaints_notstarted.php"><button type="button" class="btn btn-primary">NOT STARTED</button></a>
					<a href="yourcomplaints_ongoing.php"><button type="button" class="btn btn-primary">ON GOING</button></a>
					<a href="yourcomplaints_completed.php"><button type="button" class="btn btn-primary">COMPLETED</button></a>
				  </div><br><br>
				</div>
				</center>

				<div class="container">
						<div class="row">
							<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
								<ul class="event-list">';
								
				while ($row = mysql_fetch_assoc($result)){ 
					if($row['complainStatus']=='Completed'){
						echo'<li class="">
							<img alt="before Pic" src=$row["beforePic"] class="">
								<div class="info">
									<button type="button" class="close" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<h2 class="title">'.$row['job'].'</h2>
										<p class="desc">'.$row['description'].'</p>
										<ul>
											<li style="width:33%;" class="">'.$row['votes'].'<span class="glyphicon glyphicon-ok"></span></li>
											<li style="width:34%;" class="">'.$row['complainStatus'].'</li>
											<li style="width:33%;" class="">'.$row['longitude'].' '. $row['latitude'].'</li>
										</ul>
								</div>
						</li>';
					}
					
				}
										
					echo '		</ul>
							</div>
						</div>	
				</div></div>
							</div>
						</div>

						</section>

				<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-1y" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
					
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
								<form action="#" method="post" data-form-title="MESSAGE">
									<input type="hidden" value="34BPMzY3wiEPkDH90ZZqIg1VmPE5IL3qkW7UxeiWyt7WlJ7wqA06Ru8QK3GKegi+fIks/lH7zIqEWZU4HUNeIvuHXtJvB0aRJEwhqfAyuuO6B38+jQ+o5QGRl6XBZy9K" data-form-email="true">
									
									<div class="form-group">
										<label class="form-control-label" for="contacts4-1y-email">Email<span class="form-asterisk">*</span></label>
										<input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-1y-email">
									</div>
									<div class="form-group">
										<label class="form-control-label" for="contacts4-1y-phone">Phone</label>
										<input type="tel" class="form-control input-sm input-inverse" name="phone" data-form-field="Phone" id="contacts4-1y-phone">
									</div>
									<div class="form-group">
										<label class="form-control-label" for="contacts4-1y-message">Message</label>
										<textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-1y-message"></textarea>
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
				</html>';
			}
		}
	}	
?>;

			
			
			