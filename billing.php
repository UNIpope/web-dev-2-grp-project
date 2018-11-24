<?php 
	

	include('session.php');

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ice_cream_db');
	
	//check con
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: ". mysqli_connect_errno($db);
	}

	


	//variables
	$street = $_POST['street'];
	$county = $_POST['county'];
	$country = $_POST['country'];
	$postcode = $_POST['postcode'];
	$phone = $_POST['phone'];


	$query = "UPDATE USER SET street = '$street', 
							city = '$county', 
							country = '$country', 
							postcode = '$postcode',
							phone = '$phone'
							
				WHERE name = '$login_session'";


	if (!mysqli_query($db,$query))
	{
		die('Error: '. mysqli_error($db));
	}
	else
	{
		header('location: deliver.php');
	}


?>