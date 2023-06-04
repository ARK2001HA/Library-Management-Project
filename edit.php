<?php
include("connection.php");
session_start();
$id= $_GET['user_id'];
$sql="SELECT * FROM books WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>please fill your detalis</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
		}
		body{
			background-color: #00dcff94;
		}
		table{
			background-color: white;
    		width: 337px;
		}
		#container{
			display: flex;
   			background-color: #009bda;
    		max-width: 383px;
    		margin: auto;
    		margin-top: 48px;  
		}
		#label1{
			color: #009bda;
		}
		#name,#address,#email,#phone,#password,#conpassword{
			height: 30px;
    		width: 244px;
    		font-size: 14px;
		}
	</style>
</head>
<body>
<form method="POST" action="editaction.php" enctype="multipart/form-data">
<div id="container">
	<div>
		<table cellspacing="25" cellspacing="0" align="center">
			<tr>
				<td colspan="2">
					<h2 id="header" align="center" style="color: #009bda;">UPDATE NOW</h2>
				</td>
			</tr>
			<tr>
				<td>
					<label id="label1"><b>Book-Name</b></label>
				</td>
				<td>
					<input type="text" id="name" name="name" value="<?php echo $result['name']?>">
					<input type="hidden" name="usrid" value="<?php echo $result['user_id']?>">
				</td>
			</tr>
			<input type="text" name="uid" value="<?php echo $result['user_id']?> " hidden>
			<tr>
				<td>
					<label id="label1"><b>Book-Price</b></label>
				</td>
				<td>
					<input type="text" id="address" name="price" value="<?php echo $result['price']?>">
				</td>
			</tr>
			<tr>
				<td>
					<label id="label1"><b>Book-Image</b></label>
				</td>
				<td>
					<input type="file" name="uploadfile">
					<input type="hidden" name="oldimg" value="<?php echo $result['photo']?>">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<img src="<?php echo 'images/'.$result['photo']?>" height="100" width="100" style="margin-left: 82px;">
				</td>
			</tr>
			<tr>
				<td colspan="2" id="btn">
					<input type="submit" id="submit" value="Update" style="color: white; background-color: #009bda; height: 38px; width: 96px;margin-top: 8px;">
				</td>
			</tr>
		</table>
	</div>
</div>
</form>
</body>
</html>