<?php
//start session
session_start();


//logout 
session_destroy();

header('location: IceCreamMenu.php');
?>