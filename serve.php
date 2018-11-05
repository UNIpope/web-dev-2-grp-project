<!-- 
name: 	jack duggan
stu:	C16350866
module:	Webdevelopment and internet app
Os:		windows 10
browser:Firefox
-->




<?php 
	session_start();
	$_SESSION['success'] = "";
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ice_cream_db');
	
	//check con
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: ". mysqli_connect_errno($db);
	}

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// register user or error 
		if ($_POST['password_1'] == $_POST['password_2']) {	
		
			//insert query
			$query = "INSERT INTO user(name, email, password) 
			VALUES
			('$_POST[name]','$_POST[email]', '$_POST[password_1]')";
			
			//run query and check
			if (!mysqli_query($db,$query))
			{
				die('Error: '. mysqli_error($db));
			}
			else{
				//update session and return to main pg
				$_SESSION['name'] = $_POST[username];
				$_SESSION['success'] = "You are now logged in";
				header('location: IceCreamMenu.php');
			}
		}
		else
		{
			echo "passwords dont match";
		}//end if
	}
	
	// LOGIN USER
	if (isset($_POST['login_user'])) {
		//select usernames and pass.
		$query = "SELECT * FROM user
		WHERE 
		name='$_POST[username]' AND password='$_POST[password]'";
		
		//run query 
		if (!mysqli_query($db,$query)){
			die('Error: '. mysqli_error($db));
		}
		else{
			//if there are results count no of results
			if($results = mysqli_query($db, $query)){
				$rowcount=mysqli_num_rows($results);
					
				//check if there is a result
				if ($rowcount == 1) {
					//match log user in
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['success'] = "You are now logged in";
					header('location: IceCreamMenu.php');
				}else {
					printf("the username and password do not match");
				}//end count
			}//end results
		}//end if my sql query 		
	}//end login user
?>