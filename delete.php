<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM dish WHERE ID=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: dishes.php");
?>
