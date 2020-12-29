<?php

require_once('boot.php');

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

            <div class="header row">
                <div class="logo col textcenter">
                    <img src="imgs/famproject-logowhite-horz_350x35.png" alt="">
                </div>
            </div><!-- eof header -->

            <div class="row p20">
                <div class="col textcenter">
<?php 
if(!empty($_GET['bundle'])) { ?>
                    <h1>Congratulations on your Purchase of the Fam Project Summit Bundle.</h1>
                    <h3>We will be launching your access to the product at the upcoming event.</h3>
                    <h2>See event details below.</h2>
<?php } else { ?>
                    <h1 class="thxheader">CONGRATULATIONS!</h1>
<?php } ?>
                    <h3>You are now registered and have a spot reserved for the upcoming</h3>
                    <h2><span class="pink">2020</span> VIRTUAL FAMILY SURVIVAL SUMMIT</h2>
                </div>

            </div>

        </div><!-- eof container -->

    </div><!-- eof section1 -->

    <div class="container-fluid">

        <div class="container textcenter">

            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-4">
                    <img src="imgs/january-calendar.jpg" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-5 center pt-5">

                    <h1 class="black">JANUARY 21, 22, & 23</h1>

                    <p class="big">Make Sure to create a reminder for the upcoming dates so you don't miss it!</p>
                </div>
            </div>

        </div>

    </div><!-- eof container-fluid section4 -->

    <!-- sof what is FAM -->
    <div class="container-fluid">

        <div class="container">

            <div class="row p20 textcenter justify-content-md-center">
                <div class="col-12">
                    <h2 class="black">NEXT STEPS</h2>
                </div>

                <div class="col-sm-12 col-md-4 secleft">
                    <p>Watch for an email from The Fam Project with your link and details.</p>
                    <p><img src="imgs/email-icon.png" class="img-fluid"></p>
                </div><!-- eof secleft -->

                <div class="col-sm-12 col-md-4 secright">
                    <p>Join our Facebook group for goodies and content before the event.</p>
                    <p><a href="https://www.facebook.com/groups/thefamproject" target="_blank"><img src="imgs/facebook-group.png"
                                class="img-fluid"></a></p>
                </div><!-- eof secright -->

            </div><!-- eof row -->

        </div><!-- eof container -->

    </div><!-- eof container-fluid section6 -->

    <!-- sof speakers -->
    <div class="container-fluid section7">

        <div class="container">

            <div class="row center">
                <h2>Thanks for registering!
                    <br>
                    Let's make 2021 the year for the FAMILY!
                </h2>
            </div>

            <div class="row">
                <div class="col textcenter">
                    <img src="imgs/famproject-logowhite-horz_350x35.png">
                </div>
            </div>

        </div><!-- eof container -->

    </div><!-- eof container-fluid section7 -->

    <!-- sof footer -->
    <div class="footer">
        <a href="" data-toggle="modal" data-target="#privacypolicy">Privacy Policy</a>
        |
        <a href="" data-toggle="modal" data-target="#termsofuse">Terms of Use</a>

    </div><!-- eof footer -->



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

<?php 
if(!empty($_GET['bundle']) && empty($_SESSION['bundconv'])) { ?>
<iframe src="https://www.fd45trk.com/?nid=942&event_id=7&oid=3&transaction_id=<?php echo $_SESSION['tid'] ?>&email=<?php echo $_SESSION['email'] ?>" scrolling="no" frameborder="0" width="1" height="1"></iframe>
<?php
    $_SESSION['bundconv'] = '1';
} ?>

</body>

</html>