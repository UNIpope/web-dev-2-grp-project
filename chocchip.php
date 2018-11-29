<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com
-->

<!DOCTYPE html>
<html>
<head>
	<title>ChocoChips</title>


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
		    height: 100%;
		    font-family: "Courier New";
		    background-color: #5C4033;  /*brown*/


		}
		.jumbotron
		{
			background-color: #FFFFB5; /*yellow*/
		}
	</style>

	
	<script>
		function goBack() 
		{
	   	
	   		window.history.back();
		}
	</script>

</head>


<body>

	<div class="container">
		<div class="jumbotron">

			<div class="row">
				<div class="col-sm-6">
					<br><br>
					<img src="chocchip.png">
					<br><br><br>
					<button type="button" onclick="goBack()" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</div>

				<div class="col-sm-6">
					<div class="jumbotron">
						<h3>Chocolate Chips</h3>

						<!-- start form leads to icecreammenudata.php-->
						<form class="form-horizontal" method="post" action="IceCreamMenuData.php">
							<!-- assign the name to name -->
							<input type="hidden" name="name" value="chocchip">
							

							<div class="form-group">
								<label class="control-label col-sm-2" for="price">Price:&euro;2.50 </label>
								<input type="hidden" name="price" value="2.50">
							</div>

						

							<!-- start the dropdown list -->
							<div class="form-group">
								<label class="control-label col-sm-2" for="quality">Scoop:</label>
								<div class="col-sm-10">
									<select class="form-control" name="quantity">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div><!-- end col-sm-10-->
								<br><br><br><br>

								<!-- text area for optional message-->
								<div class="form-group">
									<label for="message">Optional Message:</label>
									<textarea class="form-control" rows="3" name="message"></textarea>
								</div>
								<br><br>

								<!--submission button-->
								<div style="float: right;">
									<!-- a button to trigger modal-->
									<button id="btnsub" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">ORDER</button>

									<!-- Modal popup -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">

										<!-- declare a modal at the centre-->
										<div class="modal-dialog modal-dialog-centered" role="document">

										    <div class="modal-content">

										    	<!--header modal-->
										     	<div class="modal-header">

											        <h3 class="modal-title">ORDER</h3>

											        <!-- x button at the top ie close button-->
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
										    	</div><!--modal header-->

										    	<!--body modal-->
										      	<div class="modal-body">
										        	<h4>An item is added in the cart</h4>
										     	</div>

										     	<!--modal footer-->
										     	<div class="modal-footer">

										     		<!-- submit button-->
										       		<button id="submit" type="submit" class="btn btn-secondary" >CLOSE</button>

										     	</div><!--end modal footer-->
										    </div><!-- modal content-->
									  	</div><!--modal-dialog modal-dialog-centered-->
									</div><!--modal fade-->
								</div><!-- end float right-->	
								
							</div><!--end form group-->
						</form>
					</div><!-- jumbotron-->
				</div><!-- end col-sm-6-->	
			</div><!--end row-->	
		</div><!-- end jum-->
	</div><!--end container-->
</body>
</html>