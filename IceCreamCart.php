<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop, using ajax to delete an item from the basket
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: www.w3schools.com, stackoverflow.com
-->


<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>


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


	<script> 



		//the animation to show the progress
		$(document).ready(function(){
		    $("#paybtn").click(function(){
		        $("div").animate({left: '750px'}, "slow");

		        //promise() wait til the animate is done
		         $("div").promise().done(function()
		        {
		        	//link to another page
		        	window.location.href = "pay.php";
		        });
        
		    });
		});


		//using ajax to delete an item without reloading the page .
		$(function()
		{
			//onclick the link
		    $(document).on('click','.trash',function()
		    {
		    	//assigns the variables
		        var del_id= $(this).attr('id');	//assigns the name of the ice cream to the variable.
		        var $ele = $(this).parent().parent(); //page
		        
		        //declares ajax function
		        $.ajax(
		        {
		            type:'POST',
		            url:'delete_item.php',	//passes to delete_item page dealing with deleting the item from db
		            data:{'del_id':del_id},	//passes the variable.
		            
		            //if its success
		            success: function(data)
		            {
		            	//removes from the page
		                if(data=="YES")
		                {
		                    $ele.fadeOut().remove();
		                }
		                else
		                {
		                    alert("can't delete the row");
		                }
		            }

		            });
		        });
		});//ends ajax ()

	//check the price every 5 seconds
		setInterval(function()
		{
	    	$("#total_amount").load("getprice.php");

	    	//get the value from the span
	    	var x = document.getElementById('total_amount').innerHTML;

	    	//if cart is empty
	    	if (x=='0') 
	    	{
	    		//display the message
	    		if (window.confirm('Your cart is empty! Redict you to our main page.')) 
				{
					//redirect to the main page
					window.location.href='IceCreamMenu.php';
				};
	    	}
	    	
		}, 500);

	</script> 



</head>
<body>
<div class="container">
	<?php
		//navbar
		require('header2.php');
	?>
	<br><br><br>

	<!--heading-->
	<div class="jumbotron" style="background-color: lightblue;">
		<h2 style="text-align: center;">CHECKOUT</h2>
	</div>

	<!--displays the animate cart div-->
	<div style="position:absolute;"><span class="glyphicon glyphicon-shopping-cart"></span></div>

	<br><br><br><br><br>


	<?php
		//declares the db connection
		require('connection.php');

		
		//selects all from the cart db that using added in
		$all = "SELECT name, price, qty, op_msg FROM basket";

		//runs query 
		$re = mysqli_query($con, $all);
		$total = 0;



		//if not empty
		if (mysqli_num_rows($re) > 0) 
		{
			?>
		<!-- start responsiv table-->
		<div class="table-responsive">
			<!--table style...when hover goes diff colour-->
			<table class="table table-hover">
				<!--headings of the table-->
				<thead>
					<tr>
						<!---defines the tittle -->
						<th scope="col"></th>
						<th scope="col">Name</th>
						<th scope="col">Quantity</th>
						<th scope="col">Total</th>
						<th scope="col">Instructions</th>
						<th scope="col"> </th>

					</tr>
				</thead>


			<?php
			//while there is an item in the db
			while ($row = mysqli_fetch_assoc($re)) 
			{ 
				//variables
				$name = $row["name"].".png"; //picture
				$subtotal =0.00;
				$subtotal = $subtotal+($row["price"]*$row["qty"]); //price for item
				$total = $total+$subtotal; //total of all the items 
				?>

				<!--inside the table -->
				<tbody>
					<tr>
						<th><img src="<?php echo $name?>" style="width: 10%; height: auto;" ></th>
						<th><?php echo $row["name"]?></th>
						<th><?php echo $row["qty"]?><!--<input type="number" name="edit_q" id="<?php //echo $row["name"];?>" min="1" max="10" class="form-control text-center quantity" value="<?php // echo $row["qty"]?>">--></th>
						<th><div id="sub"><?php echo $subtotal ?></div></th>
						<th><?php echo $row["op_msg"]?></th>

						<!--delete item using ajax passing the name of the ice cream to the function-->
						<th><a class="trash" href="#" id="<?php echo $row["name"];?>"><span class="glyphicon glyphicon-trash"></span></a></th>
					</tr>
				</tbody>

				<?php		
			}
			?>
			</table>
			</div><!--table responsive -->
			
		
			<!--displays the price-->
			<div class="jumbotron" style="background-color: lavender;">
				<h3 style="text-align: center;">Total price: &euro;<span id="total_amount"></span></h3>

				<button id="paybtn" class="btn btn-dark btn-lg" style="float: right; background-color: pink; color: black;">P    A     Y</button>
			</div>

			<?php

		}
		//if basket is empty
		else
		{
			?>
			<div class="jumbotron" style="background-color: #AFA1B4">
				
				<br>
				<h2 style="text-align: center;">Empty Cart!</h2>
			</div>
			<?php
		}



		//turn of the connection
		mysqli_close($con);
	
		?>

</div><!-- container-->
</body>
</html>
