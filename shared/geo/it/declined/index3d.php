<!DOCTYPE html>
<html lang="it">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Transazione Rifiutata</title>
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
            <h5 class="main-title" style="font-weight:bolder;">Transazione rifiutata</h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Fondi insufficienti';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo '3D secure per la carta non abilitato.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo '3D secure non andato a buon fine';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'La transazione è scaduta';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Rifiutata dal sistema antifrode.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Numero di carta non valido';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Rinvio o carta limitata';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Errore di comunicazione con la banca';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Transazione rifiutata';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Autorizzazione rifiutata';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Rifiuto generico da parte della banca';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Transazione rifiutata';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Transazione rifiutata';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'Codice CVV non valido';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Carta smarrita o rubata';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Carta scaduta o data di scadenza non valida';
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
                        echo 'La carta non dispone di fondi sufficienti per effettuare la transazione. Ti preghiamo di utilizzare una carta che disponga di denaro sufficiente per l’esecuzione del pagamento.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'La carta utilizzata non presenta la verifica 3D attivata presso la banca emittente. Per pagare la transazione, ti preghiamo di attivare la verifica 3D della carta oppure di utilizzare una carta emessa da un’altra banca.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'La verifica 3D del codice non è andata a buon fine. Ti preghiamo di riprovare, accertandoti di inserire il codice correttamente. In alternativa, utilizza una carta emessa da un’altra banca per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'La carta utilizzata non presenta la verifica 3D attivata presso la banca emittente oppure la verifica 3D del codice non è andata a buon fine. Ti preghiamo di abilitare la verifica 3D della carta presso la tua banca o di riprovare, accertandoti di inserire il codice correttamente. In alternativa, utilizza una carta una carta emessa da un’altra banca per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'La transazione è stata rifiutata dal nostro sistema di sicurezza. Per effettuare il pagamento, ti suggeriamo di utilizzare una carta diversa e/o di inserire tutti i dati correttamente.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'La transazione è stata rifiutata per aver inserito un numero di carta non valido. Ti preghiamo di accertarti di aver inserito correttamente il numero della carta. In alternativa, utilizza una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'La transazione è stata rifiutata. Ti preghiamo di utilizzare una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'La transazione è stata rifiutata a causa di un errore di comunicazione con la banca. Prima di effettuare nuovamente la transazione, ti preghiamo di attendere qualche minuto. In alternativa, utilizza una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'La transazione è stata rifiutata a causa di un errore di comunicazione con la banca. Prima di effettuare nuovamente la transazione, ti preghiamo di attendere qualche minuto. In alternativa, utilizza una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'La transazione è stata rifiutata. Ti preghiamo di utilizzare una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'La transazione è stata rifiutata. Ti preghiamo di utilizzare una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'La transazione è stata rifiutata. Ti preghiamo di utilizzare una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'La transazione è stata rifiutata. Ti preghiamo di utilizzare una carta diversa per pagare la transazione o di accertarti di aver inserito correttamente tutti i dati.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'La transazione è stata rifiutata, poiché è stato inserito un codice CVV non valido. Ti preghiamo di accertarti di aver inserito correttamente il codice CVV. In alternativa, utilizza una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'La transazione è stata rifiutata, poiché è stato inserito il numero di una carta bloccata. Ti preghiamo di utilizzare una carta diversa per pagare la transazione.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'La transazione è stata rifiutata, poiché è stata inserita una data di scadenza non valida. Ti preghiamo di accertarti di aver inserito la data di scadenza corretta. In alternativa, utilizza una carta diversa per pagare la transazione.';
                    }else{

                        echo "Verifica e correggi i tuoi dati, cliccando sul pulsante qui sotto.";
                    }
                   
                } else {
                    echo "Verifica e correggi i tuoi dati, cliccando sul pulsante qui sotto.";
                }
                ?>

                
            </h4>
        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar"> Riprova </a>


                </div>



            </div>
        </form>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p>&copy; 2024 Tutti i diritti riservati</p>
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