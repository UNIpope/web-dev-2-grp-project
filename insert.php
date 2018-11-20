<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		$con = mysqli_connect("localhost", "root", "","ice_cream_db");
		//check connection
		if (mysqli_connect_errno())
		{
			echo "failed to connect".mysqli_connect_errno();
		}

		//inserting in the table
		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES ('Strawberry and Banana','bananaNstraw','desc',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}

		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES ('Bubble Gum','bubblegum','coming up',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}
	
		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES ('Chocolate chips','chocchip','coco chips',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}
		*/

		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES ('Cookies and cream','cookiesNcream','oreo',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}

		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES ('Dark Chocolate','darkchoc','Dark dark choc',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}

		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES ('Matcha','matcha','ma ma matchaaaa',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}	

		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES ('Strawberry','strw','Very Strawberry',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}	


		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES ('Strawberry Chessecake','strwcheesecake','Strawberry and cheesecake ka pow',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}

		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES (' Vanilla','vanilla','`Very Vanilla',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}

		$sql = "INSERT INTO ice_cream(name, pic, des, price) VALUES (' Chocolate Strawberry','strwchoc','`Chocolate combined with Strawberry',5)";
		//put data in the table
		if (!mysqli_query($con, $sql))
		{
			die('Error: '. mysqli_error($con));
		}



	?>

</body>
</html>