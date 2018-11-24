

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




<!-- for incorrects-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalLogin">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Login First</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>Please Login before you proceed to pay</p>
		      </div>
		      <div class="modal-footer">
		        <a href="login.php" class="btn btn-default" style="float: right;">Login</a>
		        <a href="IceCreamMenu.php" class="btn btn-default" style="float: left;">Cancel</a>
		      </div>
		    </div>
		  </div>
</div><!--modal-->




<?php 

	
	//check if logged in
		session_start();
		if(isset($_SESSION['login_user']))
		{
			header('location: addressform.php');
		}
		else
		{
			//triggering the modal to display a msg
			echo "<script type='text/javascript'>
					$(document).ready(function(){
					$('#modalLogin').modal('show');
					});
					</script>";
		}




?>
