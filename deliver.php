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


		require('delete.php');
		?>
	<br><br><br>
	<h1>Ordered!!<span class="glyphicon glyphicon-ice-lolly"></span><span class="glyphicon glyphicon-ice-lolly-tasted"></span></h1>

	<p>Deliver Address:

		<div style="margin-left: 5em;">
		<p>Street: <?php echo $login_street; ?></p>
		<p>County: <?php echo $login_city; ?></p>
		<p>Country: <?php echo $login_country;  ?></p>
		<p>Post Code: <?php echo $login_postcode;  ?></p>
		<p>Phone number: <?php echo $login_phone;  ?></p>
		
		</div>
	</p>


</body>
</html>