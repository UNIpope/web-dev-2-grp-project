<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com
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
		<form class="card card-sm" method="post" >
			<div class="card-body row no-gutters align-items-center">
				<div class="col">
					<input class="form-control form-control-lg form-control-borderless" type="search" name="sr" placeholder="Enter name of ice cream.">
				</div>
				<!--end of col-->
				<br/>
				<div class="col">
					<button class="btn btn-lg btn-dark" type="submit" name="sub" style="float: center; background-color: pink; color: black;">Search</button>
				</div>
				<!--end of col-->
			</div>
		</form>
		<br><br>
	
	
	
		<?php	
			if (isset($_POST['sub'])) {
				
				//create a connect to the database
				$con = mysqli_connect("localhost", "root", "","ice_cream_db");
	 			//check connection
				if (mysqli_connect_errno())
				{
					#fail to connects
					echo "failed to connect".mysqli_connect_errno();
				}
	 			$sr = $_POST["sr"]; 
				//select where name = sr
				$all = "SELECT name, pic, price FROM ice_cream where name like '%".$sr."%'";
				
				//do the query and print 
				$re = mysqli_query($con, $all);
				
				
				echo "<table border='1'>
				<tr>
				<th>name</th>
				
				<th>price</th>
				<th>pic</th>
				</tr>";
				
				while($row = mysqli_fetch_array($re))
				{
					echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					
					echo "<td>" . $row['price'] . "</td>";
					echo "<td>" . $row['pic'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}


		?>
	</div>
	
</body>
</html> 