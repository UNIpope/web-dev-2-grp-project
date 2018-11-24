

<!DOCTYPE html>
<html>
<head>
	<title>Billing</title>

	<meta charset="utf-8"> 

	<!-- rsponsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- include CDN(Content Delivery Network) MaxCDN provides CDN support for Bootstrap's CSS and JavaScript. You must also include jQuery-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


	<script>
		//the animation to show the progress
		$( document ).ready(function() {
	  		$( "#mybtn" ).trigger( "click" );
	   		$("#cart").animate({left: '750px'}, "slow");
		});

		$( document ).ready(function() {
	  		$( "#mtbtn" ).trigger( "click" );
	   		$("#cart").animate({left: '1300px'}, "slow");
		});

	
</script> 




</head>
<body>
	

	<div class="container">
		<?php
		include('session.php');
		//navbar
		require('header2.php');

	?>
		<br><br><br>

		<button id="mybtn" style="display:none;">yup</button>
		<div id="cart" style="position:absolute;"><span class="glyphicon glyphicon-shopping-cart"></span></div>

		<br><br><br>
		
		<h1>DELIVER TO</h1>
		<br>



		<div class="col-sm-5" style="float: left;">
			<div class="jumbotron" style="background-color: lavender;">
				<p>Address:

					<div style="margin-left: 5em;">

						<p>Street: <?php echo $login_street; ?></p>
						<p>County: <?php echo $login_city; ?></p>
						<p>Country: <?php echo $login_country;  ?></p>
						<p>Post Code: <?php echo $login_postcode;  ?></p>
						<p>Phone number: <?php echo $login_phone;  ?></p>
						
					</div>
				</p>
				<a href="deliver.php">USE THIS ADDRESS</a>
			</div>
		</div>




		<div class="col-sm-7" style="float: right;">
			<div class="jumbotron" style="background-color: lightblue;">
				<form  method="post" action="billing.php">			
					<h3>Enter a new address</h3>
				
				
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

				  	<button type="submit" class="btn btn-primary">Submit</button>

				</form>
			</div><!--jumbotron -->
		</div><!--end the right halfsm-7-->
	</div><!--end container-->
	<!--</div>-->
</body>
</html> 