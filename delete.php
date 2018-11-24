<?php 

// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ice_cream_db');
	
	//check con
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: ". mysqli_connect_errno($db);
	}

	$sql = "DELETE FROM `basket` WHERE 1";

	//run query and check
	///if its not working
	if (!mysqli_query($db,$sql))
	{
		die('Error: '. mysqli_error($db));
	}
?>