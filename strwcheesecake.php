<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com
-->

<!DOCTYPE html>
<html>
<head>
	<title>Strawberry Cheesecake</title>


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
		    background-color: #d4a677;  /*brown*/


		}
		.jumbotron
		{
			background-color: #ffcccc; /*pink*/
		}

		.alert
		{
			display: none;
		}
	</style>

</head>


<body>

	<div class="container">
		<div class="jumbotron">

			<div class="row">
				<div class="col-sm-6">
					<br><br>
					<img src="strwcheesecake.png">
				</div>

				<div class="col-sm-6">
					<div class="jumbotron">
						<h3>Strawberry Cheesecake</h3>

						<!-- start form leads to icecreammenudata.php-->
						<form id="formfield" class="form-horizontal" method="post" action="IceCreamMenuData.php">
							<!-- assign the name to name -->
							<input type="hidden" name="name" value="strwcheesecake">
							

							<div class="form-group">
								<label class="control-label col-sm-2" for="price">Price:&euro;5 </label>
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
									<button id="btnsub" type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">ORDER</button>

									<!-- Modal -->
									<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									  <div class="modal-dialog modal-dialog-centered" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        ...
									      </div>
									      <div class="modal-footer">
									        <button id="submit" type="submit" class="btn btn-secondary" ><!--data-dismiss="modal">-->Close</button>

									      </div>
									    </div>
									  </div>
									</div>



								</div><!-- end float right-->
							



								
							</div><!--end form group-->
						</form>
					</div><!-- jumbotron-->
				</div><!-- end col-sm-6-->	
			</div><!--end row-->	
		</div><!-- end jum-->
	</div><!--end container-->



	<script type="text/javascript">
		$('#submit').click(function()
		{
    		$('#formfield').submit();
		});
	</script>
</body>
</html>