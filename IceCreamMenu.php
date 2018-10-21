<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
-->

<!DOCTYPE html>
<html>
<head>
	<title>IceCreamHome</title>

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
			        <li><a href="#topping">TOPPING</a></li>
			        <li><a href="#contact">CONTACT</a></li>
			        <li><a href="#user"><span class="glyphicon glyphicon-user"></span></a></li>
			        <li><a href="#search"><span class="glyphicon glyphicon-search"></span></a></li>
			        <li><a href="#cart"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
			    </ul>
		   	</div>
	  	</div>
	</nav>

	<!-- add banner-->
	<div class="container" id="home">
		<img src="header-scoops.png" width="100%">	

		<!-- name of the store-->
		<div class="jumbotron jum-name">
			<h1>My CONEection</h1>	
		</div>	

		<!-- about section starts-->
		<div class="jumbotron" id="about">
			<h2 ><mark>About</mark></h2>
			<p>Ice cream (derived from earlier iced cream or cream ice) is a sweetened frozen food typically eaten as a snack or dessert. 
			It is usually made from dairy products, such as milk and cream, and often combined with fruits or other ingredients and flavors. 
			It is typically sweetened with sugar or sugar substitutes. Typically, flavourings and colourings are added in addition to stabilizers. 
			The mixture is stirred to incorporate air spaces and cooled below the freezing point of water to prevent detectable ice crystals from forming. 
			The result is a smooth, semi-solid foam that is solid at very low temperatures (< 2 °C or 35 °F). It becomes more malleable as its temperature increases.

			The meaning of the phrase "ice cream" varies from one country to another. 
			Phrases such as "frozen custard", "frozen yogurt", "sorbet", "gelato", and others are used to distinguish different varieties and styles. 
			In some countries, such as the United States, the phrase "ice cream" applies only to a specific variety, and most governments regulate the commercial use of the various terms according to the relative quantities of the main ingredients, notably the amount of cream.
			Products that do not meet the criteria to be called ice cream are labelled "frozen dairy dessert" instead.
			In other countries, such as Italy and Argentina, one word is used for all variants. 
			Analogues made from dairy alternatives, such as goat's or sheep's milk, or milk substitutes (e.g., soy milk or tofu), are available for those who are lactose intolerant, allergic to dairy protein, or vegan.</p>
		</div>

		<div class="container text-center bg-grey" id="scoop">
			<h2 >Scoopies</h2>
			<div class="row text-center">
					<div class="thumbnail">
					<img src="bananaNstraw.png">
					<p>Banan and Strawberry</p>
			
				</div>
				
				<div class="thumbnail">
					<img src="bubblegum.png">
					<p>Bubble gum</p>
				</div>

				<div class="thumbnail">
					<img src="chocchip.png">
					<p>Chocolate chips</p>
				</div>

				<div class="thumbnail">
					<img src="cookiesNcream.png">
					<p>Cookies and cream</p>
				</div>

				<div class="thumbnail">
					<img src="darkchoc.png">
					<p>Dark Chocolate</p>
				</div>

				<div class="thumbnail">
					<img src="macha.png">
					<p>Matcha</p>
				</div>

				<div class="thumbnail">
					<img src="strw.png">
					<p>Strawberry</p>
				</div>

				<div class="thumbnail">
					<img src="strwcheesecake.png">
					<p>Strawberry Chessecake</p>
				</div>

				<div class="thumbnail">
					<img src="strwchoc.png">
					<p>Chocolate Strawberry</p>
				</div>

				<div class="thumbnail">
					<img src="vanilla.png">
					<p>Vanilla</p>
				</div>

			</div>
			
		</div>

	</div>





</body>
</html>