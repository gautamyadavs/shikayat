<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="shortcut icon" href="assets/images/logo-128x128.png" type="image/x-icon">
                            <meta name="description" content="citizen profile">
                                <title>citizen profile</title>
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
                if(!$link)
                {
                    die('Failed to connect to server: ' . mysql_error());
                }
                /*Select database*/
                $db = mysql_select_db('db',$link);
                if(!$db)
                {
                    die("Unable to select database");
                }
            }
            ?>
            <section id="ext_menu-x">
            
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
        
        <section class="engine"><a rel="external" href="#"></a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="deltapieditor-12" style="background-color: rgb(255, 255, 255);">
            
            <style>
                
                /* ==========================================================================
                 Author's custom styles
                 ========================================================================== */
            
            body
            {
                font-family: 'Open Sans', sans-serif;
            }
            
            .fb-profile img.fb-image-lg{
                z-index: 0;
                width: 100%;
                margin-bottom: 10px;
            }
            
            .fb-image-profile
            {
                margin: -90px 10px 20px 80px;
                z-index: 9;
                width: 20%;
            }
            
            /***
             Bootstrap Line Tabs by @keenthemes
             A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
             Licensed under MIT
             ***/
            
            /* Tabs panel */
            .tabbable-panel {
                border:1px solid #eee;
                padding: 10px;
            }
            
            /* Default mode */
            .tabbable-line > .nav-tabs {
                border: none;
                margin: 0px;
            }
            .tabbable-line > .nav-tabs > li {
                margin-right: 2px;
            }
            .tabbable-line > .nav-tabs > li > a {
                border: 0;
                margin-right: 0;
                color: #737373;
            }
            .tabbable-line > .nav-tabs > li > a > i {
                color: #a6a6a6;
            }
            .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
                border-bottom: 4px solid #fbcdcf;
            }
            .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
                border: 0;
                background: none !important;
                color: #333333;
            }
            .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
                color: #a6a6a6;
            }
            .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
                margin-top: 0px;
            }
            .tabbable-line > .nav-tabs > li.active {
                border-bottom: 4px solid #f3565d;
                position: relative;
            }
            .tabbable-line > .nav-tabs > li.active > a {
                border: 0 !important;
                color: #333333;
            }
            .tabbable-line > .nav-tabs > li.active > a > i {
                color: #404040;
            }
            .tabbable-line > .tab-content {
                margin-top: -3px;
                background-color: #fff;
                border: 0;
                border-top: 1px solid #eee;
                padding: 15px 0;
            }
            .portlet .tabbable-line > .tab-content {
                padding-bottom: 0;
            }
            
            /* Below tabs mode */
            
            .tabbable-line.tabs-below > .nav-tabs > li {
                border-top: 4px solid transparent;
            }
            .tabbable-line.tabs-below > .nav-tabs > li > a {
                margin-top: 0;
            }
            .tabbable-line.tabs-below > .nav-tabs > li:hover {
                border-bottom: 0;
                border-top: 4px solid #fbcdcf;
            }
            .tabbable-line.tabs-below > .nav-tabs > li.active {
                margin-bottom: -2px;
                border-bottom: 0;
                border-top: 4px solid #f3565d;
            }
            .tabbable-line.tabs-below > .tab-content {
                margin-top: -10px;
                border-top: 0;
                border-bottom: 1px solid #eee;
                padding-bottom: 15px;
            }
            
            .menu_title {
                padding: 15px 10px;
                border-bottom: 1px solid #eee;
                margin: 0 5px;
            }
            
            
            @media (max-width:768px){
                
                .fb-profile-text>h1{
                    font-weight: 700;
                    font-size:16px;
                }
                
                .fb-image-profile
                {
                    margin: -45px 10px 0px 25px;
                    z-index: 9;
                    width: 20%;
                }
            }</style>
            <?php
                $cid= $_SESSION['cid'];
                /*Create query*/
                $qry = 'SELECT * FROM citizen WHERE cid='.$cid;
                /*Execute query*/
                $result = mysql_query($qry);
                while ($row = mysql_fetch_assoc($result))
                {
                echo '<div class="mbr-section__container mbr-section__container--isolated container">
                <div class="row block">
                <div class="tiny">
                <div class="container-fluid"><p></p><br><p></p><br><p></p></div>
                <div class="container-fluid">
                <div class="row">
                <div class="fb-profile">'
                 . '<img src="data:image/jpeg;base64,' . base64_encode($row['dp']) . '" width="250" height="250">'.
                '</div>
                </div>
                </div> <!-- /container fluid-->
                <div class="container-fluid">
                <div class="col-sm-8">
                <div class="fb-profile-text">
                <h1>'.$row['cname'].'</h1>
                </div>
                <div class="tab-pane active" id="tab_default_1">
                <h4>Username</h4>
                <p>'.$row['username'].'</p>
                <h4>Phone </h4>'.$row['cphone'].'</div>
                </div>
                </div></div>
                </div>
                </div>';
                }
            ?>
            
        </section>
        
        <section class="mbr-section mbr-section__container" id="buttons1-15" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
            
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-xs-center"><form id="login-form" action="editcitizenprofile.php" method="post"><input type="submit" name="update" class="btn btn-primary" value="Edit Profile"></input></form> </div>
                    </div>
                </div>
            </div>
            
        </section>
        
        <section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-w" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
            
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
                            <input type="hidden" value="02UvmG5qPuN1C4OVRS5cMYMoWgDuuMxCXAl1iV3L8+bGAQqlu4hVK74tC3dwsCxJbmfArTCXjBhJYQA/RzXa4uhA6hcassnvP3YVHB3qAiuRJjP34ftFXtOXGdPAQQfv" data-form-email="true">
                                
                                <div class="form-group">
                                    <label class="form-control-label" for="contacts4-w-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-w-email">
                                        </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="contacts4-w-phone">Phone</label>
                                    <input type="tel" class="form-control input-sm input-inverse" name="phone" data-form-field="Phone" id="contacts4-w-phone">
                                        </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="contacts4-w-message">Message</label>
                                    <textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-w-message"></textarea>
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
        <script src="assets/dropdown/js/script.min.js"></script>
        <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/theme/js/script.js"></script>
        <script src="assets/formoid/formoid.min.js"></script>
        
        
        <input name="animation" type="hidden">
            </body>
</html>
