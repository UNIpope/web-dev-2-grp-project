<!-- 
	Website: Ice Cream Store
	Purpose: Display the header
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com
-->

<!DOCTYPE html>
<html>
	<head>
		<title>footer</title>


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



		<!--style-->
		<style type="text/css">
			body
			{
	    		font-family: "Courier New";
			}
		</style>

	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div  class="col-lg-6" style="background-color: lightblue;">
					<a href="#cart"><span class="glyphicon glyphicon-home"></span></a>
					<a href="">IScream</a>
				<span>&copy; 2018.</span>
				</div>

				<div class="col-lg-6" style="background-color: lavenderblush;"><span>Powered by</span>
				<a href="">JB</a>
				
											<div style="float: right;">
									<button type="submit" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">ORDER</button>



								</div>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

				
			</div>

			</div>
		</div>
		

	</body>
</html>