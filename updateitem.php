<?php 
require('connection.php');

$code = $_POST['code'];

$quantity = $_POST['quantity'];

$sql = "UPDATE BASKET SET qty = $quantity WHERE name =$code";

$result = mysqli_query($con, $sql);

if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>