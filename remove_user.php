<?php  

require('session.php');

$username = $login_session;


$sql = "DELETE FROM USER WHERE name = '$username'";

//run query and check
if (!mysqli_query($con,$sql))
{
	die('Error: '. mysqli_error($con));
}
else
{
	require('logout.php');
}
mysqli_close($con); // Closing Connection

?>