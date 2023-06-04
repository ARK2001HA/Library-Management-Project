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
    <title>Romance - ReadVerse</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/romance.css">
    
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
            <a href="likeaction.php" class="fas fa-heart"></a>
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

<h1>Welcome to the World of Romance</h1>

<div class="container" id="container">
    <div class="book-content">
        <div class="book">
            <div class="face-front" id="portada"></div>
            <div class="face-back" id="trsf">
                <h1>Summary- The Fault In Our Stars</h1>
                <p>Seventeen-year-old Hazel Grace Lancaster reluctantly attends a cancer patients' support group at her mother’s behest. Because of her cancer, she uses a portable oxygen tank to breathe properly. In one of the meetings she catches the eye of a teenage boy, and through the course of the meeting she learns the boy’s name is Augustus Waters. He's there to support their mutual friend, Isaac. Isaac had a tumor in one eye that he had removed, and now he has to have his other eye taken out as well. After the meeting ends, Augustus approaches Hazel and tells her she looks like Natalie Portman in V for Vendetta. He invites Hazel to his house to watch the movie, and while hanging out, the two discuss their experiences with cancer. Hazel reveals she has thyroid cancer that has spread to her lungs. Augustus had osteosarcoma, but he is now cancer free after having his leg amputated. Before Augustus takes Hazel home, they agree to read one another’s favorite novels. Augustus gives Hazel The Price of Dawn, and Hazel recommends An Imperial Affliction. Hazel 
                </p>    
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>Summary- The Fault In Our Stars</h1>
                <p>explains the magnificence of An Imperial Affliction: It is a novel about a girl named Anna who has cancer, and it's the only account she's read of living with cancer that matches her experience. She describes how the novel maddeningly ends midsentence, denying the reader closure about the fate of the novel’s characters. She speculates about the novel’s mysterious author, Peter Van Houten, who fled to Amsterdam after the novel was published and hasn’t been heard from since.
                <br>
                A week after Hazel and Augustus discuss the literary meaning of An Imperial Affliction, Augustus miraculously reveals he tracked down Van Houten's assistant, Lidewij, and through her he's managed to start an email correspondence with the reclusive author. He shares Van Houten's letter with Hazel, and she devises a list of questions to send Van Houten, hoping to clear up the novel’s ambiguous conclusion. Hazel is most concerned with the fate of Anna’s mother. She figures that if Anna’s mother survives her daughter’s death, then her own parents will be 
                </p>
            </div>
            <div class="face-back">
                <h1>Summary- The Fault In Our Stars</h1>
                <p>alright after Hazel dies. Van Houten eventually replies, saying he could only answer Hazel’s questions in person. He invites her to stop by if she is ever in Amsterdam. 
                <br>
                Shortly after Augustus invites Hazel on a picnic. It turns out he's planned an elaborate Dutch-themed picnic where he reveals that a charitable foundation that grants the wishes of kids with cancer has agreed to grant his: he's taking the two of them to Amsterdam to meet Van Houten. She is thrilled, but when he touches her face she feels hesitant for some reason. Over time she realizes that she likes him a lot, but she knows she'll hurt him when she dies. She compares herself to a grenade.
                <br>
                In the midst of her struggle over what to do about Augustus, Hazel suffers a serious episode in which her lungs fill with fluid and she goes to the ICU. When she is released after a period of days, she learns that Augustus never left the hospital’s waiting room. He delivers Hazel another letter from Van Houten, this one more personal and more 
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>Summary- The Fault In Our Stars</h1>
                <p>
                cryptic than the last. After reading the letter, Hazel is more determined than ever to go to Amsterdam. There is a problem though: Her parents and her team of doctors don’t think Hazel is strong enough to travel. The situation seems hopeless until one of the physicians most familiar with her case, Dr. Maria, convinces Hazel’s parents that Hazel must travel because she needs to live her life. The plans are made for Augustus, Hazel, and Hazel's mother to go to Amsterdam, but when Hazel and Augustus meet Van Houten they find that, instead of a prolific genius, he is a mean-spirited drunk who claims he cannot answer any of Hazel’s questions. The two leave Van Houten’s in utter disappointment, and accompanied by Lidewij, who feels horrified by Van Houten's behavior, they tour Anne Frank’s house. At the end of the tour, Augustus and Hazel share a romantic kiss, to the applause of spectators. 
                They head back to the hotel where they make love for the first and only time. The following day, Augustus confesses that while Hazel was in the ICU he had a body
                </p>
            </div>
            <div class="face-back">
                <h1>Summary- The Fault In Our Stars</h1>
                <p>scan which revealed his cancer has returned and spread everywhere. They return to Indianapolis, and Hazel realizes Augustus is now the grenade. As his condition worsens he is less prone to his typical charm and confidence. He becomes vulnerable and scared, but is still a beautiful boy in Hazel’s mind. As this change occurs, she ceases calling him Augustus and starts referring to him as just Gus, as his parents do. Hazel recognizes that she loves him now as much as ever. Augustus’s condition deteriorates quickly. In his final days Augustus arranges a prefuneral for himself, and Isaac and Hazel give eulogies. Hazel steals a line from Van Houten about larger and smaller infinities. She says how much she loves Augustus, and that she would not trade their short time together for anything in the world.
                <br>
                Augustus dies eight days later. Hazel is astonished to find Van Houten at the funeral. Van Houten explains that he and Gus maintained correspondence and that Augustus demanded Van Houten make up for
                </p>
            </div>
        </div>

        <div class="book">
            <div class="face-front">
                <h1>Summary- The Fault In Our Stars</h1>
                <p>ruining the trip to Amsterdam by coming to his funeral to see Hazel. Van Houten abstractly reveals the fate of Anna’s mother, but Hazel is not interested. 
                    A few days later Isaac informs Hazel that Augustus was writing something for her. He had hinted about writing a sequel to An Imperial Affliction for her, and as Hazel scrambles to locate the pages she encounters Van Houten once more. He drunkenly reveals that Anna was the name of his daughter. She died of cancer when she was eight, and An Imperial Affliction was his literary attempt at reconciling himself with her death. Hazel tells Van Houten to sober up and write another book.
                <br>
                Eventually Hazel learns that Augustus sent the pages to Van Houten because he wanted Van Houten to use the pages to compose a well-written eulogy about Hazel. Lidewij forces Van Houten to read the pages and sends them straight off to Hazel. The novel concludes with Hazel reading Augustus’s words. 
                </p>
            </div>
            <div class="face-back" id="portada-back">
            </div>
        </div>
    </div>
</div>
<h2 class="h1">Our precious collections</h2>

<img id="myImg" src="images/blogrobook(1)new.jpg" alt="Alex Claremont-Diaz is the First Son of the United States, living in the White House while he finishes his political science degree at Georgetown. Along with his sister June and their best friend Nora Holleran, the Vice-President's granddaughter and Alex's ex-girlfriend, the three form the White House Trio, a name given by media to their constant presence in the media's eyes as they party and promote the White House through different events. June, having finished her degree in journalism, continues to live in the White House to keep an eye on Alex, and they often spend their time together making fun of the media's coverage of them. Alex also has a nemesis, Prince Henry
 of Wales, who he considers to be rude and overbearing, along with not possessing a personality. They encounter each other at Prince Phillip's wedding, Henry's older brother, and Alex takes umbrage with how Henry does not pay June enough attention when they dance. Alex drunkenly confronts Henry, leading to a physical push-and-pull that leads to them destroying the wedding cake. Once home, Alex is confronted by Zahra, his mother Ellen's vice chief of staff, over the diplomatic and public relations crisis he has initiated. To rectify the situation, Alex is forced to fly to England and begin a faux friendship with Henry that can be promoted in the media. Once there, Alex meets Shaan, Henry's handler, who has him sign multiple
 non-disclosure agreements. Alex and Henry do various media events where they talk about their friendship, which Alex despises. However, he also gets to see a more authentic and kind version of Henry while interacting with children in a sick ward. They are further entangled in a broom closet during a false bomb alert, and Alex learns more about Henry's vulnerable side. Before he leaves, Alex, seeing that him and Henry are in a similar situation, gives the latter his number. They both casually begin to text one another, gradually developing a rapport. Meanwhile, Alex is keeping a close eye on his mother's forthcoming election against Jeffrey Richards, the right-wing Senator from Utah. He spends a lot of time in the House and
 Senate buildings, trying to glean information from various people due to the relationships he has developed over the course of his parents' political careers. Alex visits Rafael Luna, the independent Senator from Colorado, who is his father's, Senator Oscar Diaz of California's protege. Alex has a strong relationship with Rafael built on time spent together during the latter's campaign as a gay nominee for the Senate. Alex keeps an eye on Richards' tactics, as he is rumored to want an independent senator for vice-president so as to attract the moderate vote. Noticing Alex's astute political skills, his mother Ellen offers him a job on the campaign that he is to begin after graduation. While Alex is ecstatic, June is not when
 offered a job on the campaign, and refuses the offer due to not wanting to embark on the political path. Alex has always wanted to follow in his parents' footsteps, and hopes to be in Congress by the time he is 30. On Thanksgiving, Alex's parents get into an argument over Ellen's reelection campaign, prompting an outburst from Alex, who then calls Henry to vent his feelings. Alex invites Henry to a New Year's party hosted by the White House Trio, and Henry brings his best friend, philanthropist Percy Okonjo, with him. June and Nora are surprised to see the friendship between Alex and Henry, but Alex is surprised when Henry kisses him in the White House garden. Henry does not respond to Alex's texts after that night, while Alex
 turns to Nora for advice on the matter since she is bisexual. She reveals that she always knew Henry was gay, and that Alex should explore his feelings. Alex also contacts Liam, his friend from high school with whom he had sexual experiences that he did not understand at the time. Liam is surprised to hear from Alex and does not offer an answer for Alex over his sexual orientation. Alex confronts Henry at a state dinner for Phillip organized at the White House, and they spend time together, becoming intimate. After that, Alex and Henry begin to spend more and more time together, travelling to see each other at various events while also exchanging intimate emails with one another. During a fundraiser arranged by Pez in LA, Alex,
 along with Nora, June, and Bea, spend time together as a group. At the end of the night, Alex and Henry have sex for the first time. Henry even invites Alex to the Royal Box at Wimbledon, where Phillip's condescending attitude towards his younger brother prompts the two to leave the event. After Claremont campaign is stunned by Luna being selected as Richards' vice-presidential nominee, Alex is comforted by a surprise visit from Henry. They spend the night together, letting their guard down and are caught by Zahra, who warns Alex of the dangers of their relationship. Alex tells his mother about being bisexual and seeing Henry, prompting a response of support and mindfulness from Ellen, but is also told he has lost his job on the
 campaign. Alex, along with June and Nora, goes to Texas to their father's ranch for July 4th. Alex invites Henry as well, with his father intuiting their relationship and showing his support. While swimming at night in the pool, Alex declares his love to Henry, who seems to not respond accordingly and leaves early in the morning. Alex is distraught, and eventually uses Zahra's help to confront Henry in London. Henry reveals his hesitation to engage in their relationship due to the expectations of being a royal, but agrees to pursue their relationship after a night together. Alex returns home to the tumults of the campaign, thinking diligently and strategically about finally turning Texas, his home state, Democratic. Henry reveals
 that Phillip was not supportive when he reveals his sexuality. Meanwhile, the media begins to speculate about Alex and Henry after finding leaked photos of them in an elevator. Addressing the situation, Alex goes on a date with Nora in a public fashion, while Henry does something similar with June. Even after this, more intimate photographs of Henry and Alex and released to the press, along with the intimate emails between the two. Both are distraught, and while Alex has his mother's full support, Henry is under pressure from Phillip and his grandmother the Queen to lie about the situation. Zahra arranges a meeting with the Queen, revealing that she is able to do so due to being engaged with Shaan. While there, the Queen hints that
 Henry should cast doubt on the rumors and blame it on technological manipulation. However, with his mother's support, Henry is able to stand up to his grandmother while they see the outpouring of support from around the world for the couple. Alex and Henry then publicly come out as a couple, with Alex calling for people to support and accept his decision. The presidential campaign receives a bombshell when Nora receives a file dump showing that the Richards campaign hired hackers to access the emails between Henry and Alex, while also hiring a private investigator to photograph the two covertly. Alex deduces a code from the correspondence and figures out it was sent by Rafael Luna. Ellen promises him immunity in the event of a criminal
 investigation and he eventually withdraws his vice-presidential nomination. Rafael reveals to Alex that, as a young intern for Richards, the senator had tried to solicit sex from him, and when rebuffed, threatened the young man's family. Rafael signed up to the campaign so as to keep an eye on any misconduct, and eventually was able to find the surveillance on Alex. With his LSAT results in hand, Alex begins to plan for law school, thinking of going to NYU when Henry talks about having bought a brownstone in Brooklyn so as to be close to a queer youth shelter that is part of his new foundation. On Election Night, everyone gathers in Austin, with Alex hoping that Texas finally turns blue. After a few close calls, Ellen's victory comes to
 depend on winning Texas, which she eventually does. In celebration, Alex and Henry leave the celebration and travel to the former's childhood home, finally showing Henry the place where he grew up to become who he is." />
   <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<img id="myImg1" src="images/blogrobook(2)new.jpg" alt="The news that a wealthy young gentleman named Charles Bingley has rented the manor of Netherfield Park causes a great stir in the nearby village of Longbourn, especially in the Bennet household. The Bennets have five unmarried daughters—from oldest to youngest, Jane, Elizabeth, Mary, Kitty, and Lydia—and Mrs. Bennet is desperate to see them all married. After Mr. Bennet pays a social visit to Mr. Bingley, the Bennets attend a ball at which Mr. Bingley is present. He is taken with Jane and spends much of the evening dancing with her. His close friend, Mr. Darcy, is less pleased with the evening and haughtily refuses to dance with Elizabeth, which makes everyone view him
 as arrogant and obnoxious. At social functions over subsequent weeks, however, Mr. Darcy finds himself increasingly attracted to Elizabeth’s charm and intelligence. Jane’s friendship with Mr. Bingley also continues to burgeon, and Jane pays a visit to the Bingley mansion. On her journey to the house she is caught in a downpour and catches ill, forcing her to stay at Netherfield for several days. In order to tend to Jane, Elizabeth hikes through muddy fields and arrives with a spattered dress, much to the disdain of the snobbish Miss Bingley, Charles Bingley’s sister. Miss Bingley’s spite only increases when she notices that Darcy, whom she is pursuing, pays quite a bit of attention to Elizabeth. When Elizabeth and Jane return
 home, they find Mr. Collins visiting their household. Mr. Collins is a young clergyman who stands to inherit Mr. Bennet’s property, which has been “entailed,” meaning that it can only be passed down to male heirs. Mr. Collins is a pompous fool, though he is quite enthralled by the Bennet girls. Shortly after his arrival, he makes a proposal of marriage to Elizabeth. She turns him down, wounding his pride. Meanwhile, the Bennet girls have become friendly with militia officers stationed in a nearby town. Among them is Wickham, a handsome young soldier who is friendly toward Elizabeth and tells her how Darcy cruelly cheated him out of an inheritance. At the beginning of winter, the Bingleys and Darcy leave Netherfield and return
 to London, much to Jane’s dismay. A further shock arrives with the news that Mr. Collins has become engaged to Charlotte Lucas, Elizabeth’s best friend and the poor daughter of a local knight. Charlotte explains to Elizabeth that she is getting older and needs the match for financial reasons. Charlotte and Mr. Collins get married and Elizabeth promises to visit them at their new home. As winter progresses, Jane visits the city to see friends (hoping also that she might see Mr. Bingley). However, Miss Bingley visits her and behaves rudely, while Mr. Bingley fails to visit her at all. The marriage prospects for the Bennet girls appear bleak. That spring, Elizabeth visits Charlotte, who now lives near the home of Mr. Collins’s
 patron, Lady Catherine de Bourgh, who is also Darcy’s aunt. Darcy calls on Lady Catherine and encounters Elizabeth, whose presence leads him to make a number of visits to the Collins’s home, where she is staying. One day, he makes a shocking proposal of marriage, which Elizabeth quickly refuses. She tells Darcy that she considers him arrogant and unpleasant, then scolds him for steering Bingley away from Jane and disinheriting Wickham. Darcy leaves her but shortly thereafter delivers a letter to her. In this letter, he admits that he urged Bingley to distance himself from Jane, but claims he did so only because he thought their romance was not serious. As for Wickham, he informs Elizabeth that the young officer is a liar and
 that the real cause of their disagreement was Wickham’s attempt to elope with his young sister, Georgiana Darcy. This letter causes Elizabeth to reevaluate her feelings about Darcy. She returns home and acts coldly toward Wickham. The militia is leaving town, which makes the younger, rather man-crazy Bennet girls distraught. Lydia manages to obtain permission from her father to spend the summer with an old colonel in Brighton, where Wickham’s regiment will be stationed. With the arrival of June, Elizabeth goes on another journey, this time with the Gardiners, who are relatives of the Bennets. The trip takes her to the North and eventually to the neighborhood of Pemberley, Darcy’s estate. She visits Pemberley, after making
 sure that Darcy is away, and delights in the building and grounds, while hearing from Darcy’s servants that he is a wonderful, generous master. Suddenly, Darcy arrives and behaves cordially toward her. Making no mention of his proposal, he entertains the Gardiners and invites Elizabeth to meet his sister. Shortly thereafter, however, a letter arrives from home, telling Elizabeth that Lydia has eloped with Wickham and that the couple is nowhere to be found, which suggests that they may be living together out of wedlock. Fearful of the disgrace such a situation would bring on her entire family, Elizabeth hastens home. Mr. Gardiner and Mr. Bennet go off to search for Lydia, but Mr. Bennet eventually returns home empty-handed. 
 Just when all hope seems lost, a letter comes from Mr. Gardiner saying that the couple has been found and that Wickham has agreed to marry Lydia in exchange for an annual income. The Bennets are convinced that Mr. Gardiner has paid off Wickham, but Elizabeth learns that the source of the money, and of her family’s salvation, was none other than Darcy. Now married, Wickham and Lydia return to Longbourn briefly, where Mr. Bennet treats them coldly. They then depart for Wickham’s new assignment in the North of England. Shortly thereafter, Bingley returns to Netherfield and resumes his courtship of Jane. Darcy goes to stay with him and pays visits to the Bennets but makes no mention of his desire to marry Elizabeth. Bingley, 
 on the other hand, presses his suit and proposes to Jane, to the delight of everyone but Bingley’s haughty sister. While the family celebrates, Lady Catherine de Bourgh pays a visit to Longbourn. She corners Elizabeth and says that she has heard that Darcy, her nephew, is planning to marry her. Since she considers a Bennet an unsuitable match for a Darcy, Lady Catherine demands that Elizabeth promise to refuse him. Elizabeth spiritedly refuses, saying she is not engaged to Darcy, but she will not promise anything against her own happiness. A little later, Elizabeth and Darcy go out walking together and he tells her that his feelings have not altered since the spring. She tenderly accepts his proposal, and both Jane and 
 Elizabeth are married." />
   <!-- The Modal -->
<div id="myModal1" class="modal1">
  <span class="close1">&times;</span>
  <img class="modal-content1" id="img02">
  <div id="caption1"></div>
</div>
<img id="myImg2" src="images/blogrobook(3).jpg" alt="The movie opens with a woman singing while driving with her young son in the backseat. It's dark and snowing out, and it's Christmas Eve. The young boy in the backseat is five years old, and tells his mother that she has a beautiful voice. It's pretty clear that the boy (Henry) and his mother love each other very much. Suddenly, a car in front of them skids out of control, which sends young Henry and his mother's car spinning out of control. Henry freaks out, and suddenly starts to disappear. The mother is staring at him in disbelief and in the windshield we can see a truck about to slam into their car head on. Young Henry is now naked and standing in his house, watching 
 himself, his mother, and his father read a book on the couch together. Henry is scared and has no idea what is going on. A second later, he disappears again and is back at the scene of the car accident, standing naked on the side of the road. Suddenly, a man appears, puts a blanket around him and explains the situation. The man says that he is Henry as an adult, and they are time travelers. His mother was killed in the accident. He is too young to understand what is going on now, but he will one day. The older Henry disappears. We then see the older Henry appear naked in the library he works at. He gets up, puts his clothes on, grabs some books and brings them to a patron at the library. The patron says that took long enough
 to which Henry replies that he has no idea. We then see the day to day going on in Henry's life: He is a time traveler. He has some type of supernatural power where he physically travels through time. He has no control over his power or when or why he travels. He drinks a lot and is living a pretty messy life. When he travels, he is naked since nothing dead travels with him. When he arrives at the time he is currently living, he must pick locks, and steal clothes and money just to survive. His father is withdrawn and was once a violinist at the Chicago Symphony, but can no longer play because of his drinking. Both Henry and his father have clearly never gotten over the death of Henry's mother and have taken to alcoholism. Back
 at the library, Claire Abshire (Rachel McAdams) is looking for a book. The librarian says to her that perhaps Mr. DeTamble can help you Claire is in disbelief. She looks at Henry and says that it's him. It's very obvious Henry has never seen her before in his life, but they agree to meet at a local restaurant. At the restaurant, Claire tells Henry about how she has known him all her life, that he has visited her since she was a little girl. She says that he visited her a lot, but she has never seen him this young (Henry is about 28 years old at this current time). He explains that certain places he visits a lot because big events pull him in, like gravity. Claire says that she was a big event. Back at his apartment, she pretty
 much throws himself at him. As they are kissing on the couch, Henry wants to know how they first met. Flashback to Claire at age 6, at the meadow at her parents' house. Henry is about 35 years old, naked in the woods, and asking to borrow her blanket so he can cover himself. He explains to a very young Claire that he is a time traveler, and that he knows her in the future when she is older. She doesn't believe him until he disappears before her eyes. Before he goes, he tells her that he will be back next Tuesday, and she should bring clothes for him. From this point on, Claire always leaves clothes for Henry in the woods. Back in present day, you see their relationship unfold. Henry loves Claire, and Claire is happy to be with
 Henry, but she only had known the older, more put together Henry from her childhood, and this Henry is 28 years old and has his faults. But they love each other. He meets her friends Charisse and Gomez. Gomez learns that Henry is a time traveler by witnessing it firsthand. He thinks Claire should walk away from the relationship, but Claire can't because as she states that she has been in love with him her whole life. Henry travels back to a time before his mom died and runs into her on the subway. He speaks with her, and says that he is a huge fan of her singing, and that he wishes his girlfriend could hear her sing. They make small talk; she says she has a three-year-old son named Henry. Before he gets off the train, she tells
 him to make sure his girlfriend knows he loves her. He then tells her that her son loves her very much. Henry proposes to Claire using his mother's engagement ring. Henry meets Claire's family before the wedding, and learns that her father is a hunter. At the wedding, Gomez is the best man. Before the wedding, Henry disappears, leaving Gomez frantic as to what to do since there is no groom. Suddenly, a much older Henry arrives and puts on the tux. At the altar, Claire is surprised to see that she is marrying a future version of Henry, but they laugh it off. At the reception, present-day Henry arrives in time for their first dance. He asks Claire if she is disappointed that she is not married to future Henry, and she points out
 that she is married to him, he's just not here yet. That night, as the new bride and groom are jumping on the bed, Henry disappears again. He arrives at the meadow with a very young Claire who asks him if he is married. Henry doesn't like to tell people about their future, so while he tells Claire that he is indeed married, he doesn't explain that he is married to her. The young Claire is upset that he has a wife. Henry then disappears and is back in bed with his new wife Claire, and they both laugh about a young Claire being jealous of herself. We then see the couple move into their apartment in Chicago, and living the life of a young married couple. However, Henry time travels and sometimes leaves his wife for days or weeks at
 a time. Whenever he is gone, she has no idea when he'll be back. She is getting more and more upset by this. They have an argument after he misses Christmas and New Year's Day. She says she is stressed because he's never there, their apartment is too small to work in (she is an artist) and she is stressed about her new art show. She goes to work angry. Later that night, he meets her at the art studio. He tells her to come with him before they miss it. He brings her to a TV store and they watch the lottery drawing. He knows all the numbers as they are being called. They have just won five million dollars. Henry says that there are a lot of downsides of traveling, but there can be some upsides too and they now have money to buy a 
 big house with a studio for Claire to work in. At their new house, Henry and Claire have Gomez and a pregnant Charisse over for dinner. As they are making dinner, they hear a loud noise in the living room. The four of them run in to see a bleeding, gasping for breath future Henry on their living room floor. He then disappears. All of them are in shock, and present-day Henry just walks away. Later, Claire and Henry are discussing what happened. She is worried because in all her life, she has never seen Henry older than about 40. She is worried it is because he died, but has hope that maybe it's because he found a cure for his traveling. She then reveals that she is pregnant. Henry finds a geneticist that will try to help him with
 his problem. The geneticist (Dr. Kendrick) has discovered that it's a chromosome mutation, and it's genetic, which means his offspring will most likely have this problem too. Claire has already had three miscarriages because the fetuses are traveling out of the womb. The miscarriages are taking a toll on Claire and Henry, who argue every day. Claire wants one normal thing in her life, and that is to be a mother. Henry doesn't want to put Claire through the stress of another miscarriage, and he also doesn't want a child to have to go through what he goes through, time traveling without warning, being placed in possibly dangerous situations. He has a vasectomy without telling Claire, and after it's done he is upset, which causes him
 to travel. He ends up in the meadow with 18-year-old Claire. She can tell he's upset and he tells her that he did something he had to do, but she won't like it. He won't tell her that he had a vasectomy, and he instead angrily tells her that she is too young to understand anything yet. She slaps him, and he in turn kisses her hard. It's upsetting to her, because they have never kissed and their first kiss was angry. He then kisses her very lovingly, disappears and ends up in the present day at home. In Claire's art studio, he tells Claire about the vasectomy. She is very upset. She wants children, and she is mad that he led on an 18-year-old Claire in the meadow. Later that night, Henry is sleeping on the couch. Claire's cell phone
 rings, and it's a young Henry calling. It's January, and he is in a parking garage in Chicago and needs help. She goes to pick him up. When he gets in the car, she talks to him about being upset with the future version of him. She then kisses him and they make love in the car. The next week, she tells present-day Henry what happened. She explains that she didn't cheat on him because, well... it's him. Later on, we discover that Claire is pregnant again for the fourth time. While trying to pick out a name for their future daughter, Henry travels. We then see Alba being born and a montage of the next five years. As they are getting ready for Alba's fifth birthday, you can see Henry is upset. While Henry is preoccupied with party 
 preparations and thoughts of his own death, an older version of Alba visits, and tells present day Alba that her father will die when she is five. An upset Alba tells Claire later that night, who doesn't know what to think. Later on Henry travels and is gone for a while. When he gets back, he is suffering from hypothermia and needs to be confined to a wheelchair in order to save his leg. Claire tells Dr. Kendrick that if Henry can't run, he can't help himself when he travels and he could die. During Henry 's travels, he finds out that he will die on the coming New Years Eve. When New Year's Eve arrives, Claire and Henry throw a party. Claire has no idea that Henry will die tonight, but Henry is taking everything in. He says goodbye
 to Gomez, and thanks him for being a great friend. He then asks to speak with Claire outside. She sits in his lap with a blanket around them, and he starts saying his goodbyes. Henry wakes up in the snow in the woods next to the meadow. It's very early in the morning, almost sunrise. There is a deer next to him. As he watches the deer, he hears a voice in the woods, then a gunshot. Henry screams in pain and disappears. You can then see Claire's father and brother, who were out hunting, arriving at the spot where Henry was, which is now just blood covered snow. They assume they clipped a deer. Back at present day, the New Years Eve party is going on when Henry arrives naked and dying of a gunshot wound on the floor. Claire is next seen
 lying in her bed, depressed, with her daughter. She is very shaken by the death of Henry. Later on, in the meadow, a nine-year-old Alba is playing with Gomez and Charisse's kids when Henry comes walking out of the woods. Alba is thrilled to see her father, it's been 4 years. Gomez's kids run to the house to get Claire while Henry and Alba talk. As Henry tells Alba the story of how he met her mother, you can see Claire running through the woods. When Henry sees Claire, they run to each other and embrace. Claire is thrilled. She asks why he didn't say he'd be here, and he tells her he doesn't want her to spend her life waiting for him. Claire is crying, telling him that she loves him and will always love him. Henry and Claire kiss, and 
 Henry disappears once more. Claire picks up and folds his clothes, and Claire and Alba then leave the meadow together." />
   <!-- The Modal -->
<div id="myModal2" class="modal2">
  <span class="close2">&times;</span>
  <img class="modal-content2" id="img03">
  <div id="caption2"></div>
</div>
<img id="myImg3" src="images/blogrobook(4)new.jpg" alt="Eleanor and Park is set in Omaha, Nebraska, over the course of the school year from the fall of 1986 to the summer of 1987. The book is in the third person, and the narrative alternates between Eleanor’s perspective and Park’s perspective. Eleanor Douglas is a tenth-grader who has just transferred to a new high school. Eleanor stands out from the rest of the students in her appearance, since she is “big and awkward,” has curly red hair, and wears men’s clothes with unusual accessories. No one wants to make room for her on the bus, but Park eventually lets her sit next to him. Eleanor is extremely smart and sharp, particularly excelling in English class. Her home life, however,
 is deeply troubled. Eleanor, her mother, her abusive and alcoholic stepfather Richie, and her four younger siblings, live in poverty. All the kids have to share one bedroom, and they can’t afford a phone. Eleanor has just returned back to her house after her the evil Richie kicked her out for a year. Richie terrorizes the whole family. Eleanor’s mom wants to be a peacemaker and pretend that everything is fine, even though Richie is violent and abusive. Eleanor doesn’t feel safe at home. Fellow tenth-grade Park Sheridan feels like an outsider as well, though, unlike Eleanor, the other kids don’t really tease him. Even though he’s lived in Omaha his whole life, he doesn’t feel any deep connection to the other students at school. He is
 Asian American, which is very rare in Omaha, and he likes music and comic books. Park’s home life is much more welcoming than Eleanor’s, since his parents have a loving relationship and they have a comfortable lifestyle. However, Park faces tensions at home, since his dad wants him to be more masculine, and Park always feels like he’s letting him down. When Eleanor sits down on the bus next to Park, they are both sullen and resentful of the situation, especially since they both know the unspoken social code that once you choose your bus seat, you’re locked in to it for the year. Soon, however, this changes radically. Eleanor and Park slowly begin to form a connection over the course of their bus rides. They first build their relationship
 silently by listening to music and reading comic books together. Eventually, their relationship grows, they start talking, and their bus rides become the best parts of their days. When they finally hold hands, sparks fly. Park and Eleanor become infatuated with each other. Park tells Eleanor that he loves her, and Eleanor expresses her affection in many ways, yet she doesn’t ever say that she loves him back. Though Eleanor and Park’s relationship blossoms, other parts of their lives do not go as well. Eleanor gets bullied at school, especially in the gym locker room, where the other girls cover her locker in sanitary pads and flush her clothes in the toilet. Park beats up Steve, a bully, for leading taunts against Eleanor. Eleanor’s home 
 life also gets worse and worse. When Eleanor hears gunshots one night, she calls the police, which makes Richie angrier than ever. Park and Eleanor both display some range of gender expression. Eleanor likes to wear men’s ties and shirts. Park’s mom has a tough time accepting Eleanor at first, because Eleanor doesn’t care about traditionally feminine beauty standards. But when Park’s mom realizes the hardships that Eleanor has been through, she can relate to her, and she sees that Eleanor is good for Park. Park discovers that he enjoys wearing eyeliner, which makes his dad furious, since his dad wants him to be more traditionally masculine. However, when Park sticks up for Eleanor and comes into his own as a confident person, Park’s dad 
 eventually accepts Park for who he is. The climax of the story comes when Eleanor returns home one night, just after she and Park kiss, to find that Richie destroyed her box of private possessions, which include mix tapes Park had made her and makeup from Park’s mom. Richie leaves Eleanor a threatening note, which makes Eleanor realize that Richie has been the one leaving lewd messages all over her textbooks that year. Eleanor escapes from the house. Two of the biggest bullies at school, Tina and Steve, help her out even though they’ve never been nice to her before because they can see that Richie is pure evil. Eleanor realizes that the one person she might be able to live with is her uncle in Minnesota, and Park immediately offers to drive
 her there. Eleanor and Park have a very bittersweet trip, because they know it might be the last time they see each other for a long time. After they part, Park tries sending letters and packages to Eleanor, but she is too upset to even let herself open them, and she never replies. Eventually, a heartbroken Park tapers off communication and tries to move on. At the very end of the novel, Eleanor finally writes Park a postcard that contains just three words. These words are not disclosed to the reader." />
   <!-- The Modal -->
<div id="myModal3" class="modal3">
  <span class="close3">&times;</span>
  <img class="modal-content3" id="img04">
  <div id="caption3"></div>
</div>
<img id="myImg4" src="images/blogrobook(5)new.jpg" alt="In the late 1700s, the Duke of Hastings is ecstatic when his wife gives birth to a male child after fifteen years of miscarriages and stillborn births. The child is named Simon Basset, and he will one day inherit the title of Duke of Hastings. The duchess dies from complications during childbirth, and the duke leaves Simon in the care of a nurse as he goes about his business. When the duke visits Simon two years later, he is dismayed to find that Simon is not yet talking. Two years later, when he visits again, Simon can speak, but he has a stutter. The duke calls Simon an idiot and is furious that Simon won’t be fit to take on his role. Simon’s nurse helps him learn to speak
 without a stutter, and when Simon is eleven, they go to visit the duke in London. There, Simon’s father rejects him again, and Simon vows to be the exact opposite of his father. The story moves to the year 1813. Daphne Bridgerton, the eldest daughter in the Bridgerton family, has been looking for a suitable husband for two years. She feels that most men view her as a friend rather than a potential mate, and she hopes that she will marry a man for whom she feels genuine affection. As one of eight children, Daphne hopes to have many children of her own one day. While at a ball, Daphne is taken aside by a man who has already proposed to her twice. When he refuses to leave her alone, Daphne strikes him and knocks him out, only to realize that Simon
 Basset, the new Duke of Hastings, has been watching their entire interaction. Simon realizes that Daphne is the sister of his friend Anthony Bridgerton, and Daphne says that she has heard of Simon’s wild reputation. They return to the ball and dance together. As they dance, Daphne reveals she would like a husband and children but has not found an acceptable suitor. Simon tells Daphne that he never wants to marry or have children. Simon then suggests that he and Daphne feign a courtship so that he won’t be bothered by society mothers trying to marry their daughters to him and Daphne will seem like more of a romantic option to other men. Daphne agrees to the plan, but Anthony becomes angry when he sees his sister with his wild friend. Later, when 
 Anthony confronts the couple, they let him in on their ruse. Anthony is opposed to their plan, still fearing for his sister’s reputation, but he agrees to keep quiet about it on the condition that Daphne and Simon never be alone together. Daphne and Simon become friendly during their pretend courtship, and they begin to feel a mutual attraction that they know they cannot act on. At one ball, Daphne and Simon take a walk in the garden and end up kissing. Anthony catches them and angrily says that he will duel Simon unless he marries Daphne. Simon responds that he can’t marry Daphne, as being married to him would destroy her dreams. At home, Daphne’s brother Colin tells her that she and Simon were seen going into the garden together, and Daphne 
 understands that her reputation is at stake. Daphne knows that Anthony is angry enough to kill Simon, and she and Colin rush to stop the duel. Once there, Daphne tells Simon that her reputation will be ruined if he doesn’t marry her. Simon agrees to marry Daphne but tells her that he cannot have children. Daphne quickly replies that she will marry him anyway. The night before the wedding, Daphne’s mother attempts to tell her what will happen when she and Simon consummate their marriage, but her explanation is very vague. She tells Daphne that the act, if performed enough, will lead to a child, and Daphne wonders if Simon will be able to consummate the marriage if he cannot have children. After the wedding, Daphne and Simon stop at an inn on the
 way to Simon’s ancestral home in Clyvedon. Daphne feels embarrassed at how little she knows about marital relations. When Simon realizes that Daphne wonders if he can’t consummate the marriage, he assures her that he is more than capable. They make love, but Simon withdraws before he ejaculates. After Daphne and Simon settle in at Clyvedon, Daphne visits with the housekeeper, Mrs. Colson, and Daphne learns about Simon’s childhood stutter and his father’s cruel rejection of him. Mrs. Colson also mentions the former duke and duchess’s struggles to conceive, saying that a man needs to provide a “strong, healthy seed” to make a child. When Daphne and Simon next have sex, she realizes that when he withdraws, he’s doing so in order to prevent getting 
 her pregnant. She suddenly understands that he’s capable of having children but is choosing not to. When Daphne angrily accuses Simon of taking advantage of her ignorance, he explains that he refuses to have children because he wants his family title to die with him. After another argument, Simon goes to a pub and gets drunk. When he returns to Clyvedon, he and Daphne make love, but this time she holds him down so that he cannot withdraw. Angered, Simon abandons Daphne and goes to another one of his properties. Daphne leaves Clyvedon as well, going to Simon’s Hastings House property in London so she can be closer to her family, who are confused by Simon’s absence. While there, Daphne realizes that her period is late and becomes convinced she is 
 pregnant. Anthony is furious that Simon has abandoned Daphne and goes to the country to see him, bringing with him a letter from Daphne that lets Simon know she is pregnant. Simon returns goes to London, but upon reuniting with Daphne, he learns that she was mistaken and that she isn’t pregnant after all. Daphne asks Simon if he ever considered whether he truly doesn’t want children or if he just wants to spite his father. Simon ultimately realizes that he wants to live for himself instead of his father. Four years later, Daphne gives birth to their fourth child and first son, David. Simon knows he will love his son no matter what, just as he does his three daughters.
 " />
   <!-- The Modal -->
<div id="myModal4" class="modal4">
  <span class="close4">&times;</span>
  <img class="modal-content4" id="img05">
  <div id="caption4"></div>
</div>
<img id="myImg5" src="images/blogrobook(6)new.jpg" alt="Call Me By Your Name details the love story of Elio and Oliver, two young men who spend a summer together on the Italian Riviera and develop a bond that shapes their view of love for the rest of their lives. Elio is a precocious 17-year-old who spends summers with his family in their villa on the Italian Riviera. Oliver is a brilliant and handsome 24-year-old post-doctoral scholar from America who spends a summer in the mid-1980s at Elio's villa. Elio's parents select Oliver to live with them for six weeks as part of an annual fellowship that they offer to young scholars, with the purpose of helping them revise a manuscript for publication and aiding Elio's father—who is himself an academic—with
 his paperwork. Call Me By Your Name is a story about obsessive love, the passage of time, and life-defining memories. The novel is told through Elio's first-person narration, recounting his memories of Oliver and their subsequent relationship. The novel begins with his first memories of Oliver: Oliver's typical farewell, Later!, which Elio finds strange, cold, and indifferent. In his first few weeks at the villa, Oliver charms and befriends the residents and neighbors of the villa. Elio, who is introverted and shy, reflects on the beginning of his infatuation with Oliver, analyzing all of Oliver's words and mannerisms as he secretly pines for a more intimate relationship with Oliver. The desire that Elio feels for Oliver is at once overwhelming and 
 sublime, a feeling stronger than any he has felt before, but he finds himself unable to express his feelings or talk about them with anyone, for fear of shame and rejection. Oliver's apparent coldness and indifference pain Elio, who labors to conceal his feelings from Oliver with affected silence and indifference on his part. Elio and Oliver find common interests in literature, music, philosophy, and exercise; a friendship blooms between them. Elio admires Oliver's confidence and self-possessed attitude, taking note of how okay he seems with many things in his life, including criticism, his vices, his relationships, and his identity as a Jewish man. The latter makes a strong impression on Elio, whose family is also Jewish but who makes a point of 
 keeping quiet about it in a majority Catholic country. Oliver's confidence on this matter emboldens Elio and makes him feel that Oliver could be his soulmate. In the days leading up to Elio's confession of his attraction, Oliver begins seeing a neighbor of Elio's named Chiara. The two share a number of 'citte': dates, crushes, and mini-infatuations. Elio reflects on his attraction to both Oliver and Chiara and looks for signs that their relationship is sexual, both to his excitement and frustration. When he attempts to talk to Oliver about Chiara, seemingly in favor of their relationship and trying to set them up, Oliver shuts him down, declaring later that he is not interested in her. At the same time, Elio's parents beg him to spend more time with
 friends and enjoy his youth; trying to get his mind off of his desire for Oliver, he begins spending time with a girl his age, Marzia. Elio and Marzia's dates are sexual but not romantic, and Marzia keeps a wary emotional distance from Elio, seeing through his niceties to know that he is not actually interested in her. On a trip to the nearby town of B., Elio alludes to his desire for Oliver, and Oliver tells him that they shouldn't talk about such things. Elio invites him to his secret solitary spot where he comes to read, the same berm where Monet used to paint. Oliver kisses Elio to appease his desire, but he wishes not to go any further for fear of doing anything that would make them feel ashamed. Elio has a hard time reading Oliver's intentions, 
 but Oliver conceals his own desire for Elio out of shyness and fear of getting his own emotions entangled. The following weeks are witness to much silence and avoidance between the pair, until Elio decides to break their silence. Oliver invites him to his room at midnight and the two make love, after which Oliver holds Elio's gaze and asks him to call him by his name. After their night together, Elio feels confusion and frustration, unsure where his relationship with Oliver stands or where it is going, but Oliver warms up to him and a romance blossoms. As Oliver's fellowship comes to an end, he and Elio take a trip to Rome where Oliver will spend his last three days in Italy. There, they spend a romantic vacation, spending one night with a group of 
 revelers at a book-release party. The celebrated poet makes a speech about the nature of desire as a universal human experience. Elio becomes too intoxicated and vomits in a square; Oliver helps him recuperate, and they sing Neapolitan songs with strangers on a street. Elio's memory of kissing Oliver on the square becomes his favorite memory of Oliver for the rest of his life. Oliver returns to the United States and Elio returns to his villa. Before departing, Oliver leaves Elio his billowy blue shirt as a memento. They promise to stay in contact; over the phone, Oliver tells Elio that he, too, took a memento from his room: a postcard depicting Monet's berm. Elio's father reveals to him that he knew about the affair and that he approves. He tells Elio
 that what he had with Oliver was a special, rare occurrence, something he himself never found in his life. The next year, Oliver marries a woman and goes on to father two children. In the years that follow, Elio continues to reflect on his experience with Oliver and sees it as a fulcrum around which the other romantic experiences in his life revolve. In vague terms, he mentions that he had many relationships after Oliver, but none as memorable and life-defining as Oliver. Elio and Oliver cross paths again at a New England college where Oliver teaches, his boys now teenagers; they share drinks and reminisce. Years after that—twenty years after the events of his summer with Elio, and after the death of Elio's father—Oliver has an overnight stay at the 
 villa en route to another Italian city. Elio walks Oliver through the villa and they reminisce about his father. Oliver tells Elio that he is just like him—that he remembers everything. Elio concludes the novel by wishing to tell Oliver that when he boards his taxi the following morning, if he truly is like him, he should hold his gaze and call him by his name just as he did on their first night together." />
   <!-- The Modal -->
<div id="myModal5" class="modal5">
  <span class="close5">&times;</span>
  <img class="modal-content5" id="img06">
  <div id="caption5"></div>
</div>
<h2 class="h1">Our famous romance authors</h2>

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
                                    <img src="images/roau1.jpg" alt="Charlotte Bronte">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">Charlotte Bronte</span>
                                   <span class="profession0">English novelist</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“Happiness quite unshared can scarcely be called happiness; it has no taste.”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
            </section>
                 <div class="content">
                    <h3>1816-1855</h3>
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
                                    <img src="images/roau2.jpg" alt="Mark Twain">
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
                                    <img src="images/roau3.jpg" alt="William Shakespeare">
                                </div>
                               <div class="name-profession0">
                                   <span class="name0">William Shakespeare</span>
                                   <span class="profession0">English playwright</span>
                               </div> 
                               <div class="quote-profession0">
                                <span class="quote0"><blockquote><i>“How poor are they that have not patience! What wound did ever heal but by degrees?”</i></blockquote></span>
                               </div>
                            </div>
                        </div>
                </div>
                </section>
                 <div class="content">
                    <h3>1564-1626</h3>
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
                                   <img src="images/roau5.jpg" alt="Gustave Flaubert">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Gustave Flaubert</span>
                               <span class="profession0">French novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“An infinity of passion can be contained in one minute, like a crowd in a small space.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1821-1880</h3>
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
                                   <img src="images/roau6.jpg" alt="Leo Tolstoy">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Leo Tolstoy</span>
                               <span class="profession0">Russian writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“All the variety, all the charm, all the beauty of life is made up of light and shadow.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1828-1910</h3>
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
                                   <img src="images/roau7(new).jpg" alt="Victor Hugo">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Victor Hugo</span>
                               <span class="profession0">French essayist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>"For prying into any human affairs, non are equal to those whom it does not concern."</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1802-1885</h3>
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
                                   <img src="images/roau8.jpg" alt="Pierre Choderlos de Laclos">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Pierre Choderlos</span>
                               <span class="profession0">French novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Don't you remember that love, like medicine, is only the art of encouraging nature?”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1741-1803</h3>
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
                                   <img src="images/roau9(new).jpg" alt="Margaret Mitchell">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Margaret Mitchell</span>
                               <span class="profession0">American novelist</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“I can't think about that right now. If I do, I'll go crazy. I'll think about that tomorrow.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1900-1949</h3>
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
                                   <img src="images/roau10.jpg" alt="James Fenimore Cooper">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">James Fenimore</span>
                               <span class="profession0">American writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“You are young, and rich, and have friends, and at such an age I know it is hard to die!”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1789-1851</h3>
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
                                   <img src="images/roau11(new).jpg" alt="Ángel de Saavedra">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Ángel de Saavedra</span>
                               <span class="profession0">Spanish author</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“I wouldn't be doing this if it wasn't fun. It's just a whole different these days.”</i></blockquote></span>
                           </div>
                          </div>
                       </div>
                   </div>
                </section>
                 <div class="content">
                    <h3>1791-1865</h3>
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
                                   <img src="images/roau12(new).jpg" alt="Jhumpa Lahiri">
                                </div>
                
                            <div class="name-profession0">
                               <span class="name0">Jhumpa Lahiri</span>
                               <span class="profession0">American writer</span>
                           </div> 
                
                           <div class="quote-profession0">
                            <span class="quote0"><blockquote><i>“Pack a pillow and blanket and see as much of the world as you can.You will not regret it.”</i></blockquote></span>
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
            <a href="#"> <i class="fas fa-arrow-right"></i> Romance </a>
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