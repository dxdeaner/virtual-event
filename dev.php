<?php

$_SESSION['email'] = 'test@testing.com';

require_once('boot.php');
require_once('stripe.php');
?>

<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fam Event</title>

    <?php require_once('headerscripts.php'); ?>

    <script src="https://js.stripe.com/v3/"></script>

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
                    <h1>CONGRATULATIONS!</h1>
                    <h3>You are now registered and have a spot reserved for the upcoming</h3>
                    <h2><span class="pink">2020</span> VIRTUAL FAMILY SURVIVAL SUMMIT</h2>
                </div>

            </div>

        </div><!-- eof container -->

    </div><!-- eof section1 -->

    <div class="container">
        <div class="video">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/492605284?autoplay=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
        </div>
    </div>

    <div class="container-fluid addtocart">

        <div class="container textcenter" id="continue" style="display:none;">
            <button class="btn btn-lg px-5 py-2 bigger white orangebg" id="checkout-button">Get Access</button>
            <!--<p><a href="thanks.php?nothanks=1" class="btn btn-link small nobg pink">no thanks</a></p>--> 
        </div>

        <script type="text/javascript">
            var stripe = Stripe('pk_live_MMAhp3Gaj06ZQ8J5B3RZdM89');
            var checkoutButton = document.getElementById('checkout-button');
            checkoutButton.addEventListener('click', function() { return stripe.redirectToCheckout({ sessionId: '<?php echo $session['id']; ?>'})});
        </script>

    </div><!-- eof container-fluid section4 -->

   <!-- sof footer -->
    <div class="footer">
        <a href="" data-toggle="modal" data-target="#privacypolicy">Privacy Policy</a>
        |
        <a href="" data-toggle="modal" data-target="#termsofuse">Terms of Use</a>
        
        <?php if(empty($_SESSION['regconv'])) { ?> 
        <iframe src="https://www.fd45trk.com/?nid=942&oid=3&transaction_id=<?php echo $_SESSION['tid'] ?>&email=<?php echo $_SESSION['email'] ?>" scrolling="no"
        frameborder="0" width="1" height="1"></iframe>
        <?php 
            $_SESSION['regconv'] = "1";
        } ?>
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

</body>

</html>


<!--time delays-->
<script type="text/javascript">
    if ((screen.width<=768)) {
        //for the video
        $(document).ready(function() {
            setTimeout(function() {
                $("#continue").toggle()
                //$("#progress").toggle()
            }, 6000);
        });
    }
    else {
        //for the video
        $(document).ready(function() {
            setTimeout(function() {
                $("#continue").toggle()
                //$("#progress").toggle()
            }, 3000);
        });
    }

    /*for the videoprogress
    $(document).ready(function() {
        setTimeout( function () {
            $('div#show').load("/inc/videoprogress.php");
        }, 10000 );
    });*/
</script>