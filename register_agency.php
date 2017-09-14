
<?php 
	/*Connect to mysql server*/ 
	define("DB_SERVER","localhost");
	define("DB_USER","root");
	define("DB_PASSWORD","");
	define("DB_DATABASE","db");
	$link = mysql_connect('localhost', 'root', '','db');  
	
	/*Check link to the mysql server*/ 
	if(!$link){ 
		die('Failed to connect to server: ' . mysql_error());
	} 
	else{
		/*Select database*/ 
		$db = mysql_select_db('db'); 
		if(!$db){
			die("Unable to select database"); 
		}
		else{
			$count=0;
			
			if ($_POST['register-submit'] == 'Register Now'){ 
			//Collect POST values 
				$name = $_POST['agencyname']; 
				$field = $_POST['agencyfield']; 
				$email=$_POST['agencyemail'];
				$username=$_POST['agencyusername'];
				$phone=$_POST['agencyephone'];
				$password=$_POST['agencypassword'];
				
				
				if($name && $field && $phone && $username && $password && $email){ 
					
					//Create query (if you have a Logins table the you can select login id and password from there)
					$qry="INSERT INTO signup (username,password,email,type) VALUES('$username','$password','$email','Agency')"; 
					$result=mysql_query($qry); 
					$qry1="INSERT INTO agency (aname,agencyField,aphone,username) VALUES('$name','$field','$phone','$username')";
					$result1=mysql_query($qry1); 
					
					if($result && $result1){
						echo '<center>You have been succesfully Registered!!!</center>'; 
						session_start(); 
						$_SESSION['IS_AUTHENTICATED'] = 1;
						$qry="SELECT aid FROM agency WHERE username = '$username'"; 	
						$result=mysql_query($qry);	
						$aid = mysql_fetch_assoc($result);
						$_SESSION['aid'] = $cid['aid'];
						header('location: agencyhome.php');
					}
					else{
						echo '<center>Register was not successfull!!!</center>'; 
						exit(); 
					}
					
					
				}
				else{ 
					//Login failed 
					//include('login_form.php'); 
					echo '<center>Cannot Register. Try Again!!!</center>'; 
					exit(); 
				} 
			} 
			
			
			
		} 
		
	}	
	

?>
