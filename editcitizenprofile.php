<!DOCTYPE html>
<html>
<head>
<!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Mobirise v3.12.1, mobirise.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assets/images/logo-128x128.png" type="image/x-icon">
<meta name="description" content="citizen profile edit">
<title>citizen profile edit</title>
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
<?php
    //Start the session to see if the user is authenticated user.
    session_start();
    //Check if the user is authenticated first. Or else redirect to login page
    if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
    {
    }
    else
    {
        header('location:login_form.php');
        exit();
    }
    ?>
<section id="ext_menu-19">

<nav class="navbar navbar-dropdown navbar-fixed-top">
<div class="container">

<div class="mbr-table">
<div class="mbr-table-cell">

<div class="navbar-brand">
<a href="https://mobirise.com" class="navbar-logo"><img src="assets/images/logo-128x128.png" alt="Mobirise"></a>

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

<section class="engine"><a rel="external" href="https://mobirise.com">Mobirise</a></section><section class="mbr-section mbr-section__container mbr-after-navbar" id="buttons1-17" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="text-xs-center"><a class="btn btn-primary" href="https://mobirise.com/mobirise-free-win.zip">Edit Profile</a> </div>
</div>
</div>
</div>

</section>

<section class="mbr-section article mbr-parallax-background" id="msg-box8-1a" style="background-image: url(assets/images/desert.jpg); padding-top: 120px; padding-bottom: 120px;">

<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
</div>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 text-xs-center">
<h3 class="mbr-section-title display-2">Edit Your Profile</h3>
<div class="lead"></div>

</div>
</div>
</div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="deltapieditor-1b" style="background-color: rgb(255, 255, 255);">

<style>p{color:white;}</style>
<div class="mbr-section__container mbr-section__container--isolated container">
<div class="row block">
<div class="tiny">
<form id="login-form" action="edit_citizen.php" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">New Username</label>
<div class="col-md-5">
<input id="textinput" name="textinput" type="text" placeholder="Username" class="form-control input-md">

</div>
</div>

<div class="row"><br><br><p></p></div>

<!-- Phone no input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">New Phone No</label>
<div class="col-md-5">
<input id="phone" name="phone" type="number" placeholder="Phone no" class="form-control input-md">

</div>
</div>

<div class="row"><br><br><p></p></div>
<!-- Password input-->
<div class="form-group">
<label class="col-md-4 control-label" for="passwordinput">New Password</label>
<div class="col-md-5">
<input id="passwordinput" name="passwordinput" type="password" placeholder="Password" class="form-control input-md">

</div>
</div>

<div class="row"><br><br></div>

<!-- File Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="filebutton">Change Profile Picture</label>
<div class="col-md-4">
<input id="filebutton" name="filebutton" class="input-file" type="file">
</div>
</div>

<div class="row"><br></div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="singlebutton"></label>
<div class="col-md-4">
<input type="submit" name="update" class="btn btn-primary" value="Update"></input>
</div>
</div>

</fieldset>
</form>
</div>
</div>
</div>

</section>

<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-18" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">

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
<input type="hidden" value="ektXw4CR/hJ6PDoOJizlmWl/34L/2yJbi2Xv5SaDDbkmDwE6QEZP87obZ6K9pSv1eeuk/4ziht/C8jM6gP5JGOY/lSiW4iiMz/WZSfxurwImzkuY87fEd5QLth9gwfD6" data-form-email="true">

<div class="form-group">
<label class="form-control-label" for="contacts4-18-email">Email<span class="form-asterisk">*</span></label>
<input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-18-email">
</div>
<div class="form-group">
<label class="form-control-label" for="contacts4-18-phone">Phone</label>
<input type="tel" class="form-control input-sm input-inverse" name="phone" data-form-field="Phone" id="contacts4-18-phone">
</div>
<div class="form-group">
<label class="form-control-label" for="contacts4-18-message">Message</label>
<textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-18-message"></textarea>
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
<script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
<script src="assets/jarallax/jarallax.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>


<input name="animation" type="hidden">
</body>
</html>
