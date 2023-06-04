<?php
include("connection.php");
session_start();
$id= $_REQUEST['uid'];
$name=$_REQUEST['name'];
$price=$_REQUEST['price'];
// $filename=$_FILES['uploadfile']['name'];
// $tempname=$_FILES['uploadfile']['tmp_name'];
// $folder='image/'.$filename;
// move_uploaded_file($tempname, $folder);
// echo $name,$price,$id;
	$sql= "UPDATE `books` SET `name`='$name',`price`='$price' WHERE user_id='$id'";
	$data=mysqli_query($conn,$sql);
	if($data)
	{
		// echo "insert data successfully";
	 	header('location:books1(admin).php');
	}
	else
	{
		echo "data not updated";
	}


?>