<?php 
	//create a connect to the database
		$con = mysqli_connect("localhost", "root", "","ice_cream_db");

		//check connection
		if (mysqli_connect_errno())
		{
			#fail to connects
			echo "failed to connect".mysqli_connect_errno();
		}
?>