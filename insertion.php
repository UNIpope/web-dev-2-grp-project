<?php 

	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ice_cream_db');
	
	//check con
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: ". mysqli_connect_errno($db);
	}



	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Strawberry and Banana','bananaNstraw','2.10')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "1";}



	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Bubble gum','bubblegum','1.99')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "2";}



	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Chocolate chips','chocchip','2.50')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "3";}



	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Cookies and Cream','cookiesNcream','3.90')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "4";}



	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Dark Chocolate','darkchoc','1.50')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "5";}



	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Matcha','matcha','4.99')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "6";}


	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Strawberry','strw','1.99')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "7";}




	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Strawberry Chessecake','strwcheesecake','2.99')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "8";}


	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Vanilla','vanilla','1.00')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "9";}


	$sql = "INSERT INTO ICE_CREAM(NAME, PIC, PRICE) VALUES('Chocolate Strawberry','strwchoc','2.20')";
	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	} else {
	echo "10";}



?>