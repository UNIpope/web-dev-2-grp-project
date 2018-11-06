<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com, getbootstrap.com
-->


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>


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

	<style type="text/css">
		body
		{
			background-image: url("logpic4.jpg");
			background-repeat: no-repeat;
  			background-size: cover;
  			background-position: center;
		}
	</style>



</head>
<body>
	<br><br>
	<div class="container" style="width: 60%;">
		
		<div class="panel-group" >
			<div class="panel panel-dark" style="background-color: rgba(0,0,0,0.2);">

				<div class="panel-heading" style="background-color: rgba(0,0,0,0.2); text-align: center; color: white;"><h1>Register</h1></div>

					<div class="panel-body">

						<form method="post" action="serve.php">
								
							<div class="form-group">

								<label for="usernameinput">Username: </label>
								<input type="text" class="form-control" name="name" placeholder="Enter Username">
							</div>


							<div class="form-group">
								
								<label for="InputEmail1">Email address: </label>
							    
							    <input type="email" class="form-control" name="email" placeholder="Enter email">
							    
							    
							</div>
							

							<div class="form-group">
							    <label for="InputPassword1">Password: </label>
							    <input type="password" name="password_1" class="form-control" placeholder="Enter Password">

							    <small class="form-text text-muted" style="color: grey;">  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
							</div>


							<div class="form-group">
							    <label for="InputPassword2">Re-Password: </label>
							    <input type="password" name="password_2" class="form-control" placeholder="Enter Password">

							    
							</div>

							<br>
							<div class="col-sm-3" style="float: right;">
								<button type="submit" class="btn btn-dark btn-lg btn-block" name="reg" style="background-color: #F3C55D;">Register</button>
							</div>
							

						</form>
						<br>
						<div> 
							<a href="IceCreamMenu.php">Back</a>
						</div>
					</div><!--panel body-->
				</div><!--panel heading-->
			</div><!-- panel-->
	</div><!--panel group-->


	</div><!--container-->

</body>
</html>