<?php
include('connection.php');
session_start();
$id=$_SESSION['email'];
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$date= $_REQUEST['date'];
$month= $_REQUEST['month'];
$year= $_REQUEST['year'];
$gender= $_REQUEST['gender'];
$mode= $_REQUEST['pay'];
$cardnum= $_REQUEST['cardnum'];
$cvv= $_REQUEST['cvv'];
$cardmonth= $_REQUEST['cardmonth'];
$cardyear= $_REQUEST['cardyear'];
// echo $name,$email,$date,$month,$year,$gender,$mode,$cardnum,$cvv,$cardmonth,$cardyear;
$sql= "INSERT INTO `payment`(`user_id`, `name`, `email`, `date`, `month`, `year`, `gender`, `MOP`, `cardnum`, `cvv`, `cardmonth`, `cardyear`) VALUES ('','$name','$email','$date','$month','$year','$gender','$mode','$cardnum','$cvv','$cardmonth','$cardyear')";
$data= mysqli_query($conn,$sql);
if ($data) 
{
	echo "<script>alert('Payment Successful!')</script>";
	$sql1= "DELETE FROM `add_product` WHERE email='$id'";
	$data1= mysqli_query($conn,$sql1);
	echo "<script>window.location.href='duplicatehome.php'</script>";
}
else
{
	echo "Not Inserted";
}
?>