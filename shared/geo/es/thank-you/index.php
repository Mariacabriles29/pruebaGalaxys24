<?php
/*
$data = json_decode(file_get_contents('php://input'), true);
echo $data;*/

$v1 = $_GET['id'];
$v2 = $_GET['cur'];
$v3 = $_GET['ctype']; 


$url = $API_URL . 'secureauth/' . $v1.'/'.$v2.'/'.$v3;

header("refresh: 5; url = $url");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Gracias!</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo ASSET_PATH; ?>/images/thank-you/check.png" />

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
                <a href="#"><img src="<?php echo GEO_PATH; ?>/thank-you/images/check.png" alt="Error Icon"></a>
            </div>
            <!-- Hero Title -->
            <h1 class="main-title"> ¡Gracias! </h1>
            <!-- Sub Title -->
            <h4 class="sub-title">Su pago se realizó con éxito. Pronto recibirá información por correo electrónico.</h4>

        </div>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p>&copy; 2024 Todos los derechos reservados</p>
            </div>
        </section>
        <!-- // End Client Logos -->

    </div>
    <!-- // Container Ends -->

    <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo ASSET_PATH; ?>/js/jquery.js"></script>
    <script src="<?php echo ASSET_PATH; ?>/js/bootstrap.min.js"></script>
</body>

</html>