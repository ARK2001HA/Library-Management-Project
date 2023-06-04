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
    <title>Adventure - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style9.css">
    
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="duplicatehome.html" class="logo"><img class="myImg" src="images/readverse-01.png"></a>

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
        <p>forgot password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create one</a></p>
    </form>

</div>

<h1>Welcome to the World of Adventure</h1>

<div class="container" id="container">
    <div class="book-content">
        <div class="book">
            <div class="face-front" id="portada"></div>
            <div class="face-back" id="trsf">
                <h1>Summary- Treasure Island</h1>
                <p>Treasure Island by Robert Louis Stevenson tells the story of Jim, a young boy who watches over an inn in an English seaside town with his mother and his gravely ill father. A new guest at the inn, Bill, terrifies everyone at the inn with his raunchy sea songs and threats of violence.
                <br>    
                   Bill falls ill and dies just as pirates descend on the inn to kill Bill and to ransack his things. Just before the pirates can burst in and find Jim and his mom, the two of them escape with a number of coins and a pouch. Jim finds out that there is a treasure map hidden in the pouch.
                <br>
                   After showing this map to the doctor that waited on his father and Bill, Dr. Livesey, the doctor and his friend Squire Trelawney decide to set sail to uncover the treasure. Jim goes along as a member of the crew.
                <br>
                   The squire and doctor hire a number of men to head the voyage, including Long John Silver as the ship's cook. Along the journey at sea, Jim falls asleep inside a barrel and awakes to hear that Long John Silver has planned a mutiny along with most of the crew! Once they reach the
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>Summary- Treasure Island</h1>
                <p>island with the treasure, Jim slips onshore with Silver and some of the mutineers. After the mutineers kill two men that don't want to join the mutiny, Jim runs away into the jungle on the island. While there, he meets an abandoned man, Ben Gunn.
                <br>
                Meanwhile, Trelawney, the doctor, and the other men get ashore and find a stockade, or a giant wooden enclosure, something like a mini-fort. Eventually, after a meeting between Silver and the captain of the ship in the stockade, there is a battle. While a number of mutineers are killed, two men die and one is injured within the stockade, and Dr. Livesey goes out to find Ben Gunn and enlist his help.
                <br>
                Jim sneaks out of the stockade and cuts the ship loose, crashing it on the beach, securing it for the crew, and killing a pirate left on the ship in self-defense. Jim sneaks back to the stockade where, to his surprise, Long John Silver and his men are now staying! Silver explains that the captain and Dr. Livesey agreed to give up the map and the stockade for  
                </p>
            </div>
            <div class="face-back">
                <h1>Summary- Treasure Island</h1>
                <p>free passage. However, when the mutineers get to the treasure, they find that someone has already dug it up! Before the angry mutineers can attack Silver and Jim, the original crew pop up and ambush them with guns, having already dug up and hid the treasure.
                <br>
                In a desperate attempt to gain control of his crew, Silver shows them the treasure map to appease them. Silver leads Jim and the men to the treasure site, but they are shocked to find it already excavated and the treasure removed. The men are angered and near mutiny again. At that moment Dr. Livesey, Ben Gunn, and the others fire on the pirate band, which scatters throughout the island. Jim and Silver flee, and are guided by the others to Ben’s cave, where Ben has hidden the treasure, which he had discovered months before.
                <br>
                Though Silver slips away from the crew during the journey back to England, evading a trial and hanging, Jim still has terrifying dreams of him for many months afterward.
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>About Treasure Island</h1>
                <p>To encounter Treasure Island for the first time is a great and uncomplicated pleasure for a reader of any age. One of the classic adventure stories in English, published first in 1881, Stevenson's novel transcends its time and genre and remains today not only a page-turner but also an engaging portrayal of personality and conflict. Treasure Island, once described as a "boys' book," appeals now not to boys alone but to anyone who likes exciting, believable, non-stop action and colorful characters in an exotic setting.
                <br>
                Set in the mid 1700s, first along the coast of western England and then in the seaport of Bristol, the book takes readers quickly to the high seas and finally to a remote and secret island on a quest for pirate treasure. And although this premise may sound far-fetched, in reality it is anything but that, as a brief look at history shows.
                <br>
                In the early twentieth century, pirates still plundered shipping and private vessels on the world's seas, but they were relatively few and not
                </p>
            </div>
            <div class="face-back">
                <h1>About Treasure Island</h1>
                <p>newsworthy. Two hundred years earlier, however, they were big news. Between 1713 and about 1725, thousands of pirates prowled the Atlantic; in 1717 alone, American colonial officials put the number at approximately 1,500 waiting off the eastern coast of North America to take advantage of a rich commercial trade that included several European nations.
                <br>
                Mercantile vessels were easy pickings for these pirates — partly because the crewmen on such ships were so badly treated and poorly paid that they often volunteered to join their captors. And, although many merchants and government officials, especially in the American colonies, turned a blind eye to piracy and often actually supported it, it was not always easy for the pirates to find ready markets for goods. Coins, precious metals, and other nonperishable items in particular were likely to be stored in safe places, awaiting the pirates' opportunity to dispose of them profitably — and what safer place than buried on
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>About Treasure Island</h1>
                <p> one of the many small islands around the Caribbean Sea, with nothing to reveal the cache but a cryptic map secreted in an old man's sea chest? Certainly, believing in the existence of such a map and its discovery by someone willing and able to go in search of the riches, as in Treasure Island, does not require much stretch of the imagination.
                <br>
                The other circumstances of the novel, in particular the characters of the pirates, are equally believable; Stevenson's "sea dogs" bear the mark of authenticity. During the so-called Golden Age of Piracy in the Atlantic, it was not unusual for the men sailing under pirate flags to be in their teens or sometimes even younger (one such, of whom a record was kept, was "Thomas Simpson, about ten"). Most, before they were forty, were retired, blind, crippled, or dead. The pirate's life at sea was in most cases easier — and surely a lot more fun, for those of a certain turn of mind — than that of navy crewmen or merchant sailors, but it was still hard and dangerous, requiring a young man's energy and fitness. 
                </p>
            </div>
            <div class="face-back" id="portada-back">
            </div>
        </div>
    </div>
</div>

<h2 class="h1">Our precious collections</h2>

<img id="myImg" src="images/blogadbook(1).jpg" alt="King Solomon’s Mines is the narrative of Allan Quatermain, elephant hunter and explorer, and his adventures in the company of Danish man of action Sir Henry Curtis and Royal Navy officer Captain Good. Sir Henry Curtis hires Quatermain to use his knowledge of Africa and his skills as a hunter to lead an expedition in search of Sir Henry’s lost brother, George Neville. George vanished while seeking the long-lost diamond mines of King Solomon in an unexplored part of Africa. The possibility of riches, along with a stipulation that Sir Henry will provide for Quatermain’s medical student son should he meet his end, persuades Quatermain to take the job. Once the men rendezvous,
 they await Infadoos’ arrival with news of who stands with them and what Twala intends. Civil war is imminent, and although the best of the Kukuanas throw in their lot with Ignosi, sheer numbers favor Twala. Twala divides his forces to attack Ignosi on three fronts; Ignosi’s men repulse the attack, but with heavy losses. Knowing they cannot withstand further assaults, Ignosi chooses to attack Twala directly, but with an eye to using the landscape strategically. The crescent-shaped plateau upon which Ignosi is encamped allows him to divide regiments to march around either arm of the crescent while a third force pushes down the center to hold the pass against Twala’s army. Twala falls for the gambit, committing his army to 
 the narrow pass. The Greys—the bravest and most skilled of the Kukuanas—hold the pass until they are wiped out, giving the other two regiments time to encircle the plateau and catch Twala’s army in a pincer maneuver. Twala’s army is defeated; the survivors and their king hasten back to the safety of Loo to await the coming siege. Ignosi offers the remnants of Twala’s army amnesty if they lay down their arms and open the gates of the city. They comply, leaving Twala to face Ignosi alone. Ignosi and his men arrest Twala and declare him a murderer and subject to execution. Twala calls upon the ancient laws of the Kukuanas to determine his means of execution: single combat with Sir Henry Curtis, the murderer of his son. Sir
 Henry agrees, and the two men fight. Sir Henry barely holds his own, but wins by decapitating Twala. Her chosen ruler now gone, Gagool is captured and forced by Ignosi to lead the white men to the “Three Witches” mountains, wherein lie King Solomon’s Mines. Gagool leads the men to the Place of Death, where they witness the bizarre burial rites of the Kukuanas. Gagool opens the secret door to Solomon’s treasure chamber by a hidden trigger, allowing the men to enter a corridor leading to the treasure. Foulata, who has accompanied them, feels faint and cannot continue to the chamber. When the men reach the chamber, they are amazed at the riches of King Solomon’s diamond mines; as they stare at the precious diamonds, Gagool
 sneaks out behind them to seal the door. Foulata sees Gagool’s treachery and attempts to stop her, being mortally wounded in the process. Foulata’s efforts delay Gagool a split second too long—the old wise-woman is crushed beneath the stone door before she can make her way out. Foulata dies, leaving Captain Good too stunned to assess the reality of their situation: they are buried alive. The men are overcome with despair, but suddenly realize that there is an air supply to the chamber and begin frantically looking for its source. Finding a stone trapdoor in the floor, the men pull the ancient access way open and escape down into the tunnels beneath. On the way out, Quatermain grabs a handful of diamonds and puts them in
 his coat pocket. They attempt to escape via an underground river, but the current is too strong and deadly; they go another direction and eventually find their way out through a hole dug by some wild animal. They have emerged amid several animal burrows and cannot find the way back into the mines by this route. The men are welcomed back to Loo by Ignosi and his people. Ignosi is gratified at Gagool’s demise, but Captain Good is saddened by the loss of Foulata. After many days, the white men indicate that they wish to return to their own homeland. Ignosi first becomes angry at what he perceives to be a love of wealth over friendship, but his anger is soothed by Quatermain’s comparison to Ignosi himself wishing to return 
 to his homeland. Ignosi declares the men heroes among the Kukuanas who will always be welcome, even as he enacts a policy of isolationism against any further white man incursions. The men return home by a second, less hazardous route, and are surprised to find Sir Henry’s brother George Neville along the way. George had been injured and unable to continue his journey, so had settled into a hut near an oasis, unable to proceed or turn back due to his injury. With three strong men available, the party is able to get George home safely. Quatermain and Good decide to share the handful of diamonds with George for his pains in seeking King Solomon’s Mines. The men eventually return to Durban and part ways. At the novel’s end,
 Allan Quatermain receives a letter from Sir Henry, indicating that the Dane has met and developed a favorable opinion of Quatermain’s son Henry. Sir Henry begs Quatermain to join him, Harry, and Captain Good in England, where an estate has opened up near Sir Henry’s own home. With the fabulous wealth available to him through the diamonds, Quatermain decides to join Sir Henry in a bachelor’s retirement to watch his son grow into his profession." />
   <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<img id="myImg1" src="images/blogadbook(2)new.jpg" alt="Phileas Fogg, a London gentleman of meticulous and unchanging habits, hires as his valet Jean Passepartout, a Frenchman who has had a variety of jobs, including circus performer, but now seeks a tranquil life. After reading in The Daily Telegraph that a new railroad in India has made it theoretically possible to travel around the world in 80 days, Fogg bets his fellow members at the Reform Club that he will make that journey in 80 days or less; the wager is for the princely sum of £20,000 (half his fortune). Leaving that night, Fogg and a nonplussed Passepartout board a train bound for Dover and Calais to begin their journey. Shortly before Fogg’s departure, someone
 resembling him had robbed a bank, and Fogg’s sudden exit leads Scotland Yard to believe that he was the bank robber. Accordingly, a detective, Mr. Fix, is sent to Suez, in British-ruled Egypt, to await the steamer Mongolia, on which Fogg and Passepartout are traveling. Fix befriends Passpartout, and, after learning that they will take the steamer to Bombay, he buys a ticket and joins them. The Mongolia reaches Bombay before the arrival of an arrest warrant, however. During the few hours before their planned departure for Calcutta on the Great India Peninsula Railway, Passepartout visits a Hindu temple on Malabar Hill, unaware that Christians are forbidden to enter and that shoes are not to be worn inside. He is beaten by
 enraged priests and barely makes it to the train station on time. The train travels through India until stopping at the village of Kholby, where Fogg learns that, contrary to what was reported in the British press, the railroad is 50 miles (81 km) short of completion, and passengers are required to find their own way to Allahabad to resume the train trip. Fogg purchases an elephant and hires a Parsi man as elephant driver and guide. The elephant-borne party later encounters a group of people preparing for an act of suttee—the immolation of a widow on her husband’s funeral pyre. Fogg decides that they must rescue the young widow. Passepartout disguises himself as the body of the late rajah, and, as soon as the pyre is lit,
 he springs up and seizes the widow. The party then flees before the ruse is discovered. They reach the railroad station in Allahabad and continue on their journey. In Calcutta, however, Fogg and Passepartout are arrested and sentenced to prison because of Passepartout’s incursion into the Malabar Hill temple in Bombay. An unperturbed Fogg pays bail for them, and, accompanied by the widow, Aouda, they board a steamer bound for Hong Kong. Fix, who had hoped the sentences would keep them in Calcutta long enough for the warrant to arrive, joins them. In Hong Kong Passepartout attempts to secure cabins on a boat to Yokohama and learns that its departure has been rescheduled for that evening. Desperate to keep Fogg in Hong Kong
 until the warrant arrives, Fix tells Passepartout why he is following Fogg and offers to pay him to help delay Fogg’s departure. When Passepartout refuses, Fix drugs him with opium, preventing him from returning to Fogg. As a result, Fogg misses the steamer. However, he finds another ship that will take them to Shanghai, and he, Aouda, and Fix set sail. In the meantime, Passepartout manages to stagger onto the ship for Yokohama. Passepartout arrives in Yokohama with no money and no idea where Fogg is. He joins a traveling circus, where Fogg, having caught a Yokohama-bound steamer from Shanghai, encounters him just in time for them all (including Fix) to board the steamer that will take them to San Francisco. As Britain has
 no jurisdiction in the United States, Fix is now as eager as the rest of them to get Fogg back to England quickly. The group boards a train bound for New York City. The train trip continues more or less uneventfully until it reaches Medicine Bow, Wyoming Territory, where a signalman tells them that the suspension bridge is too dilapidated to bear the weight of a train. However, the engineer believes that it might be possible to safely cross the bridge by going at top speed, and the plan works, with the bridge collapsing as soon as the train reaches the other side. In Nebraska the train is attacked by a band of Sioux, who are on the point of winning the battle when Passepartout succeeds in uncoupling the train from its engine
 outside Fort Kearny, and the soldiers garrisoned there frighten the Sioux into leaving. However, the Sioux capture Passepartout and two other passengers. Fogg rides to their rescue with a group of soldiers, but the recoupled train departs without them. Using a sail-powered sledge, Fogg and the others travel over snow to Omaha, Nebraska, arriving just in time to board a train to Chicago. From there they catch a train to New York City, where they arrive 45 minutes after departure of the ship to England. Fogg finds an empty trading ship whose captain is willing to carry the group of four to Bordeaux, France. After bribing the crew and imprisoning the captain, Fogg assumes control and sets course for Liverpool, England. When a 
 storm prevents the use of sails, the coal supply runs low. Fogg buys the ship from the captain and begins burning its wooden parts. As soon as they arrive in Liverpool, Fix arrests Fogg. Several hours later, though, Fix learns that another man was responsible for the bank robbery, and he releases Fogg, who orders a special train. However, he arrives in London five minutes too late to win his wager. The following evening Fogg apologizes to Aouda for being unable to provide for her comfort as a result of losing the bet. She in turn proposes marriage to him, and he joyfully agrees. Passepartout is sent to engage a clergyman, and he learns that their journey through the time zones had gained them a day and that they are not too
 late after all. He rushes back to notify Fogg, who arrives at the Reform Club with only moments to spare." />
   <!-- The Modal -->
<div id="myModal1" class="modal1">
  <span class="close1">&times;</span>
  <img class="modal-content1" id="img02">
  <div id="caption1"></div>
</div>
<img id="myImg2" src="images/blogadbook(3).jpg" alt="Ishmael, the narrator, announces his intent to ship aboard a whaling vessel. He has made several voyages as a sailor but none as a whaler. He travels to New Bedford, Massachusetts, where he stays in a whalers’ inn. Since the inn is rather full, he has to share a bed with a harpooner from the South Pacific named Queequeg. At first repulsed by Queequeg’s strange habits and shocking appearance (Queequeg is covered with tattoos), Ishmael eventually comes to appreciate the man’s generosity and kind spirit, and the two decide to seek work on a whaling vessel together. They take a ferry to Nantucket, the traditional capital of the whaling industry. There they secure berths on the
 Pequod, a savage-looking ship adorned with the bones and teeth of sperm whales. Peleg and Bildad, the Pequod’s Quaker owners, drive a hard bargain in terms of salary. They also mention the ship’s mysterious captain, Ahab, who is still recovering from losing his leg in an encounter with a sperm whale on his last voyage. The Pequod leaves Nantucket on a cold Christmas Day with a crew made up of men from many different countries and races. Soon the ship is in warmer waters, and Ahab makes his first appearance on deck, balancing gingerly on his false leg, which is made from a sperm whale’s jaw. He announces his desire to pursue and kill Moby Dick, the legendary great white whale who took his leg, because he sees this whale as the
 embodiment of evil. Ahab nails a gold doubloon to the mast and declares that it will be the prize for the first man to sight the whale. As the Pequod sails toward the southern tip of Africa, whales are sighted and unsuccessfully hunted. During the hunt, a group of men, none of whom anyone on the ship’s crew has seen before on the voyage, emerges from the hold. The men’s leader is an exotic-looking man named Fedallah. These men constitute Ahab’s private harpoon crew, smuggled aboard in defiance of Bildad and Peleg. Ahab hopes that their skills and Fedallah’s prophetic abilities will help him in his hunt for Moby Dick. The Pequod rounds Africa and enters the Indian Ocean. A few whales are successfully caught and processed for 
 their oil. From time to time, the ship encounters other whaling vessels. Ahab always demands information about Moby Dick from their captains. One of the ships, the Jeroboam, carries Gabriel, a crazed prophet who predicts doom for anyone who threatens Moby Dick. His predictions seem to carry some weight, as those aboard his ship who have hunted the whale have met disaster. While trying to drain the oil from the head of a captured sperm whale, Tashtego, one of the Pequod’s harpooners, falls into the whale’s voluminous head, which then rips free of the ship and begins to sink. Queequeg saves Tashtego by diving into the ocean and cutting into the slowly sinking head. During another whale hunt, Pip, the Pequod’s black cabin boy,
 jumps from a whaleboat and is left behind in the middle of the ocean. He goes insane as the result of the experience and becomes a crazy but prophetic jester for the ship. Soon after, the Pequod meets the Samuel Enderby, a whaling ship whose skipper, Captain Boomer, has lost an arm in an encounter with Moby Dick. The two captains discuss the whale; Boomer, happy simply to have survived his encounter, cannot understand Ahab’s lust for vengeance. Not long after, Queequeg falls ill and has the ship’s carpenter make him a coffin in anticipation of his death. He recovers, however, and the coffin eventually becomes the Pequod’s replacement life buoy. Ahab orders a harpoon forged in the expectation that he will soon encounter Moby
 Dick. He baptizes the harpoon with the blood of the Pequod’s three harpooners. The Pequod kills several more whales. Issuing a prophecy about Ahab’s death, Fedallah declares that Ahab will first see two hearses, the second of which will be made only from American wood, and that he will be killed by hemp rope. Ahab interprets these words to mean that he will not die at sea, where there are no hearses and no hangings. A typhoon hits the Pequod, illuminating it with electrical fire. Ahab takes this occurrence as a sign of imminent confrontation and success, but Starbuck, the ship’s first mate, takes it as a bad omen and considers killing Ahab to end the mad quest. After the storm ends, one of the sailors falls from the ship’s
 masthead and drowns—a grim foreshadowing of what lies ahead. Ahab’s fervent desire to find and destroy Moby Dick continues to intensify, and the mad Pip is now his constant companion. The Pequod approaches the equator, where Ahab expects to find the great whale. The ship encounters two more whaling ships, the Rachel and the Delight, both of which have recently had fatal encounters with the whale. Ahab finally sights Moby Dick. The harpoon boats are launched, and Moby Dick attacks Ahab’s harpoon boat, destroying it. The next day, Moby Dick is sighted again, and the boats are lowered once more. The whale is harpooned, but Moby Dick again attacks Ahab’s boat. Fedallah, trapped in the harpoon line, is dragged overboard to his 
 death. Starbuck must maneuver the Pequod between Ahab and the angry whale. On the third day, the boats are once again sent after Moby Dick, who once again attacks them. The men can see Fedallah’s corpse lashed to the whale by the harpoon line. Moby Dick rams the Pequod and sinks it. Ahab is then caught in a harpoon line and hurled out of his harpoon boat to his death. All of the remaining whaleboats and men are caught in the vortex created by the sinking Pequod and pulled under to their deaths. Ishmael, who was thrown from a boat at the beginning of the chase, was far enough away to escape the whirlpool, and he alone survives. He floats atop Queequeg’s coffin, which popped back up from the wreck, until he is picked up by 
 the Rachel, which is still searching for the crewmen lost in her earlier encounter with Moby Dick." />
   <!-- The Modal -->
<div id="myModal2" class="modal2">
  <span class="close2">&times;</span>
  <img class="modal-content2" id="img03">
  <div id="caption2"></div>
</div>
<img id="myImg3" src="images/blogadbook(4)new.jpg" alt="Axel Lidenbrock, the teenage narrator of the story, lives in Hamburg, Germany, with his uncle, Professor Otto Lidenbrock, an impetuous and single-minded professor of geology. The story, set in May 1863, opens as the latter rushes home to show Axel his latest acquisition: a runic manuscript by the renowned Icelandic historian Snorri Sturluson. They find hidden within its pages a separate note which, when translated into Latin and read backward, appears to be the Icelandic alchemist Arne Saknussemm’s record of a passage leading to the centre of the Earth in a crater of Snaefell, a dormant volcano in Iceland. The crater containing the passage, however, is only revealed by
 shadows at noon during the last few days of June, just a month away. Otto rushes off to the area, dragging a very reluctant, pessimistic, and skeptical Axel with him. They eventually reach Reykjavík, where they hire the Icelandic eider hunter Hans Bjelke to guide them on the long journey to the volcano. After an arduous climb to Snaefell’s summit, the trio locates the correct crater, and they descend and find the passage. When they reach a fork, Otto chooses the eastern tunnel, but after three days they enter a cavern in which the history of the Carboniferous Period is visible, and Otto realizes that he was mistaken. They return and head down the other tunnel. The adventurers exhaust their water supplies, but Hans locates a
 subterranean river, and they follow that thereafter. One day Axel takes a wrong turn and gets lost, but eventually an acoustic phenomenon allows him to speak to Otto and Hans, and he is able to rejoin them. The trio finds a vast lake or sea, and along the shore they encounter a forest of giant mushrooms and lycophytes. On the ground are mastodon bones. Hans builds a raft of partially petrified wood, and the three men set sail, hoping to cross the sea. They catch fish of extinct species, and, after several days of sailing, they come across an ichthyosaur and a plesiosaur fighting. Later they are caught in an electrical storm that lasts for days. At one point a fireball strikes the raft, but the storm at last drives the vessel
 ashore. However, the compass indicates that they have returned to the shore from which they had set out. As Hans repairs the raft, Otto and Axel explore the area. They find shells and bones of long-extinct animals and also discover a human skull. Soon they come across a fossilized human. As they continue, they spot a herd of mastodons, and suddenly they see a giant man shepherding the beasts. They flee back to the shore, where they find a marking indicating Saknussemm’s path. They follow it but find themselves blocked by a large rock, which they blow up with gunpowder, after first returning to the raft to put themselves at a safe distance from the explosion. With the barrier removed, the explorers are carried past it on a torrent
 for hours, and then they find themselves being pushed upward. Two months after entering the underground world, the men are carried by a volcanic eruption to the surface of Stromboli Island, off the coast of Italy." />
   <!-- The Modal -->
<div id="myModal3" class="modal3">
  <span class="close3">&times;</span>
  <img class="modal-content3" id="img04">
  <div id="caption3"></div>
</div>
<img id="myImg4" src="images/blogadbook(5).jpg" alt="A historical romance, it relates the adventures of four fictional swashbuckling heroes who lived under the French kings Louis XIII and Louis XIV, who reigned during the 17th and early 18th centuries. At the beginning of the story, D’Artagnan arrives in Paris from Gascony and becomes embroiled in three duels with the three musketeers Athos, Porthos, and Aramis. The four become such close friends that when D’Artagnan serves an apprenticeship as a cadet, which he must do before he can become a musketeer, each of his friends takes turns sharing guard duty with him. The daring escapades of the four comrades are played out against a background of court intrigue involving the powerful
 cardinal Richelieu. Dumas wrote two sequels that concerned D’Artagnan and the three musketeers: Vingt ans après (1845; Twenty Years After) and Le Vicomte de Bragelonne; ou, dix ans plus tard (1848–50; The Vicomte de Bragelonne; or, Ten Years Later). The Three Musketeers was also adapted numerous times for film. The Three Musketeers is the most famous of around 250 books to come from the pen of this prolific author and his 73 assistants. Alexandre Dumas worked with the history professor Auguste Maquet, who is often credited with the premise for, and even the first draft of, Les Trois Mousquetaires, although the text, like all his others, plays very fast and loose with the historical narrative. D’Artagnan, the hero, is a Gascon, a
 young man who embodies in every aspect the hotheaded stereotype of the Béarnais people. Armed with only a letter of recommendation to M. de Tréville, head of King Louis XIV’s musketeers, and his prodigious skill with a sword, this incomparable youth cuts a swathe through seventeenth-century Paris and beyond, seeking his fortune. The enduring quality of Dumas’s texts lies in the vitality he breathes into his characters, and his mastery of the roman feuilleton, replete as it is with teasers and cliffhangers. The Three Musketeers is a romance par excellence, and the pace of the narrative carries the reader on a delirious journey. The strength of the characters, from the “Three Musketeers” themselves, to Cardinal Richelieu and the 
 venomous “Milady,” need scarcely be highlighted, so entrenched have they all become in Western culture. The charisma of Dumas’s swaggering young Gascon certainly remains undimmed." />
   <!-- The Modal -->
<div id="myModal4" class="modal4">
  <span class="close4">&times;</span>
  <img class="modal-content4" id="img05">
  <div id="caption4"></div>
</div>
<img id="myImg5" src="images/blogadbook(6)new.jpg" alt="Buck, a powerful dog, half St. Bernard and half sheepdog, lives on Judge Miller’s estate in California’s Santa Clara Valley. He leads a comfortable life there, but it comes to an end when men discover gold in the Klondike region of Canada and a great demand arises for strong dogs to pull sleds. Buck is kidnapped by a gardener on the Miller estate and sold to dog traders, who teach Buck to obey by beating him with a club and, subsequently, ship him north to the Klondike. Arriving in the chilly North, Buck is amazed by the cruelty he sees around him. As soon as another dog from his ship, Curly, gets off the boat, a pack of huskies violently attacks and kills her. Watching her
 death, Buck vows never to let the same fate befall him. Buck becomes the property of Francois and Perrault, two mail carriers working for the Canadian government, and begins to adjust to life as a sled dog. He recovers the instincts of his wild ancestors: he learns to fight, scavenge for food, and sleep beneath the snow on winter nights. At the same time, he develops a fierce rivalry with Spitz, the lead dog in the team. One of their fights is broken up when a pack of wild dogs invades the camp, but Buck begins to undercut Spitz’s authority, and eventually the two dogs become involved in a major fight. Buck kills Spitz and takes his place as the lead dog. With Buck at the head of the team, Francois and Perrault’s sled makes 
 record time. However, the men soon turn the team over to a mail carrier who forces the dogs to carry much heavier loads. In the midst of a particularly arduous trip, one of the dogs becomes ill, and eventually the driver has to shoot him. At the end of this journey, the dogs are exhausted, and the mail carrier sells them to a group of American gold hunters—Hal, Charles, and Mercedes. Buck’s new masters are inexperienced and out of place in the wilderness. They overload the sled, beat the dogs, and plan poorly. Halfway through their journey, they begin to run out of food. While the humans bicker, the dogs begin to starve, and the weaker animals soon die. Of an original team of fourteen, only five are still alive when they 
 limp into John Thornton’s camp, still some distance from their destination. Thornton warns them that the ice over which they are traveling is melting and that they may fall through it. Hal dismisses these warnings and tries to get going immediately. The other dogs begin to move, but Buck refuses. When Hal begins to beat him, Thornton intervenes, knocking a knife from Hal’s hand and cutting Buck loose. Hal curses Thornton and starts the sled again, but before they have gone a quarter of a mile, the ice breaks open, swallowing both the humans and the dogs. Thornton becomes Buck’s master, and Buck’s devotion to him is total. He saves Thornton from drowning in a river, attacks a man who tries to start a fight with Thornton in a bar,
 and, most remarkably, wins a $1,600 wager for his new master by pulling a sled carrying a thousand-pound load. But Buck’s love for Thornton is mixed with a growing attraction to the wild, and he feels as if he is being called away from civilization and into the wilderness. This feeling grows stronger when he accompanies Thornton and his friends in search of a lost mine hidden deep in the Canadian forest. While the men search for gold, Buck ranges far afield, befriending wolves and hunting bears and moose. He always returns to Thornton in the end, until, one day, he comes back to camp to find that Yeehat Indians have attacked and killed his master. Buck attacks the Indians, killing several and scattering the rest, and then heads
 off into the wild, where he becomes the leader of a pack of wolves. He becomes a legendary figure, a Ghost Dog, fathering countless cubs and inspiring fear in the Yeehats—but every year he returns to the place where Thornton died, to mourn his master before returning to his life in the wild." />
   <!-- The Modal -->
<div id="myModal5" class="modal5">
  <span class="close5">&times;</span>
  <img class="modal-content5" id="img06">
  <div id="caption5"></div>
</div>

<h2 class="h1">Our famous adventure authors</h2>

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
                                    <img src="images/adau1(new).jpg" alt="Alexandre Dumas">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Alexandre Dumas</span>
                                   <span class="profession0">French writer</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“I am not proud, but I am happy; and happiness blinds, I think, more than pride.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
            </section>
                 <div class="content">
                    <h3>1802-1870</h3>
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
                                    <img src="images/adau2.jpg" alt="Mark Twain">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Mark Twain</span>
                                   <span class="profession0">American writer</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“Good friends, good books, and a sleepy conscience: this is the ideal life.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
                </section>
                 <div class="content">
                    <h3>1835-1910</h3>
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
                                    <img src="images/adau3.jpg" alt="Rudyard Kipling">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Rudyard Kipling</span>
                                   <span class="profession0">English journalist</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“I always prefer to believe the best of everybody; it saves so much trouble”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
                </section>
                 <div class="content">
                    <h3>1865-1936</h3>
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
                                    <img src="images/adau4.jpg" alt="J.K. Rowling">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">J.K. Rowling</span>
                                   <span class="profession0">British author</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“Indifference and neglect often do much more damage than outright dislike.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                    </div>
                </section>
                 <div class="content">
                    <h3>1965-till date</h3>
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
                                   <img src="images/adau5(new).jpg" alt="Homer">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Homer</span>
                               <span class="profession0">Greek author</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“There is a time for many words, and there is also a time for sleep.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>928 BC-unknown</h3>
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
                                   <img src="images/adau6(new).jpg" alt="Jonathan swift">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Jonathan swift</span>
                               <span class="profession0">Irish satirist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“It is useless to attempt to reason a man out of a thing he was never reasoned into.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1667-1745</h3>
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
                                   <img src="images/adau7(new).jpg" alt="Jack London">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Jack London</span>
                               <span class="profession0">American novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Show me a man with a tattoo and I'll show you a man with an interesting past.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1876-1916</h3>
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
                                   <img src="images/adau8(new).jpg" alt="Walter Scott">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Walter Scott</span>
                               <span class="profession0">Scottish novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Revenge, the sweetest morsel to the mouth that ever was cooked in hell.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1772-1832</h3>
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
                                   <img src="images/adau9(new).jpg" alt="Daniel Defoe">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Daniel Defoe</span>
                               <span class="profession0">English writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Fear of danger is ten thousand times more terrifying than danger itself.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1661-till date</h3>
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
                                   <img src="images/adau10.jpg" alt="Paulo Coelho">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Paulo Coelho</span>
                               <span class="profession0">Brazilian lyricist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“It's the possibility of having a dream come true that makes life interesting.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1947-till date</h3>
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
                                   <img src="images/adau11(new).jpg" alt="Arthur Conan Doyle">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Arthur Conan Doyle</span>
                               <span class="profession0">British writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“The world is full of obvious things which nobody by any chance ever observes.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1859-1930</h3>
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
                                   <img src="images/adau12(new).jpg" alt="Joseph Conrad">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Joseph Conrad</span>
                               <span class="profession0">Polish-British writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Your strength is just an accident arising from the weakness of others.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1857-1924</h3>
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
            <a href="Adventure.html"> <i class="fas fa-arrow-right"></i> Adventure </a>
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

<!-- custom js file link  -->
<script src="javascript/style9.js"></script>


</body>
</html>
<?php
}
?>