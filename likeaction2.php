<?php
include('connection.php');
session_start();
if(isset($_SESSION['email']) && $_SESSION['email']!='')
{
	echo "<script>alert('Product liked')</script>";
	echo "<script>window.location.href='duplicatehome.php'</script>";
}
else
{
	echo "<script>alert('Please Login! to like the product')</script>";
	echo "<script>window.location.href='homepage.php'</script>";
}
?>