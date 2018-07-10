<?php
require('connection.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body style="background-image:url('images/18.png'); background-repeat:no-repeat; background-size:cover; background-attachment:fixed ; background-position:left"" >
<div class="form">
<p><a href="test.php">Dashboard</a>
| <a href="insert.php">Insert New Record</a>
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Dish</strong></th>
<th><strong>price</strong></th>
<th><strong>image</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php

$count=1;
$sel_query="Select * from dish ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

?>

<tr>
	<td align="center"><?php echo $count; ?></td>
	<td align="center"><?php echo $row["name"]; ?></td>
	<td align="center"><?php echo $row["price"]; ?></td>
	<td align="center"><?php echo '<img src = "images/'.$row["image"].'"width = "60px" height = "60px"';?></td>
	<td align="center"><a href="edit.php?id=<?php echo $row["ID"]; ?>">Edit</a></td>
	<td align="center"><a href="delete.php?id=<?php echo $row["ID"]; ?>">Delete</a></td>
</tr>

<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
