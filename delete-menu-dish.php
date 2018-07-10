<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM menu_dish WHERE ID=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: menu.php");
?>
