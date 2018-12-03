<!-- 
name: 	jack duggan
stu:	C16350866
module:	Webdevelopment and internet app
Os:		windows 10
browser:Firefox
-->

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8"> 

	<!-- rsponsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- include CDN(Content Delivery Network) MaxCDN provides CDN support for Bootstrap's CSS and JavaScript. You must also include jQuery-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<!-- all modal is from getbootstrap.com-->
<!-- for incorrects-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalIncorrect">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Incorrect Password or Username</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>Paswword or username is incorrect. Please try again.</p>
		      </div>
		      <div class="modal-footer">
		        <a href="login.php" class="btn btn-default">Try Again</a>
		      </div>
		    </div>
		  </div>
</div><!--modal-->

<!--logged in modal-->
<div class="modal fade" tabindex="-1" role="dialog" id="modallogin">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Login Successfully</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>You are now logged in</p>
		      </div>
		      <div class="modal-footer">
		       <a href="user.php" class="btn btn-default">Continue</a>
		      </div>
		    </div>
		  </div>
</div><!--modal-->



<?php 
	session_start();
	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ice_cream_db');
	
	//check con
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: ". mysqli_connect_errno($db);
	}

	// REGISTER USER
	if (isset($_POST['reg'])) 
	{


		// register user or error 
		if ($_POST['password_1'] == $_POST['password_2']) 
		{	
		

			//insert query
			$query = "INSERT INTO user(name, email, password, street, city, country, postcode, phone) 
			VALUES('$_POST[name]', '$_POST[email]', '$_POST[password_1]', '$_POST[street]' , '$_POST[county]', '$_POST[country]', '$_POST[postcode]', '$_POST[phone]')";


			//run query and check
			if (!mysqli_query($db,$query))
			{
				die('Error: '. mysqli_error($db));
			}
			else{

				//update session and return to main pg
				$_SESSION['login_user'] = $_POST[username];
				
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
			if($results = mysqli_query($db, $query))
			{
				$rowcount=mysqli_num_rows($results);
					
				//check if there is a result
				if ($rowcount == 1) {

					//match log user in
					$username = $_POST['username'];

					//assigning the login user
					$_SESSION['login_user'] = $username;

					//triggering the modal to display a msg
					echo "<script type='text/javascript'>
							$(document).ready(function(){
							$('#modallogin').modal('show');
							});
							</script>";

					
				}else 
				{
					//triggering the modal to display a msg
					echo "<script type='text/javascript'>
							$(document).ready(function(){
							$('#modalIncorrect').modal('show');
							});
							</script>";

					

				}//end count
			}//end results
		}//end if my sql query 		
	}//end login user


	mysqli_close($db); // Closing Connection
?>




</body>
</html>

