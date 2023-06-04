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
    <title>Shopping Cart - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/shop.css">

    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
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
            <a href="likeaction1(duplicate).php" class="fas fa-heart"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"><?php echo " Welcome, ".$row['name'] ?></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="aboutus.php">About Us</a>
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

<section class="shop container">
    <h2 class="section-title">Shop for Books</h2>
    <!--Content-->
    <div class="shop-content">
        <!--Box 1-->
        <div class="product-box">
            <img class="img1" src="images/newbook-1(new).png" alt="Shout out to The Girls" class="product-img">
            <h2 class="product-title">Shout out to The Girls</h2>
            <span class="price">$40.07</span>
            <a href="productaction2.php?id=1" class='bx bx-shopping-bag add-cart'></a>
        </div>
        <!--Box 2-->
        <div class="product-box">
            <img class="img1" src="images/newbook-2(new).png" alt="The Number Detective" class="product-img">
            <h2 class="product-title">The Number Detective</h2>
            <span class="price">$6.43</span>
            <a href="productaction2.php?id=2" class='bx bx-shopping-bag add-cart'></a>
        </div>
        <!--Box 3-->
        <div class="product-box">
            <img class="img1" src="images/newbook-3(new).png" alt="A History Of Pictures" class="product-img">
            <h2 class="product-title">A History Of Pictures</h2>
            <span class="price">$21.46</span>
            <a href="productaction2.php?id=3" class='bx bx-shopping-bag add-cart'></a>
        </div>
        <!--Box 4-->
        <div class="product-box">
            <img class="img1" src="images/newbook-4(new).png" alt="The Silk Roads" class="product-img">
            <h2 class="product-title">The Silk Roads</h2>
            <span class="price">$18.14</span>
            <a href="productaction2.php?id=4" class='bx bx-shopping-bag add-cart'></a>
        </div>
        <!--Box 5-->
        <div class="product-box">
            <img class="img1" src="images/newbook-5(new).png" alt="The Short & Curly Guide To Life" class="product-img">
            <h2 class="product-title">The Short & Curly Guide To Life</h2>
            <span class="price">$152.62</span>
            <a href="productaction2.php?id=5" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 6-->
        <div class="product-box">
            <img class="img1" src="images/bookface(1)new.jpg" alt="Treasure Island" class="product-img">
            <h2 class="product-title">Treasure Island</h2>
            <span class="price">$1.28</span>
            <a href="productaction2.php?id=6" class='bx bx-shopping-bag add-cart'></a>
          
        </div>
        <!--Box 7-->
        <div class="product-box">
            <img class="img1" src="images/blogadbook(1).jpg" alt="King Solomon’s Mines" class="product-img">
            <h2 class="product-title">King Solomon’s Mines</h2>
            <span class="price">$2.09</span>
            <a href="productaction2.php?id=7" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 8-->
        <div class="product-box">
            <img class="img1" src="images/blogadbook(2)new.jpg" alt="Around the World in 80 Days" class="product-img">
            <h2 class="product-title">Around The World In 80 Days</h2>
            <span class="price">$2.57</span>
            <a href="productaction2.php?id=8" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 9-->
        <div class="product-box">
            <img class="img1" src="images/blogadbook(3).jpg" alt="Moby-Dick or, the Whale" class="product-img">
            <h2 class="product-title">Moby-Dick or, the Whale</h2>
            <span class="price">$2.32</span>
            <a href="productaction2.php?id=9" class='bx bx-shopping-bag add-cart'></a>
        
        </div>
        <!--Box 10-->
        <div class="product-box">
            <img class="img1" src="images/blogadbook(4)new.jpg" alt="Journey to the Center of the Earth" class="product-img">
            <h2 class="product-title">Journey to the Center of the Earth</h2>
            <span class="price">$2.09</span>
            <a href="productaction2.php?id=10" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 11-->
        <div class="product-box">
            <img class="img1" src="images/blogadbook(5).jpg" alt="The Three Muskeeters" class="product-img">
            <h2 class="product-title">The Three Muskeeters</h2>
            <span class="price">$2.57</span>
            <a href="productaction2.php?id=11" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 12-->
        <div class="product-box">
            <img class="img1" src="images/blogadbook(6)new.jpg" alt="The Call of the Wild" class="product-img">
            <h2 class="product-title">The Call of the Wild</h2>
            <span class="price">$2.09</span>
            <a href="productaction2.php?id=12" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 13-->
        <div class="product-box">
            <img class="img1" src="images/bookface(3)new.jpg" alt="Born A Crime" class="product-img">
            <h2 class="product-title">Born A Crime</h2>
            <span class="price">$4.78</span>
            <a href="productaction2.php?id=13" class='bx bx-shopping-bag add-cart'></a>
          
        </div>
        <!--Box 14-->
        <div class="product-box">
            <img class="img1" src="images/blogcobook(1)new.jpg" alt="A Confederacy of Dunces" class="product-img">
            <h2 class="product-title">A Confederacy of Dunces</h2>
            <span class="price">$5.72</span>
            <a href="productaction2.php?id=14" class='bx bx-shopping-bag add-cart'></a>
          
        </div>
        <!--Box 15-->
        <div class="product-box">
            <img class="img1" src="images/blogcobook(2)new.jpg" alt="Me Talk Pretty One Day" class="product-img">
            <h2 class="product-title">Me Talk Pretty One Day</h2>
            <span class="price">$14.57</span>
            <a href="productaction2.php?id=15" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 16-->
        <div class="product-box">
            <img class="img1" src="images/blogcobook(3)new.jpg" alt="Hyperbole and a Half: Unfortunate Situations, Flawed Coping Mechanisms, Mayhem, and Other Things That Happened" class="product-img">
            <h2 class="product-title">Hyperbole and a Half: Unfortunate Situations, Flawed Coping Mechanisms, Mayhem, and Other Things That Happened</h2>
            <span class="price">$8.59</span>
            <a href="productaction2.php?id=16" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 17-->
        <div class="product-box">
            <img class="img1" src="images/blogcobook(4).jpg" alt="The Ultimate Hitchhiker's Guide to the Galaxy" class="product-img">
            <h2 class="product-title">The Ultimate Hitchhiker's Guide to the Galaxy</h2>
            <span class="price">$6.98</span>
            <a href="productaction2.php?id=17" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 18-->
        <div class="product-box">
            <img class="img1" src="images/blogcobook(5).jpg" alt="Lucky Jim" class="product-img">
            <h2 class="product-title">Lucky Jim</h2>
            <span class="price">$3.18</span>
            <a href="productaction2.php?id=18" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 19-->
        <div class="product-box">
            <img class="img1" src="images/blogcobook(6)new.jpg" alt="Where'd You Go, Bernadette" class="product-img">
            <h2 class="product-title">Where'd You Go, Bernadette</h2>
            <span class="price">$6.34</span>
            <a href="productaction2.php?id=19" class='bx bx-shopping-bag add-cart'></a>
        </div>
        <!--Box 20-->
        <div class="product-box">
            <img class="img1" src="images/salem.jpg" alt="Salem's Lot" class="product-img">
            <h2 class="product-title">Salem's Lot</h2>
            <span class="price">$7.48</span>
            <a href="productaction2.php?id=20" class='bx bx-shopping-bag add-cart'></a>
        </div>
        <!--Box 21-->
        <div class="product-box">
            <img class="img1" src="images/It(new).jpg" alt="Where'd You Go, Bernadette" class="product-img">
            <h2 class="product-title">It</h2>
            <span class="price">$1.53</span>
            <a href="productaction2.php?id=21" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 22-->
        <div class="product-box">
            <img class="img1" src="images/haunt(new).jpg" alt="The Haunting of Hill House" class="product-img">
            <h2 class="product-title">The Haunting of Hill House</h2>
            <span class="price">$5.61</span>
            <a href="productaction2.php?id=22" class='bx bx-shopping-bag add-cart'></a>
          
        </div>
        <!--Box 23-->
        <div class="product-box">
            <img class="img1" src="images/wwz(new).jpg" alt="World War Z" class="product-img">
            <h2 class="product-title">World War Z</h2>
            <span class="price">$80.75</span>
            <a href="productaction2.php?id=23" class='bx bx-shopping-bag add-cart'></a>
         
        </div>
        <!--Box 24-->
        <div class="product-box">
            <img class="img1" src="images/cucko(new).jpg" alt="The Midwich Cuckoos" class="product-img">
            <h2 class="product-title">The Midwich Cuckoos</h2>
            <span class="price">$5.74</span>
            <a href="productaction2.php?id=24" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 25-->
        <div class="product-box">
            <img class="img1" src="images/frank(new).jpg" alt="Frankenstein" class="product-img">
            <h2 class="product-title">Frankenstein</h2>
            <span class="price">$8.70</span>
            <a href="productaction2.php?id=25" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 26-->
        <div class="product-box">
            <img class="img1" src="images/interview(new).jpg" alt="Interview with the Vampire" class="product-img">
            <h2 class="product-title">Interview With The Vampire</h2>
            <span class="price">$6.07</span>
            <a href="productaction2.php?id=26" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 27-->
        <div class="product-box">
            <img class="img1" src="images/bookface(2)new.jpg" alt="The Fault in our Stars" class="product-img">
            <h2 class="product-title">The Fault in our Stars</h2>
            <span class="price">$3.42</span>
            <a href="productaction2.php?id=27" class='bx bx-shopping-bag add-cart'></a>
          
        </div>
        <!--Box 28-->
        <div class="product-box">
            <img class="img1" src="images/blogrobook(1)new.jpg" alt="Red, White & Royal Blue" class="product-img">
            <h2 class="product-title">Red, White & Royal Blue</h2>
            <span class="price">$5.27</span>
            <a href="productaction2.php?id=28" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 29-->
        <div class="product-box">
            <img class="img1" src="images/blogrobook(2)new.jpg" alt="Pride and Prejudice" class="product-img">
            <h2 class="product-title">Pride and Prejudice</h2>
            <span class="price">$2.09</span>
            <a href="productaction2.php?id=29" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 30-->
        <div class="product-box">
            <img class="img1" src="images/blogrobook(3).jpg" alt="The Time Traveler's Wife" class="product-img">
            <h2 class="product-title">The Time Traveler's Wife</h2>
            <span class="price">$4.33</span>
            <a href="productaction2.php?id=30" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 31-->
        <div class="product-box">
            <img class="img1" src="images/blogrobook(4)new.jpg" alt="Eleanor & Park" class="product-img">
            <h2 class="product-title">Eleanor & Park</h2>
            <span class="price">$4.44</span>
            <a href="productaction2.php?id=31" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 32-->
        <div class="product-box">
            <img class="img1" src="images/blogrobook(5)new.jpg" alt="The Duke and I" class="product-img">
            <h2 class="product-title">The Duke and I</h2>
            <span class="price">$5.44</span>
            <a href="productaction2.php?id=32" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 33-->
        <div class="product-box">
            <img class="img1" src="images/blogrobook(6)new.jpg" alt="Call Me By Your Name" class="product-img">
            <h2 class="product-title">Call Me By Your Name</h2>
            <span class="price">$4.56</span>
            <a href="productaction2.php?id=33" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 34-->
        <div class="product-box">
            <img class="img1" src="images/Ezio(new).jpg" alt="Assassins Creed: Renaissance" class="product-img">
            <h2 class="product-title">Assassins Creed: Renaissance</h2>
            <span class="price">$4.45</span>
            <a href="productaction2.php?id=34" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 35-->
        <div class="product-box">
            <img class="img1" src="images/dune1.jpg" alt="Dune" class="product-img">
            <h2 class="product-title">Dune</h2>
            <span class="price">$3.86</span>
            <a href="productaction2.php?id=35" class='bx bx-shopping-bag add-cart'></a>

        </div>
        <!--Box 36-->
        <div class="product-box">
            <img class="img1" src="images/foundation1(new).jpg" alt="Foundation" class="product-img">
            <h2 class="product-title">Foundation</h2>
            <span class="price">$3.69</span>
            <a href="productaction2.php?id=36" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 37-->
        <div class="product-box">
            <img class="img1" src="images/martian(new).jpg" alt="The Martian" class="product-img">
            <h2 class="product-title">The Martian</h2>
            <span class="price">$4.45</span>
            <a href="productaction2.php?id=37" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 38-->
        <div class="product-box">
            <img class="img1" src="images/contact5(new).jpg" alt="Contact" class="product-img">
            <h2 class="product-title">Contact</h2>
            <span class="price">$7.22</span>
            <a href="productaction2.php?id=38" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 39-->
        <div class="product-box">
            <img class="img1" src="images/dispos1.jpg" alt="The Dispossessed" class="product-img">
            <h2 class="product-title">The Dispossessed</h2>
            <span class="price">$6.33</span>
            <a href="productaction2.php?id=39" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 40-->
        <div class="product-box">
            <img class="img1" src="images/wrinkle3(new).jpg" alt="A Wrinkle in Time" class="product-img">
            <h2 class="product-title">A Wrinkle in Time</h2>
            <span class="price">$3.26</span>
            <a href="productaction2.php?id=40" class='bx bx-shopping-bag add-cart'></a>

        </div>
        <!--Box 41-->
        <div class="product-box">
            <img class="img1" src="images/zlatan(new).jpg" alt="I Am Zlatan" class="product-img">
            <h2 class="product-title">I Am Zlatan</h2>
            <span class="price">$14.31</span>
            <a href="productaction2.php?id=41" class='bx bx-shopping-bag add-cart'></a>
          
        </div>
        <!--Box 42-->
        <div class="product-box">
            <img class="img1" src="images/mamba(new).jpg" alt="The Mamba Mentality: How I Play" class="product-img">
            <h2 class="product-title">The Mamba Mentality: How I Play</h2>
            <span class="price">$19.97</span>
            <a href="productaction2.php?id=42" class='bx bx-shopping-bag add-cart'></a>
       
        </div>
        <!--Box 43-->
        <div class="product-box">
            <img class="img1" src="images/ali(new).jpg" alt="Muhammad Ali" class="product-img">
            <h2 class="product-title">Muhammad Ali</h2>
            <span class="price">$7.16</span>
            <a href="productaction2.php?id=43" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 44-->
        <div class="product-box">
            <img class="img1" src="images/sachin(new).jpg" alt="Playing It My Way" class="product-img">
            <h2 class="product-title">Playing It My Way</h2>
            <span class="price">$4.54</span>
            <a href="productaction2.php?id=44" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 45-->
        <div class="product-box">
            <img class="img1" src="images/god(new).jpg" alt="God is Brazilian: Charles Miller: The Man Who Brought Football to Brazil" class="product-img">
            <h2 class="product-title">God is Brazilian: Charles Miller: The Man Who Brought Football to Brazil</h2>
            <span class="price">$87.83</span>
            <a href="productaction2.php?id=45" class='bx bx-shopping-bag add-cart'></a>
            
        </div>
        <!--Box 46-->
        <div class="product-box">
            <img class="img1" src="images/usain(new).jpg" alt="Faster than Lightning My Story" class="product-img">
            <h2 class="product-title">Faster than Lightning My Story</h2>
            <span class="price">$4.10</span>
            <a href="productaction2.php?id=46" class='bx bx-shopping-bag add-cart'></a>
           
        </div>
        <!--Box 47-->
        <div class="product-box">
            <img class="img1" src="images/sania.jpg" alt="Ace against Odds" class="product-img">
            <h2 class="product-title">Ace against Odds</h2>
            <span class="price">$4.13</span>
            <a href="productaction2.php?id=47" class='bx bx-shopping-bag add-cart'></a>
          
        </div>
    </div>
</section>

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
            <a href="aboutus.php"> <i class="fas fa-arrow-right"></i> About Us </a>
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

<!-- custom js file link  -->
<script src="javascript/shop.js"></script>


</body>
</html>
<?php
}
?>