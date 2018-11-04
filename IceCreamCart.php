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
<div class="container">
	<h1 style="text-align: center;">CHECKOUT</h1>

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

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">Name</th>
						<th scope="col">Quantity</th>
						<th scope="col">Total</th>
						<th scope="col">Instructions</th>

					</tr>
				</thead>

		<?php

		$all = "SELECT name, price, qty, op_msg FROM ice_cream";
		$re = mysqli_query($con, $all);
		$sum = 0;

		if (mysqli_num_rows($re) > 0) 
		{

			
			while ($row = mysqli_fetch_assoc($re)) 
			{ 
				$name = $row["name"].".png";
				$totalprice =0;
				$totalprice = $totalprice+($row["price"]*$row["qty"]);
				$sum = $sum+$totalprice;
				?>

				<tbody>
					<tr>
						<th><img src="<?php echo $name?>" style="width: 10%; height: auto;" ></th>
						<th><?php echo $row["name"]?></th>
						<th><?php echo $row["qty"]?></th>
						<th><?php echo $totalprice ?></th>
						<th><?php echo $row["op_msg"]?></th>
					</tr>
				</tbody>

				<?php


				
				
			}

			?>
			</table>
			</div><!--table responsive -->
			<?php
			echo "Totalprice: ".$sum;

		}
		
		
		else
		{
			echo "0 result";
		}

		//turn of the connection
		mysqli_close($con);
	
		?>

	
			
		


</div><!-- container-->
</body>
</html>