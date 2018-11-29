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

	<style type="text/css">
		body
		{
			background-image: url("pink3.jpg");
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
								<input type="text" class="form-control" name="name" placeholder="Enter Username" required>
							</div>


							<div class="form-group">
								
								<label for="InputEmail1">Email address: </label>
							    
							    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
							    
							    
							</div>
							

							<div class="form-group">
							    <label for="InputPassword1">Password: </label>
							    <input type="password" name="password_1" class="form-control" placeholder="Enter Password" required>

							    <small class="form-text text-muted" style="color: #5C585A;">  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
							</div>


							<div class="form-group">
							    <label for="InputPassword2">Re-Password: </label>
							    <input type="password" name="password_2" class="form-control" placeholder="Enter Password" required>

							    
							</div>

							<div class="form-group">
								<label for="street">Street Address:</label>
								<input type="text" class="form-control" name="street" id="street" placeholder="Street Address" required>
							</div>


							<div class="row">
								<div class="form-group col-sm-4">
									<label for="county">County: </label>
									<input type="text" class="form-control" name="county" id="county" placeholder="County" required>
								
							
								</div>

							
								<div class="form-group col-sm-6">
									
										<label for="country" >Country: </label>
										<select id="country" name="country" class="form-control" required>
											<option>Ireland</option>
										</select>
									
								</div>

								<div class="form-group col-sm-2">
							      <label for="postcode">PostCode: </label>
							      <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Code" >
							    </div>
							</div>


						  	<div class="form-group">
							    <label for="phone">Phone Number: </label>
							    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" required>
						  	</div>


							<br>
							<div class="col-sm-3" style="float: right;">
								<button type="submit" class="btn btn-dark btn-lg btn-block" name="reg" style="background-color: pink;">Register</button>
							</div>
							

						</form>
						<br>
						<div> 
							<h3><a href="IceCreamMenu.php" style="color: #F2E7EC;"><span class="glyphicon glyphicon-home"></span></a></h3>
						</div>
					</div><!--panel body-->


					<div class="panel-footer" style="background-color: rgba(0, 0, 0, 0.2); text-align: center;"> 
				
					
					
					<a href="login.php" style="color: #F2E7EC;"><h4>Login?</h4></a>

				</div>
				</div><!--panel heading-->
			</div><!-- panel-->
	</div><!--panel group-->


	</div><!--container-->

</body>
</html>