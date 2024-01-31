
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Declined Transaction</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo GEO_PATH; ?>/declined/images/error.png" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo GEO_PATH; ?>/thank-you/css/bootstrap.min.css" rel="stylesheet">

    <!-- Startup CSS -->
    <link href="<?php echo GEO_PATH; ?>/thank-you/css/style.css" rel="stylesheet">

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
            <h5 class="main-title" style="font-weight:bolder;">Declined Transaction</h5>
            <!-- Hero Title -->
            <h1 class="main-title"><?php if (@$_GET['message']) {echo @$_GET['message'];} else {echo "something went wrong!";}?> </h1>
            <!-- Sub Title -->
            <h4 class="sub-title">Check and correct your data by clicking on the button below </h4>

        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>" style="background: #e54243;color: white" id="reintentar"> Try again </a>


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
    <script type="text/javascript" src="<?php echo GEO_PATH; ?>/declined/js/planes.js"></script>
</body>

</html>