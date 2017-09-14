<?php 
//Start the session to see if the user is authenticated user. 
session_start();
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
} 
else{ 
exit(); 
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
$cid=$_SESSION["cid"];
$coid=$_SESSION['coid'];
		$qry='INSERT INTO vote (cid, coid) VALUES ("'.$cid.'","'.$coid.'")' ;
		$result = mysql_query($qry);
		//echo $name['cname'],$c;
		//$name=$c;
		
		$count=0;
		$qry = "SELECT cid FROM vote WHERE coid='".$coid."'";
		$result = mysql_query($qry);
		while ($row = mysql_fetch_assoc($result)){
			$count=$count+1;
			
		}
		echo $count;
		
		$qry='UPDATE complain SET votes = '.$count.' WHERE coid = "$coid"' ;
		$result = mysql_query($qry);
		//echo $name['cname'],$c;
		//$name=$c;
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

