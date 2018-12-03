<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com					//bootstarp
	Reference: https://stackoverflow.com/a/60496  	//for injection prevention 
-->

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>

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

	<link rel="stylesheet" type="text/css" href="IceCreamMenu.css">
</head>

<!-- for scrolling and the navbar is keeping track-->
<body>
	<?php
		//navbar
		require('header2.php');
	?>
	<br/>
	<br/>
	<br/>
	<br/>
	
	<div class="container">
		<!-- search form -->
		<form class="card card-sm" method="post" >
			<div class="card-body row no-gutters align-items-center">
				<div class="col">
					<input class="form-control form-control-lg form-control-borderless" type="search" name="sr" placeholder="Enter name of ice cream.">
				</div><!--end of col-->
				
				<br/>
				<!-- buttons for serch and filter  -->
				<div class="col-auto">
					<button class="btn btn-lg btn-dark" type="submit" name="sub" style="float: center; background-color: pink; color: black;">Search</button>
				</div>
			</div>
		</form>
	</div><!--end search form container -->
	
	
	<?php
		//if something is submitted from form
		if (isset($_POST['sub'])) 
		{
			
			//create a connect to the database
			//$con = mysqli_connect("localhost", "root", "","ice_cream_db");
			$con = new mysqli("localhost", "root", "", "ice_cream_db");
			//check connection
			if (mysqli_connect_errno())
			{
				#fail to connects
				echo "failed to connect".mysqli_connect_errno();
			}
			//get term
			$sr = "%".$_POST["sr"]."%"; 
			//select where ?
			$all = 'SELECT name, pic, price FROM ice_cream where name like ?';
			
			//prep/run 
			if($stmt = $con->prepare($all))
			{
				//get term
				$sr = "%".$_POST["sr"]."%";
				
				//bind string, exacute , get data
				$stmt->bind_param('s', $sr); // 's' specifies the variable type => 'string'
				$stmt->execute();
				$rows = $stmt->get_result();
				
				
				echo "<br> <br>";
				//check if there are rows
				if (mysqli_num_rows($rows) > 0) 
				{
					//cycle trough rows
					while ($row = mysqli_fetch_array($rows)) 
					{ 
					?>
						<!-- set the menu to be half ie 6-->
						<div class="col-sm-3" style="background-color: lavenderblush;">

							<!-- declare card -->
							<div class="card sm-1 box-shadow">

								<?php
									//var
									$pic = $row['pic'].".png";
									$ord = $row['pic'].".php";
								?>

								<!-- img at the top of the card-->
								<img class="card-imag-top" src="<?php echo $pic ?>">

								<!-- start the card body-->
								<div class="card-body">
									
									<!-- name, pic, order button in body --> 
									<h3 class="card-title"><?php echo $row['name']?><span class="badge badge-pill badge-danger"style="background-color: red;">NEW</span></h3>
									<p class="card-text"><?php echo "Price: ".$row['price'] ?></p>
									<a target="_self" class="btn btn-light" href="<?php echo $ord ?>" role="button" style="background-color: orange;">Order</a>

									<br>
									<br>

								</div><!-- end body-->							
							</div><!-- end col -->
						</div><!-- end card -->
			
					<?php
					}//end while row
				}//end if >0
			}//end if prep
			else 
			{
				//error printing
				$error = $con->errno . ' ' . $con->error;
				echo $error;
			}//end else
		}//end if serch
	?>
</body>
</html>