<?php
require_once('boot.php');

if ($_REQUEST['regsubmit'] ?? '' == "reg") {
    saveRegToSession();
    saveRegToDB();
    addContactToAC([
        "first_name" => $_SESSION['firstname'],
        "last_name" => $_SESSION['lastname'],
        "email" => $_SESSION['email'],
        "phone" => $_SESSION['phone'],
        "list_id" => $_CONFIG['ac_list_id'], 
        "affid" => $_SESSION['affid'],
        "event_date" => $_SESSION['event_date']
    ]);
    
    //redirectTo("bundle.php");
    redirectTo("bundle.php");
}

?>

<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Virtual Family Summit</title>

    <?php require_once('headerscripts.php'); ?>

</head>

<body>

    <div class="section1">

        <div class="container">
            <!--
            <div class="header row">
                
                
                <div class="navlinks col-8 d-none d-md-block">
                    <a href="">LINK</a> •
                    <a href="">LINK</a> •
                    <a href="">LINK</a> •
                    <a href="">LINK</a> •
                    <a href="">LINK</a>
                </div>
                
            </div><!-- eof header
            -->
            <div class="row p20">

                <div class="col-sm-12 col-md-6 secleft">
                    <div class="logo row">
                        <img src="imgs/famproject-logowhite-horz_350x35.png" alt="">
                    </div>
                    <div class="row eventdeets">
                        <div><i class="far fa-calendar-check"></i> Jan 21st-23rd</div>
                        <div><i class="fas fa-user-friends"></i> 20+ Speakers</div>
                        <div><i class="fas fa-map-marker-alt"></i> Virtual Event</div>
                    </div>
                    <h2><span class="pink">2021</span> Virtual Family Survival Summit</h2>
                    <div class="d-block d-md-none col-md-6 secright">
                        <div class="embed-container"><iframe src="https://www.youtube.com/embed/aDS6I1Mldj4"
                                frameborder="0"></iframe></div>
                    </div>
                    <p class="white bold">Join experts and thought leaders as they share tips and insights on how to
                        improve
                        yourself as a
                        parent, a couple and create better and lasting connections with your kids.</p>
                    <a href="" class="btn btn-lg" data-toggle="modal" data-target="#eventregpopup">Register For Free</a>

                </div>
                <div class="d-none d-md-block col-md-6 secright">
                    <div class="embed-container"><iframe src="https://www.youtube.com/embed/aDS6I1Mldj4"
                            frameborder="0"></iframe></div>
                </div>
            </div>

        </div><!-- eof container -->

    </div><!-- eof section1 -->

    <div class="container-fluid bgwhite section2">

        <div class="row">

            <div class="col-12 d-block d-md-none p0">

                <img src="imgs/motherson01.jpg" class="w-100">

            </div>

            <div class="col-md-6 secleft copytext">

                <h3>It’s been a tough year for the family</h3>

                <p>The last few months have been a very tough time for all of us. Divisiveness, rioting, movements,
                    illness, society being shut down. Parents having to work at home. Kids having to school at home.</p>

                <p>Everything seems to not be moving forward, but the media isn't covering one of the most important
                    aspects of our life that is under attack. Something that has been greatly affected by everything
                    that's happened this year. Something that is at the heart of Who We Are and what we become as
                    people, as a community and a society.</p>

                <p>These are our families. </p>

            </div>

            <div class="col-6 secright d-none d-md-block">

                <!--image only-->

            </div>

        </div><!-- eof row -->

    </div><!-- eof container-fluid section2 -->

    <div class="container-fluid bgwhite section3">

        <div class="row">

            <div class="col-12 d-block d-md-none p0">

                <img src="imgs/kidsmasksphones01.jpg" class="w-100">

            </div>

            <div class="col-6 secleft d-none d-md-block">

                <!--image only-->

            </div>

            <div class="col-md-6 secright copytext">

                <p>Kids are being yanked away from their social support of friends in schools. </p>

                <p>We've halted all of their activities, put electronic devices in front of their faces and told them
                    that's their connection for 8 to 10 hours a day. And after they finish their school work, their
                    social life and activities on the same devices are all they are left with. </p>

                <p>During which kids are Bombarded by negative stereotypes, hurtful messaging and fake lives lived
                    through social media. And the only way they know how to connect with anyone is thru these same
                    devices.</p>

                <p>Parents have had to learn to spend more time together during this lockdown and how to work from home
                    and school their children at the same time.</p>

            </div>

        </div><!-- eof row -->

    </div><!-- eof container-fluid section3 -->

    <div class="container-fluid section4">

        <div class="container textcenter white">

            <h2>Hurry Up</h2>

            <p>Last year our tickets sold fast so don’t miss. Conference will start in</p>

            <div class="countdown">
                <div class="countdownbox">
                    <div class="cntnumb" id="cdmonths">0</div>
                    <div class="cnttitle">months</div>
                </div>
                <!--
                <div class="countdownbox">
                    <div class="cntnumb" id="cdweeks">00</div>
                    <div class="cnttitle">weeks</div>
                </div>-->

                <div class="countdownbox">
                    <div class="cntnumb" id="cddays">00</div>
                    <div class="cnttitle">days</div>
                </div>

                <div class="countdownbox">
                    <div class="cntnumb" id="cdhours">00</div>
                    <div class="cnttitle">hours</div>
                </div>

                <div class="countdownbox">
                    <div class="cntnumb" id="cdminutes">00</div>
                    <div class="cnttitle">minutes</div>
                </div>
            </div>
            <a href="" class="btn btn-lg" data-toggle="modal" data-target="#eventregpopup">Register For Free</a>
        </div>

    </div><!-- eof container-fluid section4 -->

    <div class="container-fluid bgwhite section5">

        <div class="row white">

            <div class="secleft floatleft d-none d-sm-none d-md-block">

            </div>

            <div class="d-block d-sm-block d-md-none">
                <img src="imgs/infographic.jpg" class="w-100">
            </div>

            <div class="secright floatleft copytext">

                <h3>Changing Times for Families</h3>

                <p>Families have already started to show signs of being torn apart from the events of this year. The
                    amount of parents thinking about divorce is at all time high. Anxiety and depression in kids and
                    even parents is shooting through the roof. It's been reported that over a quarter of teens and young
                    adults contemplated suicide this year
                </p>

                <p>Family counselors say they're overloaded with people trying to find solutions for the circumstances
                    we've been all thrown into. We haven't even mentioned all of the new Financial worries families have
                    started to face. </p>

                <p>What's most alarming and scary are the increases of anxiety, depression, suicide, sadness, loneliness
                    in KIDS thats right not just Parents but kids.</p>

                <p>This is not because of trends of something that happened 5 or 10 years ago. It's because of something
                    that's happening right now this year to everyone of us. As parents and families we see it, we feel
                    it and we want to fix it. </p>

            </div>

        </div><!-- eof row white -->


    </div><!-- eof container-fluid section5 -->


    <div class="container-fluid fullcta">

        <div class="container">

            <div class="row">
                <h4>Make your family the best of 2021.<br>
                    Join the 2021 Virtual Family Survival Summit<br>
                    January 21, 22, and 23</h4>
            </div>

            <div class="row">

                <div class="col-md-6 text-sm-center text-md-right">
                    <h2>Grab your spot now</h2>
                </div>

                <div class="col-md-6 text-sm-center text-md-left"><a href="" class="btn btn-lg btn-reg px-2"
                        data-toggle="modal" data-target="#eventregpopup">Register For Free</a></div>

            </div>

        </div><!-- eof container -->

    </div><!-- eof container-fluid fullcta -->


    <!-- sof what is FAM -->
    <div class="container-fluid section6">

        <div class="container">

            <div class="row p20">
                <div class="col-12 textcenter">
                    <h2>What is the Family Survival Summit</h2>
                </div>

                <div class="col-sm-12 col-md-6 secleft white">

                    <p>We went out and looked for the right experts, researchers and thought leaders to help guide us
                        through
                        most of the issues affecting families.</p>

                    <p>Help and resources for families to become the center and most important aspect of our Lives. </p>

                    <p>To make sure that families in 2021 become better than 2020.</p>

                    <p>We've lined up leading experts and thought leaders who are currently helping thousands of other
                        people
                        through tough times. </p>

                    <p>This is going to be the biggest event that focuses on family connection and improving our family
                        life...ever. </p>

                    <p>During our three-day summit you're going to have the opportunity to hear from people who will
                        show us how to...</p>

                </div><!-- eof secleft -->

                <div class="col-sm-12 col-md-6 secright white">

                    <ul class="fambulls">

                        <li>Truly build better connections and have better conversations within your family</li>

                        <li>Help teenagers and parents overcome anxiety and depression</li>

                        <li>Develop loving and strong bonds between couples</li>

                        <li>Help parents navigate their kids development in different stages of their youth</li>

                        <li>Show parents better and new ways to manage money</li>

                        <li>Remove the overwhelm of managing kids screen time and social media usage</li>

                    </ul>

                    <p>...and much more</p>

                </div><!-- eof secright -->

            </div><!-- eof row -->

        </div><!-- eof container -->

    </div><!-- eof container-fluid section6 -->

    <!-- sof speakers -->
    <div class="container-fluid section7">

        <div class="container">

            <div class="row center">
                <h2>Summit Speakers and Thought Leaders</h2>
            </div>

            <div class="row">

                <div class="col speaker">
                    <img src="imgs/speaker-jenjones.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-brianwilloughb.jpg" alt="">
                </div>
                <div class="col speaker">
                    <img src="imgs/speaker-titaniajordan.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-andreadavis.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-kirkduncan.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-annemariemcdonald.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-ambertrueblood.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-reneeabrams.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-courtneyepps.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-brettbrimhall.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-brockbevell.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-cheritree.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-drwhitneywright.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-kateymcpherson.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-morganfautz.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-ryanlee.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-nellieharden.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-lifelaunch.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-dianeshephard.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-therelatefoundation.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-womensimpactacademy.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-jefferyflam.jpg" alt="">
                </div>

                <div class="col speaker">
                    <img src="imgs/speaker-jodihildabrandt.jpg" alt="">
                </div>

            </div>

        </div><!-- eof container -->

    </div><!-- eof container-fluid section7 -->

    <div class="container-fluid bgwhite section8">

        <div class="row">

            <div class="col-sm-6 secleft">

            </div>

            <div class="col-sm-6 secright bgpurple white center">

                <h4>Where is the summit happening</h4>

                <p>This year our summit going to be a 100% virtual event. </p>

                <p>From the comfort of your own home and with your family members if you want, you can watch every
                    speaker and thought leader.</p>

                <p><a href="" class="btn btn-lg" data-toggle="modal" data-target="#eventregpopup">Reserve your spot
                        now</a></p>

            </div>

        </div><!-- eof row white -->


    </div><!-- eof container-fluid section8 -->

    <!-- sof section9 -->
    <div class="container-fluid bgwhite section9">

        <div class="row">

            <div class="col-12 d-block d-md-none p0">

                <img src="imgs/bg03a.jpg" class="w-100">

            </div>

            <div class="col-md-6 secright copytext">

                <h3>Who is The Fam Project</h3>

                <p>We are a group of families, parents and kids that have come together to shine a light on the needs of
                    families.</p>

                <p>We wanted to provide some positive experiences and resources for the family. We are not perfect. That
                    is why we know this battle needs to be fought.</p>

                <p>Our only goal is to heal hearts and homes and make a better society because of it. To make sure there
                    is a source of light and good out there focusing on helping families become families.</p>

                <p>We have seen the effects of social media, screen usage, addictions, lack of communication, missing
                    connections, bad relationships and money problems in our own lives.
                </p>

                <p>It was time for us to do something about these problems. To start the movement of the fam project and
                    guide other families to happier and healthier lives together.</p>

            </div>

            <div class="col-6 secleft d-none d-md-block">

                <!--image only-->

            </div>

        </div><!-- eof row -->

    </div><!-- eof container-fluid section9 -->

    <!-- sof section10 -->
    <div class="container-fluid bgwhite section10">

        <div class="row">

            <div class="col-12 d-block d-md-none p0">

                <img src="imgs/bg04a.jpg" class="w-100">

            </div>

            <div class="col-6 secright d-none d-md-block">

                <!--image only-->

            </div>

            <div class="col-md-6 secleft copytext">

                <h3>Don’t miss this summit</h3>

                <p>So make sure to join us during this Summit. Your family will only be better for it. </p>

                <p>Get the most up-to-date and innovative teachings on what to do as a parent and how to navigate
                    together as one family. </p>

                <p>Make sure to sign up below before all of the spots are taken. </p>

                <p>This event is going to be packed full with speakers, thought leaders, excitement and family changing
                    ideas. And if you take only one small thought that helps your family, that's all the motivation we
                    need as the fam project to keep going. </p>

                <p>But don't worry, there will be plenty of tips and tricks to help you as a parent, a couple, and as a
                    family. </p>

                <p>So make sure to reserve your spot today for our 2021 family Survival Summit and let's start building
                    stronger and happier families together.</p>

            </div>

        </div><!-- eof row -->

    </div><!-- eof container-fluid section10 -->


    <div class="container-fluid fullcta">

        <div class="container">

            <div class="row">
                <h4>Make your family the best of 2021.<br>
                    Join the 2021 Virtual Family Survival Summit<br>
                    January 21, 22, and 23</h4>
            </div>

            <div class="row">

                <div class="col-md-6 text-sm-center text-md-right">
                    <h2>Grab your spot now</h2>
                </div>

                <div class="col-md-6 text-sm-center text-md-left"><a href="" class="btn btn-lg btn-reg px-2"
                        data-toggle="modal" data-target="#eventregpopup">Register For Free</a></div>

            </div>

        </div><!-- eof container -->

    </div><!-- eof container-fluid fullcta -->


    <!-- sof what is section11 -->
    <div class="container-fluid section11">

        <div class="container white">

            <div class="row p20">


                <div class="col-md-6">
                    <h2>Focused on Helping
                        <!--<img src="imgs/fam-fundraisers-logo.png" style="max-width:40%;"
                            class="img-fluid p-3">-->
                    </h2>
                    <p>We are always focused on helping families in need. </p>

                    <p>As part of The Fam Project we have also created fam fundraisers.</p>

                    <p>Every time someone joins one of our programs we are giving 10% to non profit and charitable
                        organizations.</p>

                    <p>So part of anything we bring in goes to more than just our organization.</p>

                    <p>We give a portion towards other great causes trying to save families like, saving kids from child
                        trafficking, fighting teen and young adult addiction, providing resources for homeless kids and
                        helping
                        parents and families that have special needs.</p>

                    <p>We want to make sure that organizations that are doing good for families in the world have a
                        resource
                        like us to keep going and continue.</p>
                </div>

                <div class="col-md-6">
                    <img src="imgs/fam-service.png" class="img-fluid">
                </div>

            </div><!-- eof row -->

        </div>

    </div><!-- eof container section11 -->


    <!-- sof footer -->
    <div class="footer">
        <a href="" data-toggle="modal" data-target="#privacypolicy">Privacy Policy</a>
        |
        <a href="" data-toggle="modal" data-target="#termsofuse">Terms of Use</a>
    </div><!-- eof footer -->


    <!-- Modal 
 data-toggle="modal" data-target="#eventregpopup"
-->
    <div class="modal modal-reg" id="eventregpopup" tabindex="-1" role="dialog" aria-labelledby="eventregpopupTitle"
        aria-hidden="true">

        <div class="d-none d-md-block p20 col-md-7 textright modalleft"></div>

        <div class="col-12 col-md-5 modalright">

            <div class="modal-body">

                <a class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>

                <h4>Register now for the</h4>

                <h3>2021 Virtual Family Survival Summit</h3>

                <h4>January 21, 22 & 23</h4>

                <form method="post" class="form-group">
                    <input type="hidden" name="event_date" value="2021-01-21">
                    <div class="form-group">
                        <label for="">*First Name</label>
                        <input type="text" name="firstname" class="form-control" required value="<?php echo $_SESSION['firstname'] ?? '' ? $_SESSION['firstname'] ?? '' : ''; ?>">
                        
                    </div>
                    <div class="form-group">
                        <label for="">*Last Name</label>
                        <input type="text" name="lastname" class="form-control" required value="<?php echo $_SESSION['lastname'] ?? '' ? $_SESSION['lastname'] ?? '' : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">*Email</label>
                        <input type="email" name="email" class="form-control" required value="<?php echo $_SESSION['email'] ?? '' ? $_SESSION['email'] ?? '' : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="phone" name="phone" class="form-control" value="<?php echo $_SESSION['phone'] ?? '' ? $_SESSION['phone'] ?? '' : ''; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn" name="regsubmit" value="reg">Complete
                            Registration</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                    <div class="form-group">
                        <small>We respect your information and will never share or sell it to anyone.</small>
                    </div>
                </form>
            </div>

        </div>

    </div>


    <div class="modal" id="privacypolicy" tabindex="-1" role="dialog" aria-labelledby="privacypolicyTitle"
        aria-hidden="true">

        <a class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>

        <div class="row">
            <div class="col-12">
                <div class="modal-body">
                    <?php include('tos/privacypolicy.php'); ?>
                </div>
            </div>
        </div>

    </div>


    <div class="modal" id="termsofuse" tabindex="-1" role="dialog" aria-labelledby="termsofuseTitle" aria-hidden="true">

        <a class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>

        <div class="row">
            <div class="col-12">
                <div class="modal-body">
                    <?php include('tos/termsofuse.php'); ?>
                </div>
            </div>
        </div>

    </div>


    <?php include('footerscripts.php') ; ?>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 21, 2021 15:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("cddays").innerHTML = days;
    document.getElementById("cdhours").innerHTML = hours;
    document.getElementById("cdminutes").innerHTML = minutes;
    //document.getElementById("cdseconds").innerHTML = seconds;

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>


<!--preload reg form image-->
<img src="imgs/bg-reg-modal.jpg" style="display:none;">


</body>

</html>
