<!-- 
	Website: Ice Cream Store
	Purpose: Display the header
	Authors: Jack Duggan + Buchita Gitchamnan	
-->

<!DOCTYPE html>
<html>
<head>
	<title>Header</title>


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
    		font-family: "Courier New";

		}
		.navbar
		{
		    /*set the background colour pink*/
		    background-color: pink;
		    margin-bottom: 0; 
		    border: 0;
		    font-size: 16px !important;
		    letter-spacing: 4px;

		}
		.navbar li a, .navbar .navbar-brand
		{
		    /*change colour of the text*/
		    color: #fff !important;
		}


		.navbar-nav li a:hover, .navbar-nav li.active a
		{
		    /*hovering = letters change to pink*/
		    color: pink !important;
		    /*when hovering over  background turns white*/
		    background-color: #fff !important;
		}


		.navbar-default .navbar-toggle
		{
		    border-color: transparent;
		    color: #fff !important;
		}

	</style>


</head>


<!-- for scrolling and the navbar is keeping track-->
<body data-spy="scroll" data-target=".navbar" data-offset="50">


	<!-- navbar, set the default navbar with fixed position at the top-->
	<nav class="navbar navbar-default navbar-fixed-top">
	 	<div class="container-fluid">


	 		<!-- phone button -->
	 		<div class="navbar-header">
	 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="mynavbar">
	 				<span class="icon-bar"></span>
	 				<span class="icon-bar"></span>
	 				<span class="icon-bar"></span>
	 			</button>
	 			<a class="navbar-brand" href="#">
	 			
	 		</div>


	 		<!-- web browser-->
	 		<div class="collapse navbar-collapse" id="mynavbar">
			  
			    <ul class="nav navbar-nav navbar-right">
			    	<li><a href="#home">HOME</a></li>
			        <li><a href="#about">ABOUT</a></li>
			        <li><a href="#scoop">SCOOP</a></li>
			        <li><a href="#contact">CONTACT</a></li>
			        <li><a href="#user"><span class="glyphicon glyphicon-user"></span></a></li>
			        <li><a href="#cart"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
			        <li><a href="#search"><input type="text" class="form-control" placeholder="Search..." id="input"> <span class="glyphicon glyphicon-search"></span></a></li> 
			       
			    </ul>
		   	</div>
	  	</div>
	</nav>


	

</body>
</html>