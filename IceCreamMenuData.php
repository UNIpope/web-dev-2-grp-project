<!--
	author : Buchita Gitchamnan+Jack
	Assignment topic : ICe cream

-->
<!DOCTYPE html>
<html>
<head>
	<title>Menu Data</title>
</head>
<body>
	<?php 


		$con = mysqli_connect("localhost", "root", "","ice_cream_db");

		//check connection
		if (mysqli_connect_errno())
		{
			echo "failed to connect".mysqli_connect_errno();
		}

		#variable
		$name = $_POST["name"];
		$price = 5;
		$quantity = $_POST["quantity"];

		//inserting in the table
		$sql = "INSERT INTO ice_cream(name, price, qty) VALUES ('$name','$price','$quantity')";

		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}else
		{
			header("Location: IceCreamMenu.php");
		}
		
 ?>


</body>
</html>