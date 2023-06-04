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
    <title>Sports - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/sports.css">
    
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
        <p>Don't have an account ? <a href="signin.php">Create one</a></p>
    </form>

</div>

<h1>Welcome to the World of Sports</h1>

<div class="container" id="container">
    <div class="book-content">
        <div class="book">
            <div class="face-front" id="portada"></div>
            <div class="face-back" id="trsf">
                 <h1>Summary- I Am Zlatan</h1>
                <p>Welcome to planet Zlatan. This is the story of how a Swedish immigrant rose from poverty to become a football genius. I AM ZLATAN - the explosive, critically-acclaimed memoir of Manchester United star Zlatan Ibrahimovic, one of the world's most gifted and controversial footballers"Why be a Fiat when you can be a Ferrari?" 

                <br>
                Welcome to planet Zlatan. This is the story of how a Swedish immigrant rose from poverty to become a football genius. In his own inimitable style, Zlatan recalls every struggle, every goal, and every training ground bust-up on his journey to dominate the world's top clubs, including Barcelona, PSG and now Manchester United.
                <br>
                Full of wicked one-liners and amazing stories, Zlatan lifts the lid on some of the biggest names in football, including Guardiola, Messi and his new manager, Jose Mourinho.Moving, funny and totally frank, I am Zlatan is unlike any autobiography you have ever read. "Wonderful - nothing less than a revelation. Ibrahimovic is the definitive modern sporting icon" - 
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
               <h1>Summary- I Am Zlatan</h1>
                <p>Matthew Syed "The best sportsman's memoir since Andre Agassi... not just a bad boy's romp but the rise of a boy from the ghetto to the top of his profession and captain of his country. He is candid, funny and yes, wonderfully nuts"
                - The Times'There's never a dull moment on Planet Zlatan. This is a snarling, fizzing, unrepentant firecracker of a book, if footballers' memoirs bore you, make an exception for this one' - Independent
                <br>
                 I Am Zlatan Ibrahimovic deals with Zlatan’s early life in the Malmo suburb of Rosengaard and his career in football, his thoughts and emotions during the high points and the low points. Ibra, as he became nicknamed when he first when to Italy to play for Juventus, had a rough upbringing, split between the homes of his Bosnian father Sefik who had an alcohol problem and his Croatian mother, Jurka, who worked hard to raise Zlatan and his siblings.
                 <br>
                 As a child, there was no “pass the milk, dear” and Zlatan was something 
                </p>
            </div>
            <div class="face-back">
               <h1>Summary-  I Am Zlatan </h1>
                <p>of a recluse as a child, however, he loved watching Marco van Basten and Ronaldo. He knew of Cruzeiro, the former club of his close friend, Maxwell due to Ronaldo.
                <br>
                Zlatan stole bikes as a child and performed poorly in school, he was singled out for this. The parents of his clubs said he didn’t fit in and should be moved on, but Ibrahimovic continued to work hard and did his thing.That is the main insight into his story. He experiences raw emotions that we all do, wanting to impress, wanting to win, feeling down, not yourself, lonely, but like he says he dealt with it his way and it worked for him.
                <br>
                 His advice is for readers to do the same, they shouldn’t be like him, but they need to be themselves and do what is right for him.We learn how he went from being a shy, awkward teenager to one of the world’s biggest sporting stars as his philosophy, what was dear to him pushed him in. 
                 </p>   

            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>About I Am Zlatan</h1>
                <p>I AM ZLATAN - the explosive, critically-acclaimed memoir of  Zlatan Ibrahimovich, one of the world's most gifted and controversial footballers"Why be a Fiat when you can be a Ferrari?" Welcome to planet Zlatan. This is the story of how a Swedish outsider rose from poverty to become a football genius. In his own inimitable style, Zlatan recalls every struggle, every goal, and every training ground bust-up on his journey to dominate the world's top clubs, including Ajax, Juventus, Internazionale, Barcelona, Milan and Paris Saint-Germain. 
                <br>
                Full of wicked one-liners and amazing stories, Zlatan lifts the lid on some of the biggest names in football, including Guardiola, Mourinho and Messi. Moving, funny and totally frank, I am Zlatan is a remarkable story of genuine hardship and unimaginable success. It is unlike any autobiography you have ever read..


                <br>
                "The best footballer's autobiography of recent years is probably I Am Zlatan Ibrahimovic . . ." Simon Kuper, author of Why Eagerly awaited, not 
                </p>
            </div>
            <div class="face-back">
                <h1>About I Am Zlatan</h1>
                <p>least because Ibra seems to be spoiling for a fight on every other page. 'Dynamite' said one Swedish reporter' Daily Mail on I AM ZLATAN 
               "Guardiola has no balls. He drove me like a Fiat . . . I'm a Ferrari" Zlatan Ibrahimovic - professional football's most mercurial player, Swedish national hero, tabloid fixture, fashion icon, modern day-philosopher and black belt in Taekwondo. Born to a Muslim father from Bosnia, and a Catholic mother from Croatia, Zlatan recounts his extraordinary life story, from his poverty-stricken upbringing as an immigrant in Malmö, Sweden, to becoming one of the world's most sought-after and expensive players. gracing Europe's finest clubs, from Ajax to Juventus, Internazionale to Barcelona, Milan to Paris Saint-Germain. I AM ZLATAN reveals a rare and ferocious intelligence, willpower and God-given talent most recently exhibited when Zlatan scored all 4 goals for Sweden in a 4-2 victory against England. His fourth goal, a 30-yard overhead kick with his back is considered as one of the major worldwide 
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>About I Am Zlatan</h1>
                <p>goals. To goal is widely regarded as one of the greatest goals of all time. The BBC described it as a goal that 'combined unfathomable imagination and expert technique
                <br>
                Mixing in street moves and trick plays, Zlatan was a wild talent who rode to practice on stolen bikes and relished showing up the rich kids—opponents and teammates alike.
                <br>
                Goal by astonishing goal, the brash young outsider grew into an unlikely prodigy and, by his early twenties, an international phenomenon. Told as only the man himself could tell it, featuring stories of friendships and feuds with the biggest names in the sport. I Am Zlatan is a wrenching, uproarious, and ultimately redemptive tale for underdogs everywhere.

                <br> 
                Daring, flashy, innovative, volatile—no matter what they call him, Zlatan Ibrahimovic is one of soccer’s brightest stars one of the world’s most prolific strikers. Captain of his native Sweden, and
                one of the greatest player the world has seen.
                </p>
            </div>
            <div class="face-back" id="portada-back">
            </div>
        </div>
    </div>
</div>

<h2 class="h1">Our precious collections</h2>

<img id="myImg" src="images/mamba(new).jpg" alt="Kobe Bryant was a professional basketball player that played for the Los Angeles Lakers in the NBA. He entered the NBA directly from high school and won five NBA championships.

Kobe dwelled on his mentality going into and out of games, his routines, his match-ups and how he used his time.

Bryant was an 18-time All-Star, 15-time member of the All-NBA Team, 12-time member of the All-Defensive Team, and the 2008 NBA Most Valuable Player (MVP). Widely regarded as one of the greatest basketball players of all time, he led the NBA in scoring during two seasons, ranks fourth on the league’s all-time regular-season scoring, and ranks fourth on the all-time postseason scoring list. Upon graduation, he declared for the 1996 NBA draft and was selected by the Charlotte Hornets with the 13th overall pick; the Hornets then traded him to the Lakers.
As a rookie, Bryant earned himself a reputation as a high-flyer and a fan favorite by winning the 1997 Slam Dunk Contest, and he was named an All-Star by his second season. After the Lakers lost the 2004 NBA Finals, O’Neal was traded to the Miami Heat and Bryant became the cornerstone of the Lakers. He led the NBA in scoring during the 2005–06 and 2006–07 seasons. In 2006, he scored a career-high 81 points against the Toronto Raptors, the second-most points scored in a single game in league history behind Wilt Chamberlain’s 100-point game in 1962. Bryant was named the regular season’s MVP in 2008.
After the Lakers lost in the 2008 NBA Finals, Bryant led the team to two consecutive championships in 2009 and 2010, earning the Finals MVP Award on both occasions. He continued to be among the top players in the league through 2013 when he suffered a torn Achilles tendon at age 34. He recovered but suffered season-ending injuries to his knee and shoulder in the following two seasons. Citing his physical decline, Bryant retired after the 2015–16 season

At 34 years and 104 days of age, Bryant became the youngest player in league history to reach 30,000 career points. He became the all-time leading scorer in Lakers franchise history on February 1, 2010, when he surpassed Jerry West.His four All-Star MVP Awards are tied with Bob Pettit for the most in NBA history. At the 2008 and 2012 Summer Olympics, he won two gold medals as a member of the U.S. national team. Initially, Kobe Bryant thought the phrase “Mamba Mentality” was just a catchy hashtag that he’d start on Twitter. Something witty and memorable. But it took off from there and came to symbolize much more.The mindset isn’t about seeking a result—it’s more about the process of getting to that result. It’s about the journey and the approach. Kobe calls it “way of life”.

As he mentioned in the book, Kobe never thought about hid daily preparation. His routine was grueling. It involved early mornings and late nights. It involved stretching, lifting, training, hooping, recovery, and film study.For that reason, a lot of players pare down their lifting and training during the season. They try to conserve their energy. He found that this work might be strenuous on the day-to-day, but it left him stronger and more prepared during the dog days of the season and the playoffs.
Kobe Bryant overcome these obstacles? He explained that he did not care if there was pain, he said the pain is bearable, he just didn’t want the injury to get worse. If only the pain got worse then he’d fight through the pain.

Kobe was known for his “Mamba Mentality”, to summarize what it is he mentioned it was a “No lose” zone, where the only possible outcome for him is winning, and he will do whatever it takes to do just that." />

   <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<img id="myImg1" src="images/ali(new).jpg" alt="In the words of more than 200 of Ali’s family members, opponents, friends, world leaders, and others who have known him best, the real Muhammad Ali emerges: deeply religious, mercurial, generous, a showman in and out of the ring.

Thirty years after he burst onto the scene as a gold medal light-heavyweight at the Rome Olympics, Muhammad Ali is still a magical figure. His accomplishments in the ring were the stuff of legend—the two fights with Sonny Liston, when he proclaimed himself “The Greatest” and proved he was; the three epic wars against Joe Frazier; the stunning victory over George Foreman in Zaire; and the shocking loss and final win that made him the first man to win back the heavyweight crown twice, fourteen years after he had first claimed it.

Ali’s life has been played out as much on the front pages as on the sports pages. With brilliant immediacy and unprecedented candor, bestselling author Thomas Hauser recreates this extraordinary man. Draft dodger, rebel, poet and Third World supporter, boxing champ Muhammad Ali symbolizes different things to different people. To many an icon of black pride and empowerment, the Kentucky-born heavyweight is viewed by others as a separatist who embraced the divisive Black Muslim religion, by still others as the victim of a brutalizing sport. Diverse opinions are represented in this hefty, generally admiring compendium that seems less like an authorized biography (though it is) than a forum where rivals, trainers, friends, enemies, ex-wives, sportswriters and associates air their views. The roster of interviewees includes Archie Moore, Howard Cosell, Floyd Patterson, A. J. Liebling, Betty Shabazz (Malcolm X's widow), Ted Kennedy, Dick Gregory, Arthur Ashe and dozens of others. A feast for fans, this composite portrait bristles with insights, jabs and tributes

Born and raised in Louisville, Kentucky, he began training as an amateur boxer at age 12. At 18, he won a gold medal in the light heavyweight division at the 1960 Summer Olympics and turned professional later that year. He became a Muslim after 1961. He won the world heavyweight championship from Sonny Liston in a major upset on February 25, 1964, at age 22. Also that year, he renounced his birth name as a slave name and formally became known as Muhammad Ali. In 1966, Ali refused to be drafted into the military owing to his religious beliefs and ethical opposition to the Vietnam War and was found guilty of draft evasion and stripped of his boxing titles. He stayed out of prison while appealing the decision to the Supreme Court, where his conviction was overturned in 1971. However, he had not fought for nearly four years by this point and had lost a period of peak performance as an athlete. Ali's actions as a conscientious objector to the Vietnam War made him an icon for the larger 1960s counterculture generation,and he was a very high-profile figure of racial pride for African Americans during the civil rights movement and throughout his career. As a Muslim, Ali was initially affiliated with Elijah Muhammad's Nation of Islam (NOI). He later disavowed the NOI, adhering to Sunni Islam, and supported racial integration like his former mentor Malcolm X.

He fought in several historic boxing matches, such as his highly publicized fights with Sonny Liston, Joe Frazier (including the Fight of the Century, the biggest boxing event up until then), the Thrilla in Manila, and his fight with George Foreman in The Rumble in the Jungle. Ali thrived in the spotlight at a time when many boxers let their managers do the talking, and he became renowned for his provocative and outlandish persona. He was known for trash-talking, and often free-styled with rhyme schemes and spoken word poetry incorporating elements of hip hop, and often predicted in which round he would knockout his opponent.

Outside boxing, Ali attained success as a spoken word artist, releasing two studio albums: I Am the Greatest! (1963) and The Adventures of Ali and His Gang vs. Mr. Tooth Decay (1976). Both albums received Grammy Award nominations. He also featured as an actor and writer, releasing two autobiographies. Ali retired from boxing in 1981 and focused on religion, philanthropy and activism. In 1984, he made public his diagnosis of Parkinson's syndrome, which some reports attributed to boxing-related injuries, though he and his specialist physicians disputed this. He remained an active public figure globally, but in his later years made fewer public appearances as his condition worsened, and he was cared for by his family. Ali died on June 3, 2016." />
   <!-- The Modal -->
<div id="myModal1" class="modal1">
  <span class="close1">&times;</span>
  <img class="modal-content1" id="img02">
  <div id="caption1"></div>
</div>
<img id="myImg2" src="images/sachin(new).jpg" alt="Tendulkar took up cricket at the age of eleven, made his Test match debut on 15 November 1989 against Pakistan in Karachi at the age of sixteen, and went on to represent Mumbai domestically and India internationally for close to twenty-four years. In 2002, halfway through his career, Wisden ranked him the second-greatest Test batsman of all time, behind Don Bradman, and the second-greatest ODI batsman of all time, behind Viv Richards. Later in his career, Tendulkar was part of the Indian team that won the 2011 Cricket World Cup, his first win in six World Cup appearances for India. He had previously been named Player of the Tournament at the 2003 edition of the tournament.

Tendulkar received the Arjuna Award in 1994 for his outstanding sporting achievements, the Khel Ratna Award, India's highest sporting honour, in 1997, and the Padma Shri and Padma Vibhushan awards in 1999 and 2008, respectively, two of India's highest civilian awards. A few hours after the end of his last match in November 2013, the Prime Minister's Office announced the decision to award him the Bharat Ratna, India's highest civilian award. As of 2021, he is the youngest recipient to date and was the first sportsperson to receive the award. In 2012, Tendulkar was nominated to the Rajya Sabha, the upper house of the Parliament of India. In 2010, Time magazine included Tendulkar in its annual Time 100 list as one of the most influential people in the world.

Tendulkar was awarded the Sir Garfield Sobers Trophy for cricketer of the year at the 2010 ICC Awards. Having retired from ODI cricket in 2012, he retired from all forms of cricket in November 2013 after playing his 200th Test match. Tendulkar played 664 international cricket matches in total, scoring 34,357 runs.

As already mentioned, the narrative starts from Sachin's childhood and travels through his entire cricketing journey through some of the most glorious moments of his career. The book is written in strict chronological order. The English is direct and doesn't contain bombastic words or phrases. Evidently it is written thinking about the common cricket-loving masses of India and the world. However, it is to be noted that Sachin has either totally avoided or mentioned minimally about various controversies during 1989 to 2013. He has not shown any Indian cricketer in negative light. However, the issue of many niggling injuries has returned time and again. The reader also comes to know how Sachin tackled these problems motivated by his love of the game and for the country. 
We are simply astonished by his single-minded affection and dedication to the game of cricket. Fortunately, his parents, brothers, wife and even children have been his pillars of strength during his long cricketing journey. Not only injuries, Sachin has time and again mentioned about food of various countries as well as the food prepared by his mother and wife, in this book. The compilation of statistical part of the book is simply astounding and mind-boggling and it covers Sachin's entire international career, series by series, match by match. This is simply not a mean achievement.

The quality of binding and printing of the book is excellent. It contains some excellent photos mainly from author's personal collection.
Although the book has avoided contentious issues, we must read the book to know a complete cricketer and a total family man. The book is not only meant for the cricket-loving people of the world. After reading the book, the reader understands that complete devotion and firm determination can take a man to the pinnacle of glory. In that sense it is a motivational book also." />
   <!-- The Modal -->
<div id="myModal2" class="modal2">
  <span class="close2">&times;</span>
  <img class="modal-content2" id="img03">
  <div id="caption2"></div>
</div>
<img id="myImg3" src="images/god(new).jpg" alt="In the 19th century, the British funded the Brazilian economy, built Brazil’s infrastructure – and taught Brazil how to play football.Brazil was never part of the British Empire. However, a small but very influential group of Britons lived and worked in Brazil. British values, institutions, expertise and money permeated the country.
Even São Paulo, a provincial little town, plopped in the middle of uninteresting farmland – even that distant, dusty town had a stalwart British community which led a determinedly colonial existence.

In 1874, the chaplain of St Paul’s, the British church in São Paulo, registered the birth of a boy. The father was Scottish; the mother was English; the boy’s name was Charles William Miller. Like many sons of British expatriates, Charles Miller went “back home” for his education. At the frail age of nine, he was put on a ship at Santos and sent to boarding-school in Southampton. At that time, São Paulo was a small town with a few shambolic streets, whereas Southampton was one of the greatest ports on the planet. Travelling from one to the other meant moving from a sleepy hamlet to a thriving metropolis.

Charles Miller went to a small boarding school on the outskirts of Southampton. From his education, he had learnt only one lesson that really mattered to him: the rules of football. He was a fast, skilful player. He played for the Corinthians (the greatest amateur team of all time) and St Mary’s (now better known as Southampton Football Club).
In 1894, Charles Miller sailed back to Brazil. In his luggage, he carried a book of rules and a deflated football.When Charles Miller arrived in Brazil, he discovered to his horror that no-one knew how to play the beautiful game. The expatriate community had retained many British customs – cricket on Saturdays, afternoon tea at four, visiting-cards on silver trays – but not football.

Charles had found his mission. He pumped up the football, summoned his friends and colleagues to a patch of wasteland near the railway station, divided them into two teams and explained the rules. He wasn’t prepared for the amazing success of his game. Within months, people were playing football all over São Paulo. Within a few years, the game had conquered the entire country. Fifty years after his death, Charles Miller has been forgotten.

In Brazil, people know his name and a few inaccurate myths about his life, but nothing more. In Britain, hardly anyone even knows his name.The British influence in Brazil has dwindled to a few language schools and a dribble of investment. And when British footballers are confronted by Brazilian opponents, they pray that the score doesn’t reach double figures. The story of Charles Miller’s life isn’t just a tale of one man’s fascinating life, Nor is it merely an intriguing episode in the history of football. The spread of football from Britain to Brazil is a neat riposte to anyone who is fearful of cultural imperialism.

The English may have invented the rules of football, and the British may have carried the balls and the rulebooks in their imperial baggage, but Brazilians quickly made the game again in their own image. A hundred years later, talents and skills are flowing back the other way. In Britain, just as all over Europe, home-grown players display the skills and techniques which they have learnt from their Brazilian colleagues
oday, Brazil is the greatest football-playing nation in the world, admired everywhere for its skill, passion, flair and commitment to attacking play - but Charles Miller has been forgotten. This is his story; a gripping narrative of one man's love of football and the clash between two very different cultures: the foxtrot versus the samba; the stiff upper lip versus swinging hips. Josh Lacey tells the profoundly moving story of a man who gave Brazil its greatest gift but lost everything - his heart, his soul and even his wife - to that seductive country.

Charles Miller’s gift is being repaid.." />
   <!-- The Modal -->
<div id="myModal3" class="modal3">
  <span class="close3">&times;</span>
  <img class="modal-content3" id="img04">
  <div id="caption3"></div>
</div>
<img id="myImg4" src="images/usain(new).jpg" alt="The autobiography of the fastest man of all time and a superstar whose talent and charisma have made him one of the most famous people on the planet.

Whether you know Athletics or not, and even whether you know sport or not, chances are you know Usain Bolt. The fastest man on the planet, not just now but ever, Usain has won the hearts of people everywhere with his mind-blowing performances and his infectious charisma – uniting supporters around the world.
In this, his full autobiography, Usain tells his story in his own words: from humble beginnings in Jamaica, to international stardom at Beijing and on to the new heights of superstardom he has reached since lighting up London 2012.
Full of the charm and charisma that has made him the most popular sporting figure of our time and a universal celebrity, this is a book that Usain’s millions of fans will love

There is no denying the unbelievable talent of Usain Bolt and his dominance over the 100m and 200m sprints over the past 8 to 10 years. For Usain Bolt fans, you will love this book as it is an easy to read story. It covers his childhood in Jamaica, how he starting in running and his journey to legend status as a superstar athlete. Usain shares with his readers a real insight into what makes him tick. He describes openly how he feels at different stages of his life. It was very interesting to read about how he felt during each stage of his major races, including world championships and his two Olympic Games
Usain was distracted from training at times by the enticing party life as a young male. He later finds some motivation in winning to make money. He wanted what other athletes had, he wanted more!

However, after a surprising defeat, he soon discovers that raw talent is not enough. He needed to work hard too. Usain then identifies that his real motivation is not the money but “I wanted to be a champ in the 2008 Beijing Olympic Games.” He focused hard on all aspects of his training from that point on and well…the results speak for themselves.
He was particularly interested to read about the mind games involved in athletics. This wasn’t just in relation to the mindset of each athlete. From the young age of 14, Usain analysed and studied the strengths and weaknesses of his competitors in order to strategise his races. He successfully used this to his advantage throughout his career. However, he also highlights the tactics that some other athletes use to psyche out their opponents before a race which I found quite eye opening.

Usain has undoubtedly won millions of fans with his engaging personality. But I have to admit I have never been able to feel totally comfortable with some of Usain’s antics and over confidence. That might just be the difference in my personality though. I am much more conservative, always promoting modesty to my kids. However, after reading his autobiography, I now have a more understanding perspective. Usain actually acknowledges and discusses his “acts of showmanship“ in the book. He also describes life after his success in Beijing. This included increased popularity, fans and attention from girls. But it also attracted increased scepticism, added focus from drug testers, through to the responsibilities that came with the “Usain Bolt brand” development. Life was no longer just about running. There were significant commitments arising from sponsorships and endorsements. Keeping up his “entertaining performances” was an all important part of attracting crowds to major meets

This book offers some great themes for young athletes including:

Find your motivation. “Desire is the key to success.”
Self Motivation is the key. The best coach cannot make you train.
Raw talent is not enough to be the best in the world. You need to work hard too.
Understand your own body.
A strong relationship with a great coach that you trust is essential to your success" />
   <!-- The Modal -->
<div id="myModal4" class="modal4">
  <span class="close4">&times;</span>
  <img class="modal-content4" id="img05">
  <div id="caption4"></div>
</div>
<img id="myImg5" src="images/sania.jpg" alt="It is the inspirational story of a girl who was forever in the public glare, most unfortunately for all the wrong reasons. The pains her parents bore while she was preparing for tournaments as a youngster when there were hardly any modern tennis courts, fatwa by fundamentalists over her dress-code, the engagement that was cancelled, getting married to a Pakistani cricketer, several times getting a bad media and how she was the victim in the AITA melodrama ahead of the London Olympics et al – all these she handled with rare dexterity. A more tearful chapter is about how she would break down when alone but put up a brave face on the outside. Young girls can learn about how the girl from a traditional Muslim family broke through the shackles and conquered the world on the strength of her aggressive playing style while defying innumerable myths, along the way. There is also a possibility that to the down and out champion players, a reading into her story can come as the balm that can help overcome bouts of depression during particularly critically phases. As the Chief Editor of Harper Collins, Karthika VK explains, Sania’s is an extraordinary achievement and ‘Ace Against Odds’ is as compelling as it is inspirational.
 
 Finding her passion for tennis at a very young age, Sania became an instant sensation after she won the Wimbledon championship girl’s doubles title at the age of 16. She had a remarkable career during her late teens. She is a six-time grand slam champion and between August 2015 and February 2016, Sania and her Swedish partner Martina Hingis garnered 41 consecutive victories in doubles. She is currently world no.1 in women’s doubles category. Ace against odds is the autobiography penned down by Sania with the help of her father and mentor Imran Mirza and sports journalist Shivani Gupta

 Ever since she discovered her passion for tennis, Sania began to work hard backed by constant motivation from her supportive parents. The funny yet touching situation where her mother convinced a coach to train her, her near death experiences while travelling (which will surely give you goosebumps) notably her encounter with ‘harthaal‘, the sacrifices she had to make and the major achievements she made as the first Indian woman. I couldn’t put the book down while reading those portions and at times, I felt motivated to play tennis myself. One of her major ambitions is to win every major title for India, emphasising her love for the nation. Her love for the country is highlighted at several other instances.
 She also worked for the awareness of gender-biased sex selection, a cause introduced to her by Sushma Swaraj, for which she wrote columns in newspapers occasionally and expressed interest in women’s rights causes. She revealed about her dream to have more players in India and wishes to coach talented players after retirement. Now, everyone knows that apart from the flag controversy, her marriage to a Pakistani player is one of the major controversies surrounding her personal life. She handled that with grace without letting his husband’s nationality take up any substantial space in conversations. Her husband, Shoaib Malik, is talked about as someone who was very supportive of her career and considers himself as her No. 1 fan. It is evident to sense her frustration when she describes her near misses, in a bid to succeed against all odds created by the controversies. When she was branded as “Pakistan’s daughter-in-law“, she won the U.S cup eventually and dedicated the cup to India.
 
 This book gives an insight into those aspects of Sania that we probably never knew, due to the controversies surrounding her, overshadowing her achievements. Sania has a “love-hate” relationship with the press; either people stood up for her firmly. Or, they scrutinised her to the point where she lost a major part in her career. As per Sania’s writing, the flag controversy conjured up land when the case was resolved, the news was limited to a small column. But this controversy gave the officials of Hopman cup (where Sania played for India) a wrong impression about India due to the circumstances of the controversy. Eventually, India was omitted out and Sania was not invited, the following year. Such instances will make your blood boil and media people should learn a thing or two before branding an influencer, who spend their blood and sweat for India, in such a baleful manner. Sania clarified on the fatwa controversy by defining the meaning of the word “fatwa“, which is misunderstood as “murder” threat by people. She substantiated further, regarding the issues she faced as a woman in a male-dominated world, limitations as a Muslim woman in an orthodox Muslim society and the little compromises every player makes to attain their goals."
  />
   <!-- The Modal -->
<div id="myModal5" class="modal5">
  <span class="close5">&times;</span>
  <img class="modal-content5" id="img06">
  <div id="caption5"></div>
</div>

<h2 class="h1">Our famous sports authors</h2>

    <div class="home-bg">

        <section class="home" id="home">
     
           <div class="slide-container">

     
              <div class="slide active">

                        <div class="torch">
                            <img src="images/torch.png" alt="Torch" />
                        </div>


                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                    <img src="images/jeri.jpg" alt="John Jeremiah Sullivan">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">John Sullivan</span>
                                   <span class="profession0">American writer</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“We live in such constant nearness to the abyss of past time that the moment.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
            </section>
                 <div class="content">
                    <h3>1971-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>
     
              <div class="slide">
                    <div class="torch">
                        <img src="images/torch.png" alt="Torch" />
                    </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                    <img src="images/simon1.jpg" alt="Simon Kuper">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Simon Kuper</span>
                                   <span class="profession0">British author</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“Other than sports, only war and catastrophe can create this sort of national unity.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
                </section>
                 <div class="content">
                    <h3>1969-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>
     
              <div class="slide">

                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                    <img src="images/joe1.jpg" alt="Joe Simpson">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Joe Simpson</span>
                                   <span class="profession0">British author</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“He was still grinning, and his confidence was infectious Life gave him an amazing hand.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
                </section>
                 <div class="content">
                    <h3>1960-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>
     
              <div class="slide">

                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                    <img src="images/john1.jpg" alt="John Feinstein ">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0"> John Feinstein </span>
                                   <span class="profession0">American sportswriter</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“You don’t often see Bobby Kelleher completely flustered, but he was that time.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                    </div>
                </section>
                 <div class="content">
                    <h3>1956-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

              <div class="slide">

                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                   <img src="images/duncan1.jpg" alt="Duncan Hamilton">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Duncan Hamilton</span>
                               <span class="profession0">American author</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“A life could not be made sitting under a tree watching the clouds and dreaming.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1958-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

              <div class="slide">

                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                   <img src="images/pirlo.jpg" alt="Andrea Pirlo">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Andrea Pirlo</span>
                               <span class="profession0">Italian professional coach</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“After the wheel, the PlayStation is the best invention of all time.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1979-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

              <div class="slide">

                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                   <img src="images/richard1.jpg" alt="Richard Moore">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Richard Moore</span>
                               <span class="profession0">Scottish journalist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>"It was never someplace that I said, 'In my career, I must work at Disney.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1963-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

              <div class="slide">
                
                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                   <img src="images/davis1.jpg" alt="Pete Davies">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Pete Davies</span>
                               <span class="profession0">English author</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Henry Wadsworth Longfellow wrote that we must choose between being an anvil.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1959-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>
              
              <div class="slide">

                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                   <img src="images/david1.jpg" alt="David Lagercrantz">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">David Lagercrantz</span>
                               <span class="profession0">Swedish writer</span>
                           </div> 

                            <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“How come all lunatics and murderers are religious these days?”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1962-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

              <div class="slide">

                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                   <img src="images/luca1.jpg" alt="Luca Caioli">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0"> Luca Caioli </span>
                               <span class="profession0">French author</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“No player does things that I cannot do myself.There's no more complete player.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1958-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

              <div class="slide">

                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                   <img src="images/george1.jpg" alt="George Plimpton">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">George Plimpton</span>
                               <span class="profession0">American writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“I have never been convinced there's anything inherently wrong in having fun.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1927-2003</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

              <div class="slide">


                <div class="torch">
                    <img src="images/torch.png" alt="Torch" />
                </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                   <img src="images/andre.jpeg" alt="Andre Agassi">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Andre Agassi</span>
                               <span class="profession0">English novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“You don't cheat anybody out of their experience, whatever it is.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1970-till date</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

           </div>
     
        </section>
     
     </div>

<!--1st section-->



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
            <a href="#"> <i class="fas fa-arrow-right"></i> Sports </a>
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
<script src="javascript/style9.js"></script>


</body>
</html>
<?php
}
?>