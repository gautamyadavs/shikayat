
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
			if ($_POST['login-submit'] == 'login'){ 
			//Collect POST values 
				$username = $_POST['username']; 
				$password = $_POST['password']; 
				if($username && $password){ 
					
					//Create query (if you have a Logins table the you can select login id and password from there)
					$qry="SELECT * FROM signup WHERE username = '$username' AND password = '$password' AND type='Worker'"; 
					//Execute query 
					$result=mysql_query($qry); 
					//Check whether the query was successful or not 
					while ($row = mysql_fetch_assoc($result)){ 
						if($row['username']==$username && $row['password']==$password)
							$count=1;
					}
					
				}
				else{ 
					//Login failed 
					include('incorrectpassword.php'); 
					echo '<center>Incorrect Username or Password !!!</center>'; 
					exit(); 
				} 
			} 
			
			//if query was successful it should fetch 1 matching record from the table. 
			if( $count == 1){ 
			
				//Login successful set session variables and redirect to main page. 
				session_start(); 
				$_SESSION['IS_AUTHENTICATED'] = 1;
				$qry="SELECT wid FROM worker WHERE username = '$username'"; 	
				$result=mysql_query($qry);	
				$wid = mysql_fetch_assoc($result);
				$_SESSION['wid'] = $wid['wid'];
				header('location: workerhome.html');
				
			} 
			else{ 
				//Login failed 
				include('incorrectpassword.php'); 
				echo '<center>Incorrect Username or Password !!!</center>'; 
				exit(); 
			} 
			
		} 
		
	}	
	

?>
