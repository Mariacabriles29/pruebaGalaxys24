<!DOCTYPE html>
<html lang="dk">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Declined Transaction</title>
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
            <h5 class="main-title" style="font-weight:bolder;">Afvist transaktion</h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Utilstrækkelige midler';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Kortets 3D-sikkerhed er ikke aktiveret.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3D-sikkerhed mislykkedes';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Transaktionen er udløbet';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Afvist af system til bekæmpelse af svindel.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Ugyldigt kortnummer';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Forbudt eller begrænset kort';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Kommunikationsfejl med bank';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Afvist transaktion';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Godkendelsen gik ikke igennem';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Generisk afvisning fra banken';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Afvist transaktion';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Afvist transaktion';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Ugyldig CVV';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Mistet eller stjålet kort';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Kortet er udløbet eller udløbsdatoen ugyldig';
                    }else{

                        echo @$_GET['message'];
                    }
                   
                } else {
                    echo "something went wrong!";
                }
                ?>
            </h1>
            <!-- Sub Title -->
            <h4 class="sub-title">
            <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Kortet har ikke tilstrækkelige midler til at gennemføre transaktionen. Brug et kort, der har tilstrækkelige midler til at foretage betalingen.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Det anvendte kort har ikke 3D-bekræftelse aktiveret i dets tilknyttede bank. Aktivér 3D-bekræftelse af kortet, eller brug et kort fra en anden bank til at betale for transaktionen.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'Bekræftelse af 3D-koden mislykkedes. Prøv igen, og sørg for at indtaste koden korrekt, eller brug et kort fra en anden bank til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Det anvendte kort har ikke 3D-bekræftelse aktiveret i dets tilknyttede bank, eller bekræftelse af 3D-kode mislykkedes. Aktivér 3D-bekræftelse af kortet i din bank, eller prøv igen, og sørg for at indtaste koden korrekt, eller brug et kort fra en anden bank til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Transaktionen er blevet afvist af vores sikkerhedssystem. Vi anbefaler, at du bruger et andet kort til at foretage betalingen og/eller indtaste alle oplysninger korrekt.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Transaktionen er blevet afvist på grund af ugyldigt indtastet kortnummer. Sørg for at indtaste kortnummeret korrekt, eller brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Transaktionen er blevet afvist. Brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Transaktionen blev afvist på grund af en kommunikationsfejl med banken. Vent et par minutter, og foretag transaktionen igen, eller brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Transaktionen blev afvist på grund af en kommunikationsfejl med banken. Vent et par minutter, og foretag transaktionen igen, eller brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Transaktionen er blevet afvist. Brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Transaktionen er blevet afvist. Brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Transaktionen er blevet afvist. Brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Transaktionen er blevet afvist. Brug et andet kort til at betale for transaktionen, og sørg for at indtaste alle oplysningerne korrekt.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Transaktionen blev afvist, fordi der blev indtastet et ugyldigt CVV-nummer. Sørg for at indtaste CVV-nummeret korrekt, eller brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Transaktionen blev afvist, fordi der blev indtastet et spærret kortnummer. Brug et andet kort til at betale for transaktionen.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Transaktionen blev afvist, fordi der blev angivet en ugyldigt udløbsdato. Sørg for at indtaste udløbsdatoen korrekt, eller brug et andet kort til at betale for transaktionen.';
                    }else{

                        echo "Kontrollér og ret dine oplysninger ved at klikke på knappen nedenfor";
                    }
                   
                } else {
                    echo "Kontrollér og ret dine oplysninger ved at klikke på knappen nedenfor";
                }
                ?>

                
            </h4>

        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar"> Prøv igen </a>



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