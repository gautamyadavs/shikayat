<?php
    //Start the session to see if the user is authencticated user.
    session_start();
    //Check if the user is authenticated first. Or else redirect to login page
    if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
    {}
    else
    {
        //header('location:login_form.php');
        //exit();
    }
	
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
else {
$cid=$_SESSION["ccid"];
$cid1=$_SESSION["cid"];
$coid=$_SESSION['coid'];

		$qry='SELECT job, complainStatus, startDate, beforePic, afterPic, endDate, description, longitude, latitude, satisfactory, cid, votes FROM complain WHERE coid='.$coid;
		$result = mysql_query($qry);
		$name=mysql_fetch_array($result);
		//echo $name['cname'],$c;
		//$name=$c;
		$qry1='SELECT cid, coid FROM vote WHERE coid="'.$coid.'" AND cid="'.$cid.'"';
		$result1 = mysql_query($qry1);
		$name1=mysql_fetch_assoc($result1);
		}
	

echo '<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-128x128.png" type="image/x-icon">
  <meta name="description" content="about">
  <title>SHIKAYAT</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="ext_menu-2m">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="localhost/index.html" class="navbar-logo"><img src="assets/images/logo-128x128.png" alt="Mobirise"></a>
                        
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="https://mobirise.com/"></a></li><li class="nav-item"><a class="nav-link link" href="https://mobirise.com/"></a></li><li class="nav-item"><a class="nav-link link" href="citizenhome.html"><p>dashboard</p></a></li><li class="nav-item"><a class="nav-link link" href="logout.php"><p>logout</p></a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
<p><br><br><br></p>
<section class="mbr-section mbr-parallax-background mbr-after-navbar" id="content5-2t" style="background-image: url(assets/images/desert2.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <h3 class="mbr-section-title display-2">';
		echo $name['job'];
		
		echo '</h3>
        <div class="lead">';
		echo $name['complainStatus'];
		echo '</div>
    </div>

</section>

<section class="mbr-section" id="msg-box5-2u" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              

              <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                  <h3 class="mbr-section-title display-2">ORIGINAL SITUATION</h3>
                  <div class="lead">
                    <P><H5>DATE STARTED </H5>';
					echo $name['startDate'];
					echo '</P>
                    <p>This was the picture of the site when Complaint was lodged.</p>';
					
					
					echo '

                  </div>

                  
              </div>


              


              <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 35%;">
                  <div class="mbr-figure">		'.' <img src="data:image/jpeg;base64,' . base64_encode($name['beforePic']) . '" width="250" height="250">'.'
</div>
              </div>

            </div>
        </div>
    </div>

</section>
<p><br><br><br></p>
<section class="mbr-section" id="msg-box5-2v" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 34%;">
                  <div class="mbr-figure">		'.' <img src="data:image/jpeg;base64,' . base64_encode($name['afterPic']) . '" width="250" height="250">'.'
</div>
              </div>

              


              <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                  <h3 class="mbr-section-title display-2">FINAL SITUATION</h3>
                  <div class="lead">
                   <P><H5>DATE ENDED </H5>';
					echo $name['endDate'];
					echo '</P>
                    <p>Final situation of the complaint site.</p>

                  </div>

                  
              </div>


              

            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="deltapieditor-36" style="background-color: rgb(255, 255, 255);"> 
		
<style></style>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row block">
			<div class="tiny"><h2>DESCRIPTION</h2>
<p>';
echo $name['description'];
echo'</p></div>
        </div>
    </div>

</section>';

if($cid==$cid1)
{
	echo '
<section class="mbr-section mbr-section__container" id="buttons1-2x" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-xs-center"><a class="btn btn-success" href="https://mobirise.com/mobirise-free-win.zip"><span class="mbri-smile-face mbr-iconfont mbr-iconfont-btn"></span>Satisfied</a> <a class="btn btn-danger-outline btn-danger" href="https://mobirise.com/mobirise-free-mac.zip"><span class="mbri-sad-face mbr-iconfont mbr-iconfont-btn"></span>Unsatisfied</a> </div>
            </div>
        </div>
    </div>

</section>';}

echo $cid;
echo $name1["cid"];

if($cid1==$name1["cid"]);

else {
echo '
<section class="mbr-info mbr-info-extra mbr-section mbr-section-md-padding" id="msg-box1-31" style="background-color: rgb(124, 112, 107); padding-top: 0px; padding-bottom: 0px;">

    
    <div class="container">
        <div class="row">


            


            <div class="mbr-table-md-up">
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                    <h2 class="mbr-info-subtitle mbr-section-subtitle"></h2>
                    <h3 class="mbr-info-title mbr-section-title display-2">WANT THIS COMPLAINT TO BE ADDRESSED SOON? VOTE.</h3>
                </div>

                <div class="mbr-table-cell col-md-4">
                    <div class="text-xs-center"><a class="btn btn-warning" href="add_vote.php"><span class="mbri-like mbr-iconfont mbr-iconfont-btn"></span>VOTE</a></div>
                </div>
            </div>


        </div>
    </div>
</section>';}
echo '

<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-2s" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
    
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
                    <input type="hidden" value="J7T9m26y74+njSjs1Fh5Ntc8jb5diucnM6M7Z17BDThx46pB1AbCpXA+azgGrE0zB+PeqGs46yL1daiMPzuJqTtgssNhFzaVporf/TxYiheqezdLCUhQinQP6prezpEu" data-form-email="true">
                    
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-2s-email">Email<span class="form-asterisk">*</span></label>
                        <input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-2s-email">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-2s-phone">Phone</label>
                        <input type="tel" class="form-control input-sm input-inverse" name="phone" data-form-field="Phone" id="contacts4-2s-phone">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-2s-message">Message</label>
                        <textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-2s-message"></textarea>
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