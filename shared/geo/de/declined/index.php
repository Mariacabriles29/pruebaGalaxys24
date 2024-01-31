<!DOCTYPE html>
<html lang="de">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Abgelehnt Transaktion</title>
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
            <h5 class="main-title" style="font-weight:bolder;">Abgelehnt Transaktion</h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Unzureichende Mittel';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Card 3D Secure ist nicht aktiviert.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3D Secure ist fehlgeschlagen';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Transaktion ist abgelaufen';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Vom Betrugsbekämpfungssystem abgelehnt.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Ungültige Kartennummer';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Empfehlungs- oder eingeschränkte Karte';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Kommunikationsfehler mit der Bank';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Abgelehnt Transaktion';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Autorisierung verweigert';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Allgemeine Ablehnung durch die Bank';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Abgelehnt Transaktion';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Abgelehnt Transaktion';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Ungültige CVV-Nummer';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Verlorene oder gestohlene Karte';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Karte abgelaufen oder Ablaufdatum ungültig';
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
                        echo 'Karte ohne genügend Mittel für die Transaktion. Bitte verwenden Sie eine Karte, die über ausreichend Mittel verfügt, um die Zahlung vorzunehmen.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'Für die verwendete Karte ist keine 3D-Überprüfung in der eigenen Bank aktiviert. Bitte aktivieren Sie die 3D-Überprüfung der Karte oder verwenden Sie eine andere Karte einer anderen Bank, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'Die 3D-Code-Verifizierung ist fehlgeschlagen. Bitte versuchen Sie erneut, den Code korrekt einzugeben, oder verwenden Sie eine andere Karte einer anderen Bank, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'Für die verwendete Karte ist die 3D-Überprüfung in der eigenen Bank nicht aktiviert, oder die 3D-Codeüberprüfung ist fehlgeschlagen. Bitte aktivieren Sie die 3D-Überprüfung der Karte bei Ihrer Bank oder versuchen Sie erneut, den Code korrekt einzugeben, oder verwenden Sie eine andere Karte einer anderen Bank, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Die Transaktion wurde von unserem Sicherheitssystem abgelehnt. Wir empfehlen, dass Sie eine andere Karte verwenden, um die Zahlung vorzunehmen, und/oder geben Sie alle Daten korrekt ein.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Die Transaktion wurde wegen Eingabe einer ungültigen Kartennummer abgelehnt. Bitte stellen Sie sicher, dass Sie die Kartennummer korrekt eingeben, oder bezahlen Sie die Transaktion mit einer anderen Karte.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Die Transaktion wurde abgelehnt. Bitte verwenden Sie eine andere Karte, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Die Transaktion wurde aufgrund eines Kommunikationsfehlers mit der Bank abgelehnt. Bitte warten Sie einige Minuten, um die Transaktion erneut durchzuführen, oder verwenden Sie eine andere Karte, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Die Transaktion wurde aufgrund eines Kommunikationsfehlers mit der Bank abgelehnt. Bitte warten Sie einige Minuten, um die Transaktion erneut durchzuführen, oder verwenden Sie eine andere Karte, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Die Transaktion wurde abgelehnt. Bitte verwenden Sie eine andere Karte, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Die Transaktion wurde abgelehnt. Bitte verwenden Sie eine andere Karte, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Die Transaktion wurde abgelehnt. Bitte verwenden Sie eine andere Karte, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Die Transaktion wurde abgelehnt. Bitte verwenden Sie eine andere Karte, um die Transaktion zu bezahlen und stellen Sie sicher, dass Sie alle Daten korrekt eingeben.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Die Transaktion wurde abgelehnt, weil eine ungültige CVV-Nummer eingegeben wurde. Bitte stellen Sie sicher, dass Sie die CVV-Nummer korrekt eingeben, oder bezahlen Sie die Transaktion mit einer anderen Karte.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Die Transaktion wurde abgelehnt, weil eine gesperrte Kartennummer eingegeben wurde. Bitte verwenden Sie eine andere Karte, um die Transaktion zu bezahlen.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Die Transaktion wurde abgelehnt, weil eine ungültige Ablaufnummer eingegeben wurde. Bitte stellen Sie sicher, dass Sie die Ablaufnummer korrekt eingeben, oder bezahlen Sie die Transaktion mit einer anderen Karte.';
                    }else{

                        echo "Überprüfen und korrigieren Sie Ihre Daten, indem Sie auf die Schaltfläche unten klicken.";
                    }
                   
                } else {
                    echo "Überprüfen und korrigieren Sie Ihre Daten, indem Sie auf die Schaltfläche unten klicken.";
                }
                ?>

                
            </h4>
        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar"> Erneut versuchen </a>

                </div>



            </div>
        </form>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p>&copy; 2024 Alle rechte vorbehalten</p>
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