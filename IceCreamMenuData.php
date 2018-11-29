<!-- 
	Website: Ice Cream Store
	Purpose: Adds in the order into the db
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

		//declare a connection
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

	

		//searches through the db for the same ice cream name.
		//returns a string of num
		$re = mysqli_query($con, "SELECT qty FROM BASKET WHERE name = '$name'");

		//if there is no result in the search
		if (!mysqli_num_rows($re)) 
		{
			
			//inserts in the table
			$sql = "INSERT INTO basket(name, price, qty, op_msg) VALUES ('$name','$price','$quantity', '$op')";


			//puts data in the table
			if (!mysqli_query($con, $sql))
			{
				die('Error: '. mysqli_error($con));
			}
			else
			{
				//brings to the main page
				header("Location: IceCreamMenu.php");
			}

		
		}
		//if there is a match
		else
		{
			//get the result as an int instead of string..
			$row = mysqli_fetch_row($re);
			$q = $row[0];

			//add the quantity up
			$total = $q + $quantity;

			//update the quantity
			$u = "UPDATE basket SET qty = $total WHERE name = '$name'";
			
			//run query
			$re = mysqli_query($con, $u);

			header("Location: IceCreamMenu.php");
					
		}


		//closes the connection
		mysqli_close($con);
		
 ?>


</body>
</html>