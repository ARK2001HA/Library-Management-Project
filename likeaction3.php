<?php
include('connection.php');
session_start();
if(isset($_SESSION['email']) && $_SESSION['email']!='')
{
	echo "<script>alert('Please Login! to view the product')</script>";
	echo "<script>window.location.href='homepage.php'</script>";
	
}
else
{
	echo "<script>alert('Product viewed')</script>";
	echo "<script>window.location.href='duplicatehome.php'</script>";
}
?>