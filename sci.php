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
    <title>Sci-fi - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/sci.css">
    
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

<h1>Welcome to the World of Sci-fi</h1>

<div class="container" id="container">
    <div class="book-content">
        <div class="book">
            <div class="face-front" id="portada"></div>
            <div class="face-back" id="trsf">
                 <h1>Summary- Assassins Creed: Renaissance</h1>
                <p>The book is based on Ubisofts's best-selling game. It is about a young man named Ezio Auditore whose brothers and father have been hanged by a family friend named Ulberto Alberti. Ezio joins a guild of Assassins that his father and his uncle Mario are in. The assassin's enemy are the Templars, who are supported by the ruling families of Italy. During the Book, Ezio hunts down all the Templars on his fathers list. On the way he meets many different people: some assassins in the guild and some grave enemies.

                <br>    
                   
                   The book is set in Renaissance Italy. The reason the Assassins and the Templars are enemies is because they are both after something in a vault, even though they have different ideas about what's in it. 

                   <br>

                   In 1477, there was a man named Ezio Auditore, who lived in Florence, Italy. One day, Ezio arrived at his house, to find his brothers and his father, Giovanni,missing. Ezio's sister explained to him that the guards had taken them away hearing this news, Ezio ran to the prison and saw 

                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
               <h1>Summary- Assassins Creed: Renaissance</h1>
                <p> his father behind the bars,  Meanwhile Ezio's father told his son to go back to the house and find a secret entrance, Giovanni then heard footsteps and he told Ezio to run while he had the chance, Ezio followed his father's words, and was gone.
                <br>
                Then Ezio arrived at his house, he went to his basement and found the secret Entrance. Inside he found a chest, containing a robe, a sword, and a crossbow. He took everything and walked outside.
               
                <br>
                Ezio saw a poster advertising Auditore execution in the center of the city. Panicked, he ran to the city center and saw his father and brothers all about to be hung. Despite his protests, he tried to stop them, but it was too late; they ail died before his eyes.  He was driven by revenge, Ezio had to find the one who wanted his family dead After traveling to the big cities of Italy, finding other assassins, he found himself with many new allies. Later, he also learned of the Templar’s plot to assassinate the Auditore family. United by one common goal, the assassins wanted to 
                </p>
            </div>
            <div class="face-back">
               <h1>Summary-  Assassins Creed: Renaissance</h1>
                <p> eliminate the Templars, mainly their leader Rodrigo Borgia.He was driven by revenge, Ezio had to find the one who wanted his family dead After traveling to the big cities of Italy, finding other assassins, he found himself with many new allies. Later, he also learned of the Templar’s plot to assassinate the Auditore family. United by one common goal, the assassins wanted to eliminate the Templars, mainly their leader Rodrigo Borgia.
                <br>
                 Once he is ready, he must return to renaissance Florence where he will fight to clear his family’s name. But it’s a long road back to the city, and his enemies are waiting. Fortunately Ezio is not alone. On his side, he has such men as Niccolo Machiavelli and the young Leonardo DaVinci. They will provide him with the political insight and cutting edge weaponry that he needs to defeat his foes.
                <br>
                Ezio’s quest for revenge is about to take him deeper into the labyrinth of renaissance political intrigue than he ever expected.
                 </p>   

            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>About Assassins Creed: Renaissance</h1>
                <p> Assassins Creed Renaissance is a must read book for all the teenagers as it seeks out friendship, revenge and and love towards family. One of best Sci-Fi stories in English, published first in 2009, Oliver Bowden's  Assassins Creed Renaissance is described as one of the best action and adventures packed in the book. Ezio embarks upon an epic quest for vengeance during the Renaissance in this novel based on the Assassin's Creed video game series. 
                <br>
                To eradicate corruption and restore his family’s honor, Ezio will learn the art of the Assassins. Along the way, he will call upon the wisdom of such great minds as Leonardo da Vinci and Niccolo Machiavello—knowing that survival is bound to the skills by which he must live.
                <br>
                In this book the charater Desmond Miles who carries the assassins genetics is set on a mission to explore himself and with the help of the abstergo deivce he went back in time where his forefathers like Ezio and lead his life to know about templars and eradicate them. 
                </p>
            </div>
            <div class="face-back">
                <h1>About Assassins Creed: Renaissance</h1>
                <p>This seventeen-year-old Italian nobleman set to continue his father’s banking empire. However, he is unaware of his family’s true legacy – his family is connected to the Order of Assassin’s, a group of elite killers set on keeping the Pieces of Eden from falling into the hands of the Templars. Who conveniently happen to be the family that Ezio cannot stand.
                <br>
               uring the course of the book. He grows up so much and matures beyond his years within a few chapters which span so much of his life. He starts the story aged seventeen and ends the novel aged forty. That is a very long life span for a character who still has three novels to be involved in. Ezio begins as the typical teenage character – he is a player, he is fun loving, and he enjoys picking a fight with the obviously evil son of a rival merchant family. After the betrayal of a family friend which leads to the deaths of his father, older and younger brothers Ezio must escape from Florence with his now-catatonic mother and younger sister before they
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>About Assassins Creed: Renaissance</h1>
                <p>too are killed. He is then reunited with his estranged uncle, Mario, who reveals to him their family’s past. Ezio begins his training as an assassin reluctantly before setting out to get revenge on the men who betrayed his family – and because of all the bloodshed and the truths that he slowly begins to unfold, Ezio matures into a stronger, less whiney character who actually has the capability of amazing development.
                <br>
                It will be interesting for the readers, what was basically through Desmond’s eyes what was happening during his time in the animus as he witnessed the turmoil that his ancestor had to go through; the entire story focusing solely on Ezio without breaking out into the modern era and sudden glimpses of Desmond will make the readers time travel from  the modern period to  the ancient renaissance period of the human life meeting some real characters like Leonardo Da Vinci. "I WILL SEEK VENGEANCE UPON THOSE WHO BETRAYED MY FAMILY. I AM EZIO AUDITORE DA FIRENZE. I AM AN ASSASSIN." by Ezio Auditor Da Firenze.
                
                </p>
            </div>
            <div class="face-back" id="portada-back">
            </div>
        </div>
    </div>
</div>

<h2 class="h1">Our precious collections</h2>

<img id="myImg" src="images/dune1.jpg" alt="Dune is a 1965 epic science fiction novel by American author Frank Herbert,Dune is set in the distant future amidst a feudal interstellar society in which various noble houses control planetary fiefs. It tells the story of young Paul Atreides, whose family accepts the stewardship of the planet Arrakis. While the planet is an inhospitable and sparsely populated desert wasteland, it is the only source of melange, or spice, a drug that extends life and enhances mental abilities. Melange is also necessary for space navigation, which requires a kind of multidimensional awareness and foresight that only the drug provides. As melange can only be produced on Arrakis, control of the planet is a coveted and dangerous undertaking. 
The story explores the multilayered interactions of politics, religion, ecology, technology, and human emotion, as the factions of the empire confront each other in a struggle for the control of Arrakis and its spice  Duke Leto’s son, Paul, is in bed when his mother, Jessica, and Reverend Mother Mohiam check in on him. The old reverend mother mutters that Paul may be the Kwisatz Haderach, the one who brings about important changes in the universe. 
Reverend Mother Mohiam says that the next day, Paul will meet her gom jabbar, an instrument that poisons and kills instantly, unless he passes her test. To test whether Paul is human, the Reverend Mother Mohiam has him put his hand into a small box. The box brings great pain to Paul, but he knows that if he moves, the Reverend Mother Mohiam will stab him with the gom jabbar. He passes Mohiam’s test, which means he is a human being and not an animal. He then discovers that Jessica took the same test long ago; the reverend mother was her teacher at the Bene Gesserit school. 
The two women reveal to Paul that something terrible will soon happen to the House of Atreides and that his father will die. The two women tell Paul that the duke’s death will happen soon after the Atreides move to Arrakis, the desert planet, now ruled by the Atreides’s mortal enemies, the Harkonnens. On another planet, the fat Baron Harkonnen reveals his plot to his nephew Feyd-Rautha and his servant, Piter, a Mentat, a person who thinks using logic and no emotions. The baron has maneuvered the emperor, the leader of the universe, into giving the planet Arrakis to the Atreides in exchange for the planet Caladan. Though Arrakis is a desert planet and Caladan a lush one, this trade does not seem good for the baron; Arrakis is rich in melange, a drug and spice that is an addiction for millions of people throughout the galaxy. The baron has arranged this trade because he plans to kill Duke Leto and all his family once they are on Arrakis by using one of their own people to betray them. On another planet, the fat Baron Harkonnen reveals his plot to his nephew Feyd-Rautha and his servant, Piter, a Mentat, a person who thinks using logic and no emotions. The baron has maneuvered the emperor, the leader of the universe, into giving the planet Arrakis to the Atreides in exchange for the planet Caladan. Though Arrakis is a desert planet and Caladan a lush one, this trade does not seem good for the baron; Arrakis is rich in melange, a drug and spice that is an addiction for millions of people throughout the galaxy. The baron has arranged this trade because he plans to kill Duke Leto and all his family once they are on Arrakis by using one of their own people to betray them. Piter trades barbs with his fat master as Feyd-Rautha looks on passively.
Later, Paul meets Thufir Hawat, the duke’s main strategist, in the training room. Hawat warns Paul of the dangers he will face on Arrakis, but he tries to dispel Paul’s fears that his father will be killed. He also mentions the Fremen, the native inhabitants of Arrakis. Hawat explains that the Fremen are a tough, resilient people, and they will have to be dealt with in some way by the Atreides. After Hawat leaves, Gurney Halleck, the duke’s war master, appears and challenges Paul to a training duel. Paul fights well, but Halleck makes the battle difficult for him, since he knows that Paul may actually have to fight someone soon. Finally, Paul meets with Dr. Yueh, a doctor of the Atreides, who gives him some information about the life-forms on Arrakis—including the planet’s sandworms." />

   <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<img id="myImg1" src="images/foundation1(new).jpg" alt="Gaal Dornick travels to the Galactic Empire's capital, Trantor, to take a job with his hero, Hari Seldon. When the two meet, Seldon uses a branch of mathematics called psychohistory to prove that the Galactic Empire will fall in three centuries, ushering in a galaxy-wide Dark Age. But, fear not, Seldon has a plan that he and Gaal will discuss at length tomorrow at the university. When he's arrested and exiled, Seldon reveals his plan: he'll use his exile to build Foundations that will reduce the Dark Age from 30,000 years to 1,000 years.
Fifty years later, the mayor of the first Foundation, Salvor Hardin, has a couple of problems. His planet is a wasteland; the neighboring planets are after him; and the Board of Trustees are more focused on completing Hari Seldon's Encyclopedia Galactic than actually running the planet. Hardin's plan? A coup d'état. But then a message from Hari Seldon appears, and Hardin realizes that the encyclopedia was a trick—and Hardon has to take over the Foundation and fulfill Seldon's real plan.
Thirty years after the coup d'état, Hardin remains the mayor of the new City Council. But mo' power mo' problems. A new political group called the Action party has risen to power and is trying to impeach him, plus more neighboring planets have their sights on his lands. Outnumber and outgunned, he must out-think his way through this Seldon Crisis. He does this by convincing his enemies that the Foundation's religious group doesn't support the war—and then hears another prerecorded message from Seldon that warns that the future holds many more challenges.
Limmar Ponyets is sent to rescue Eskel Gorov from the planet Askone. He then has the bright idea to trade gold instead of technology and whips up a gold transmuting machine (naturally). A councilman named Pherl takes notice of Ponyets's nifty trick and agrees to let Ponyets and Gorov go, and give them some iron, in exchange for the machine. Surprise! Ponyets has recorded the convo and blackmails Pherl into letting them walk away with a lot more.
Foundation guy Hober Mallow heads to the planet Korell to investigate some missing ships. There, after a little kerfuffle over a religious missionary, he establishes trade with the planet. After a quick detour to planet Siwenna, where he finds out that the Empire (1) lives on, and (2) has nuclear technology, Mallow returns to the Foundation, is tried for and cleared of the death of the religious missionary, then elected mayor. Success!

Two years later, Korell attacks the Foundation. Turns out, Mallow has anticipated this: he's made Korell so dependent on the Foundation that Korell's economy collapses and the Foundation wins the war without even trying.Foundation guy Hober Mallow heads to the planet Korell to investigate some missing ships. There, after a little kerfuffle over a religious missionary, he establishes trade with the planet. After a quick detour to planet Siwenna, where he finds out that the Empire (1) lives on, and (2) has nuclear technology, Mallow returns to the Foundation, is tried for and cleared of the death of the religious missionary, then elected mayor. Success!" />
   <!-- The Modal -->
<div id="myModal1" class="modal1">
  <span class="close1">&times;</span>
  <img class="modal-content1" id="img02">
  <div id="caption1"></div>
</div>
<img id="myImg2" src="images/martian(new).jpg" alt="In the year 2035, the crew of NASA's Ares 3 mission have arrived at Acidalia Planitia for a planned month-long stay on Mars. After only six sols, an intense dust and wind storm threatens to topple their Mars Ascent Vehicle (MAV), which would trap them on the planet. During the hurried evacuation, an antenna tears loose and impales astronaut Mark Watney, a botanist and engineer, also disabling his spacesuit radio. He is flung out of sight by the wind and presumed dead. As the MAV teeters dangerously, mission commander Melissa Lewis has no choice but to take off without completing the search for Watney.

However, Watney is not dead. His injury proves relatively minor, but with no long-range radio, he cannot communicate with anyone. He must rely on his own resourcefulness to survive. He begins a log of his experiences. His philosophy is to work the problem, solving each challenge in turn as it confronts him. With food a critical, though not immediate, problem, he begins growing potatoes in the crew's Martian habitat (the Hab), and burns hydrazine to generate water for the plants.
NASA eventually discovers that Watney is alive when satellite images of the landing site show evidence of his activities; NASA personnel begin devising ways to rescue him, but withhold the news of his survival from the rest of the Ares 3 crew, on their way back to Earth aboard the Hermes spacecraft, so as not to distract them.
Watney plans to drive 3,235 km (2,010 mi) to Schiaparelli crater where the next mission, Ares 4, will land in four years and whose MAV is already pre-positioned. He begins modifying one of the rovers for the journey, adding solar cells and an additional battery. He makes a three-week test drive to recover the Pathfinder lander and Sojourner rover and brings them back to the Hab, enabling him to contact NASA. Mitch Henderson, the Ares 3 flight director, convinces NASA Administrator Teddy Sanders to allow him to inform the Ares 3 crew of Watney's survival; they are thrilled, except for Lewis, who is guilt-stricken at leaving him behind.
The canvas at one of the Hab airlocks tears because of Watney's repeated use of the same airlock, which was not designed for frequent and long-term usage. This results in the decompression of the Hab and nearly kills him. He repairs the Hab, but his plants are dead, threatening him again with eventual starvation. Setting aside safety protocols to comply with time constraints, NASA hastily prepares an uncrewed probe to send Watney supplies, but the rocket disintegrates after liftoff. A deal with the China National Space Administration provides a ready booster—planned for use with the Taiyang Shen, an uncrewed solar probe—to try again. With no time to build a probe with a soft-landing system, NASA is faced with the prospect of building a capsule whose cargo can survive crashing into the Martian surface at 300 meters per second (670 mph).

However, astrodynamicist Rich Purnell devises a slingshot trajectory around Earth for a gravity assist that could get Hermes back to Mars on a much-extended mission to save Watney, using the Chinese rocket booster to send a simpler resupply probe to Hermes as it passes Earth. Sanders vetoes the Rich Purnell Maneuver, as it would entail risking the other crewmembers, but Henderson secretly emails the details to Hermes. All five of Watney's crewmates approve the plan. Once they begin the maneuver (having disabled the remote overrides), NASA has no choice but to support them. The resupply ship docks with Hermes successfully.
After Watney leaves for Schiaparelli, NASA discovers that a dust storm is approaching his path, but has no way to warn him. The rover's solar cells will be less and less able to recharge, endangering both the rendezvous and his immediate survival (if there is not enough power to run his life-support equipment). While crossing Arabia Terra, Watney becomes aware of the darkening sky and improvises a rough measurement of the storm's shape and direction of movement, enabling him to go around it.Surviving a rover rollover on his descent into Schiaparelli, Watney reaches the MAV and reestablishes contact with NASA. He receives instructions on the radical modifications necessary to reduce the MAV's weight to enable it to intercept Hermes during its flyby. The modifications include removing the front of the MAV, which Watney has to cover with Hab canvas. After takeoff, the canvas tears, creating extra drag and leaving the MAV too low for the rendezvous. Lewis hastily improvises a plan to intercept the MAV by firing Hermes' attitude thrusters and then blowing a hole in the front airlock with an improvised sugar-and-liquid-oxygen bomb, using the thrust from the escaping air to reduce speed. Beck, the Hermes' EVA specialist, uses a Manned Maneuvering Unit, MMU, on a tether to reach Watney and bring him back to Hermes. In a final log entry, Watney expresses his joy at being rescued, reflecting on the human instinct to help those in need." />
   <!-- The Modal -->
<div id="myModal2" class="modal2">
  <span class="close2">&times;</span>
  <img class="modal-content2" id="img03">
  <div id="caption2"></div>
</div>
<img id="myImg3" src="images/contact5(new).jpg" alt="As a child, Eleanor Ellie Arroway displays a strong aptitude for science and mathematics. Dissatisfied with a school lesson, she goes to the library to convince herself that π is transcendental. In sixth grade, her father and role-model Theodore (Ted) dies. A man named John Staughton becomes her stepfather and does not show as much support for her interests. Ellie refuses to accept him as a family member and concludes that her mother only remarried out of weakness.

After graduating from Harvard University, Ellie receives a doctorate from Caltech supervised by David Drumlin, a well-known radio astronomer. She eventually becomes the director of Project Argus, a radiotelescope array in New Mexico dedicated to the search for extraterrestrial intelligence (SETI). This puts her at odds with most of the scientific community, including Drumlin, who tries to have the funding to SETI cut off. To his surprise, the project discovers a signal containing a series of prime numbers coming from the Vega system 26 light years away. Further analysis reveals information in the polarization modulation of the signal: a retransmission of Adolf Hitler's opening speech at the 1936 Summer Olympics in Berlin, the first television signal powerful enough to escape Earth's ionosphere. The President of the United States meets with Ellie to discuss the implications of the first confirmed communication from extraterrestrial beings. Ellie begins a relationship with Presidential Science Advisor Ken der Heer. With the help of her Soviet colleague Vaygay Lunacharsky, Ellie is able to set up redundant monitoring of the signal so that a telescope remains pointed at Vega at all times. A third message is discovered describing plans for an advanced machine. With no way of decoding the 30,000 pages, SETI scientists surmise that there must be a primer that they have missed.
At the President's insistence, Ellie agrees to meet with two religious leaders, Billy Jo Rankin and Palmer Joss. A lifelong religious skeptic, Ellie tries to convince Joss of her faith in science by standing near a heavy Foucault pendulum and trusting that its amplitude will not increase. Although dismissing Rankin's outbursts, Ellie is intrigued by Joss' worldview. Shortly after, Ellie travels to Paris to discuss the machine with a newly formed consortium. The participants reach a consensus that the machine is a dodecahedron-shaped vehicle with five seats. At the conference, Ellie meets Devi Sukhavati, a doctor who left India to marry the man she loved, only to lose him to illness a year later. The final piece of the message is discovered when S. R. Hadden, a billionaire in multiple high-tech industries with an obsessive personal interest in the concept of immortality, suggests that Ellie check for phase modulation. This reveals the primer, thus allowing construction of the machine to begin.The American and Soviet governments enter a race to construct identical copies of the machine. As errors in the Soviet project are discovered, the American machine becomes the only option. Ellie applies to be one of the five passengers, but her spot is given to David Drumlin instead. Despite heavy security, a group of extremists is able to get a bomb into one of the fabrication plants in Wyoming. During a visit by three astronomers, the bomb explodes, killing Drumlin and postponing completion of the machine indefinitely. Ellie's family also suffers when her mother has a stroke, which causes paralysis. John Staughton accuses Ellie of ignoring her own mother for years.
Ellie learns that S. R. Hadden has taken up residence aboard a private space station. While on board, he reveals that his company has been covertly building a third copy of the machine in Hokkaido, Japan. The activation date is set for December 31, 1999 and Ellie, Vaygay and Devi are given three of the seats. The other two are given to Abonnema Eda, a Nigerian physicist credited with discovering the theory of everything and Xi Qiaomu, a Chinese archaeologist and expert on the Qin dynasty. While in Japan, Ellie receives a medallion from Joss, which she carries aboard the Machine as it is activated.
Once activated, the dodecahedron transports the group through a series of wormholes to a massive station near the center of the Milky Way. The station contains a surreal Earth-like beach where the five are split up. Ellie meets an extraterrestrial in a form indistinguishable from Ted Arroway, who explains his people's reasons for making contact, and tells her of their ongoing project to alter the properties of the universe by accumulating enough mass in Cygnus A to counter the effects of entropy. He also tells her that the wormhole system was built by unknown precursors, and hints at the discovery of artificial messages in transcendental numbers like π. Ellie is reunited with the other four travellers who have also met simulations of their loved ones. She captures video evidence of the encounter before the dodecahedron takes them back to Earth.Upon returning, the passengers discover that what seemed like many hours took no time at all from Earth's perspective. They also find that all of their video footage has been erased, presumably by magnetic fields in the wormholes. After seeing that Hadden is apparently dead and that the transmission has somehow been stopped without a 26[3]-year delay, government officials accuse the travellers of an international conspiracy. They blackmail Ellie and her fellow travellers into silence until more evidence can be found. Palmer Joss becomes one of the few people willing to believe her story that she can only justify on faith.

Acting on the suggestion of Ted, Ellie works on a program to compute the digits of π to heretofore-unprecedented lengths. Ellie's mother dies before this project delivers its first result. A final letter from her informs Ellie that John Staughton, not Ted Arroway, is Ellie's biological father. When Ellie looks at what the computer has found, she sees a circle rasterized from 0s and 1s that appear after 1020 places in the base 11 representation of π. This not only provides evidence of her journey, but suggests that intelligence is behind the universe itself." />
   <!-- The Modal -->
<div id="myModal3" class="modal3">
  <span class="close3">&times;</span>
  <img class="modal-content3" id="img04">
  <div id="caption3"></div>
</div>
<img id="myImg4" src="images/dispos1.jpg" alt="A group of protestors gathers at the wall that surrounds the Port of Anarres as a spaceship docked there prepares for liftoff. As a man crosses the wall and walks through the barren field toward the ship, the protestors recognize him and begin to chase him. Members of the Anarresti Defense syndicate flank the man and hurry him to the ship as protestors begin throwing rocks, clipping the man’s shoulder and killing a Defense syndic. The passenger makes it on board and the ship doors close, and within a few minutes the angry mob disperses. Onboard the ship—a freighter called the Mindful—the passenger, a man named Shevek, is taken to his cabin and injected with several vaccines by a Urrasti doctor named Kimoe. In the days that follow, Shevek runs a high fever as a side effect of the various vaccines, and when he awakes, he finds that he is halfway to Urras—the Moon, twin, and rival planet of his home planet, Anarres. Through conversations with Dr. Kimoe, Shevek prepares himself for landing on the capitalist, deeply socially-stratified world of Urras. The Mindful lands and Shevek disembarks. He is met by reporters and paparazzi who photograph him and shout at him—he is “The First Man From the Moon” to them. A limousine arrives to take Shevek to the capital city of Nio Esseia, where he will be staying at the Ieu Eun University. His handlers—a group of five men—point out the sights to Shevek as the countryside flies by. At the University, Shevek meets with University officials and diplomats of the state of A-Io alike, and the Ioti President makes a toast to “a new era of brotherhood” between the Twin Planets. After the party, Shevek’s escorts bring him to his room at the university and help him to settle in.
In a flashback, the narrative transitions to the Anarres of Shevek’s youth. The novel transitions back and forth in alternating chapters between the “present”—Shevek’s journey to Urras—and the story of his past on Anarres. 
As an infant, Shevek plays with other children in an Anarresti communal nursery, unable to grasp that nothing—no toys, no objects—belong to him. Everything on Anarres belongs to everyone. Shevek’s father Palat has come to collect Shevek from the nursery in order to say goodbye to his mother, Rulag, who has been posted to a work assignment far away—Anarresti society functions in groups of Syndicates, and labor rotation often splits up family units or forces people to make large moves at a moment’s notice. The narrative flashes forward a few years to Shevek’s school days. As an eight-year-old, he is uncannily bright and still decisively impetuous, and his teacher at the learning center accuses Shevek of “egoizing” as he attempts to explain a complicated math problem to his fellow students. Shevek is sent out of class and realizes he will have to wait for the day when others are interested in the same kind of problems as him. The narrative flashes forward again—a preteen Shevek and his friends are learning about the concept of prisons, which do not exist on Anarres. The boys, fascinated by the idea, decide to create a prison of their own. They lock up one of their friends, Kadagv, and leave him in a crawl space beneath the school for thirty hours. When they release him, he has soiled himself, and Shevek understands for the first time the violence of power over others. The narrative flashes forward yet again. Shevek is a student at the Northsetting Regional Institute—he is a teenager, and he and his childhood friends Tirin and Bedap carry on a speculative conversation about Urras. The boys recently saw some old footage of life on Urras during one of their classes, and were overwhelmed by the enormous gap between the destitute poor in the Urrasti nation of Thu, and the wealthy “propertied class” based in the prosperous nation of A-Io. 
The Odonian Revolution, which brought Urrasti anarchists to Anarres over one hundred and fifty years ago, has created a barrier between the planets which cannot be breached—except, the boys know, for trading of resources between the two several times a year via freighters, which are not allowed beyond the Port of Anarres. In yet another flash forward, the eighteen-year-old Shevek is off on his first work posting, doing manual labor in the dusty desert. Shevek embarks on a romantic relationship with a woman named Beshun, but it goes south when the two of them receive new work postings. Shevek returns to the familiarity of the Northsetting Regional Institute, and the tutelage of his physics teacher, the wise and old Mitis. Mitis forwards one of Shevek’s advanced papers to a physicist named Sabul in the big city of Abbenay, and Shevek receives an invitation to go and study with the man. Mitis warns Shevek that he will become Sabul’s property if he goes, but because no one owns anyone or anything else on Anarres, Shevek does not pay close attention to her advice.
On Urras, Shevek awakes in his room at Ieu Eun University. He is amazed by the size and luxury of his room there, and cannot believe he has it all to himself. Shevek looks out the window at the beautiful Urrasti landscape, and thinks that it is “what a world is supposed to look like.” Shevek meets his manservant Efor, though he doesn’t understand what it is to be served, and then welcomes to his rooms a group of Urrasti physicists who are meant to be his guides. Chifoilisk, Oiie, Atro, and Pae rejoice at meeting Shevek, who they have been communicating with through letters and radio broadcasts for many years. The men welcome Shevek “home” and present him with a solid-gold statue—an award he won in absentia many years ago. The men ask Shevek how far along he is in his General Temporal Theory—the theory he has come to Urras to complete—and Shevek assures him that the whole thing is in his head. Shevek is delighted to find that he has encountered his intellectual and conversational equals at last, and explains to the men that he has come to their world not as an Anarresti ambassador but as a physicist following his own personal initiative. Shevek, confined to his room for several days while his vaccinations take hold, spends his time reading the books his handlers bring him—Urrasti science, history, and art, as well as newspapers which describe a growing unrest in the Urrasti state of Benbili. After three days, Shevek is allowed out, and his handlers take him all through the city and the country. At the end of his days of tourism, Shevek realizes he has been foolish in thinking he could bring the two vastly different worlds together—he feels he belongs to neither of them.

In the past narrative, Shevek arrives in Abbenay and makes his way to the Central Institute of the Sciences, where he is given a single room for the first time in his life. The following day he meets with Sabul, the physicist who will be his mentor. Sabul, a gruff and unpleasant man, tells Shevek that he must learn Ioti—the language of Urras—before he can be taught any real physics, as the latest developments in physics all happen on Urras and are written in Iotic. Sabul warns Shevek not to share his Ioti texts with anyone, or to tell anyone he is learning the language. Shevek quickly learns Ioti after isolating himself in his rooms and studying hard. He only leaves to attend lectures in physics delivered by Gvarab—an elderly but brilliant woman who is not well-respected at the Institute by anyone other than Shevek. Shevek begins early work on a unified theory of time, and meanwhile writes criticism of Urrasti work which Sabul sends, via freighter, directly to the physicists back on Urras. Shevek is excited but nervous to communicate with the Urrasti—a major taboo on Anarres. Shevek eventually discovers that Sabul has been taking credit for his work while corresponding with the Urrasti, since in theory everything belongs to everyone on Anarres. Shevek falls ill with a fever and checks himself into a nearby clinic. When his fever breaks, he wakes to find a woman sitting by his side—she reveals she is his mother, Rulag. She asks about Shevek’s father, and Shevek reveals that Palat died many years ago. Rulag tells Shevek that her work always came first—she doesn’t quite apologize, but Shevek can see the pain and loneliness on her face. Rulag asks Shevek if the two of them can have a relationship at last, but Shevek refuses her, and Rulag leaves him alone and weeping in the clinic.

On Urras, Shevek settles down and gets to work as a new term begins at Ieu Eun University. He takes on some teaching duties and publishes some papers, but because he is not working on his General Temporal Theory he feels he is accomplishing nothing of value. Shevek goes shopping for the first time in his life and purchases an expensive suit and shoes, which are tailor-made for him. In a meeting with Chifoilisk, a physicist from the socialist state of Thu, Chifoilisk warns Shevek not to let himself be “bought” by the Ioti, and warns him especially not to write down his General Temporal Theory even if he finishes it—the Ioti government will surely take it from him and seize it as their own property. Less than a week after their conversation, Pae informs Shevek that Chifoilisk has been called—or sent—back to his home country of Thu. In Chifoilisk’s absence Shevek develops a friendship with the renowned physicist Atro, who believes that Cetians—the race of the Urrasti and Anarresti people—are superior in the galaxy and the only form of humanity meant to prosper. Atro tells Shevek that when it comes time for him to release his General Temporal Theory, he should make sure that it is Cetians and Cetians alone who benefit from it.

In the past, after recovering from his illness, Shevek returns to his room at the Institute. He no longer isolates himself with his work, hearing his mother Rulag’s words in his ear and fearing to become a slave to his own egoism. Shevek begins writing his own letters to the physicists on Urras, but Sabul will not send them for him, vindictively refusing to transport any material that doesn’t deal directly with his own research. Shevek excitedly looks forward to the very few letters he receives from Urras each year. Gvarab dies, and Shevek is overwhelmed by feelings of futility. He reunites with his childhood friend, Bedap, and the two briefly pursue a romantic relationship. They argue frequently, though, and soon part ways. They remain close friends who discuss clandestinely the ways in which Anarresti customs are barriers to progress, change, free will, and the advancement of society and intellect. Bedap invites Shevek on a hiking trip with a group of friends, and on the trek Shevek meets Takver, a woman to whom he is instantly attracted. Bedap points out that Takver attended school with them at Northsetting, and Shevek is embarrassed to not have remembered her. After a few days of hiking, Shevek and Takver, alone for the first time, fall into a conversation about their mutual attraction and their shared desire for exclusive partnership—something of a rarity on Anarres. After the trip, the two of them move in together, and embark on a romantic relationship." />
   <!-- The Modal -->
<div id="myModal4" class="modal4">
  <span class="close4">&times;</span>
  <img class="modal-content4" id="img05">
  <div id="caption4"></div>
</div>
<img id="myImg5" src="images/wrinkle3(new).jpg" alt="A Wrinkle in Time is the story of Meg Murry, a high-school-aged girl who is transported on an adventure through time and space with her younger brother Charles Wallace and her friend Calvin O'Keefe to rescue her father, a gifted scientist, from the evil forces that hold him prisoner on another planet. At the beginning of the book, Meg is a homely, awkward, but loving girl, troubled by personal insecurities and her concern for her father, who has been missing for over a year. The plot begins with the arrival of Mrs. Whatsit at the Murry house on a dark and stormy evening. 

Although she looks like an eccentric tramp, she is actually a celestial creature with the ability to read Meg's thoughts. She startles Meg's mother by reassuring her of the existence of a tesseract--a sort of wrinkle in space and time. It is through this wrinkle that Meg and her companions will travel through the fifth dimension in search of Mr. Murry.

On the afternoon following Mrs. Whatsit's visit, Meg and Charles Wallace walk over to Mrs. Whatsit's cabin. On the way, they meet Calvin O'Keefe, a popular boy in Meg's school whom Charles considers a kindred spirit. The three children learn from Mrs. Whatsit and her friends Mrs. Who and Mrs. Which that the universe is threatened by a great evil called the Dark Thing and taking the form of a giant cloud, engulfing the stars around it. Several planets have already succumbed to this evil force, including Camazotz, the planet on which Mr. Murry is imprisoned.

The three Mrs. W's transport the children to Camazotz and instruct them to remain always in each other's company while on their quest for Mr. Murry. On Camazotz, all objects and places appear exactly alike because the whole planet must conform to the terrifying rhythmic pulsation of IT, a giant disembodied brain. Charles Wallace tries to fight IT with his exceptional intelligence but is overpowered by the evil and becomes a robot-like creature mouthing the words with which IT infuses him. Under the control of IT, Charles leads Meg and Calvin to Mr. Murry and together they confront IT. However, they, too, are unable to withstand IT's power; they escape only at the last minute, when Mr. Murry appears and seizes Meg and Calvin, tessering away with them (traveling via another tesseract) to a gray planet called Ixchel inhabited by tall, furry beasts who care for the travelers. Charles Wallace remains possessed by IT, a prisoner of Camazotz.

On Planet Ixchel the three Mrs. W's appear once again, and Meg realizes that she must travel alone back to Camazotz to rescue her brother. Mrs. Which tells her that she has one thing that IT does not have, and this will be her weapon against the evil. However, Meg must discover this weapon for herself. When standing in the presence of IT, Meg realizes what this is: her ability to love. Thus, by concentrating on her love for Charles Wallace, she is able to restore him to his true identity. Meg releases Charles from IT's clutches and tessers with him through time and space, landing in her twin brothers' vegetable garden on Earth, where her father and Calvin stand waiting. The family joyously reunites, and the Mrs. W's visit the happy scene en route to further travels." />
   <!-- The Modal -->
<div id="myModal5" class="modal5">
  <span class="close5">&times;</span>
  <img class="modal-content5" id="img06">
  <div id="caption5"></div>
</div>

<h2 class="h1">Our famous sci-fi authors</h2>

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
                                    <img src="images/hgwells1.jpeg" alt="H.G Wells">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">H.G Wells</span>
                                   <span class="profession0">British writer</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“The forceps of our minds are clumsy forceps can crush the truth.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
            </section>
                 <div class="content">
                    <h3>1866-1946</h3>
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
                                    <img src="images/hugo.jpg" alt="Hugo Gernsback">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Hugo Gernsback</span>
                                   <span class="profession0">American inventor</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“Science fiction makes people happier and broader understanding of the world.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
                </section>
                 <div class="content">
                    <h3>1884-1967</h3>
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
                                    <img src="images/hein2.jpg" alt="Robert Heinlein">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Robert Heinlein</span>
                                   <span class="profession0">American author</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“A prude is a person who thinks that his own rules of propriety are natural laws.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
                </section>
                 <div class="content">
                    <h3>1907-1988</h3>
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
                                    <img src="images/clark.jpg" alt="Arthur C. Clarke">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Arthur C. Clarke</span>
                                   <span class="profession0">British writer</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“It has yet to be proven that intelligence has any survival value.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                    </div>
                </section>
                 <div class="content">
                    <h3>1917-2008</h3>
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
                                   <img src="images/franki1.png" alt="Frank Herbert">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Frank Herbert</span>
                               <span class="profession0">American author</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“The mystery of life isn't a problem to solve, but a reality to experience.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1920-1986</h3>
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
                                   <img src="images/asimov2.jpg" alt="Isaac Asimov">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Isaac Asimov</span>
                               <span class="profession0">American professor</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Never let your sense of morals prevent you from doing what is right.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1920-1992</h3>
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
                                   <img src="images/ray1.png" alt="Ray Bradbury">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Ray Bradbury </span>
                               <span class="profession0">American author</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>"You must stay drunk on writing so reality cannot destroy you.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1920-2012</h3>
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
                                   <img src="images/gibson1.png" alt="William Gibson">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">William Gibson</span>
                               <span class="profession0">American-canadian novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“When you want to know how things really work, study them.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1948-till date</h3>
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
                                   <img src="images/dick.jpg" alt="Orson Scott Card">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Philip.K.Dick</span>
                               <span class="profession0">American writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“It's the basic condition of life to be required to violate our own identity.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1951-till date</h3>
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
                                   <img src="images/jules.jpg" alt="Jules Verne">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Jules Verne </span>
                               <span class="profession0">French novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Anything one man can imagine, other men can make real.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1828-1905</h3>
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
                                   <img src="images/pohl1.jpeg" alt="Federik Pohl">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Frederik Pohl</span>
                               <span class="profession0">American fiction writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“A good science fiction story should be able to predict not the automobile but traffic.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1919-2013</h3>
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
                                   <img src="images/mary1.jpg" alt="Mary Shelley">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Mary Shelley</span>
                               <span class="profession0">English novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Nothing is so painful to the human mind as a great and sudden change.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1797-1851</h3>
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                 </div>
              </div>

           </div>
     
        </section>
     
     </div>

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
            <a href="#"> <i class="fas fa-arrow-right"></i> Sci-fi </a>
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
<script src="javascript/style9.js"></script>


</body>
</html>
<?php
}
?>