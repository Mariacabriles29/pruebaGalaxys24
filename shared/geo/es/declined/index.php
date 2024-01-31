<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>Transacción Rechazada</title>
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
            <h5 class="main-title" style="font-weight:bolder;">Transacción Rechazada</h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Fondos insuficientes';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'La verificación 3D de la tarjeta no está activa';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'La verificación 3D falló.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'La transacción ha expirado';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Rechazada por el sistema de seguridad.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Número de tarjeta inválido';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Tarjeta restringida';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Error de comunicación con el banco';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Ocurrió un error con la transacción.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'La autorización fue rechazada';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Transacción Declinada.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Transacción Declinada.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Transacción Declinada.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'CVV inválido';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Tarjeta perdida o robada';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Tarjeta caducada o fecha de caducidad inválida';
                    }else{

                        echo @$_GET['message'];
                    }
                   
                } else {
                    echo "¡algo salió mal!";
                }
                ?>
            </h1>
            <!-- Sub Title -->
            <h4 class="sub-title">
            <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Tarjeta sin dinero suficiente para realizar la transacción. Por favor usa una tarjeta que tenga dinero suficiente para realizar el pago.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'La tarjeta usada no tiene activada la verificación 3D en su propio banco. Por favor activa la verificación 3D de la tarjeta o usa otra tarjeta de otro banco para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'La verificación del código 3D ha fallado. Por favor vuelva a intentarlo asegurándose de introducir el código correctamente o usa otra tarjeta de otro banco para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'La tarjeta usada no tiene activada la verificación 3D en su propio banco o la verificación del código 3D ha fallado. Por favor activa la verificación 3D de la tarjeta en su banco o vuelva a intentarlo asegurándose de introducir el código correctamente o usa otra tarjeta de otro banco para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'La transacción ha sido rechazada por nuestro sistema de seguridad. Recomendamos usar otra tarjeta diferente para realizar el pago y/o introducir todos los datos correctamente.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'La transacción ha sido rechazada por introducir un número de tarjeta inválido. Por favor asegúrese de introducir el número de tarjeta correctamente o use otra tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'La transacción ha sido rechazada. Por favor usa una tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'La transacción ha sido rechazada por un error de comunicación con el banco. Por favor espere unos minutos para realizar de nuevo la transacción o use otra tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'La transacción ha sido rechazada por un error de comunicación con el banco. Por favor espere unos minutos para realizar de nuevo la transacción o use otra tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'La transacción ha sido rechazada. Por favor usa una tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'La transacción ha sido rechazada. Por favor usa una tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'La transacción ha sido rechazada. Por favor usa una tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'La transacción ha sido rechazada. Por favor usa una tarjeta distinta para realizar el pago de la transacción y asegúrese de introducir todos los datos correctamente.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'La transacción ha sido rechazada por introducir un número de CVV inválido. Por favor asegúrese de introducir el número de CVV correctamente o use otra tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'La transacción ha sido rechazada por introducir un número de tarjeta bloqueada. Por favor use otra tarjeta distinta para realizar el pago de la transacción.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'La transacción ha sido rechazada por introducir un número de caducidad inválido. Por favor asegúrese de introducir el número de expiración correctamente o use otra tarjeta distinta para realizar el pago de la transacción.';
                    }else{

                        echo "Verifique y corrija sus datos haciendo clic en el botón de abajo";
                    }
                   
                } else {
                    echo "Verifique y corrija sus datos haciendo clic en el botón de abajo";
                }
                ?>

                
            </h4>

        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>" id="reintentar"> Intentar otra vez </a>


                </div>



            </div>
        </form>
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
    <script type="text/javascript" src="<?php echo GEO_PATH; ?>/declined/js/jquery.js"></script>
</body>

</html>