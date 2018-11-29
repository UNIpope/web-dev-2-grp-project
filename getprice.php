<?php 

require('connection.php');


//selects all from the cart db that using added in
		$all = "SELECT price, qty FROM basket";

		//runs query 
		$re = mysqli_query($con, $all);
		$sum = 0;



		//if not empty
		if (mysqli_num_rows($re) > 0) 
		{



			//while there is an item in the db
			while ($row = mysqli_fetch_assoc($re)) 
			{ 
				$totalprice =0.00;
				$totalprice = $totalprice+($row["price"]*$row["qty"]); //price for item
				$sum = $sum+$totalprice; //total of all the items 


				

			}


			echo $sum
		}



?>