<!DOCTYPE html>
<html>
<head>
	<title></title>


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



<!--logged in modal-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalupdate">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Update pass Successfully</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>Your pass has been changed</p>
		      </div>
		      <div class="modal-footer">
		       <a href="user.php" class="btn btn-default">Continue</a>
		      </div>
		    </div>
		  </div>
</div><!--modal-->


<!--logged in modal-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalincorrect">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">new pass not match</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>Your first and second pass != match</p>
		      </div>
		      <div class="modal-footer">
		       <a href="user.php" class="btn btn-default">Try again</a>
		      </div>
		    </div>
		  </div>
</div><!--modal-->



<!-- for incorrects-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalold">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Incorrect old password</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>old Paswword is incorrect. Please try again.</p>
		      </div>
		      <div class="modal-footer">
		        <a href="user.php" class="btn btn-default">Try Again</a>
		      </div>
		    </div>
		  </div>
</div><!--modal-->





<?php
	include('session.php');

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ice_cream_db');
	
	//check con
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: ". mysqli_connect_errno($db);
	}


	if ($login_password == $_POST['old_pass']) 
	{
		if ($_POST['new_pass'] == $_POST['new_pass2']) 
		{
			$query = "UPDATE user SET password= $_POST[new_pass] WHERE name LIKE '$login_session' ";

			//run query and check
			///if its not working
			if (!mysqli_query($db,$query))
			{
				die('Error: '. mysqli_error($db));
			}
			else
			{
				//triggering the modal to display a msg
					echo "<script type='text/javascript'>
							$(document).ready(function(){
							$('#modalupdate').modal('show');
							});
							</script>";

			}
			
		}
		else
		{
			//triggering the modal to display a msg
					echo "<script type='text/javascript'>
							$(document).ready(function(){
							$('#modalincorrect').modal('show');
							});
							</script>";

		}

	}
	else
	{
		//triggering the modal to display a msg
					echo "<script type='text/javascript'>
							$(document).ready(function(){
							$('#modalold').modal('show');
							});
							</script>";

	}


?>




</body>
</html>


