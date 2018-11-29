<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com, getbootstrap.com
-->


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php 
	//check if logged in
		session_start();
		if(isset($_SESSION['login_user']))
		{
			header("location: user.php");
		}
	?>


	<meta charset="utf-8"> 

	<!-- rsponsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--bootstrap -->
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

<br><br><br><br><br><br><br>
	
	<!--start the panel-->
	<div class="container" style="width: 45%;">
		<!--heading login-->
		<div class="panel-group">

			<!---opacity-->
			<div class="panel panel-dark" style="background-color: rgba(0,0,0,0.2);">

				<div class="panel-heading" style="background-color: rgba(0,0,0,0.2);">
					<h1 style="text-align: center; color: #F2E7EC; ">Login</h1></div>

				<!--form starts-->
				<div class="panel-body">
					<br>
					<form method="post" action="serve.php" >
						<!-- using row to put everything on a line-->
						<div class="form-group row">
							<!--col-sm-... enables the text to be on the same line as a input box-->
							<label for="usernameinput" class="col-sm-2 col-form-label"><h5>Username: </h5></label>

							<div class="col-sm-10">
								<input type="text" class="form-control" name="username" placeholder="Enter Username" required>

							</div><!--col sm 10 input-->
							
						</div><!-- form group row-->

						<div class="form-group row">

							<label for="passwordinput" class="col-sm-2"><h5>Password: </h5></label>

							<div class="col-sm-10">
								<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
							</div><!--col sm 10-->
							
						</div><!--- form group row-->
						<br>
						<div class="col-sm-3" style="float: right;">
							<button type="submit" name="login_user" class="btn btn-dark btn-lg btn-block" style="background-color: pink;">Login</button>
							

						</div>
		
						<br>
						
					</form><!--form-->

					<h3><a href="IceCreamMenu.php" style="color: #F2E7EC;"><span class="glyphicon glyphicon-home"></span></a></h3>



				</div><!--panel body-->	

				<div class="panel-footer" style="background-color: rgba(0, 0, 0, 0.2); text-align: center;"> 
				
					
					
					<a href="register.php" style="color: #F2E7EC;"><h4>Register?</h4></a>

				</div>
						
			</div><!--panel info-->
			

			
		</div><!-- panel group-->


		



	</div><!-- end container-->


</body>
</html>