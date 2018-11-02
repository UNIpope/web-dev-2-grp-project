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






	<script type="text/javascript">
		
		$(document).ready(function()
		{
			$("#input").on("keyup",function()
			{
				var value = $(this).val().toLowerCase();
				$("#menu div").filter(function()
				{
					$(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)
				});
			});

		});
	</script>


</head>

<!-- for scrolling and the navbar is keeping track-->
<body>
	<?php
		//navbar
		require('header.php');
	?>

	<!-- add banner-->
	<div class="container" id="home" > 
		
		<img id="pic" src="header-scoops.png" width="100%">

		<!-- name of the store-->
		<div class="jumbotron" style="background-color: #D4F5C5;">

			<h1>I scream</h1>	
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
		<br>

		<div class="container-fluid" id="scoop">
			
			
			<h2 ><mark>Scoopies</mark></h2>
			<!-- start the menu-->
				<div class="row text-center" id="menu">

					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #D8C0F1;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="bananaNstraw.png">

							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">bAnaNa aNd sTRawBeRrY</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>

							</div><!-- end card body-->
						</div><!-- end card-->							
					</div><!-- end half -->



					<!-- 2 -->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #F1CE71;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="bubblegum.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Bubble gum</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->
					

					<!-- 3-->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #9EDCED;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="chocchip.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Chocolate chips</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->


					<!-- 4 -->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #F2B45B;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="cookiesNcream.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Cookies and cream</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->	


					<!-- 5-->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #AAF1AC;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="darkchoc.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Dark Chocolate</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->


					<!-- 6 -->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #AFC1C1;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="macha.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Matcha</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->


					<!--7-->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #F1B78D;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="strw.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Strawberry</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->



					<!--8-->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #EDCFE2;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="strwcheesecake.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Strawberry Chessecake</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->


					<!--9-->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #9EDCED;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="vanilla.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Vanilla</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->



					<!--10-->
					<!-- set the menu to be half ie 6-->
					<div class="col-sm-6" style="background-color: #F7F2AF;">

						<!-- declare card -->
						<div class="card sm-6 box-shadow">

							<!-- img at the top of the card-->
							<img class="card-imag-top" src="strwchoc.png">
							
							<!-- start the card body-->
							<div class="card-body">

								<h3 class="card-title">Chocolate Strawberry</h3>

								<p class="card-text">details</p>

								<button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;">Order</button>
								<br>
								<br>
									
							</div><!-- end card body-->						
						</div><!-- end card-->	
								
					</div><!-- end half -->
						
						

				</div><!--end class-row-text-->
					
		</div><!-- end scoop-->
	</div><!-- end home-->


</body>
</html>