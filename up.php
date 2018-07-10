<?php
require('connection.php');
include("auth.php");
$status = "";

	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOK = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){
    $name =$_REQUEST['name'];
    $price = $_REQUEST['price'];
		//$image = $_REQUEST['image'];

	//checking if the file is actually an image
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false){
		echo 'File is an image - ' . $check["mime"] .".";
		$uploadOK = 1;
	} else {
		echo 'File is not an image';
		$uploadOK = 0;
	}
	//Check file size
	if($_FILES["fileToUpload"]["size"] > 1000000){
		echo 'Sorry, your file size is too large.';
		$uploadOK = 0;
	}

	//Allow certain file formats
	if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif'){
		echo 'Sorry, only png, jpg and gif file types are allowed';
		$uploadOK = 0;
	}

	//Check if file uploadOK is set to 0 by an error
	if($uploadOK == 0) {
		echo 'Sorry, your file was not uploaded successfully';
	}
	//If everything is OK try to upload the file
	else{
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
			$img = basename($_FILES["fileToUpload"]["name"]);
			echo 'The file '. $img . ' has been uploaded.';
		}else{
			echo 'Sorry, there was an error uploading your file';
		}
	}



	$ins_query="insert into dish (`name`,`price`,`food_type_id`,`image`)
	values ('$name','$price','1','$img')";
    mysqli_query($con,$ins_query)
    or
	die(mysqli_error($con));
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
	sleep(5);
	header('Location: dishes.php');
	exit;
}
?>
