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
    <title>Horror - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/horror.css">
    
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

<h1>Welcome to the World of Horror</h1>

<div class="container" id="container">
    <div class="book-content">
        <div class="book">
            <div class="face-front" id="portada"></div>
            <div class="face-back" id="trsf">
                 <h1>Summary- Salem's Lot</h1>
                <p>Ben Mears returns to the town of Jerusalem's Lot in Maine, where he spent four years as a child twenty-five years earlier. He's working on a book about the creepy Marston House. (He is the hero because he's a writer from Maine, and writers from Maine are cool. Just ask a writer from Maine like Stephen King.) Ben meets Susan Norton, a recent college graduate and author who falls for him quick because this isn't a romance book, and the plot's got other things to do.
                <br>
                Meanwhile, Kurt Barlow, an immigrant, purchases the Marston House with help from his bald buddy Richard Straker. They claim they are opening an antique store, but in fact Barlow is a demonic creature of the night come to suck the townspeople's blood. Straker murders a little boy, Ralphie Glick, as a sacrifice to Barlow, who then turns Ralphie's brother, Danny, into the town's first vampire. Things go from worse to worse than that, with people dying left and right and vampires rising and the town sinking swiftly into degradation, filth, and large incisors.   
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>Summary- Salem's Lot</h1>
                 <p>Ben figures out what's happening because, hey, he's a writer and (all together now) writers know what's up. Joining up with him to fight the good fight are Susan, an English teacher named Matt Burke (did we mention that Stephen King worked as an English teacher, too?), Matt's doctor Jimmy Cody, the local Irish priest Father Callahan, and Mark Petrie, a smart, tough kid who likes horror films. Alone, they'd have no chance against the fearsome vampires, but together… well, it still doesn't seem like they have much chance,and in fact, things don't go super well for them. Matt has a minor heart attack after confronting a vampire in his house and ends up in the hospital. Susan's ex-boyfriend Floyd Tibbets is turned into a half-vampire by Barlow, and under his orders beats Ben up and puts him in the hospital too.
                  <br>
                  Susan decides to confront Barlow in the Marston House on her own. She runs into Mark… and the two of them get captured almost immediately by Straker. Mark breaks free, bashing Straker in the head in the process,
                 </p>
             </div>
             <div class="face-back">
                <h1>Summary-  Salem's Lot</h1>
                 <p> and leaving him all bloody so that Barlow can't resist and ends up eating him. Unfortunately, Mark isn't in time to free Susan, who is caught and turned into a vampire. This makes Ben sad, as you'd imagine. If only Susan had been a writer, she would have been too cool to get killed. Acting under Matt's advice, Ben, Mark, Jimmy and Father Callahan go to the Marston House during the daytime. There, they find and stake Susan and seal the house off with the Host. Barlow leaves a letter threatening Mark's parents, so Callahan and Mark go to warn them. Before they can convince them to run, though, Barlow shows up and kills Mark's mom and dad, which makes Mark sad, 
                  <br>  
                   as you'd imagine Mark escapes under cover of Callahan's faith-powered cross, but then Callahan loses faith and Barlow makes him drink Barlow's vampire blood, which, besides being gross, marks him as damned. Callahan catches a bus out of town and feels sorry for himself, not necessarily in that order.
                  </p>   
 
             </div>
         </div>
 
         <div class="book">
             <div class="face-front">
                 <h1>About Salem's Lot</h1>
                 <p>When King published 'Salem's Lot back in 1975, he wasn't quite as well known for monsters eating you as he was to become. This was only his second novel. His first, Carrie (1974), did well, but still, it was early days. King was popular and going places, but you couldn't yet bury a fleet of overweight whales under copies of the novels he'd sold.'Salem's Lot is a landmark on King's path to take up his crown as the king of the monstrous, and he does it in high style. His monsters don't just eat one person, or two, or three. They eat a whole freaking town.
                  <br>
                  The monsters here are vampires, and King's vampires have all the characteristics you'd expect from vampires: they don't like garlic, they hate crosses, and they need permission to enter a house. They're from Europe, and their hair is slicked back.That's tradition, folks. But even though King loves the oldies and goodies, he still wants to be up to date. So he hits on the scary idea that pretty much anybody around you could be a vampire. Seriously: vampires in 'Salem's Lot are everyone, 
                 </p>
             </div>
             <div class="face-back">
                 <h1>About Salem's Lot</h1>
                 <p>which means everyone is a vampire. The monsters eat you because you were a monster to begin with. It's almost like we're in Night of the Living Dead land here, where the monsters eat you and you eat other folks and soon everybody's a monster and you can't tell the cheerful townsfolk from the children of the night.Vampires are one of the all-time great creepy horror villains, turning everything innocent and good to eternal evil with fangs and buckets of blood.
                 <br>
                 But vampires in recent years have gotten sadly defanged. On Buffy the Vampire Slayer, the vampires are little more than super-villains, strong and fast with wicked martial arts skills, but not that scary otherwise. Buffy stakes five or ten an episode and barely works up a sweat. In Twilight, the other massive vampire phenom, the vampires aren't even evil.they are sparkly romantic elves who fight for right, superheroes rather than supervillains. And then there's 'Salem's Lot, eah, Stephen King's vampires aren't supervillains you can take out by casually tossing 
 
                 </p>
             </div>
         </div>
 
         <div class="book">
             <div class="face-front">
                 <h1>About Salem's Lot</h1>
                 <p>a stake through them. They're not superheroes you can rely on to sparkle and save you. They're virtually unkillable—as Reggie Sawyer discovers when he shoots a vampire with a shotgun and doesn't even slow it down.
                They're seductive—as Jimmy Cody discovers when one bites him and he disgustedly reports, "I liked it." They are evil, and they are everywhere, and they will take you. Don't get us wrong: we love us some Buffy and Twilight. But still, we can't help feeling that you lose something when your vampires stop being creepy, when all the dark, ugly things are pulled into the light and given, a new coat of paint and a Dr. Who T-shirt so you can show them off at the latest sci-fi convention. A world in which even nightmares are cheerful starts to look a little drab, a little washed-out, a little one-dimensional. If life is going to feel like life, you need some undead without any shilly-shallying.
                <br>
                That may sound familiar,Cause this a Stephen King book. 
                 </p>
             </div>
             <div class="face-back" id="portada-back">
             </div>
         </div>
     </div>
 </div>
 
 <h2 class="h1">Our precious collections</h2>
 
 <img id="myImg" src="images/It(new).jpg" alt="Derry, Maine. In 1957, a little boy named George gets killed by a storm drain-dwelling psycho clown named Pennywise. His brother, Bill, is really scarred by this.
 
 Flash forward to '85. Something in Derry is killing innocents again, and that something is wearing greasepaint and a clown suit. This prompts Mike to call his childhood buddies: Steve, Richie, Ben, Eddie, Beverly, and Bill. Yep: that’s the same Bill whose baby bro got killed decades earlier.
 
 Bill, the leader of this group of seven kids that will come to be known as the Losers’ Club, suffers the greatest loss among his friends: the first death shown in the novel is his brother, George. The monster It appears in a storm drain after a flood and kills George after his newspaper boat goes into the drain. Each of the character’s childhood encounters with It are presented in great detail, leading to the moment in which they met—and joined—the Losers’ Club. They eventually fight It and believe they have killed the town's sinister tormentor. They make a promise that if It ever returns, they will come back to finish what they started. Six of them leave Derry. Mike Hanlon stays behind and becomes the town librarian, keeping a watchful eye on the town.
 
 These adults all react strongly to this phone call. Six of them respond by upending their lives and going back to Derry. (Stan decides to end his life: returning to Derry is a pretty terrifying prospect.)
 After reconvening in Derry, the second half of the story follows the remaining six adults as It reappears in their lives. They are each astonished to realize that they have forgotten everything that happened to them as children, but Mike is the exception. Because he never left Derry, he never forgot.
 
 Through a combination of memory and flashback, it becomes clear what happened. In 1958, the killer clown, a.k.a. Pennywise, a.k.a. It, goes homicidal on Derry's youth population. It tries to kill all seven of what becomes known as the Losers Club (Mike, Stan, Bill, etc.) by manifesting as the things they fear the most.
 
 Eddie, raised by a hypochondriac mom, fears disease, and so It becomes a leper. Mike almost had his eyes pecked out by a bird when he was a baby, so It sprouts some wings. You get the gist.
 
 After being terrorized by both It and a local no-good bully named Henry Bowers, the Losers decide to track down It and stop It using an ancient Himalayan ritual. This is no easy feat, especially because a) It lives in the dark, twisting labyrinth of sewers under Derry, b) It has possessed Henry Bowers, turning him into a killer hell-bent on offing the Losers, and c) It can transform into everyone's worst nightmare.
 
 But finally, after a lot of gore and spooky scaries, these kids vanquish It. Bonus: all the murders in town are pinned on Henry Bowers, so he goes off to the state prison for the criminally insane. Everyone lives happily ever after, and the killer clown is no more.It has reared It's ugly head again, and the now-adult Losers band together to remember the ancient Himalayan ritual, do some extramarital affair-having, and kill It once and for all. Before this can happen, however, It terrorizes what's left of the Losers Club…and breaks Henry Bowers out of prison.
 
 Ultimately, the Losers save the day. Henry is killed, It is vanquished, and Derry collapses in a major earthquake/sewer system flood. The Losers are struck by very specific amnesia, and go back to their adult lives with fading recollections of all It-related shenanigans.
 
 It's the happiest ending possible in a book that revolves around a psychotic killer clown." />
 
    <!-- The Modal -->
 <div id="myModal" class="modal">
   <span class="close">&times;</span>
   <img class="modal-content" id="img01">
   <div id="caption"></div>
 </div>
 <img id="myImg1" src="images/haunt(new).jpg" alt="Hoping to cause a sensation in the field of parapsychology, Dr. John Montague rents Hill House, a secluded manor with a reputation for being haunted. He carefully selects two participants for his study—Eleanor Vance, a thirty-two-year-old woman who was reported to have had experiences with a poltergeist as a child, and Theodora, a woman marked in one of his lab’s studies as having psychic abilities. A third participant, Luke Sanderson, also joins the group. Luke stands to inherit Hill House after his aunt dies, and Luke’s aunt sends him to watch over the house and deter amateur ghost hunters. She also wants to keep Luke out of trouble since he is a liar and a thief.
 
 Eleanor arrives at Hill House first. An instinct tells her to leave, but she stays and meets the house’s caretakers, Mr. and Mrs. Dudley. They are unwelcoming and urge her to go away, saying that they refuse to stay at the house after dark. Theodora arrives next, and Eleanor, a recluse, feels immediately drawn to Theodora’s warm, witty, and open personality. Eleanor lies and tells Theodora she has an apartment back home, when she actually lives at her sister’s house, where she sleeps on a cot. Eleanor was her mother’s primary caretaker up until her mother’s death a new friend. Dr. Montague and Luke arrive next. Dr. Montague reluctantly tells the group about the house’s history after dinner—he doesn’t want to scare anyone into leaving, since the last tenant to leave at night died when his horse crushed him against the oak tree in the driveway. Dr. Montague explains that the house was built eighty years ago by a man named Hugh Crain. Crain designed Hill House as a series of cloistered, maze-like concentric circles that are almost impossible to navigate. Tragically, Crain’s wife never set foot into the house; she died when her carriage overturned in the driveway. Bitter and depressed, Crain stayed to raise his two daughters in the house. Over the years, the daughters fought over ownership of the house, and the house
 
 Over the first week of their stay, the group experiences a series of unexplainable events. One night, the women hear a loud banging on the door and feel a chilling breeze. The men see a mysterious animal run down the hallway. Outside the nursery, they discover a mysterious cold spot. Inside the library, Eleanor detects an awful odor. Finally, Luke discovers the words HELP ELEANOR COME HOME written in chalk in the halls. With each event, the group grows more suspicious of Eleanor, and Eleanor is terrified by the thought that the house is singling her out.
 
 The odd events continue. When Theodora finds the words HELP ELEANOR COME HOME ELEANOR written in blood on her walls, she lashes out at Eleanor, who she suspects is doing these things to get attention. Meanwhile, Eleanor feels herself losing grasp of her senses and at the same time becoming more connected to Theodora. At one point, Dr. Montague assures everyone that ghosts can’t cause them physical harm—only fear can do that. Still, Theodora and Eleanor continue to experience strange events that are hard to recall yet hard to deny.Mrs. Montague, a parapsychologist, arrives at Hill House with her friend, Arthur. Belittling her husband and his lack of progress, she confidently declares that she will draw out Hill House’s spirits. Mrs. Montague believes that spirits feel lonely and want to connect, but they need to be coaxed into communicating. To accomplish this, she uses a device called a planchette. Mrs. Montague reports that a spirit named “Nell” spoke to her, saying it wanted to go home. The group, deeply disturbed, continues to watch Eleanor with suspicion while growing more fearful of the house
 That night, Dr. Montague, Luke, Theodora, and Eleanor stay in a room together to keep watch. They hear terrible banging sounds on the door while Mrs. Montague and Arthur sleep in nearby rooms, undisturbed.
 
 Eleanor realizes that she can hear any sound that occurs inside the house, no matter which room she is in. She believes that she is merging with the house and can sense things that the others can’t. Eleanor wakes up one night and goes to the library, aware that she’s not acting entirely of her own volition. She hears a voice that sounds like her mother’s and chases it throughout the house. Trying to avoid the others, who now realize that she’s roaming the house alone, Eleanor retreats back to the library and climbs a rickety iron stairway to the turret. The others gather underneath it and worry that the stairway will collapse, but Luke climbs up and ushers Eleanor back down to safety.
 
 " />
    <!-- The Modal -->
 <div id="myModal1" class="modal1">
   <span class="close1">&times;</span>
   <img class="modal-content1" id="img02">
   <div id="caption1"></div>
 </div>
 <img id="myImg2" src="images/wwz(new).jpg" alt="An unnamed man is commissioned to write a report on the Zombie Wars. The report consists of interviews from people around the world, but when he turns it, his boss complains the report is too emotional. The Interviewer decides to take the human factor out of his report and rework it as a book. This is that story: World War Z, subtitled “An Oral History of the Zombie War,” consists of various interviews from people around the world who were involved in the war in some way, all collected into a book by the narrator who wants to preserve these memories to try to prevent a crisis like this from ever recurring. After the war ends, the narrator works for the U.N. to write up a postwar report, and travels the world conducting interviews for it. However, after the report is published, he is disappointed to see that it has been heavily edited and much of the information that he had included has been left out. When he speaks to the chairperson of the Postwar Commission Report about this, she explains that his version had too many “emotions” and “opinions,” and they had wanted the report to be solely a record of facts. The narrator disagrees with her, insisting that “the human factor” is what connects people to the past, and without it, the report would be meaningless. The chairperson asks him to write his own book about the war if he believes this, which is exactly what the narrator ends up doing. World War Z is that book. The narrator notes that this “book of memories” tells the stories of the people he interviewed, and his presence in it is minimal.
 
 The zombie plague starts as all plagues tend to—slow and steady. China has a mild outbreak of zombie that spreads out into the world through various routes: refugees, black market organs, human trafficking, and the undead simply shuffling about. Many countries ignore the news of the dead rising up from the grave with a ravenous hunger for human flesh, but others, such as Israel, take the threat seriously and begin zombie-proofing their borders.
 
 But the lack of information and preventative measures means the zombie tide doesn't stay back for long. Before anyone knows it, the undead masses have washed over the entire globe, biting, scratching, and killing all they come across. Governments take defensive measures, but their militaries don't understand their new enemy, leading to disastrous engagements such as the Battle of Yonkers, where America's state-of-the-art martial technology does little to even dent the zombie masses of Manhattan.In the first chapter, titled “Warnings,” the narrator meets an old Chinese doctor named Kwang Jing-shu, who tells him about his encounter with “Patient Zero,” a 12-year-old boy in a small village who had been infected with the virus and had reanimated into a zombie. The doctor was shocked to see his strange symptoms. The villagers told Kwang that the boy had gone diving into the waters of a dam and had resurfaced with a bite on his foot, suggesting that there were already other undocumented cases of the virus. When Kwang called his friend Gu who worked at the Institute of Infectious Diseases to tell him about Patient Zero, Gu immediately sounded worried, implying that he was not unfamiliar with this virus. Soon after, men in hazmat suits arrived and picked up Patient Zero and the other villagers he’d bitten, and imprisoned Kwang.
 
 
 
 Without proper government leadership, lots of people panic. Unoriginally, this event is called the Great Panic. Some try to fight the zombies, others flee with little to no resources, but most just die a horrible death. (That's probably what would happen to us.) Then the South African government calls for a plan by a man named Paul Redeker. The Redeker Plan is cold, calculating, and lacks social niceties, but it buys the South African government the time they need. Other nations have a go at Redeker's plan, and the tide turns.The next chapter, titled “The Great Panic,” focuses on the years of fear and desperation when large numbers of zombies began to attack people and wreak havoc in countries all over the world. Gavin Blaire, who used to pilot a blimp in the U.S., describes the heartbreaking scenes he saw from the air—of traffic jams on interstates and stalled cars, and hordes of zombies making their way through them. They attacked and ate everyone they came across, and after these people died, they reanimated and became zombies, too. Many people tried to escape on ships, not knowing that zombies could survive underwater. In desperation, some parents tried to murder their children so they wouldn’t be reanimated into zombies. The sheer number of refugees from various nations caused political problems, and led to a nuclear war between Iran and Pakistan.
 
 Learning from their past mistakes, the American government and military focus their attention west of the Rockies. New weapons are crafted, old strategies are reenacted, the populations of the world join forces, and feeling Twisted Sister had the right attitude, decide they aren't gonna take it anymore.The following chapter is called “Turning the Tide,” and details the small successes that humans had against the zombies. The key to people’s success was the Redeker Plan, named after the South African who came up with the idea of creating a safe zone in each nation that would be inaccessible to the zombies. The government would retreat to the safe zone with some citizens. Many people were left outside the safe zones as “bait,” and also because the safe zones weren’t big enough for everyone. The plan was criticized for its cruelty because it abandoned large swathes of people, but it was the only solution in those desperate times. Philip Adler, a German soldier, was so angry when he was ordered to carry out this plan and abandon civilians that he wanted to murder the general who gave the order. However, by the time he reached the general, he discovered that the general had committed suicide out of guilt. Kondratiuk, a Ukrainian soldier, describes how their forces used nerve gas to identify infected people. The zombies reanimated and were easily shot—but, tragically, all the uninfected people died.
 
 The counterstrike is a long hard road, especially in countries like France where the underground battles read like something from a particularly twisted Poe story. But the humans manage to do what humans do best: adapt and survive.
 
 The world is irrevocably changed from the zombie invasion, but the Interviewer ends his story on one of those bittersweet notes readers are so fond of. Although the people have suffered a great tragedy, they can now pick up the pieces of their lives and hopefully live on in a post-zombie apocalyptic world, which isn't as bad as it sounds." />
    <!-- The Modal -->
 <div id="myModal2" class="modal2">
   <span class="close2">&times;</span>
   <img class="modal-content2" id="img03">
   <div id="caption2"></div>
 </div>
 <img id="myImg3" src="images/cucko(new).jpg" alt="This stylish modern version of The Midwich Cuckoos is set in Midwich, a sleepy commuter belt town outside London, rather than the rural village of the novel. One September evening everyone in one part of the town suddenly falls unconscious without warning and for 12 hours no phones work and nobody can get into the blackout zone. 
 
 When everything returns to normal, it’s discovered that every woman of childbearing age has become pregnant. They later give birth to a group of chillingly unusual children (see picture below), known as ‘The Midwich Cuckoos’. Soon it's apparent these odd children have strange abilities. They end up dividing loyalties and threatening lives both within the town and beyond — and it needs a terrifying sacrifice in order to prevent them causing global catastrophe…. psychotherapist Dr Susannah Zellaby who's drafted in help support those affected by the mysterious events at Midwich. Susannah’s daughter Cassie (Synnøve Karlsen), is also one of those who has become pregnant and has deep concerns about who, or what, is behind the phenomenon.
 
 Keeley says: “I’m absolutely delighted to be working with Sky and the brilliant Ruth Kenley-Letts on David Farr’s superb adaptation of The Midwich Cuckoos. I’m very much looking forward to working with the hugely talented Max Beesley and the amazing cast and I can’t wait to enter the strange and unsettling world of Midwich!”
 
 Max Beesley plays local police officer DCI Paul Kirby who tries to maintain law and order in Midwich unaware that a terrifying force is building in the comfortable streets. The strange children eventually born are potential parasites who flourish under the very love and care that their families give them. Who are these children? Where did they come from and what do they want?Keeley Hawes told us: the Midwich Cuckoos is, rightly, lots of people's favourite book. I hadn't read it, which was actually a great way to come to this project. Because I read that script fresh and just thought, 'Oh my gosh, you know this, it's really horrifying!' Whether you're a mother or not, it's relatable to everybody this idea of having something inside you and not knowing what it is. It's pretty awful.
 
 Susannah and her daughter Cassie have an interesting relationship. Susannah is a child psychologist, so it's doubly difficult for her because she's really good at helping children. But unfortunately, she struggles to help her own. She also has very difficult struggles with with mental health issues and with addiction.
 British science fiction novelist John Wyndham wrote his most iconic work The Day of The Triffids(opens in new tab) in 1951 after spending World War Two as a firewatcher during the Blitz, a censor in the Ministry of Information and a member of the Home Guard. The story sees most of the world blinded by gazing at a meteor shower which then allows poisonous giant plants, the Triffids, to take over the planet. 
 
 There was a 1963 film adaptation of The Day of Triffids starring Howard Keel (of Dallas fame), Nicole Maurey and Janette Scott, plus there’s a 1981 version by the BBC starring John Duttine. Then, in 2009, the BBC made yet another version of The Day of The Triffids starring Dougray Scott, Jason Priestley, Eddie Izzard and Joely Richardson.
 
 John Wyndham is also known for his novels The Chrysalids(opens in new tab), set in a post-nuclear dystopia, and The Kraken Wakes(opens in new tab) about a mysterious flood and attacks on shipping by creatures from the deep. His novel Chocky(opens in new tab), which tells the story of an alien consciousness that communicates with the mind of a 12-year-old boy was written Wyndham wrote a year before his death in 1969." />
    <!-- The Modal -->
 <div id="myModal3" class="modal3">
   <span class="close3">&times;</span>
   <img class="modal-content3" id="img04">
   <div id="caption3"></div>
 </div>
 <img id="myImg4" src="images/frank(new).jpg" alt="In a series of letters, Robert Walton, the captain of a ship bound for the North Pole, recounts to his sister back in England the progress of his dangerous mission. Successful early on, the mission is soon interrupted by seas full of impassable ice. Trapped, Walton encounters Victor Frankenstein, who has been traveling by dog-drawn sledge across the ice and is weakened by the cold. Walton takes him aboard ship, helps nurse him back to health, and hears the fantastic tale of the monster that Frankenstein created.
 
 Victor first describes his early life in Geneva. At the end of a blissful childhood spent in the company of Elizabeth Lavenza (his cousin in the 1818 edition, his adopted sister in the 1831 edition) and friend Henry Clerval, Victor enters the university of Ingolstadt to study natural philosophy and chemistry. There, he is consumed by the desire to discover the secret of life and, after several years of research, becomes convinced that he has found it. Armed with the knowledge he has long been seeking, Victor spends months feverishly fashioning a creature out of old body parts. One climactic night, in the secrecy of his apartment, he brings his creation to life. When he looks at the monstrosity that he has created, however, the sight horrifies him. After a fitful night of sleep, interrupted by the specter of the monster looming over him, he runs into the streets, eventually wandering in remorse. Victor runs into Henry, who has come to study at the university, and he takes his friend back to his apartment. Though the monster is gone, Victor falls into a feverish illness
 
 Sickened by his horrific deed, Victor prepares to return to Geneva, to his family, and to health. Just before departing Ingolstadt, however, he receives a letter from his father informing him that his youngest brother, William, has been murdered. Grief-stricken, Victor hurries home. While passing through the woods where William was strangled, he catches sight of the monster and becomes convinced that the monster is his brother’s murderer. Arriving in Geneva, Victor finds that Justine Moritz, a kind, gentle girl who had been adopted by the Frankenstein household, has been accused. She is tried, condemned, and executed, despite her assertions of innocence. Victor grows despondent, guilty with the knowledge that the monster he has created bears responsibility for the death of two innocent loved ones. Hoping to ease his grief, Victor takes a vacation to the mountains. While he is alone one day, crossing an enormous glacier, the monster approaches him. The monster admits to the murder of William but begs for understanding. Lonely, shunned, and forlorn, he says that he struck out at William in a desperate attempt to injure Victor, his cruel creator. The monster begs Victor to create a mate for him, a monster equally grotesque to serve as his sole companion.
 
 Victor refuses at first, horrified by the prospect of creating a second monster. The monster is eloquent and persuasive, however, and he eventually convinces Victor. After returning to Geneva, Victor heads for England, accompanied by Henry, to gather information for the creation of a female monster. Leaving Henry in Scotland, he secludes himself on a desolate island in the Orkneys and works reluctantly at repeating his first success. One night, struck by doubts about the morality of his actions, Victor glances out the window to see the monster glaring in at him with a frightening grin. Horrified by the possible consequences of his work, Victor destroys his new creation. The monster, enraged, vows revenge, swearing that he will be with Victor on the monster, enraged, vows revenge, swearing that he will be with Victor on Victor’s wedding night.
 Later that night, Victor takes a boat out onto a lake and dumps the remains of the second creature in the water. The wind picks up and prevents him from returning to the island. In the morning, he finds himself ashore near an unknown town. Upon landing, he is arrested and informed that he will be tried for a murder discovered the previous night. Victor denies any knowledge of the murder, but when shown the body." />
    <!-- The Modal -->
 <div id="myModal4" class="modal4">
   <span class="close4">&times;</span>
   <img class="modal-content4" id="img05">
   <div id="caption4"></div>
 </div>
 <img id="myImg5" src="images/interview(new).jpg" alt="Just as the title of the book implies, an unnamed boy sits down to interview the vampire. Well, he's just a vampire. We'll meet quite a few over the course of the book.
 
 
 The interviewee, Louis, tells his interviewer about his early life—and early death—in Louisiana in 1791. On the night his brother dies, Louis is assaulted by a vampire who drinks his blood but does not kill him. The vampire later returns and transforms Louis into a vampire because he wants to take over his plantation, Pointe de Lac. It's like the worst episode of House Hunters ever.
 
 Louis and this vampire, whose name is Lestat, live together on the plantation. Rumors spread among the slaves that the two men are supernatural creatures, and the slaves plan to kill them. Lestat and Louis burn down Pointe du Lac and flee to the nearby Freniere plantation. There, Babette Freniere, who has sort of a history with Louis, takes them in. But she, too, is suspicious, and she accuses Louis of being a devil. This is just the start of Louis's existential crisis. Is he or isn't he a demon?
 
 Louis and Lestat take up residence in New Orleans. On one particularly desperate night, Louis feeds on a five-year-old girl and leaves her for dead. Later, Lestat finds the girl, Claudia, in a hospital. He pretends to be her father and brings her home to Louis, where he transforms her into a vampire.
 
 Claudia never ages physically, but she grows mentally, soon becoming a woman trapped in a child's body. When Claudia realizes that she's trapped in this prison, she wants to know who made her like this. Louis admits that he killed her, but that Lestat made her a vampire.Claudia decides that the best course of action would be to kill Lestat. No one likes him, anyway. She poisons two boys and tricks Lestat into feeding on them. Then she cuts his throat, and Louis dumps his shriveled body into a swamp.
 
 Wanting to know more about the origins of the vampires, they decide to go to Europe. But first, Lestat returns from the dead and tries to kill them. Louis and Claudia burn down their suite (we're sensing a pattern here...) and leave Lestat for dead. For real this time.
 
 Europe is like a classic vampire movie. People cower in inns adorned with crucifixes and strands of garlic, fearing an evil creature stalking the countryside. Louis and Claudia find the vampire, and this vampire is nothing like they are. It's more like a decaying corpse instead of a living, not-quite-breathing human.
 Claudia and Louis are taken backstage, where they meet Armand, a vampire who is human like they are. He is old, and he's more willing to share information than Lestat was. However, another member of the Théâtre, Santiago, is suspicious of Louis and Claudia, believing that they killed their maker.
 
 Louis falls in love with Armand and, after much brooding, turns a doll-maker named Madeleine into a vampire to care for Claudia so that he can leave her for Armand. Unfortunately, Santiago has other plans. With a team of vampires, he drags Louis, Claudia, and Madeleine back to the Théâtre des Vampires. And who is there but Lestat. Back from the dead. Again.
 
 Louis is restrained, and Claudia and Madeleine are given death by sunlight. Armand frees Louis, but he is furious at what these vampires have done. With a scythe and some gasoline, he sets the Théâtre des Vampires on fire (yes, definitely a pattern here) and kills any vampires who try to escape.
 
 After the carnage is done, Louis and Armand return to America. Armand tells Louis that Lestat did not die in the fire. In fact, he happens to live back in New Orleans. Imagine that. Louis moves to New Orleans and eventually visits Lestat one last time. Lestat's a pathetic sight, and Louis ultimately feels sorry for him.
 
 Armand then admits that he is the one who killed Claudia. He also admits that he thinks Louis is dead inside—he no longer possesses the drama and fire that used to drive him. Louis is like, Yeah, pretty much, and Armand leaves him.The end.
 
 Well, that's the end of Louis's story. When he's done, the interviewer asks to be made a vampire. Louis thinks this is a terrible idea, so he bites him and leaves him for dead. But naturally, the interviewer doesn't die. When he wakes up, he goes through the tapes and finds a detailed description of where Lestat lives. The boy packs up and goes off to meet yet another vampire."/>
    <!-- The Modal -->
 <div id="myModal5" class="modal5">
   <span class="close5">&times;</span>
   <img class="modal-content5" id="img06">
   <div id="caption5"></div>
 </div>
 
 <h2 class="h1">Our famous horror authors</h2>
 
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
                                     <img src="images/sk.jpg" alt="Stephen King">
                                 </div>
                                <div class="name-profession0">
                                    <span class="name0">Stephen King</span>
                                    <span class="profession0">American author</span>
                                </div> 
                                <div class="quote-profession0">
                                 <span class="quote0"><blockquote><i>“Monsters are real, and ghosts are real too. They live inside us.”</i></blockquote></span>
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
                                     <img src="images/dean.jpg" alt="Dean Koontz">
                                 </div>
                                <div class="name-profession0">
                                    <span class="name0">Dean Koontz</span>
                                    <span class="profession0">American author</span>
                                </div> 
                                <div class="quote-profession0">
                                 <span class="quote0"><blockquote><i>“Humanity is a parade of fools, and I am at the front of it, twirling a baton.”</i></blockquote></span>
                                </div>
                             </div>
                         </div>
                 </div>
                 </section>
                  <div class="content">
                     <h3>1945-till date</h3>
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
                                     <img src="images/clive.jpeg" alt="Clive Barker">
                                 </div>
                                <div class="name-profession0">
                                    <span class="name0">Clive Barker</span>
                                    <span class="profession0">English playwright</span>
                                </div> 
                                <div class="quote-profession0">
                                 <span class="quote0"><blockquote><i>“Everybody is a book of blood; wherever we're opened, we're red.”</i></blockquote></span>
                                </div>
                             </div>
                         </div>
                 </div>
                 </section>
                  <div class="content">
                     <h3>1952-till date</h3>
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
                                     <img src="images/pete1.jpg" alt="Peter Straub ">
                                 </div>
                                <div class="name-profession0">
                                    <span class="name0">Peter Straub</span>
                                    <span class="profession0">American author</span>
                                </div> 
                                <div class="quote-profession0">
                                 <span class="quote0"><blockquote><i>“Intellectual labor is a common technique for the avoidance of thinking.”</i></blockquote></span>
                                </div>
                             </div>
                         </div>
                     </div>
                 </section>
                  <div class="content">
                     <h3>1943-till date</h3>
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
                                    <img src="images/bam.jpeg" alt="Bram Stoker">
                                 </div>
                 
                             <div class="name-profession0">
                                <span class="name0">Bram Stoker</span>
                                <span class="profession0">Irish author</span>
                            </div> 
                 
                            <div class="quote-profession0">
                             <span class="quote0"><blockquote><i>“There are darknesses in life and there are lights, and you are one of the lights.”</i></blockquote></span>
                            </div>
                           </div>
                        </div>
                    </div>
                 </section>
                  <div class="content">
                     <h3>1847-1912</h3>
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
                                    <img src="images/shelley.jpg" alt="Mary Wollstonecraft Shelley">
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
                     <h3>1797-1857</h3>
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
                                    <img src="images/rice.jpg" alt="Anne Rice">
                                 </div>
                 
                             <div class="name-profession0">
                                <span class="name0">Anne Rice</span>
                                <span class="profession0">English author</span>
                            </div> 
                 
                            <div class="quote-profession0">
                             <span class="quote0"><blockquote><i>"None of us really changes over time. We only become more fully what we are.”</i></blockquote></span>
                            </div>
                           </div>
                        </div>
                    </div>
                 </section>
                  <div class="content">
                     <h3>1941-2021</h3>
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
                                    <img src="images/camp.jpg" alt="Ramsey Campbell">
                                 </div>
                 
                             <div class="name-profession0">
                                <span class="name0">Ramsey Campbell</span>
                                <span class="profession0">English author</span>
                            </div> 
                 
                            <div class="quote-profession0">
                             <span class="quote0"><blockquote><i>“One way to avoid what has already been done is to be true to yourself.”</i></blockquote></span>
                            </div>
                           </div>
                        </div>
                    </div>
                 </section>
                  <div class="content">
                     <h3>1946-till date</h3>
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
                                    <img src="images/bradbury.jpg" alt="Ray Bradbury">
                                 </div>
                 
                             <div class="name-profession0">
                                <span class="name0">Ray Bradbury</span>
                                <span class="profession0">American author</span>
                            </div> 
 
                             <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“Stuff your eyes with wonder, he said, live as if you'd drop dead in ten seconds.”</i></blockquote></span>
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
                                    <img src="images/shirley.jpg" alt="Shirley Jackson">
                                 </div>
                 
                             <div class="name-profession0">
                                <span class="name0">Shirley Jackson </span>
                                <span class="profession0">American writer</span>
                            </div> 
                 
                            <div class="quote-profession0">
                             <span class="quote0"><blockquote><i>“No live orgasm can continue for long to exist sanely under any conditions.”</i></blockquote></span>
                            </div>
                           </div>
                        </div>
                    </div>
                 </section>
                  <div class="content">
                     <h3>1916-1965</h3>
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
                                    <img src="images/lovecraft.jpg" alt="H.P. Lovecraft">
                                 </div>
                 
                             <div class="name-profession0">
                                <span class="name0">H.P. Lovecraft</span>
                                <span class="profession0">American writer</span>
                            </div> 
                 
                            <div class="quote-profession0">
                             <span class="quote0"><blockquote><i>“Almost nobody dances sober, unless they happen to be insane.”</i></blockquote></span>
                            </div>
                           </div>
                        </div>
                    </div>
                 </section>
                  <div class="content">
                     <h3>1890-1937</h3>
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
                                    <img src="images/stine.jpg" alt="R.L. Stine">
                                 </div>
                 
                             <div class="name-profession0">
                                <span class="name0">R.L.Stine</span>
                                <span class="profession0">American novelist</span>
                            </div> 
                 
                            <div class="quote-profession0">
                             <span class="quote0"><blockquote><i>“Sometimes it helps to scold yourself, to give yourself advice.”</i></blockquote></span>
                            </div>
                           </div>
                        </div>
                    </div>
                 </section>
                  <div class="content">
                     <h3>1943-till date</h3>
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
             <a href="#"> <i class="fas fa-arrow-right"></i> Horror </a>
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
 <script src="javascript/style9.js"></script>
 
 
 </body>
 </html>
 <?php
}
?>