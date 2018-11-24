<?php 

	//create a connect to the database
	$con = mysqli_connect("localhost", "root", "","ice_cream_db");

	//check connection
	if (mysqli_connect_errno())
	{
		#fail to connects
		echo "failed to connect".mysqli_connect_errno();
	}

	session_start();
	$user = $_SESSION['login_user'];

	$sql = "SELECT name, password, email, street, city, country, postcode, phone FROM user WHERE name ='$user'";
	$ses_sql=mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session =$row['name'];
	$login_password =$row['password'];
	$login_email =$row['email'];


	$login_street = $row['street'];
	$login_city = $row['city'];
	$login_country = $row['country'];
	$login_postcode = $row['postcode'];
	$login_phone = $row['phone'];


	
	if(!isset($login_session))
	{
		mysqli_close($con); // Closing Connection
	}




		


?>