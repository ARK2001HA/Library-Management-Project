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
    <title>Famous Authours - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/famous.css">
    
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

<section id="page-header"  class="blog-header">
    <h2>Authors who helped create the reality</h2>
    <p>Read their brief introductions only in ReadVerse!</p>
</section>

<section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="images/ruskin-bond(new).jpg" alt="Ruskin Bond">
        </div>
        <div class="blog-details">
            <h4>Ruskin Bond</h4>
        <p>Ruskin Bond is an Indian author of British descent. His father, Aubrey Alexander Bond was an officer of the Royal Air Force (RAF) post in India. He studied in Bishop Cotton School in Shimla. His first novel, The Room on the Roof, received the John Llewellyn Rhys Prize in 1957. He was awarded the Sahitya Akademi Award in 1992 for Our Trees Still Grow in the Dehra, his novel in English. Bond has written hundreds of short stories, essays, novels and books for children. He was awarded the Padma Shri in 1999 and Padma Bhushan in 2014.</p>
        </div> 
        <h1>ADVENTURE</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="images/douglas-adams.jpg" alt="Douglas Noel Adams">
        </div>
        <div class="blog-details">
            <h4>Douglas Noel Adams</h4>
        <p>Douglas Noel Adams (11 March 1952 – 11 May 2001) was an English author, screenwriter, essayist, humorist, satirist and dramatist. Adams was author of The Hitchhiker's Guide to the Galaxy, which originated in 1978 as a BBC radio comedy, before developing into a "trilogy" of five books that sold more than 15 million copies in his lifetime and generated a television series, several stage plays, comics, a video game, and a 2005 feature film. Adams's contribution to UK radio is commemorated in The Radio Academy's Hall of Fame.</p>
        </div> 
        <h1>COMEDY</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="images/ShirleyJack-950x534.jpg" alt="Shirley Hardie Jackson">
        </div>
        <div class="blog-details">
            <h4>Shirley Hardie Jackson</h4>
        <p>Shirley Hardie Jackson (December 14, 1916 – August 8, 1965) was an American writer known primarily for her works of horror and mystery. Over the duration of her writing career, which spanned over two decades, she composed six novels, two memoirs, and more than 200 short stories. Born in San Francisco, California, Jackson attended Syracuse University in New York, where she became involved with the university's literary magazine and met her future husband Stanley Edgar Hyman.</p>
        </div> 
        <h1>HORROR</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="images/nalini-singh.jpg" alt="Nalini Singh">
        </div>
        <div class="blog-details">
            <h4>Nalini Singh</h4>
        <p>Nalini Singh is a New Zealand author of Indo-Fijian descent. She has authored numerous paranormal romance novels. Of Indian descent, Nalini Singh was born in 1977 in Rotuma, and moved to New Zealand as a child. She attended Mount Roskill Grammar School. In 1999, Singh placed third in the Romance Writers of New Zealand's "Clendon Award". Then in 2001 her manuscript "Coaxing the Sheik" won the Jane Porter Award for highest-placed Mills and Boon, as well as the Clendon Award's Readers' Choice Award that year.</p>
        </div> 
        <h1>ROMANCE</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="images/william-gibson.jpg" alt="William Ford Gibson">
        </div>
        <div class="blog-details">
            <h4>William Ford Gibson</h4>
        <p>William Ford Gibson (born March 17, 1948) is an American-Canadian speculative fiction writer and essayist widely credited with pioneering the science fiction subgenre known as cyberpunk. Beginning his writing career in the late 1970s, his early works were noir, near-future stories that explored the effects of technology, cybernetics, and computer networks on humans—a "combination of lowlife and high tech"—and helped to create an iconography for the information age before the ubiquity of the Internet in the 1990s.</p>
        </div> 
        <h1>SCI-FI</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="images/chad-harbach.jpg" alt="Chad Harbach">
        </div>
        <div class="blog-details">
            <h4>Chad Harbach</h4>
        <p>Chad Harbach (born 1975) is an American writer. An editor at the journal n + 1, he is the author of the 2011 novel The Art of Fielding. Harbach grew up in Racine, Wisconsin. His father was an accountant and his mother the head of a Montessori school. Harbach graduated from Harvard University, where he befriended fellow writers and journalists Keith Gessen and Benjamin Kunkel. He received an MFA from the University of Virginia in 2004. Harbach is both an editor and writer and worked on his novel The Art of Fielding for nine years.</p>
        </div> 
        <h1>SPORTS</h1>
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

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="javascript/shop.js"></script>

</body>
</html>
<?php
}
?>