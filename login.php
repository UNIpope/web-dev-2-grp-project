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
  			background-image: url("logpic3-1.jpg");
  			background-repeat: no-repeat;
  			background-size: cover;
  			background-position: center;
		}
		

	</style>


</head>

<body>
<br><br><br>
	
	<!--start the panel-->
	<div class="container" style="width: 45%">
		<!--heading login-->
		<div class="panel-group">

			<!---opacity-->
			<div class="panel panel-dark" style="background-color: rgba(0,0,0,0.2);">

				<div class="panel-heading" style="background-color: rgba(0,0,0,0.2);"><h1 style="text-align: center; color: white; ">Login</h1></div>

				<!--form starts-->
				<div class="panel-body">
					<br>
					<form method="post" action="serve.php" >
						<!-- using row to put everything on a line-->
						<div class="form-group row">
							<!--col-sm-... enables the text to be on the same line as a input box-->
							<label for="usernameinput" class="col-sm-2 col-form-label"><h5>Username: </h5></label>

							<div class="col-sm-10">
								<input type="text" class="form-control" name="username" placeholder="Enter Username">

							</div><!--col sm 10 input-->
							
						</div><!-- form group row-->

						<div class="form-group row">

							<label for="passwordinput" class="col-sm-2"><h5>Password: </h5></label>

							<div class="col-sm-10">
								<input type="password" name="password" class="form-control" placeholder="Enter Password">
							</div><!--col sm 10-->
							
						</div><!--- form group row-->
						<br>
						<div class="col-sm-3" style="float: right;">
							<button type="submit" name="login_user" class="btn btn-secondary btn-lg btn-block">Login</button>
							

						</div>
		
						<br>
						
					</form><!--form-->

				</div><!--panel body-->	
				<div class="panel-footer" style=" background-color: rgba(0, 0, 0, 0.2); text-align: center;">
					<a href="register.php" ><h5>Register?</h5></a>
				</div>
						
			</div><!--panel info-->
			
			
		</div><!-- panel group-->


		
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>Modal body text goes here.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary">Save changes</button>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
</div><!--modal-->




	</div><!-- end container-->


</body>
</html>