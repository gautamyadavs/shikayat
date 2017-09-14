<?php
    //Start the session to see if the user is authenticated user.
    session_start();
    //Check if the user is authenticated first. Or else redirect to login page
    if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
    {
        // Code to be executed when 'Update' is clicked.
        $cid=$_SESSION['cid'];
            $name = $_POST['textinput'];
            $dp= $_POST['filebutton'];
            $cphone = $_POST['phone'];
            $password = $_POST['passwordinput'];
            //$update = "UPDATE citizen SET cid = '$cid'";
            if($_POST['textinput']){
                $update = "UPDATE citizen SET cname = '$name' WHERE cid = '$cid'";
            }
            if($_POST['filebutton']){
                $update = "UPDATE citizen SET dp = '$dp' WHERE cid = '$cid'";
            }
            if($_POST['phone']){
                $update = "UPDATE citizen SET cphone = '$cphone' WHERE cid = '$cid'";
            }
            if($_POST['passwordinput']){
                $update = "UPDATE signup, citizen SET password = '$password' WHERE citizen.username = signup.username AND cid = '$cid'";
            }
            //Connect to mysql server
            define("DB_SERVER","localhost");
            define("DB_USER","root");
            define("DB_PASSWORD","");
            define("DB_DATABASE","db");
            $link = mysql_connect('localhost', 'root', '', 'db');
            //Check link to the mysql server
            if(!$link){
                die('Failed to connect to server: ' . mysql_error());
            }
            //Select database
            $db = mysql_select_db('db',$link);
            if(!$db){
                die("Unable to select database");
            }
            //Execute query
            $results = mysql_query($update);
            if($results == FALSE)
                echo mysql_error() . '<br>';
            else
                echo mysql_info();            

    }
    ?>
<html>
   <head>
   
      <script type="text/javascript">
         <!--
            function Redirect() {
               window.location="citizenhome.php";
            }
            
            document.write("You will be redirected to main page in 10 sec.");
            setTimeout('Redirect()', 1);
         //-->
      </script>
      
   </head>
   
   <body>
   </body>
</html>