<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com
-->
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>

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


	<!-- start the database part-->
	<?php
		
		//create a connect to the database
		$con = mysqli_connect("localhost", "root", "","ice_cream_db");

		//check connection
		if (mysqli_connect_errno())
		{
			#fail to connects
			echo "failed to connect".mysqli_connect_errno();
		}

		$all = "SELECT name, price, qty, op_msg FROM ice_cream";
		$re = $con->query($all);
		$sum = 0;

		if (mysqli_num_rows($re) > 0) 
		{
			
			while ($row = mysqli_fetch_assoc($re)) 
			{ ?>
				<div class="container">
				<div class="col_sm_6">
					<div class="thumbnail">
						<h3><?php echo $row["name"];?></h3>
					</div>
					<div class="caption">
						<?php 
						$totalprice =0;

						echo $row["qty"]."x".$row["price"]."<br>" ;
						$totalprice = $totalprice+($row["price"]*$row["qty"]);
						$sum = $sum+$totalprice;
						?>
						<p>sum: <?php echo $totalprice; ?></p>

					</div>
				</div>
			</div>
				
		<?php	
			}
			echo "total: ".$sum;
		}
		else
		{
			echo "0 result";
		}
/*
		#select the name price and qty from the database
		$sql = " SELECT name, price, qyt, op_msg FROM ice_cream";

		#get the selected stuff from the databse
		$result = mysqli_query($con, $sql);

		#when the table is not emoty
		if(mysqli_num_rows($result) > 0)
		{
			#declare a variable to hold the total price
			$totalprice = 0;

			#output data of each row
			while($row = mysqli_fetch_assoc($result))
			{
				#display the qty and the name of the order in the tbale
				echo $row["qty"]."x".$row["name"]."<br>";
				
				#calculate the total price
				$totalprice = $totalprice+($row["price"]*$row["qty"]);
				
			}//end while loop

		}//end if
		else
		{
			#cart is empty
			echo("Cart is empty");
		}
		#display the total price
		echo "<br><br>Total: ".$totalprice;
*/
		#close thee connection
		mysqli_close($con);
	?>

</body>
</html>
