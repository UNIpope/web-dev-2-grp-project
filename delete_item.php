<?php

require('connection.php');

$name = $_POST['del_id'];

$query = "DELETE FROM basket WHERE name = '$name'";

$result = mysqli_query($con, $query);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}

?>
