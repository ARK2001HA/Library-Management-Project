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
    <title>Comedy - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/comedy.css">
    
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
        <p>Don't have an account ? <a href="signin.php">Create one</a></p>
    </form>

</div>

<h1>Welcome to the World of Comedy</h1>

<div class="container" id="container">
    <div class="book-content">
        <div class="book">
            <div class="face-front" id="portada"></div>
            <div class="face-back" id="trsf">
                <h1>Summary- Born A Crime</h1>
                <p>In Born a Crime: Stories from a South African Childhood, comedian and television personality Trevor Noah gives a heartfelt and funny recounting of his experiences growing up in South Africa as an oppressed person. Stories of Noah’s life are interspersed with insights into the South Africa’s culture, systems, and history. Noah was born in 1984 to a single mother, Patricia, during the time of racial segregation known as apartheid. Patricia was a strong, driven woman who paid little heed to the racist laws that oppressed her. Noah’s father, Robert, agreed to give Patricia a child during a time when sexual relationships between black and white South Africans were illegal. Robert, a Swiss immigrant, never supported segregation and did what he could to undermine apartheid. Because it was dangerous for Patricia and Robert to be seen with their mixed-race child, Noah recalls sometimes being momentarily abandoned by his parents in public settings. 
                <br>
                Dutch colonizers came to South Africa in the 1600s and used slave labor
                </p>    
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>Summary- Born A Crime</h1>
                <p>to run their farms on stolen land. The white South Africans called Afrikaners are descended from these colonizers. Black South Africans, from tribes including the Zulu, Xhosa, and Sotho tribes, were subjugated under apartheid law until the mid-1990s. A third racial group emerged from the intermingling of the Black and white South Africans: mixed-race or “colored.” Both during apartheid and after its dissolution, mixed-race South Africans were the most marginalized and disenfranchised people. Noah often felt defined by what he wasn’t: not light enough to be labeled as white and not dark enough to be fully accepted into Black culture.
                <br>
                Apartheid ended in 1994, but Noah’s struggles as a mixed-race child in South Africa continued. It was often hard for Noah to determine which groups would accept him. Patricia had always encouraged her son to read and think independently; she valued education and made sure that her son spoke multiple languages. Of the eleven official languages
                </p>
            </div>
            <div class="face-back">
                <h1>Summary- Born A Crime</h1>
                <p>in South Africa, Noah could speak Zulu, Tsonga, English, and Afrikaans. This skill allowed him to move among different racial and cultural groups at school. Though Noah felt out of place in many social settings, his ability to talk and empathize with many different types of people served him well throughout his life. Even at a young age, Noah understood that the bullying he experienced from his mixed-race peers was likely a result of the self-hatred all mixed-race South Africans had been taught. Noah was a mischievous child, but Patricia believed in tempering her punishments with assurances to her son that she held him accountable because she loved him. Patricia knew that the world would not always be kind and generous to Noah, and she wanted to prepare him well.
                <br>
                During his high school years, Noah acquired a small bootleg CD business from a friend. Noah soon found that he could make more money working with his friend Sizwe, who was from the poorer, crowded                
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>Summary- Born A Crime</h1>
                <p>
                Johannesburg township called Alexandra—known to most residents as Alex. After graduation Noah moved to Alex to expand his profits, with Sizwe’s help. Sizwe recognized that Noah had talent as a live DJ, and the pair formed a performance group. Noah and his group sold bootleg and mixed CDs, dealt in stolen goods, performed at parties and concerts, and did their best to avoid confrontations with local law enforcement. Noah was already familiar with the South African police. Patricia received no help from the local police when she tried to file charges against abusive husband. Noah was arrested for shoplifting, on suspicion of carrying a weapon, and for driving an unregistered vehicle. One arrest kept Noah in jail for several days, and Patricia had to pay for his lawyer. Despite his dealings with law enforcement, Noah could see his own privilege in comparison to many of his peers. Patricia had worked hard to make sure her son had the ability to make a life for himself. 
                </p>
            </div>
            <div class="face-back">
                <h1>Summary- Born A Crime</h1>
                <p>The men in Noah’s life taught him little about how to interact with women. Robert was a distant but generally pleasant presence. Patricia’s father, Temperance Noah, was an unpredictable figure. Later, Noah would learn that his grandfather had bipolar disorder and would often beat his wife, Frances. Patricia experienced abuse in her marriage as well. Noah’s stepfather, Abel, became acquainted with Patricia and her young son during their many visits to the automotive shop where Abel worked on their run-down car. After Abel and Patricia married, he bought the shop. Patricia was forced to sell her home to keep the business running, and the family spent a stressful year living in the shop warehouse. Abel often came home drunk, and he began beating his wife. Once Abel had sons of his own, Noah’s half-brothers Andrew and Isaac, Abel’s hostility toward Patricia’s oldest son grew. When Patricia learned that her violent husband had bought a gun, she helped Noah move out on his own. 
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>About Born A Crime</h1>
                <p>Born a Crime is the story of a mischievous young boy who grows into a restless young man as he struggles to find himself in a world where he was never supposed to exist. It is also the story of that young man’s relationship with his fearless, rebellious, and fervently religious mother—his teammate, a woman determined to save her son from the cycle of poverty, violence, and abuse that would ultimately threaten her own life.
                <br>
                The stories collected here are by turns hilarious, dramatic, and deeply affecting. Whether subsisting on caterpillars for dinner during hard times, being thrown from a moving car during an attempted kidnapping, or just trying to survive the lifeand- death pitfalls of dating in high school, Trevor illuminates his curious world with an incisive wit and unflinching honesty. His stories weave together to form a moving and searingly funny portrait of a boy making his way through a damaged world in a dangerous time, armed only with a keen sense of humor and a mother’s unconventional, unconditional love.
                </p>
            </div>
            <div class="face-back" id="portada-back">
            </div>
        </div>
    </div>
</div>
<h2 class="h1">Our precious collections</h2>

<img id="myImg" src="images/blogcobook(1)new.jpg" alt="A Confederacy of Dunces presents the misadventures of Ignatius J. Reilly, a modern Don Quixote. Ignatius is a behemoth of fat and flatulence, with a gargantuan frame, bushy black moustache, green hunting cap, and blue and yellow eyes that look down on the modern era--and particularly on anything commerical. He views materialistic comforts as offenses against taste and decency, things that demonstrate a lack of theology and geometry. His troubles (or fateful fortunes) begin in New Orleans when an inept patrolman suspects him of being a pervert and attempts an arrest. Ignatius is able to avoid being taken into custody, but as people help him, a kind grandfather who stood up
 for him is taken to jail. Fleeing the scene, Ignatius and his mother head to Bourbon Street and stop off in the Night of Joy, a bar and strip club, where they receive terrible service. Mrs. Reilly throws back drink after drink, while Ignatius tells the tale of his awful trip to Baton Rouge (the only time he has left New Orleans). Meanwhile, at the police precinct, Claude Robichaux (the old man who helped Ignatius) has been placed on a bench with a young, black man wearing space-age sunglasses. This man is Burma Jones, and he has been falsely accused of stealing cashew nuts. When the police sergeant learns that Patrolman Mancuso has arrested a grandfather and was trying to apprehend Ignatius (a boy simply waiting for his mother),
 the sergeant punishes the inept officer: he must wear a new, ridiculous costume each day. Having been thrown out of the Night of Joy by its tyrannical proprietress, Lana Lee, Ignatius and his mother return to their Plymouth. A wet spot in the road (combined with the distraction caused by Ignatius's incessant complaints from the back seat) causes Mrs. Reilly to crash into the side of a building, bringing a balcony crashing down on the car. As a result of the car accident, Mrs. Reilly owes more than a thousand dollars for the damage. This debt, plus the payment that she must make each month for Ignatius's trumpet, is far more than she can afford, and she fears that she will be locked up for defaulting. Though Ignatius seems indifferent
 to the situation, Mrs. Reilly forces him to leave the comforts of his bedroom to enter the working world. gnaitus obtains a filing position at Levy Pants, a job that he finds surprisingly agreeable. Ignatius introduces a number of innovations to the office, such as arriving to work an hour late (thereby ensuring he is refreshed when he gets there) and throwing the filing in the garbage (creating more space in the filing cabinet and avoiding a fire hazard). He is quite fond of his coworker, Miss Trixie, a senile, old assistant accountant who wants nothing more than to retire from Levy Pants. Ignatius is so pleased with his new employment that he dedicates himself to raising the firm to the next level of success. According to Ignatius,
 the first thing the company needs to do is be more authoritarian with its distributors. Toward this end, he writes a letter on behalf of Mr. Levy (without his knowledge or permission) to a Levy Pants distributor, Abelman's Dry Goods, that has complained about a defective batch of pants. Ignatius's letter to Mr. Abelman calls him a mongoloid and threatens to lash him should he bother Levy Pants again. The most important aspect of the job is that it provides the means for avenging Myrna Minkoff's latest effrontery. Myrna is an ex-girlfriend from college with whom he corresponds regularly. In her letters, Myrna accuses him of paranoid delusions, which she attributes to the total failure of his life. Moreover, she often suggests that he 
 has homosexual tendencies. In efforts to make Myrna jealous, Ignatius plans to lead a social movement of historic proportions. Specifically, he convinces the Levy Pants factory workers to participate in a demonstration against the Levy Pants office manager, Mr. Gonzalez, demanding higher wages. Ignatius titles the protest the Crusade for Moorish Dignity, and he leads the workers into the office as they sing spirituals. The demonstration quickly falls apart, however, when news spreads among the workers that Ignatius may have a police record, and when Ignatius orders the workers to attack Mr. Gonzalez without even giving him the opportunity to respond to the demand for higher wages (this tactic they find very unfair and a confirmation
 that Ignatius probably is a criminal). Rather than achieving a victory for social justice that he can slap in Myrna's face, he ends up unemployed. Mrs. Reilly insists that Ignatius enter a new job search. He soon gets employment as a hot dog vendor for Paradise Vendors, Incorporated, a job which his mother finds incredibly humiliating. Ignatius brings in few profits as a vendor--he spends more time eating than selling the products. In an attempt to bring in more revenue, Ignatius's employer, Mr. Clyde, reassigns him to the French Quarter (where there are more tourists) and has Ignatius dress in a pirate costume. One day on his hot dog route, Ignatius runs into Dorian Greene, a flamboyant homosexual who throws extravagant counterculture  
 parties. In talking to Dorian, Ignatius develops a new plan for social activism. He believes that if homosexuals infiltrate the armed forces and highest offices of countries around the world, war can be replaced with orgies and world peace can be achieved. He proposes that they form a political party and start running candidates immediately, including a kickoff rally. Dorian agrees to host the event. Later, Ignatius runs into George, an oily-haired, pimply teen with flamenco boots. Lana Lee from the Night of Joy is running a high school pornography racket on the side, and George is her delivery boy, selling her product to orphans around the city. Each day at one o'clock, George picks up packages containing the pornography, and he delivers 
 them to the orphans at three o'clock. He thus needs a place to store the packages for the two hours between pickup and delivery, so he offers Ignatius a couple of dollars per day in exchange for renting out the bun compartment in his hot dog cart as storage space. Ignatius agrees but then grabs one of the packages and tears it open to see what is inside. He finds a picture of a nude woman (Lana Lee) on a desk beside a globe, doing something suggestive with a piece of chalk. The woman's face is covered by the book she is reading, Boethius's The Consolation of Philosophy (Ignatius' favorite work of literature)--and he immediately commends the woman's taste and brilliance. Seeing that an address is written on the package, he decides to 
 investigate in order to identify this brilliant woman. Thus Ignatius arrives at the address written on the package and is dismayed to learn that it is the Night of Joy. Outside the bar, his attention falls on a poster advertising a show that the Night of Joy will be presenting, starring Harlett O'Hara (who is really Darlene, an aspiring exotic dancer who works at the bar) and her pet cockatoo, which Darlene has trained to yank at rings attached to her dress, thus ripping off her clothing. Seeing Ignatius on the curb outside her establishment and fearing that his presence will somehow ruin her investment, Lana Lee sends Jones (whom she has hired as a porter at well below minimum wage through threats of reporting him to the police for vagrancy)
 to get rid of Ignatius. Hoping to locate the sexy scholar pictured in the photograph, Ignatius asks Jones whether the Night of Joy employs a woman who is given to reading. Jones tells him that Harlett O'Hara is the woman he is looking for. Throughout the novel, Jones has been complaining of the abuse he is suffering at Lana's hands, and knowing how much she disdains the fat kook in the green hunting cap, he sees this as a perfect opportunity for sabotage. He informs Ignatius that Harlett O'Hara's routine will be opening in a few days, and he invites him back for a ringside table at the show. A few days later, dressed in his Paradise Vendors pirate suit and with a speech prepared, Ignatius heads to Dorian Greene's residence for the kickoff rally
 for his new degenerate political party. When he arrives at the party, however, he finds that the attendees are more interested in debauchery than in the critical issues of the day or in devising a plan for infiltrating the world's armed forces. When Ignatius shuts off the party's music and attempts to address the crowd, he is met with cries of disapproval and a barrage of verbal insults. The music resumes, the partygoers ignore Ignatius, and he finds himself under attack by three lesbians who rent an apartment in Dorian's building. Ignatius is promptly removed by force. As he leaves, a man in a silk suit and homburg hat emerges from the shadows and follows him. Ignatius's bad luck continues. He goes to the Night of Joy for Harlett O'Hara's 
 opening performance but learns that Miss O'Hara is merely Darlene. When he bellows in disapproval, Darlene's bird launches toward his head and latches onto the gold hoop earring that he is wearing. Ignatius jumps up, lashes his arms wildly at the bird, and in the process knocks over tables, smashes a champagne bottle, and ruins the show. Stumbling out of the bar past Jones, he steps into the path of an oncoming bus. Ignatius faints, and Jones pulls him out of the way at the last second. The man in the silk suit emerges and takes control of the situation. When he asks Lana Lee if he can use her phone, she propositions him and shows him one of her nude pictures. The man announces that he is the undercover officer Mancuso, and he arrests her 
 for possession of pornography. Just then, the three lesbians from Dorian's party arrive and assault the patrolman. Ignatius awakes in the hospital and finds that his mother is quite humiliated by the top story in the day's newspaper. As the article and photos reveal, after the bird attack on Ignatius, Officer Mancuso had arrested Lana Lee for soliciting and for possession of and posing for pornography. Additionally, he arrested the three lesbians for assault. Jones had then taken Mancuso to the cabinet under the bar, where they found packages of pornography and a list of names, thus cracking the most active high school pornography racket in the city. As a result of the chaos at the Night of Joy, Darlene and Jones find themselves out of work. 
 Darlene, however, gets an offer from a bar owner who is attracted by all the publicity she got. After returning from the hospital, Ignatius and Mrs. Reilly find that Mr. Levy is waiting outside their house. Mr. Abelman has threatened a libel suit for $500,000 due to the letter that Ignatius had written while still employed at Levy Pants. When Mr. Levy asks if he is the author of the letter, Ignatius denies any responsibility. Instead, he pins blame on Miss Trixie, who hates Levy Pants for the company's refusal to retire her. When Mr. Levy goes back to Miss Trixie and confronts her with Ignatius's accusation, she confesses (she remembers how nice Mr. Reilly had always been to her, does not think he would lie, and notes that there is plenty she
 cannot remember anyway). As a result, Ignatius's lie is able to save Mr. Levy from a libel suit, himself from prosecution for forgery, and Miss Trixie--giving her the retirement she has desired for so long. Unaware of Miss Trixie's confession and fearing that Ignatius has gotten himself into serious trouble with this letter to Abelman, Mrs. Reilly decides to have Ignatius committed at Charity Hospital. Figuring out what his mother plans for him, Ignatius decides to attempt an escape. Just then, Myrna Minkoff arrives on his doorstep. Fearing that he needed more help than just a letter, Myrna had driven all night to get to Ignatius. Telling her that he has finally accepted his problems and is ready to do something with his life, Ignatius 
 convinces Myrna to help him flee immediately. They gather his belongings, jump into the car and drive away, just as an ambulance with the words Charity Hospital on the side drives up." />
   <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<img id="myImg1" src="images/blogcobook(2)new.jpg" alt="Me Talk Pretty One Day is a collection of essays about the everyday life of the author, David Sedaris. The book’s first essays detail his upbringing in North Carolina. As a child, he lives with his father, mother, and sisters. The opening essay recounts the time he’s forced to see a speech therapist in the fifth grade. Every Thursday, Miss Samson (the therapist) takes him out of class and brings him to her office, where she tries to train him to banish the lisp he has when saying the letter s. Sedaris hates this, partially because he’s one of the few boys in school who needs speech therapy. This, he believes, aligns him with a group of children who are unpopular, and he senses that 
 the teachers might as well refer to them as the “future homosexuals of America.” Thinking this way, he wonders if his teachers are also capable of identifying the future alcoholics or “depressives” in their classrooms. Defying Miss Samson, he starts avoiding all s-words, using elaborate synonyms. A strict woman, Miss Samson dislikes this, but nothing she does gets Sedaris to stop. At the end of the year, she opens up to him and speaks emotionally about her failure as a speech therapist and about her depressing life. Seeing this, Sedaris tells her that he’s sorry, and she starts laughing, triumphantly informing him that she tricked him into using an s. At another point in his childhood—as outlined in “Giant Dreams, Midget Abilities”—Sedaris goes
 with his family to a jazz concert. His father, Lou, is obsessed with jazz, always forcing him and his sisters to listen to his record collection. In another life, Sedaris thinks, his father would have made a good musician. Because he never pursued this dream, though, he decides after the jazz concert that Sedaris and his sisters should start a family band. None of them are interested, but Lou signs them up for lessons. Forced to learn the guitar, Sedaris finds himself sitting in a small room with an instructor named Mr. Mancini. Mr. Mancini is a little person, though Sedaris refers to him using the pejorative, politically incorrect term “midget.” Sedaris makes no effort to learn guitar, finding himself more fascinated by Mr. Mancini than by the instrument.
 When Mr. Mancini advises him to give his guitar a name, he decides on Oliver, but Mancini says it has to be a woman’s name. Eventually, he decides to show Mr. Mancini a routine he has developed on his own, which involves singing commercial jingles he’s heard on TV. In response, Mr. Mancini thinks Sedaris is coming on to him and asks him to leave, saying he doesn’t “swing that way.” After this, Sedaris tells his father that Mr. Mancini said his fingers are too small to play guitar, and he never returns for another lesson. Sedaris’s relationship with his father is a thread that runs throughout Me Talk Pretty One Day, as Sedaris outlines his father’s idiosyncrasies in essays like “Genetic Engineering,” in which he describes his father’s obsession with mathematics
 and technology. As an engineer at IBM, his father often speaks at length about the future of computers or about other topics that bore Sedaris. He even pursues these conversations with Sedaris when they’re on vacation in a beach town, where his lecture about how estimating the number of grains of sand in the world attracts nearby fishermen who ironically ask him to calculate the cost of land they had to give up when rich families came to the beach town and turned it into a vacation destination. Failing to register their facetious tone, Lou diligently sets to work trying to answer the question. Later, Sedaris goes to college and decides to be an art major because he wants to be as artistically talented as his older sister Gretchen. However, he shows little talent,
 so he transfers to another school and tries a different discipline within the arts. When this doesn’t prove successful, he drops out and moves into an apartment in Raleigh, where he develops a taste for meth and conceptual art. Falling in with a group of experimental artists, he scoffs at art that isn’t avant-garde, claiming to be anti-establishment when, in reality, he and his friends are mostly interested in taking drugs and making things that even they don’t understand. Surprisingly, his work is accepted by a local museum, but this embarrasses him because his friends resent his success, claiming he sold out. As time passes, he develops an interest in bizarre performance art. During one of his final shows, an audience member heckles him, poking fun at the 
 loftiness of his absurd display. Sedaris realizes the voice belongs to his father. By the end of the show, everyone thinks his father is part of the performance, and they compliment him on his wit. This frustrates Sedaris, and when he later runs out of drugs because his dealer goes to rehab, he gives up performance art. Lou Sedaris has unique relationships with his children, always holding them to high standards and getting disappointed when they show no interest in the things he values. In “You Can’t Kill The Rooster,” Sedaris describes the beautiful relationship his father has with Sedaris’s youngest brother, who calls himself The Rooster. Lou has high hopes for The Rooster because none of his other children have fulfilled his dreams. The Rooster, however, has no
 intention of following his father’s plans, and his personality is in direct opposition to Lou’s. And yet, this doesn’t bother Lou; when The Rooster calls his father “bitch,” for instance, the old man simply smiles. Observing this relationship, Sedaris and his sisters are baffled that the two men get along so well, but Sedaris recognizes a tenderness running between them—a tenderness that transcends the fact that The Rooster doesn’t live the life Lou originally wanted for him. In terms of accomplishments, Sedaris interrogates his own working life in “Learning Curve,” in which he’s hired as a writing professor despite his lack of experience. At first, he focuses on nothing but what he’ll wear, but he soon realizes that he also needs to think about how to fill up class 
 time, so he starts watching soap operas with the students under the pretense that this will help them learn to write. When an older student furiously asks why he’s qualified to critique one of her essays, he finds himself at a loss for words. After a moment, though, he realizes what he needs to say: “I am the only one who is paid to be in this room.” This seems to work, but then the student asks how much he earns, and when he answers, the students unite with each other for the first time all semester, loudly laughing in unison. Later in life, Sedaris moves to New York City and lives in a small apartment. He strolls through the city in the evenings and peers into the windows of townhouses, wishing he could live in such beautiful buildings. When he gets hired as a personal
 assistant to a rich woman named Valencia, he’s delighted that he can spend several days a week in her house, but the job soon gets old because Valencia annoys him by pretending to be poor. She haggles over prices and tries to underpay people who need the money more than she does. In keeping with this, Sedaris’s wage is much less than it should be, but he puts up with her because he doesn’t feel like finding a new job. When a group of movers comes to move some furniture from her townhouse to a friend’s apartment, though, they offer Sedaris a job, and he accepts it. Riding away with them in their truck, he realizes that this is where he belongs—in a crowded vehicle with kind people, not in a beautiful townhouse with meanspirited rich people. While living in New York City, 
 Sedaris meets Hugh, a man who lives in a nice apartment and owns a small house in Normandy, France. This intrigues Sedaris, who starts dating him and eventually visits France for the first time without knowing the language. On that first visit—outlined in “See You Again Yesterday”—he only knows how to say “bottleneck,” and he says it whenever he meets somebody. The next time, though, he tries to acquire a few more words, and his process continues on each subsequent visit. At this point in the essay collection, Sedaris devotes himself to chronicling what it’s like to live in France as an American, especially when he and Hugh move to Paris for several years. During this time, he struggles to learn French under the tutelage of a frightening and rude teacher, walks around the
 city listening to a French audiobook for medical doctors trying to learn clinical phrases, considers the way French people view Americans, and tries unsuccessfully to remember which French words are masculine and which are feminine—a practice he finds frustrating and ridiculous. Sedaris pays close attention to the various assumptions and stereotypes that come along with national identity, especially in “Picka Pocketoni,” in which an American couple riding the metro in Paris mistakes Sedaris for a French pickpocket and says rude things about him because they assume he can’t speak English. This makes Sedaris hate them, though he also recognizes that part of his anger has to do with his own pretentiousness. This realization only makes him hate them even more. In addition to 
 examining cultural identity, Sedaris thinks about the ways in which intelligence impacts his sense of self. In the essays “21 Down” and “Smart Guy,” he reveals his fear that he’s unintelligent, making it clear that he wants to be seen as a genius who can easily complete crossword puzzles and has a high IQ. Unfortunately for him, though, he isn’t particularly gifted at crossword puzzles, and when he and Hugh take an IQ test, he discovers that he’s “practically an idiot.” Hugh, on the other hand, has an incredibly high IQ, a fact that makes Sedaris feel even worse about himself. Trying to console him, Hugh tells him not to take his score to heart, adding that Sedaris is perfectly good at a number of things, including vacuuming and naming stuffed animals. There might be other
 things Sedaris is good at, Hugh offers, saying that he needs time to think of what, exactly, these things are. All in all, Me Talk Pretty One Day sheds light on the little details of everyday life, highlighting strange encounters Sedaris has had in a number of different contexts. Accordingly, there are too many small interactions laid out in the book to mention here. What’s important to grasp, though, is that Sedaris is interested in exposing not only the absurdities that people overlook in daily life, but also the humor that can be found in even the most mundane situations. To drive this point home, he ends the collection with a story about his father’s approach to storing food. This topic might not sound all that interesting, but Sedaris manages to emphasize the humor of 
 his father’s strange behavior. When Lou visits him in Paris, he explains that he found a small brown object in his suitcase and tried to eat it. This is because Lou never wastes food and has no problem eating things that look spoiled. Placing the object in his mouth, he chewed it for five minutes before realizing it was a disintegrated piece of his hat. Hearing this, Sedaris knows his father will now store the hat with the rest of his rotting food, saving it for a time when he has nothing else to eat. And instead of criticizing Lou for this, Sedaris simply appreciates the humor inherent in his beloved father’s odd behavior." />
   <!-- The Modal -->
<div id="myModal1" class="modal1">
  <span class="close1">&times;</span>
  <img class="modal-content1" id="img02">
  <div id="caption1"></div>
</div>
<img id="myImg2" src="images/blogcobook(3)new.jpg" alt="The popularity of the memoir format combined with a cultural insistence on elevating the banal into the sublime often leaves the reader unfulfilled and only mildly interested, as though they just skimmed a series of lunchtime Google chats. WYD? Tuna salad for lunch. The day is going by so fast. I can’t believe I’m so busy. Guess what funny thing just happened? Half of the book is composed of the most popular blog posts, such as “The God of Cake”—still hilarious after numerous readings—in which Brosh acts a stone-cold fool while scheming to eat her grandmother’s birthday cake, and “Dogs Don’t Understand Basic Concepts Like Moving,” where her anxious canines vomit, cry, and crawl their way into a new house. The other half
 is made up of new pieces that come off like a co-worker retelling jokes heard the night before at a comedy show. Maybe it was funny, but you probably had to be there to really appreciate it. “Dinosaur (the Goose Story)” is a prime example. In the heat of the moment, a goose walking into the house, running and chasing the inhabitants, probably makes for a bit some excitement. On the page, even with the adorably sad-faced shark that she uses as her alter ego, it is less so. This is despite photographs documenting the event, which she included because she says “While all of this was happening, I knew that it was probably going to be a story I’d write down someday. I also knew that the people reading it would probably feel some doubt to its veracity.” Hyperbole shares some 
 commonalities with graphic memoirs such as Marjane Satrapi’s Persepolis and Alison Bechdel’s Fun Home. Unlike those memoirs, where government repression (Satrapi) and sexual and gender identity (Bechdel) were the overriding themes that colored the authors’ everyday occurrences, Brosh’s mental illness makes up only two of the 16 chapters. The depth of those two chapters compared with the relatively frivolous narratives in the rest of the book makes them feel as though they came from an entirely different memoir. The depression entries (“Depression Part One,” “Depression Part Two”) are straightforward and poignant, but Brosh seems to undercut them later in “Identity Part One” and “Identity Part Two,” where she journeys into her subconscious—currently occupied by a muscular security
 guard named Eric—and reveals she’s “full of shit.” Is it a glib confession? A true analysis of personality? A manifestation of her depression? Or is just what she said it is? Should memoirists be reliable narrators? Or is the lack of reliability what makes them so compelling? Pieces in Hyperbole evince the complexity of our desires. We want to be seen as good people, but either we lack the motivation to actually do good things or we do it because we desire recognition. Objectively, it makes for an interesting meditation on what has become of social media culture: the constant trumpeting of the latest finished marathon, the newest baby, the night spent in VIP breathing the same air as a celebrity, the afternoon spent baking gourmet cookies or volunteering to feed the homeless.
 Everyone wants a like or a retweet of actions that are, in the grand scheme of things, pretty basic and just part of life. The documentation of all this unremarkable activity bleeds into an ambient awareness that people are doing things, but all of the events are broadcast with the same level of importance—that is to say, none at all. Brosh’s experiences with depression, which are sincerely touching and present challenges to her life with tangible physical and emotional implications, are placed alongside how she accidentally was introduced to hot sauce, or how she and her sibling tormented their parents with a toy parrot. The depression pieces are worth further exploration because it is the rare topic in the book that is “all the things”: honest, funny, a little sad, hopeful, 
 imperfect, and ultimately unfinished as part of her ongoing lived narrative." />
   <!-- The Modal -->
<div id="myModal2" class="modal2">
  <span class="close2">&times;</span>
  <img class="modal-content2" id="img03">
  <div id="caption2"></div>
</div>
<img id="myImg3" src="images/blogcobook(4).jpg" alt="The super short version of The Hitchhiker's Guide to the Galaxy is, well, weird stuff happens to Arthur Dent, regular Earth-person. But the real joy of this book is in the weird stuff; and there's so much of it that we can't even capture it all. The longer short version starts when Arthur's house gets torn down so a road can be built—and his day goes downhill from there. His friend Ford Prefect is an alien. That's actually the good news of the day, because it's Ford who can save both of them when the alien Vogons come to destroy the Earth to make way for some sort of space road. Ford and Arthur hitch a ride with the Vogon ship's cooks. Unfortunately, the Vogons don't like hitchhikers, so Arthur and Ford get thrown out of the
 spaceship to die in the cold void of interstellar space, where not even Starbucks exists. Meanwhile, Ford's semi-cousin Zaphod Beeblebrox and his human companion Trillian steal the Heart of Gold spaceship, which has an amazing engine that can do all sorts of improbable things, such as get through LA without dealing with traffic. Also on the spaceship is a very depressed robot named Marvin. When Zaphod and Marvin use the Improbability Drive, they end up picking up Ford and Arthur on their way to the mythical planet of Magrathea. Magrathea was a planet that made other planets for rich people (the cosmic 1%), but it disappeared a while ago. Zaphod isn't even totally sure why he wants to find it, but that's because his brain doesn't work properly. When he does find the planet, it 
 seems dead—but it isn't. Zaphod, Ford, and Trillian go exploring inside the planet, while Arthur and Marvin are left on the surface. It's then that this dude from Magrathea named Slartibartfast finds Arthur and tells him the truth about Earth. So, get this: Earth was actually a giant computer created to find the question that would give meaning to life. The people who ordered Earth already have the answer to the meaning of life, and that answer is: 42. The only trouble is that they're not sure what the question is that 42 answers. But they're pretty sure they can get it by chopping up Arthur's brain, since he was a part of the Earth-computer, and he was there at the end. Arthur and his friends escape—even though the cops are after them after Zaphod stole the Heart of Gold—and
 decide to go get a bite to eat." />
   <!-- The Modal -->
<div id="myModal3" class="modal3">
  <span class="close3">&times;</span>
  <img class="modal-content3" id="img04">
  <div id="caption3"></div>
</div>
<img id="myImg4" src="images/blogcobook(5).jpg" alt="Jim Dixon, a junior lecturer in history at a provincial English university in the years after World War II, nears the end of his first year at the school. Dixon has not made a good impression upon the faculty and knows that his superior, the absent-minded Professor Welch, could ask him to leave at the end of term next month. Fearful of making further bad impressions or revealing his inner disgust for Welch, Dixon agrees to give the end-of-term lecture on the theme of Merrie England and to stay with the Welches the following weekend for a weekend of music and the arts. At the party, Dixon meets Welch's son Bertrand and his girlfriend Christine, who have come up to the country from London. Bertrand, an artist, seems pretentious,
 while Christine seems uptight and unattainable. Dixon escapes to the pub and returns to the Welches' later that night, where he makes a drunken pass at Margaret Peel, a friend and colleague. Margaret has been staying with the Welches as she recovers from a recent suicide attempt caused by a recent break-up. Dixon and Margaret's friendship has rapidly been moving toward something more intimate, thanks to Margaret's subtle pressure and Dixon's pity and good-natured concern for Margaret. Margaret kicks Dixon out of her room, and he falls asleep while smoking a cigarette. Dixon wakes up in the morning to find he has burned holes in his bedsheets. Afraid of further damaging his chances of keeping his job, Dixon attempts to hide the damage. Christine unexpectedly find Dixon's dilemma
 funny and agrees to help him. Dixon thinks about Christine but does not see her again until the college's Summer Ball a couple of weeks later. Margaret and Bertrand both spend the night hanging around Christine's rich uncle Gore-Urquhart, who Bertrand hopes to work for. Dixon's friend Carol Goldsmith finally convinces Dixon to make a move for Christine by revealing that she has been having an affair with Bertrand. Dixon rallies his courage and asks Christine, whom Bertrand has been ignoring, to let him take her home early. Christine agrees and explains to Dixon in the taxi how Bertrand has been mistreating her. Back at the Welches', Christine and Dixon kiss and agree to see each other in two days. When they meet again, however, they decide not to see anymore of each other because
 of their respective obligations to both Bertrand and Margaret. Dixon spends the following week planning to write his Merrie England lecture in a nostalgic way that will appeal to Professor Welch, but Welch himself keeps Dixon preoccupied with menial fact-checking for Welch's own work. On the day of Dixon's lecture, Bertrand comes to Dixon's room and accuses Dixon of seeing Christine behind his back. Bertrand tells Dixon that Dixon is wasting his time and Dixon, fed up with Bertrand's hypocrisy and condescending bossiness, gets in a fight with Bertrand. Bertrand gives Dixon a black eye and Dixon knocks him down. Shaken up and nervous, Dixon drinks quite a lot at the reception before his lecture. He is drunk when he gives the lecture, and inadvertently imitates the voices of Professor
 Welch and the college Principal in the opening segments. Dixon rounds out the lecture by expressing his contempt for the subject before he passes out. The next day, Dixon finds he has been fired, but is offered a well-paying job in London by Gore-Urquhart. The same day, Dixon meets with Catchpole, the man who supposedly inspired Margaret's suicide attempt. Catchpole reveals that Margaret faked the suicide attempt in order to gain sympathy from Dixon and Catchpole. Dixon arrives home from this meeting to receive a message from Christine, asking him to meet her at the train station before her she returns to London. Dixon arrives at the station late, but so does Christine. Christine tells Dixon that she knows of Bertrand's affair with Carol and has broken off their relationship. Dixon 
 tells Christine that he is through with Margaret. Dixon reveals the news about the job offer from Christine's uncle, Gore-Urquhart, and asks to return to London with Christine. As they walk down the street, they run into the Welch family, whom Dixon salutes with an explosive laugh of contempt." />
   <!-- The Modal -->
<div id="myModal4" class="modal4">
  <span class="close4">&times;</span>
  <img class="modal-content4" id="img05">
  <div id="caption4"></div>
</div>
<img id="myImg5" src="images/blogcobook(6)new.jpg" alt="Where’d You Go, Bernadette, published in 2012, is the second novel by Maria Semple, a former television writer who worked on shows such as Mad About You and Arrested Development. A bestseller praised by numerous critics as one of the best books of the year, Where’d You Go, Bernadette is a fast-paced comic novel with a complex narrative structure. The book follows an epistolary format, meaning the text is largely composed of letters, emails, and other found documents. The events of the novel are recounted from multiple points of view by a large cast of characters, employing a wide range of voices and formats. The novel is set in contemporary Seattle and incorporates real places and personalities both in Seattle and beyond. The novel
 tells the story of Bernadette Fox, a former architect living in Seattle with her husband, Elgin Branch, an engineer at Microsoft and presenter of a famed TED Talk on artificial intelligence, and their teenaged daughter, Bee. Bernadette, though close to Bee, has become increasingly withdrawn from everyone else, employing a “virtual assistant,” supposedly based in Delhi and named Manjula, to manage her daily life. The family lives in a former school for wayward girls, which Bernadette intended to renovate into a functional family home but which she has instead allowed to fall into ruin. Elgin, immersed in his work at Microsoft, is rarely home. Bernadette and Elgin moved to Seattle from Los Angeles 20 years earlier, after the unexpected demolition of Bernadette’s most personal project, a 
 residence called the Twenty Mile House, shortly after its completion. Embittered by this turn of events, Bernadette walked away from her career as an architect, even though she had won a MacArthur “genius grant” for her work. In Seattle, Bernadette experienced a series of miscarriages before giving birth to Bee, who was born with a heart defect and not expected to survive. Bee’s full name, Balakrishna, refers to the blue coloring she had as an infant, a consequence of her heart condition. Bee attends a small, progressive private school known as the Galer Street School, though for high school she plans to attend Choate, the prestigious east coast prep school once attended by her mother. As a reward for earning perfect grades during her years at Galer Street, Bee has chosen a family trip 
 to Antarctica, unaware of how terrifying this prospect is to her mother. Galer Street School’s lease on its current premises is set to end, and the school has launched a fundraising drive and a push to attract new, wealthier parents to the school. The central event of this drive is a “Prospective Parent Brunch (PPB),” to be held at the home of Audrey Griffin, a Galer Street parent who lives below the Branches on a steep hillside in the Queen Anne district of Seattle. Audrey, a devout Christian and a leader among the Galer Street parents, has long resented the Branches’ failure to engage with the school community, not to mention their unkempt property. Bernadette, unaware of the Prospective Parent Brunch, is angered and surprised when Audrey Griffin demands that the blackberry brambles 
 growing on the Branches’ hillside be removed. Unfortunately, the removal of the blackberries and an epic rainstorm combine to destabilize the hillside and send a mudslide crashing into the Griffins’ house during the brunch. Traumatized by her subsequent confrontation with an infuriated Audrey, Bernadette tells Manjula that there is no way she can travel to Antarctica and plans “emergency” dental surgery as a way out. Elgin, meanwhile, confused by an incident in which Bernadette tries to acquire a seasickness remedy containing a powerful antipsychotic, has become alarmed over his wife’s mental health and looks into having her committed to a private hospital. Elgin’s fears that Bernadette is out of control only grow worse when he finally learns of the mudslide. Elgin is supported in his 
 attempts to have Bernadette committed by his personal assistant, or “admin,” at Microsoft, Soo-Lin Lee-Segal. Soo-Lin, also a Galer Street parent, is initially a close friend of Audrey’s, but her loyalties shift as she begins to fall in love with Elgin. Elgin’s sense of crisis deepens further when an FBI agent informs him that Manjula, the virtual assistant with whom Bernadette has shared all the family’s information, is the creation of a Russian computer crime syndicate engaged in identity theft. Elgin stages an intervention intended to force Bernadette into treatment, but which ends with Bernadette disappearing from the house after shutting herself in the bathroom. Elgin is left racked with guilt, especially after he realizes that Bernadette had changed her mind and intended to travel
 to Antarctica. Eventually, a charge on one of Bernadette’s cards reveals that she has travelled to the Antarctic and embarked on the planned cruise alone. Elgin flies to South America to meet the returning vessel, but Bernadette has disappeared yet again. She is presumed dead, having apparently jumped or fallen from the ship after drinking heavily throughout much of the voyage. Elgin is accompanied on this fruitless trip by Soo-Lin, who is now pregnant with his child. Bee has transferred to Choate midyear at her father’s urging, to escape the turmoil engulfing her family. She receives a mysterious manila envelope containing all the documents included in the earlier part of the book, allowing her to reconstruct the events leading up to her mother’s disappearance. The documents were collected
 by Audrey Griffin, who has experienced a change of heart after finally realizing the extent of the problems plaguing her own son, Kyle, and deciding to place him in rehab. When Audrey learns of the plan to commit Bernadette, she blames herself for the mudslide and various conflicts surrounding it. She collects the documents to demonstrate her own role in events and to prove that Bernadette is not crazy. She intends to stop the intervention, but instead ends up helping Bernadette escape. Bernadette asks Audrey to ensure that Bee gets the documents. Bee, who is convinced her mother is still alive somewhere in Antarctica, feels betrayed when she learns from the documents of her father’s plan to commit her mother and of his infidelity with Soo-Lin. Hoping to reconcile with his daughter, Elgin 
 agrees to take Bee to Antarctica, unaware that she sees the trip largely as a chance to search for her mother. He also quits his job at Microsoft. On the voyage to Antarctica, Bee finally comes to accept that her mother may be dead. However, once there, Bee and Elgin realize that Bernadette may have found a way to stage yet another escape. At last, Bee finds Bernadette living at Palmer Station, a scientific research station. Bernadette heard about a construction project at the South Pole, involving the demolition and rebuilding of an existing structure, and decided to find a way to claim the project for her own. Having recovered her passion for architecture, she has been working in Antarctica, unaware that Bee never received the letter explaining her decision, and unaware of the changes that
 have overtaken her family." />
   <!-- The Modal -->
<div id="myModal5" class="modal5">
  <span class="close5">&times;</span>
  <img class="modal-content5" id="img06">
  <div id="caption5"></div>
</div>
<h2 class="h1">Our famous comedy authors</h2>

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
                                    <img src="images/coau1.jpg" alt="Tina Fey">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Tina Fey</span>
                                   <span class="profession0">American playwright</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“It will never be perfect, but perfect is overrated. Perfect is boring.”</i></blockquote></span>
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
     
              <div class="slide">
                    <div class="torch">
                        <img src="images/torch.png" alt="Torch" />
                    </div>

                <section class="section0">
                    <div class="content0">
                        <div class="card0">
                            <div class="card-content0">
                                <div class="image0">
                                    <img src="images/coau2.jpg" alt="Mindy Kaling">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Mindy Kaling</span>
                                   <span class="profession0">American writer</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“There is no sunrise so beautiful that it is worth waking me up to see it.”</i></blockquote></span>
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
                                    <img src="images/coau3.jpg" alt="Steve Martin">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Steve Martin</span>
                                   <span class="profession0">American writer</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“Some people have a way with words, and other people...oh, uh, not have way.”</i></blockquote></span>
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
                                    <img src="images/coau4.jpg" alt="Richard Ayoade">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Richard Ayoade</span>
                                   <span class="profession0">British author</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“Did you know … Werner Herzog is too self-conscious to eat Wiener Hotdogs?”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                    </div>
                </section>
                 <div class="content">
                    <h3>1977-till date</h3>
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
                                   <img src="images/coau5.jpg" alt="Carrie Fisher">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Carrie Fisher</span>
                               <span class="profession0">American writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>"Everything is negotiable. Whether or not the negotiation is easy is another thing."</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1956-2016</h3>
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
                                   <img src="images/coau6.png" alt="Seth Rogen">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Seth Rogen</span>
                               <span class="profession0">Canadian writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“It's not dying you need to be afraid of, it's never having lived in the first place.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1982-till date</h3>
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
                                   <img src="images/coau7(new).jpg" alt="Bob Odenkirk">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Bob Odenkirk</span>
                               <span class="profession0">American author</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Whenever someone says, I love writing,'I always think, 'You probably suck at writing.”</i></blockquote></span>
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
                                   <img src="images/coau8.jpg" alt="Samantha Irby">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Samantha Irby</span>
                               <span class="profession0">American writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Loving yourself is a full-time job with shitty benefits. I'm calling in sick.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1980-till date</h3>
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
                                   <img src="images/coau9.jpg" alt="Oscar Wilde">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Oscar Wilde</span>
                               <span class="profession0">Irish playwright</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>"I am so clever that sometimes I don't understand a single word of what I am saying."</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1854-1900</h3>
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
                                   <img src="images/coau10.jpg" alt="Sue Townsend">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Sue Townsende</span>
                               <span class="profession0">English writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“I have a problem. I am an intellectual, but at the same time I am not very clever.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1946-2014</h3>
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
                                    <img src="images/roau4.jpg" alt="Charles Dickens">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Charles Dickens</span>
                                   <span class="profession0">English writer</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“There is nothing in the world so irresistibly contagious as laughter and good humour.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                    </div>
                </section>
                 <div class="content">
                    <h3>1812-1870</h3>
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
                                   <img src="images/coau12(new).png" alt="Zadie Smith">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Zadie Smith</span>
                               <span class="profession0">English novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“The very reason I write is so that I might not sleepwalk through my entire life.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1975-till date</h3>
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
            <a href="#"> <i class="fas fa-arrow-right"></i> Comedy </a>
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
<script src="javascript/style9.js"></script>


</body>
</html>
<?php
}
?>