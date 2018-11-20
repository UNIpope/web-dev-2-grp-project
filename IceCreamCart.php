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
	<div class="jumbotron" style="background-color: lightblue;">
		<h2 style="text-align: center;">CHECKOUT</h2>
	</div>

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
		<!-- start the table-->
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<!---defines the tittle -->
						<th scope="col"></th>
						<th scope="col">Name</th>
						<th scope="col">Quantity</th>
						<th scope="col">Total</th>
						<th scope="col">Instructions</th>
						<th scope="col"> </th>

					</tr>
				</thead>

		<?php
		//select all from the cart db that using added in
		$all = "SELECT name, price, qty, op_msg FROM basket";

		//do the query 
		$re = mysqli_query($con, $all);
		$sum = 0;



		//if not empty
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
						<th><button onclick="deleto(this)"><span class="glyphicon glyphicon-trash"></span></button></th>
					</tr>
				</tbody>

				<?php


				
				
			}

			?>
			</table>
			</div><!--table responsive -->
			
		

			<div class="jumbotron" style="background-color: lavender;">
				<h3 style="text-align: center;">Total price: <?php echo $sum;?></h3>

				<a class="btn btn-dark btn-lg" href="IceCreamMenu.php" role="button" style="float: left; background-color: pink; color: black;"><span class="glyphicon glyphicon-home"></span></a>

				<a class="btn btn-dark btn-lg" href="#" role="button" style="float: right; background-color: pink; color: black;">P    A     Y</a>

			</div>


			
			<?php

		}
		//if basket is empty
		else
		{
			?>
			<div class="jumbotron">
				<a href="IceCreamMenu.php" style="float: right;"><span class="glyphicon glyphicon-home"></span></a>
				<br>
				<h3>Empty Cart!</h3>
			</div>
			<?php
		}



		//turn of the connection
		mysqli_close($con);
	
		?>
		

		
			
		


</div><!-- container-->
</body>
</html>