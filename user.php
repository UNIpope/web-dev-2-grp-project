<!DOCTYPE html>
<html>
<head>
	<title>user</title>
	<?php include('session.php') ?>

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

	<!--update the new pass-->
	<div class="modal fade" tabindex="-1" role="dialog" id="update_pass">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" style="text-align: center;">Change Password</h4>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">

			      	<!-- starts a form-->
			        <form method="post" action="updatepass.php">
			        	<div class="form-group row">
			        		<label for="old_pass" class="col-sm-2 ">Old pass: </label>
			        		
							<div class="col-sm-10">
			        			<input type="password" name="old_pass" id="old_pass" class="form-control form-control-sm" placeholder="Enter old passsword..." required>
			        	</div>
			        	</div>

			        	<div class="form-group row">
			        		<label for="new_pass" class="col-sm-2 ">New pass: </label>
			        		
							<div class="col-sm-10">
			        			<input type="password" name="new_pass" id="new_pass" class="form-control form-control-sm" placeholder="Enter new passsword..." required>
			        	</div>
			        	</div>


			        	<div class="form-group row">
			        		<label for="new_pass2" class="col-sm-2 ">Re Enter New pass: </label>
			        		
							<div class="col-sm-10">
			        			<input type="password" name="new_pass2" id="new_pass2" class="form-control form-control-sm" placeholder="Enter new passsword..." required>
			        	</div>
			        	</div>
			        	
			        	
			        
			      </div>
			      <div class="modal-footer">
			      	<button type="submit" class="btn btn-default">UPdate</button>

			      </div>
			  </form>
			    </div>
			  </div>
	</div><!--modal-->


	
		<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<?php require('pic_upload.php');?>
				
			</div>
	
		

			<div class="col-sm-10" style="background-color: #E0C4D0;">
				<div class="jumbotron" style="text-align: center; background-color: lavenderblush;"><h1>Welcome <?php echo $login_session; ?></h1></div>

				<div class="jumbotron" style="background-color: lavenderblush;">
					<p>Password: 
						<?php 
							for ($i=0; $i<strlen($login_password); $i++) 
							{ 
								echo "*";
							}
						?>
						<button type="button" class="btn btn-light" data-toggle="modal" data-target="#update_pass"><span class="glyphicon glyphicon-pencil"></span></button></p>
					<p>Email: <?php echo $login_email;?></p>

					<p>Address:

						<div style="margin-left: 5em;">
						<p>Street: <?php echo $login_street; ?></p>
						<p>County: <?php echo $login_city; ?></p>
						<p>Country: <?php echo $login_country;  ?></p>
						<p>Post Code: <?php echo $login_postcode;  ?></p>
						<p>Phone number: <?php echo $login_phone;  ?></p>
						
						</div>
						<a href="remove_user.php" type="button">Deactivate</a>
					</p>
					<div class="row">
						<div class="col-sm-6" >
							<h2><a href="Logout.php" style="color: black;"><span class="glyphicon glyphicon-log-out"></span></a></h2>
							
						</div>
						<div class="col-sm-6">
						<h2><a href="IceCreamMenu.php" style="float: right; color: black;"><span class="glyphicon glyphicon-home"></span></a></h2>
						</div>
					</div>
				</div>
			</div>

		</div>


</div>
		
	
</body>
</html>