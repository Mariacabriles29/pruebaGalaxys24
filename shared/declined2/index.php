<?php 
require "lang_declined.php";
// $lang='da';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title><?=$TITTLE_DECLINED?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo GEO_PATH; ?>/declined/images/error.png" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo GEO_PATH; ?>/declined/css/bootstrap.min.css" rel="stylesheet">

    <!-- Startup CSS -->
    <link href="<?php echo GEO_PATH; ?>/declined/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="elements/js/html5shiv.js"></script>
  <script src="elements/js/respond.min.js"></script>
<![endif]-->

    <!-- Custom Google Font : Montserrat (Choose other: http://www.google.com/fonts/ ) -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <style>
        .light .masthead {
            background: none !important;
        }
    </style>

</head>

<body class="light">

    <!-- Header Starts -->
    <main id="top" class="masthead" role="main">
        <div class="container">
            <!-- Startup Logo -->
            <div class="logo">
                <a href="#"><img style="width: 15%;" src="<?php echo GEO_PATH; ?>/declined/images/error.png" alt="Error Icon"></a>
            </div>
            <h5 class="main-title" style="font-weight:bolder;"><?=$TITTLE_DECLINED?></h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo $TITTLE_DECLINED_1;
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo $TITTLE_DECLINED_2;
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo $TITTLE_DECLINED_3;
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo $TITTLE_DECLINED_4;
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo $TITTLE_DECLINED_5;
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo $TITTLE_DECLINED_6;
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo $TITTLE_DECLINED_7;
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo $TITTLE_DECLINED_8;
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo $TITTLE_DECLINED_9;
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo $TITTLE_DECLINED_10;
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo $TITTLE_DECLINED_11;
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo $TITTLE_DECLINED_9;
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo $TITTLE_DECLINED_9;
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo $TITTLE_DECLINED_12;
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo $TITTLE_DECLINED_13;
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo $TITTLE_DECLINED_14;
                    }else{

                        echo @$_GET['message'];
                    }
                   
                } else {
                    echo $TITTLE_DECLINED_15;
                }
                ?>
            </h1>
            <!-- Sub Title -->
            <h4 class="sub-title">
            <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo $TEXT_DECLINED_1;
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo $TEXT_DECLINED_2;
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo $TEXT_DECLINED_3;
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo $TEXT_DECLINED_4;
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo $TEXT_DECLINED_5;
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo $TEXT_DECLINED_6;
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo $TEXT_DECLINED_7;
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo $TEXT_DECLINED_8;
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo $TEXT_DECLINED_8;
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo $TEXT_DECLINED_7;
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo $TEXT_DECLINED_7;
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo $TEXT_DECLINED_7;
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo $TEXT_DECLINED_9;
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo $TEXT_DECLINED_10;
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo $TEXT_DECLINED_11;
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo $TEXT_DECLINED_12;
                    }else{

                        echo $TEXT_DECLINED_13;
                    }
                   
                } else {
                    echo $TEXT_DECLINED_13;
                }
                ?>

                
            </h4>

        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?lang=<?php echo strtolower($_SESSION['lang']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>&currency=<?php echo strtolower($_GET['currency']); ?>&m=<?php echo $_SESSION['m']; ?>&b=<?php echo $_SESSION['b']; ?>" id="reintentar"> <?=$TEXT_BOTON_DECLINED ?> </a>



                </div>



            </div>
        </form>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p>&copy; 2024 All rights reserved</p>
            </div>
        </section>
        <!-- // End Client Logos -->

    </div>
    <!-- // Container Ends -->

    <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo GEO_PATH; ?>/declined/js/jquery.js"></script>
</body>

</html>