<?php
require('connection.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from dish where ID='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="test.php">Dashboard</a>
| <a href="insert.php">Insert New Record</a>
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$dish =$_REQUEST['dish'];
$price =$_REQUEST['price'];
$submittedby = $_SESSION["username"];
$update="update users set trn_date='".$trn_date."',
dish='".$dish."', price='".$price."',
submittedby='".$submittedby."' where ID='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="dish" placeholder="Enter dish"
required value="<?php echo $row['dish'];?>" /></p>
<p><input type="text" name="price" placeholder="Enter price"
required value="<?php echo $row['price'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
