<?php 

require('connection.php');


//selects all from the cart db that using added in
$all = "SELECT price, qty FROM basket";

//runs query 
$re = mysqli_query($con, $all);
$total = 0;



//if not empty
if (mysqli_num_rows($re) > 0) 
{



	//while there is an item in the db
	while ($row = mysqli_fetch_assoc($re)) 
	{ 
		$subtotal =0.00;
		$subtotal = $subtotal+($row["price"]*$row["qty"]); //price for item
		$total = $total+$subtotal; //total of all the items 
		

	}


	echo $total;
}
else
{
	echo 0;
}


//turn of the connection
mysqli_close($con);


?>