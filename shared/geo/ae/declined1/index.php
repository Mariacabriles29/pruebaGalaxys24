<?php
require '../db.php';
require '../constant.php';

require '../php/shared_lang.php';

// unix, linux, mac
if (DIRECTORY_SEPARATOR === '/') {
    $cur_dir = explode('/', getcwd());
    $sector=$cur_dir[count($cur_dir)-5];
}

// on windows server
if (DIRECTORY_SEPARATOR === '\\') {
    $cur_dir = explode('\\', getcwd());
    $sector=$cur_dir[count($cur_dir)-5];
}

?>

<!DOCTYPE html>
<html lang="<?= $sector ?>">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title><?= $DECLINED_TITLE_1 ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo GEO_PATH; ?>/declined/images/error.png" />

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Startup CSS -->
    <link href="css/style.css" rel="stylesheet">

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
            <h5 class="main-title" style="font-weight:bolder;"><?= $DECLINED_TITLE_1 ?></h5>
            <!-- Hero Title -->
            <h1 class="main-title"><?= (@$_GET['message']) ? @$_GET['message'] : $DECLINED_TITLE_2 ?></h1>
            <!-- Sub Title -->
            <h4 class="sub-title"><?= $DECLINED_SUBTITLE ?></h4>

        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn btn-danger" href="<?= $BASE_URL; ?>/index.php?currency=<?= strtolower($_GET['currency']); ?>&affiliate_id=<?= strtolower($_GET['affiliate_id']); ?>&lp=<?= strtolower($_GET['lp']); ?>" id="reintentar">
                        <?= $DECLINED_BTN ?>
                    </a>


                </div>



            </div>
        </form>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p><?= $FOOT_RIGHTS_2 ?></p>
            </div>
        </section>
        <!-- // End Client Logos -->

    </div>
    <!-- // Container Ends -->

    <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="./js/planes.js"></script>
</body>

</html>