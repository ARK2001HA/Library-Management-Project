<?php
include('connection.php');
session_start();
$email= $_SESSION['email'];
$sql= "SELECT * FROM library_registration WHERE email='$email'";
$data= mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($data))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutus.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom js file link  -->
   <script src="javascript/aboutus.js" defer></script>

    <title>About Us</title>
</head>
<body>

<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="duplicatehome.php" class="logo"><img class="myImg" src="images/readverse-01.png"></a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box" autocomplete="off">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="likeaction1.php" class="fas fa-heart"></a>
            <a href="tabaction2.php" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"><?php echo " Welcome, ".$row['name'] ?></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="aboutusaction.php">About Us</a>
            <a href="famousauthorsaction.php">Famous Authors</a>
            <a href="adventure.php">Adventure</a>
            <a href="comedy.php">Comedy</a>
            <a href="horror.php">Horror</a>
            <a href="romance.php">Romance</a>
            <a href="sci.php">Sci-fi</a>
            <a href="sports.php">Sports</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <p>Don't have an account ? <a href="signin.php">Create one</a></p>
    </form>

</div>

    <div class="wrapper">

        <div class="background-container">
            <div class="bg-1"></div>
            <div class="bg-2"></div>
    
        </div>
        <div class="about-container">
            
            <div class="image-container">
                <img src="images/blog-4.jpg" alt="About Us">
                
            </div>

            <div class="text-container">
                <h1>About us</h1>
                <p><strong>Our Mission:</strong> To help local, independent bookstores thrive in the age of ecommerce. <br> <strong>Our Vision:</strong> We work to connect readers with independent booksellers all over the world. We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them survive and thrive. Our platform gives independent bookstores tools to compete online and financial support to help them maintain their presence in local communities.</p>
                <a href="#bottom">Read More</a>
            </div>
            
        </div>
    </div>

    <p id="bottom"></p>

<!-- our services section starts  -->

    <div class="container-services">
        <h1>Our Services</h1>
        <div class="row">
            <div class="service">
                <i class="fas fa-laptop-code"></i>
                <h2>Web Design</h2>
                <p>With our website design agency, we let you help to build a web page design that drives qualified traffic and increases your conversion rate.</p>
            </div>
            <div class="service">
                <i class="fas fa-chart-line"></i>
                <h2>Marketing</h2>
                <p>Our marketing services provide businesses of all sizes with an opportunity to market their brand 24/7 at a low cost.</p>
            </div>
            <div class="service">
                <i class="fas fa-palette"></i>
                <h2>Graphics</h2>
                <p>We are an expert in offering professional graphic design services for print and web promotions like logo design, video editing, 3d graphics etc.</p>
            </div>
            <div class="service">
                <i class="fas fa-chart-pie"></i>
                <h2>Data Analysis</h2>
                <p>We can help with technical guidance and credits for the proof of concept of Run SQL and complex, analytic queries against structured & unstructured data.</p>
            </div>
            <div class="service">
                <i class="fas fa-mobile-alt"></i>
                <h2>App Development</h2>
                <p>We offer a full cycle of application design, integration and management services along with entire mobile app development process.</p>
            </div>
            <div class="service">
                <i class="fas fa-file-invoice-dollar"></i>
                <h2>Accounting</h2>
                <p>Our organization offers an assorted range of Accounting Services with effective journal and ledger calculation and assortment of data.</p>
            </div>
            <div class="service">
                <i class="fas fa-id-badge"></i>
                <h2>Payroll</h2>
                <p>Paperless Payroll services help companies curtailing costs and improving efficiencies. Our paperless payroll system is fast and convenient.</p>
            </div>
            <div class="service">
                <i class="fas fa-network-wired"></i>
                <h2>Networking</h2>
                <p>We provide one-stop network and enterprise consulting services with a tailored approach that helps you fit your strategic goals easily.</p>
            </div>
        </div>
    </div>

<!-- our services section ends -->

<!-- our publishing companies starts -->

<div class="container-companies">

<h1 class="title"> Our Publishing Companies </h1>

<div class="products-container">

   <div class="product" data-name="p-1">
      <img src="images/Penguin_logo.png" alt="">
      <h3>Penguin Random House India</h3>
      <div class="price">British publishing house</div>
   </div>

   <div class="product" data-name="p-2">
      <img src="images/scholastic.png" alt="">
      <h3>Scholastic India</h3>
      <div class="price">American multinational publishing company</div>
   </div>

   <div class="product" data-name="p-3">
      <img src="images/rupa.png" alt="">
      <h3>Rupa Publications</h3>
      <div class="price">Indian publishing company</div>
   </div>

   <div class="product" data-name="p-4">
      <img src="images/harper.jpg" alt="">
      <h3>HarperCollins Publishers India</h3>
      <div class="price">A major worldwide publishing company</div>
   </div>

   <div class="product" data-name="p-5">
      <img src="images/jaico.jpg" alt="">
      <h3>Jaico Publishing House</h3>
      <div class="price">Indian publishing house</div>
   </div>

   <div class="product" data-name="p-6">
      <img src="images/Aleph.jpg" alt="">
      <h3>Aleph Book Company</h3>
      <div class="price">Indian publishing company</div>
   </div>

</div>

</div>

<div class="products-preview">

<div class="preview" data-target="p-1">
   <i class="fas fa-times"></i>
   <img src="images/Penguin_logo.png" alt="">
   <h3>Penguin Books</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <span>(1935)</span>
   </div>
   <p>Penguin Random House India, earlier known as Penguin India is a subsidiary of the global publishing house, Penguin Random House.</p>
   <div class="price">Penguin India</div>
</div>

<div class="preview" data-target="p-2">
   <i class="fas fa-times"></i>
   <img src="images/scholastic.png" alt="">
   <h3>Scholastic Corporation</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <span>(1920)</span>
   </div>
   <p>Started in 1997, Scholastic India is a publisher and distributor of children’s books.</p>
   <div class="price">Scholastic India</div>
</div>

<div class="preview" data-target="p-3">
   <i class="fas fa-times"></i>
   <img src="images/rupa.png" alt="">
   <h3>Rupa Publications</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>(1936)</span>
   </div>
   <p>Started in 1936 by D. Mehra, over 95% of the Rupa catalogue is converted into e-books, a strategy that effectively helps reach a wider audience.</p>
   <div class="price">Rupa Publications</div>
</div>

<div class="preview" data-target="p-4">
   <i class="fas fa-times"></i>
   <img src="images/harper.jpg" alt="">
   <h3>HarperCollins</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>(1990)</span>
   </div>
   <p>Launched in 1992 in Noida, HarperCollins Publishers India is a wholly owned subsidiary of HarperCollins Worldwide.</p>
   <div class="price">HarperCollins Publishers India</div>
</div>

<div class="preview" data-target="p-5">
   <i class="fas fa-times"></i>
   <img src="images/jaico.jpg" alt="">
   <h3>Jaico Publishing House</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <span>(1946)</span>
   </div>
   <p>Established in 1946, Jaico was India’s first publisher of paperback books in the English language.</p>
   <div class="price">Jaico</div>
</div>

<div class="preview" data-target="p-6">
   <i class="fas fa-times"></i>
   <img src="images/Aleph.jpg" alt="">
   <h3>Aleph Book Company</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <span>(2011)</span>
   </div>
   <p>A newbie in the Indian publishing scene, Aleph Book Company was founded in May 2011 by David Davidar with R.K. Mehra and Kapish Mehra of Rupa Publications India.</p>
   <div class="price">Aleph Book Company</div>
</div>

</div>

<!-- our publishing companies ends -->

<!-- our team starts -->

<h1 class="h1">Our Team</h1>
        <div class="container">
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="images/team1.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Dikshya Shaw</h4>
                    <h5>Front-End Developer</h5>
                </div>
                <div class="sci">
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="images/team2.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Anand Raj Keshari</h4>
                    <h5>Back-End Developer</h5>
                </div>
                <div class="sci">
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="images/team3.jpeg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Aritra Dey</h4>
                    <h5>Web Developer</h5>
                </div>
                <div class="sci">
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="images/team4.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Anisha Chatterjee</h4>
                    <h5>Web Designer</h5>
                </div>
                <div class="sci">
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </div>

<!-- our team ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a> <i class="fas fa-map-marker-alt"></i> India </a>
            <a> <i class="fas fa-map-marker-alt"></i> USA </a>
            <a> <i class="fas fa-map-marker-alt"></i> Russia </a>
            <a> <i class="fas fa-map-marker-alt"></i> France </a>
            <a> <i class="fas fa-map-marker-alt"></i> Japan </a>
            <a> <i class="fas fa-map-marker-alt"></i> Africa </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="Adventure.php"> <i class="fas fa-arrow-right"></i> Adventure </a>
            <a href="Comedy.php"> <i class="fas fa-arrow-right"></i> Comedy </a>
            <a href="Horror.php"> <i class="fas fa-arrow-right"></i> Horror </a>
            <a href="Romance.php"> <i class="fas fa-arrow-right"></i> Romance </a>
            <a href="Sci-fi.php"> <i class="fas fa-arrow-right"></i> Sci-fi </a>
            <a href="Sports.php"> <i class="fas fa-arrow-right"></i> Sports </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> About Us </a>
            <a href="FamousAuthors.php"> <i class="fas fa-arrow-right"></i> Famous Authors </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Liked our page yet? </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Books Cart </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Sign in </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a> <i class="fas fa-envelope"></i> admin@gmail.com </a>
            <img src="images/worldmap.png" class="map" alt="World Map">
        </div>
        
    </div>

    <div class="share">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/home" class="fab fa-linkedin"></a>
        <a href="https://in.pinterest.com/" class="fab fa-pinterest"></a>
    </div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
</body>
</html>
<?php
}
?>