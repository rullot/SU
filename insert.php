<?php
include("auth.php");
include("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Dish</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<div class="form">
<h1>Add Dish</h1>
<form name="" method="POST" action="up.php" enctype="multipart/form-data">
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter dish name" required /></p>
<p><input type="text" name="price" placeholder="Enter price" required /></p>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <!--<input type="submit" value="Upload Image" name="submit">-->
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"></p>
</div>
</div>


</body>
</html>
