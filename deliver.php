<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


	<div class="container">

		<?php
			include('session.php');
			//navbar
			require('header2.php');
		?>
	<br><br><br>
	<h1 style="text-align: center;"><i class="glyphicon glyphicon-grain"></i>THANK YOU FOR SHOPPING WITH US<i class="glyphicon glyphicon-grain"></i></h1>

	<div class="jumbotron" style="background-color: #E1C5D3;">
	<h2>Ordered!!<span class="glyphicon glyphicon-ice-lolly"></span><span class="glyphicon glyphicon-ice-lolly-tasted"></span></h2>

	<p>Deliver Address:

		<div style="margin-left: 5em;">
		<p>Street: <?php echo $login_street; ?></p>
		<p>County: <?php echo $login_city; ?></p>
		<p>Country: <?php echo $login_country;  ?></p>
		<p>Post Code: <?php echo $login_postcode;  ?></p>
		<p>Phone number: <?php echo $login_phone;  ?></p>
		


		</div>
	</p>
</div>


	<div class="jumbotron" style="background-color: #A4C4D7;">
		<h2>Your order details:</h2>
	<p>
		<?php 

			//declares the db connection
			require('connection.php');

			
			//selects all from the cart db that using added in
			$all = "SELECT name, price, qty, op_msg FROM basket";

			//runs query 
			$re = mysqli_query($con, $all);
			$total = 0;



			//if not empty
			if (mysqli_num_rows($re) > 0) 
			{
				?>
				<!-- start responsiv table-->
				<div class="table-responsive">
					<!--table style...when hover goes diff colour-->
					<table class="table table-hover">
						<!--headings of the table-->
						<thead>
							<tr>
								<!---defines the tittle -->
								<th scope="col"></th>
								<th scope="col">Name</th>
								<th scope="col">Quantity</th>

							</tr>
						</thead>

				<?php

				//while there is an item in the db
				while ($row = mysqli_fetch_assoc($re)) 
				{ 
					//variables
					$name = $row["name"].".png"; //picture

					?>

					<!--inside the table -->
					<tbody>
						<tr>
							<th><img src="<?php echo $name?>" style="width: 10%; height: auto;" ></th>
							<th><?php echo $row["name"]?></th>
							<th><?php echo $row["qty"]?></th>

						</tr>
					</tbody>
				<?php		
				}
			}
			?>
			</table>
			</div><!--table responsive -->
	</p>
</div>

	<?php
		require('delete.php');
	?>


</body>
</html>