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
    <title>Virtual Library - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/homepage.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="duplicatehome.php" class="logo"><img class="myImg" src="images/readverse-01.png"></a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
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
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forgot password ? <a href="forgetpassword.php">click here</a></p>
        <p>don't have an account ? <a href="signin.php">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>upto 75% off</h3>
            <p>We curate a set of learning experiences across creative & intellectual pursuits by partnering with the best in the business. Read, Rent, Buy & Explore for more!</p>
            <a href="#bottom" class="btn">shop now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a class="swiper-slide"><img src="images/book-1.png" alt="The Art City"></a>
                <a class="swiper-slide"><img src="images/book-2.png" alt="Give Thanks In Everything Happy"></a>
                <a class="swiper-slide"><img src="images/book-3.png" alt="Your Name"></a>
                <a class="swiper-slide"><img src="images/book-4.png" alt="Join Hands"></a>
                <a class="swiper-slide"><img src="images/book-5.png" alt="Music Rock"></a>
                <a class="swiper-slide"><img src="images/book-6.png" alt="The Evergreen Prophecy"></a>
            </div>
            <img src="images/stand.png" class="stand" alt="Wallpaper">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p>order over $100</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100 secure payment</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p>10 days returns</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts  -->
<p id="bottom"></p>

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-1.png" alt="The Art City">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="productaction.php?id=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">   b
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-2.png" alt="Give Thanks In Everything Happy">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$20.79 <span>$25.89</span></div>
                    <a href="productaction.php?id=2" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-3.png" alt="Your Name">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$16.59 <span>$23.49</span></div>
                    <a href="productaction.php?id=3" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-4.png" alt="Join Hands">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$27.39 <span>$30.99</span></div>
                    <a href="productaction.php?id=4" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-5.png" alt="Music Rock">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$14.19 <span>$18.56</span></div>
                    <a href="productaction.php?id=5" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-6.png" alt="The Evergreen Prophecy">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$10.98 <span>$15.99</span></div>
                    <a href="productaction.php?id=6" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-7.png" alt="The Lighthouse">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$21.33 <span>$26.97</span></div>
                    <a href="productaction.php?id=7" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-8.png" alt="Black History Month">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$29.99 <span>$33.44</span></div>
                    <a href="productaction.php?id=8" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-9.png" alt="Love">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$18.92 <span>$24.69</span></div>
                    <a href="productaction.php?id=9" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="likeaction2.php" class="fas fa-heart"></a>
                    <a href="likeaction3.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book-10.png" alt="Retro">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="price">$20.96 <span>$26.82</span></div>
                    <a href="productaction.php?id=10" class="btn">add to cart</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="newsletteraction.php" method="post" >
        <h3>subscribe for latest updates</h3>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        <input type="submit" name="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>new arrivals</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-1.png" alt="Shout out to The Girls">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$30.99 <span>$40.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-2.png" alt="The Number Detective">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$31.49 <span>$34.59</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-3.png" alt="A History Of Pictures">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$29.79 <span>$32.19</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-4.png" alt="The Silk Roads">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$32.95 <span>$35.10</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-5.png" alt="The Short & Curly Guide To Life">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$25.69 <span>$28.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-6.png" alt="The Atlas Obsura Explorer's Guide">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$33.99 <span>$36.98</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-7.png" alt="Charlie And The Chocolate Factory">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$36.59 <span>$39.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-8.png" alt="Charlotte's Web">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$35.92 <span>$38.23</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-9.png" alt="Eloise">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$37.95 <span>$40.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a class="swiper-slide box">
                <div class="image">
                    <img src="images/newbook-10.png" alt="Harry Potter and the Deathly Hallows">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$34.59 <span>$41.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>deal of the day</h3>
        <h1>upto 50% off</h1>
        <p>We bring these learning experiences to communities around JustBooks libraries. Glance through the deal of the month books to avail best offers on them.</p>
        <a href="shoppingpage.php" class="btn">shop now</a>
    </div>

    <div class="image">
        <img src="images/deal-img.jpg" alt="Deal Image">
    </div>

</section>

<!-- deal section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>client's reviews</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="images/pic-1.png" alt="John Doe">
                <h3>john deo</h3>
                <p>A website with over a million books to choose. It has a comprehensive list which consists of a wide range of books from all over the world.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/pic-2.png" alt="Elina Carter">
                <h3>Elina Carter</h3>
                <p>ReadVerse has a wishlist based free door deliver system with AI based recommendations and unlimited exchanges and free magazines.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/pic-3.png" alt="Adam Mushkin">
                <h3>Adam Mushkin</h3>
                <p>The website gives a 3-day exclusive access on all new books. I can receive any book or magazine without stepping out of the door.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="images/pic-4.png" alt="Disha Banerjee">
                <h3>Disha Banerjee</h3>
                <p>The more I read the less I pay. Millions of books on different old and current genres are available through Control Digital Lending. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/pic-5.png" alt="Preet Singh">
                <h3>Preet Singh</h3>
                <p>Through this website, I can keep track of my books using List & the Reading Log. It helps me to find matching results within the numerous books.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/pic-6.png" alt="Isa Namjoon">
                <h3>Isa Namjoon</h3>
                <p>This Virtual Library has a Virtual Library Explorer where digital shelves are organized like a physical library.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>our blogs</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="Amazon Book Review">
                </div>
                <div class="content">
                    <h3>Amazon Book Review</h3>
                    <p>This book blog topped Scribendi's 2020 list, and it's easy to see why. It's probably the most comprehensive book blog out there for contemporary works, and it covers all kinds of genres. The Editors' Picks seem to have something for everyone.

                        All of this booky goodness is presented on a bright, easy-to-navigate website. There are even celebrity picks, where "celebrity" encompasses not only film and TV stars but also athletes, musicians, and authors. I must say that this book blog also tops my list when it comes to what's hot off the press and for its sheer variety.</p>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="John Pistelli">
                </div>
                <div class="content">
                    <h3>John Pistelli</h3>
                    <p>If you're not concerned about hot topics and current events and are just looking for a good read, then this is the site for you. 

                        John Pistelli is a professor at the University of Minnesota and holds a Ph.D. in English literature. He has also published several works of fiction and poetry. His website provides a new book review every week or so, and his choices are anchored in his personal interests, which center on classic and contemporary fiction. Take a look at his review index for a ton of books to choose from, each with his thoughtful and artful opinions and musings.</p>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="Literary Hub">
                </div>
                <div class="content">
                    <h3>Literary Hub</h3>
                    <p>This book blog has everything you need to keep up to date with the literary world, plus some news and culture on the side.

                        In addition to its numerous resources for both reading and writing, what caught my attention is its "Book Marks" section.

                        Similar to what "Rotten Tomatoes" does for movies, "Book Marks" compiles book reviews from magazines, newspapers, and websites and averages them into a score of "Rave," "Positive," "Mixed," or "Pan." You can also leave your own comments and reviews. Literary Hub is also a great site for finding your next favorite book-related podcast.</p> 
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="images/blog-4.jpg" alt="49th Shelf">
                </div>
                <div class="content">
                    <h3>49th Shelf</h3>
                    <p>This site calls itself "the largest collection of Canadian books on the Internet." No kidding! The site is extremely comprehensive but also very easy to navigate. There's something for everyone, and you can sign up for free to contribute your own reviews, comments, and book ratings.
                        If you like reading lists, you'll love this book blog. From "10 Exciting New Books From Up-and-Coming Authors" to the "40 Best Spy Novels of All Time," you're sure to find a list that interests you.
                        Moreover, it's easy to get lost in their articles on a wide variety of book-related topics. This blog stands out mainly for its unique name.</p>
    
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="images/blog-5.jpg" alt="The Broadcast (By Reedsy)">
                </div>
                <div class="content">
                    <h3>The Broadcast (By Reedsy)</h3>
                    <p>If you like reading lists, you'll love this book blog. From "10 Exciting New Books From Up-and-Coming Authors" to the "40 Best Spy Novels of All Time," you're sure to find a list that interests you.

                        Moreover, it's easy to get lost in their articles on a wide variety of book-related topics. Blogger Susan Osborne has worked in book sales and as a writer and magazine editor. Her book blog is simple and crisp.

                        Susan provides thoughtful reviews and arranges books into unique categories, such as "Five Books I've Read," where she groups books in fives according to different themes, & "Six Degrees of Separation, etc.</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a> <i class="fas fa-map-marker-alt"></i> india </a>
            <a> <i class="fas fa-map-marker-alt"></i> USA </a>
            <a> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a> <i class="fas fa-map-marker-alt"></i> france </a>
            <a> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a> <i class="fas fa-map-marker-alt"></i> africa </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Adventure </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Comedy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Horror </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Romance </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Sci-fi </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Sports </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> About Us </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Famous Authors </a>
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

<!-- loader  -->

<!-- <div class="loader-container">
    <img src="images/loader-img(1).gif" alt="Book Gif">
</div> -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="javascript/homepage.js"></script>

</body>
</html>
<?php
}
?>