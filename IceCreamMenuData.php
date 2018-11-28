<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com
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
		$price = $_POST["price"];
		$quantity = $_POST["quantity"];
		$op = $_POST["message"];



		//inserting in the table
		$sql = "INSERT INTO basket(name, price, qty, op_msg) VALUES ('$name','$price','$quantity', '$op')";

		

		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}
		else
		{
	
			
			header("Location: IceCreamMenu.php");
		}
		
 ?>


</body>
</html>