<body>
            <div class="container-fluid" style="cursor:url(static/cursors/SecondBlade.cur),auto;">
                <div class="row North">
                    <div class="col-md-12">
                        <div class="jumbotron banner center" id="banner">
                            <h1>Hello world!</h1> <p>This is page is for CP476 assignment 1</p>
                        </div>
                        <p class="center">
My name is Quinton, I am a 5th year computer science and business student at Laurier.
I like books, video games, CS and lego.
                        </p>
                        <p class="center">
There have been <?php echo time();?> seconds since the Epoch.
The current server time is
<?php
date_default_timezone_set('EST');
echo date("h:i A e");
?>
</p>

<div id="quote" class="center"></div>
</div>
</div>

<div class="row">
    <div class="col-md-2 West">
        <h4>My CS courses</h4>
        <ol>
            <li>CP104</li>
            <li>CP114</li>
            <li>CP120</li>
            <li>CP213</li>
            <li>CP216</li>
            <li>CP217</li>
            <li>CP363</li>
            <li>CP312</li>
            <li>CP386</li>
            <li>CP460</li>
            <li>CP317</li>
            <li>CP315</li>
        </ol>
    </div>

    <div class="col-md-8 Center">
        <table style="width:100%">
            <thead>
            <tr>
                <th>Time</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>8:30</td>
                <td class="cp414">CP414</td>
                <td></td>
                <td class="cp414">CP414</td>
                <td></td>
                <td class="cp414">CP414</td>
            </tr>
            <tr>
                <td>9:00</td>
                <td class="cp414"></td>
                <td></td>
                <td class="cp414"></td>
                <td></td>
                <td class="cp414"></td>
            </tr>
            <tr>
                <td>9:30</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>10:00</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>10:30</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>11:00</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>11:30</td>
                <td class="cp373">CP373</td>
                <td></td>
                <td class="cp373">CP373</td>
                <td></td>
                <td class="cp373">CP373</td>
            </tr>
            <tr>
                <td>12:00</td>
                <td class="cp373"></td>
                <td></td>
                <td class="cp373"></td>
                <td></td>
                <td class="cp373"></td>
            </tr>
            <tr>
                <td>12:30</td>
                <td class="cp476">CP476</td>
                <td></td>
                <td class="cp476">CP476</td>
                <td></td>
                <td class="cp476">CP476</td>
            </tr>
            <tr>
                <td>1:00</td>
                <td class="cp476"></td>
                <td class="bu481">BU481</td>
                <td class="cp476"></td>
                <td class="bu481">BU481</td>
                <td class="cp476"></td>
            </tr>
            <tr>
                <td>1:30</td>
                <td class="cp372">CP372</td>
                <td class="bu481"></td>
                <td class="cp372">CP372</td>
                <td class="bu481"></td>
                <td class="cp372">CP372</td>
            </tr>
            <tr>
                <td>2:00</td>
                <td class="cp372"></td>
                <td class="bu481"></td>
                <td class="cp372"></td>
                <td class="bu481"></td>
                <td class="cp372"></td>
            </tr>
            <tr>
                <td>2:30</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>3:00</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>3:30</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>4:00</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>4:30</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>5:00</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>5:30</td>
                <td></td>
                <td class="cp469">CP469</td>
                <td></td>
                <td class="cp469">CP469</td>
                <td></td>
            </tr>
            <tr>
                <td>6:00</td>
                <td></td>
                <td class="cp469"></td>
                <td></td>
                <td class="cp469" ></td>
                <td></td>
            </tr>
            <tr>
                <td>6:30</td>
                <td></td>
                <td class="cp469"></td>
                <td></td>
                <td class="cp469"></td>
                <td></td>
            </tr>
            <tr>
                <td>7:00</td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-md-2 East">
        <h4>Languages</h4>
        <ul>
            <li>Python</li>
            <li>Java</li>
            <li>Easy68k</li>
            <li>C</li>
            <li>SQL</li>
            <li>Html</li>
            <li>Matlab</li>
            <li>AngularJS</li>
            <li>C#</li>
            <li>VBA</li>
            <li>PHP</li>
        </ul>

    </div>
</div>

<div class="row South">
    <div class="col-md-10 col-md-offset-1" style="text-align: center">
        <hr>
        <div class="col-md-2 col-md-offset-1">
            &copy; Quinton Black 2015
        </div>
        <div class="col-md-2">
            <a href="mydoc.html">Resume</a>
        </div>
        <div class="col-md-2">
            <a href="portal.html">Portal</a>
        </div>
        <div class="col-md-2">
            Page hits:
            <?php
            $file_name = "count.txt";
            $fh = fopen($file_name,"r+");
            $last_count = fread($fh, filesize($file_name));
            $count = intval($last_count)+1;
            echo $count;
            fseek($fh,0);
            fwrite($fh,$count);
            fclose($fh);
            ?>
        </div>
        <div class="col-md-2">
            <form class="form form-inline" action="visitors.php">
                <button class="btn btn-default" type="submit">Who has been here?</button>
            </form>
        </div>
    </div>
</div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script type="application/javascript">
    var index = 0;
    window.setInterval("switchPhoto()", 3000);
    function switchPhoto(){
        var photo_location = "static/img/";
        var photos = ['IMG_0281.JPG', 'IMG_0401.JPG', 'IMG_0614.JPG', 'IMG_0802.JPG', 'sinon___sword_art_online_2_by_taigalife-d898cif.png', 'space-wallpapers-7.jpg', 'sword_art_online_mother_rosario_arc_by_senzaki_kun-d84xot1.png','wallhaven-9164.jpg'];
        var banner = document.getElementById("banner");
        $(banner).css('background-image', 'url(' + photo_location+ photos[index%photos.length] + ')');
        index++;
    }
</script>

<script type="application/javascript">
    var quote = document.getElementById("quote");

    var quote_list =["It is morally wrong to allow suckers to keep their money. Addendum; a Smith and Wesson beats four aces.  (Canada Bill Jones)",
        "A pipe gives a wise man time to think And a fool something to put in his mouth.",
        "Never underestimate the power of human stupidity.",
        "Whatever goes around, comes around.",
        "There is only one right way for a machine to run.  The number of ways it can go wrong is so infinite that every operating engineer lives in constant terror.",
        "Don't rejoice at the defeat, you men,  Now that you have killed the bastard. The bitch that bore him is in heat again.",
        "Bring back my name On wings of flame. Winds of the plains, Dance once for me.",
        "They will come back - come back - as long as the red earth rolls. He never wasted a leaf or a tree.  Do you think he would squander souls?",
        "Gold is for the mistress - silver for the maid -  Copper for the craftsman, cunning at his trade.But Iron - Cold Iron - is master of them all.",
        "The number of people who agree or disagree with you has absolutely no bearing on whether you're *right*.  The universe has a way of deciding that for itself.",
        "The truth of any proposition has nothing to do with its credibility...and vice versa.",
        "The last thing you want is an educated, affluent and emancipated population.  Power hinges on the restriction and control of wealth. Science and technology offer unlimited wealth.Therefore, science and technology have to be controlled.Knowledge and reason are enemies.  Myth and unreason are the weapons you fight them with.",
        "If you don't like yourself, you can't like other people.",
        "Money is a powerful aphrodisiac.  But flowers work almost as well.",
        "It may be better to be a live jackal than a dead lion, but it is better still to be a live lion.  And usually easier.",
        "Men rarely, if ever, manage to dream up a god superior to themselves.  Most gods have the morals and manners of a spoiled </child.",
        "Place your clothes and weapons where you can find them in the dark.",
        "An Elephant;  A Mouse built to government specifications.",
        "Democracy is based on the assumption that a million men are wiser than one man. How's that again?  I missed something.",
        "Autocracy is based on the assumption that one man is wiser than a million men.  Let's play that over again too.  Who decides?",
        "Taxes are not levied for the benefit of the taxed.",
        "Money is the sincerest form of flattery.Women love to be flattered.So do men.",
        "You live and learn.  Or you don't live long.",
        "Only a sadistic scoundrel - or a fool - tells the bald truth on social occasions.",
        "Be wary of strong drink.  It can make you shoot at tax collectors - and miss.",
        "The profession of shaman has many advantages.  It offers high status with a safe livelihood free of work in the dreary, sweaty sense.  " +
        "In most societies it offers legal privileges and immunities not granted to other men.  But it is hard to see how a man who has been given a mandate from on High to spread tidings of joy " +
        "to all mankind can be seriously interested in taking up a collection to pay his salary.  It causes one to suspect that the shaman is on the moral level of any other conman.  But it's lovely work if you can stomach it.",
        "Tilting at windmills hurts you more than the windmills.",
        "'Go to hell!' or other insult direct is all the answer a snoopy question rates.",
        "A man does not insist on physical beauty in a woman who builds up his morale.  After a while he realizes that she *is*beautiful - he just hadn't noticed at first.",
        "Natural laws have no pity.",
        "Freedom begins when you tell Mrs. Grundy to go fly a kite.",
        "Political tags - such as royalist, communist, democrat,populist, fascist, liberal, conservative, and so forth - are never basic criteria.",
        "The human race divides politically into those who want people to be controlled and those who have no such desire.  " +
        "The former are idealists acting from the highest motives of the greatest good for the greatest number.  The latter are surly curmudgeons, suspicious and lacking in altruism.  But they are more comfortable neighbours then the other sort.",
        "Sin lies only in hurting other people unnecessarily.  All other's ins' are invented nonsense.  (Hurting yourself is not sinful -just stupid.)",
        "Certainly the game is rigged.  Don't let that stop you.  If you don't bet, you can't win.",
        "Delusions are often functional.  A mother's opinions about her children's beauty, intelligence, goodness, etcetera ad nauseam,keep her from drowning them at birth.",
        "Never appeal to a man's better nature.  He may not have one.Invoking his self-interest gives you more leverage.",
        "You can have peace,  or you can have freedom.  Don't ever count on having both at once.",
        "A woman is not property.  Husbands who think otherwise are living in a dream world.",
        "Stupidity is not a sin.  The victim can't help being stupid.Stupidity cannot be cured with money, or through education, or by legislation.  But stupidity is the only universal capital crime. The sentence is death; " +
        " there is no appeal, and execution is carried out automatically and without pity.",
        "The correct way to punctuate a sentence that starts 'Of course it's none of my business but...' is to place a period after the word 'but'.  Don't use excessive force in supplying such morons with a period. " +
        " Cutting his throat is only a momentary pleasure and is bound to get you talked about.",
        "Formal courtesy between husband and wife is even more important than it is between strangers.",
        "Your friends will know you better in the first minute you meet then your acquaintances will know you in a thousand years.",
        "Argue for your limitations and, sure enough, they're yours.",
        "You are never given a wish without also being given the power to make it come true.  You may have to work for it though.",
        "Here is a test to find out whether your mission on earth is finished;  If you're alive, it isn't.",
        "In order to live free and happily, you must sacrifice boredom.It is not always an easy sacrifice.",
        "There is no limit to how gently you can apply a big hammer, but there definitely is to how hard you can hit with a small one.",
        "Hey, shit happens!",
        "Let he who doubts the existence of God observe the workings of our Government, then ponder the fact that mankind survives and prospers."
    ];

    switchQuote();
    window.setInterval("switchQuote()", 10000);
    function switchQuote(){
        var quote = document.getElementById("quote");
        quote.innerHTML = quote_list[(Math.floor(Math.random()*100))%quote_list.length];
    }


</script>


</body>