<?php
include("connection.php");
$sql= "SELECT * FROM payment";
$data= mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payments</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section>
    <div class="sidebar">
        <h1 class="logo">ReadVerse</h1>

        <ul class="nav">
            <li><a href="dashboard(admin).php"><i class="fa fa-windows"></i>Dashboard</a></li>
            <li><a href="books1(admin).php"><i class="fa fa-shopping-bag"></i>Home Books List</a></li>
            <li><a href="books2(admin).php"><i class="fa fa-shopping-bag"></i>Shop Books List</a></li>
            <li><a href="cart(admin).php"><i class="fa fa-pie-chart"></i>Add to Cart</a></li>
            <li class="active"><a href="payment(admin).php"><i class="fa fa-cube"></i>Payments</a></li>
            <li><a href="subscribe(admin).php"><i class="fa fa-database"></i>Subscriptions</a></li>
        </ul>

            <ul class="social">
                <li><a href="https://www.facebook.com/">Facebook</a></li>
                <li><a href="https://twitter.com/">Twitter</a></li>
                <li><a href="https://www.google.com/">Google</a></li>
            </ul>
        

    </div>
    <div class="main">
        
        <div class="head-section">
            <div class="col-6">
                <h2>Subscriptions</h2>
            </div>

            <div class="col-6" style="text-align: right;">
                <i class="fa fa-bell-o hicon"></i>
                <input type="text" class="search">
                <i class="fa fa-search hicon sicon"></i>
                <a href="adminlogin.php"><i class="fa fa-power-off"></i></a>

        <div class="notification-div">
            <p><a class="a1" href="subscribe(admin)">Success!You have new subscriptions!</a></p>
            <p><a class="a1" href="cart(admin).php">Here's some of the new books which are in demand!</a></p>             
        </div>

            </div>

            <div class="clearfix"></div>
        </div>

        <br><br>
        <div class="content">


            <table>
  <thead>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Gender</th>
      <th scope="col">Mode</th>
      <th scope="col">Card No.</th>
      <th scope="col">CVV</th>
      <th scope="col">Card Month</th>
      <th scope="col">Card Year</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sl=1;
    while($result= mysqli_fetch_assoc($data))
    {
    ?>
    <tr>
      <td data-label="Account"><?php echo $sl;$sl++; ?></td>
      <td data-label="Due Date"><?php echo $result['name'] ?></td>
      <td data-label="Amount"><?php echo $result['email'] ?></td>
      <td data-label="Amount"><?php echo $result['date'] ?></td>
      <td data-label="Amount"><?php echo $result['month'] ?></td>
      <td data-label="Amount"><?php echo $result['year'] ?></td>
      <td data-label="Amount"><?php echo $result['gender'] ?></td>
      <td data-label="Amount"><?php echo $result['MOP'] ?></td>
      <td data-label="Amount"><?php echo $result['cardnum'] ?></td>
      <td data-label="Amount"><?php echo $result['cvv'] ?></td>
      <td data-label="Amount"><?php echo $result['cardmonth'] ?></td>
      <td data-label="Amount"><?php echo $result['cardyear'] ?></td>
      <td data-label="Period"><a class="btn btn-danger" href="delete5.php?userid1=<?php echo $result['user_id']?>">Delete</a></td>
    </tr>
      <?php
      }
      ?>
  </tbody>
</table>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".user").click(function(){
    $(".profile-div").toggle(1000);
  });
  $(".hicon:nth-child(1)").click(function(){
    $(".notification-div").toggle(1000);
  });
  $(".sicon").click(function(){
    $(".search").toggle(1000);
  });
});
</script>

<script type="text/javascript">
    $('li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});
</script>
</body>
</html>