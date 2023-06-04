<?php
include('connection.php');
session_start();

if(isset($_REQUEST['email'])&& $_REQUEST['email']!='')
{
	$email=$_REQUEST['email'];
}
else
{
	$email='';
}
$sql= "INSERT INTO `subscribe`(`user_id`, `email`) VALUES ('','$email')";

if(isset($_SESSION['email']) && $_SESSION['email']!='')
{
	$data= mysqli_query($conn,$sql);
	if ($data) 
	{
		echo "<script>alert('Congratulations! You have successfully subscribed to our newsletter.')</script>";
		echo "<script>window.location.href='duplicatehome.php'</script>";
	}
	else
	{
		echo "Not Inserted";
	}
}
else
{
	echo "<script>alert('Please Login!')</script>";
	echo "<script>window.location.href='signin.php'</script>";

}
?>