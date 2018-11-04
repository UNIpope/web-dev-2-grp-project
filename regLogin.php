<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com
-->

<?php include('serve.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login reg</title>

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

	<link rel="stylesheet" type="text/css" href="IceCreamMenu.css">
</head>

<!-- for scrolling and the navbar is keeping track-->
<body>
	<?php
		//navbar
		require('header.php');
	?>
	<br>
	<br>
	<br>
	<br>
	
	<div class="jumbotron" id="login" style="background-color: lavenderblush;">
		<div style="width:400px; float:left;">
			<form method="post">

					<label>Username</label>
					<input type="text"  name="username" required/>

					<br>

					<label>Password</label>
					<input type="password"  name="password" required/>

					<br> <br>

					<button type="submit" class = "enter"  name="login_user">Login</button>

			</form>
		</div>

		<div style="width:400px; float:right;">

			<form method="post">

				<label>Username</label>
				<input type="text" name="username" required/>

				<br>

				<label>Email</label>
				<input type="email" name="email" required/>

				<br>

				<label>Password</label>
				<input type="password" name="password_1" required/>

				<br>

				<label>Confirm password</label>
				<input type="password" name="password_2" required/>
				
				<br>

				<button type="submit" class = "enter" name="reg_user">Register</button>
			</form>

		</div>
	</div>
</body>
</html>	
	
	
	

	
	