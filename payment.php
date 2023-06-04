<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/payment.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <h2>
Payment Form</h2>
<form method="post" action="paymentaction.php">
            <h4>
Account</h4>
<div class="input-group">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>

</div>
<div class="input-group">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <h4>
Date of Birth</h4>
<input type="text" name="date" placeholder="DD" class="dob">
                    <input type="text" name="month" placeholder="MM" class="dob">
                    <input type="text" name="year" placeholder="YYYY" class="dob">
                </div>
<div class="input-box">
                    <h4>
Gender</h4>
<input type="radio" id="b1" name="gender" value="male" class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gender" value="female" class="radio">
                    <label for="b2">Female</label>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <h4>
Payment Details</h4>
<input type="radio" name="pay" id="bc1" value="Credit Card" class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" value="Paypal" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <input type="tel" name="cardnum" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <input type="tel" name="cvv" placeholder="Card CVV" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
<div class="input-box">
                    <select name="cardmonth">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    <select name="cardyear">
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                    </select>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <button type="submit" name="submit">PAY NOW</button>
                </div>
</div>
</form>
</div>
</body>
</html>