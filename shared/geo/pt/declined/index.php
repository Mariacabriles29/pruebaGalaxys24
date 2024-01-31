<!DOCTYPE html>
<html lang="pt">

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
            <h5 class="main-title" style="font-weight:bolder;">Transação Recusada</h5>
            <!-- Hero Title -->
            <h1 class="main-title">
                <?php 
                if (@$_GET['message']) {

                    if(@$_GET['message'] == 'Insufficient funds'){
                        echo 'Fundos insuficientes';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'O cartão 3D secure não está ativado.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'O 3D secure falhou';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'A transação expirou';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'Recusado pelo sistema antifraude.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'Número de cartão inválido';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'Cartão de indicação ou restrito';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'Erro de comunicação com o banco';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'Transação Recusada';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'Autorização recusada';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'Recusa geral do banco';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'Transação Recusada';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'Transação Recusada';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'CVV inválido';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'Cartão perdido ou roubado';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'Cartão caducado ou data de validade inválida';
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
                        echo 'Cartão sem fundos suficientes para fazer a transação. Por favor, utilize um cartão que tenha dinheiro suficiente para efetuar o pagamento.';
                    }else if(@$_GET['message'] == 'Card 3D secure is not enabled.'){
                        echo 'O cartão utilizado não tem a verificação 3D ativada no seu próprio banco. Por favor, ative a verificação 3D do cartão ou utilize outro cartão de outro banco para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == '3D secure failed'){
                        echo 'Falhou a verificação do código 3D. Por favor, volte a tentar certificando-se de que introduz corretamente o código ou utilize outro cartão de outro banco para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'Transaction is expired'){
                        echo 'O cartão utilizado não tem a verificação 3D ativada no seu próprio banco ou a verificação do código 3D falhou. Por favor, ative a verificação 3D do cartão no seu banco ou volte a tentar, certificando-se de que introduz corretamente o código ou utilize outro cartão de outro banco para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'Declined by anti-fraud system.'){
                        echo 'A transação foi rejeitada pelo nosso sistema de segurança. Sugerimos que utilize um cartão diferente para efetuar o pagamento e/ou introduza corretamente todos os dados.';
                    }else if(@$_GET['message'] == 'Invalid card number'){
                        echo 'A transação foi rejeitada por introduzir um número de cartão inválido. Por favor, certifique-se de que introduz corretamente o número do cartão ou utilize um cartão diferente para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'Referal or restricted card'){
                        echo 'A transação foi rejeitada. Por favor, utilize um cartão diferente para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'Communication error with bank'){
                        echo 'A transação foi rejeitada devido a um erro de comunicação com o banco. Por favor, aguarde alguns minutos para voltar a fazer a transação ou utilize um cartão diferente para proceder ao pagamento da mesma.';
                    }else if(@$_GET['message'] == 'Proxy frontend error occured'){
                        echo 'A transação foi rejeitada devido a um erro de comunicação com o banco. Por favor, aguarde alguns minutos para voltar a fazer a transação ou utilize um cartão diferente para proceder ao pagamento da mesma.';
                    }else if(@$_GET['message'] == 'Authorization declined'){
                        echo 'A transação foi rejeitada. Por favor, utilize um cartão diferente para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'General bank decline'){
                        echo 'A transação foi rejeitada. Por favor, utilize um cartão diferente para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'Volume limit exceeded'){
                        echo 'A transação foi rejeitada. Por favor, utilize um cartão diferente para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'Incorrect field'){
                        echo 'A transação foi rejeitada. Por favor, utilize um cartão diferente para proceder ao pagamento da transação e certifique-se de que introduz corretamente todos os dados.';
                    }else if(@$_GET['message'] == 'Invalid CVV'){
                        echo 'A transação foi rejeitada porque foi introduzido um número CVV inválido. Por favor, certifique-se de que introduz corretamente o número CVV ou utilize um cartão diferente para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'Lost or stolen card'){
                        echo 'A transação foi rejeitada porque foi introduzido um número de cartão bloqueado. Por favor, utilize um cartão diferente para proceder ao pagamento da transação.';
                    }else if(@$_GET['message'] == 'Card expired or expiration date invalid'){
                        echo 'A transação foi rejeitada porque foi introduzida uma data de validade inválida. Por favor, certifique-se de que introduz corretamente a data de validade ou utilize um cartão diferente para proceder ao pagamento da transação.';
                    }else{

                        echo "Confira e corrija os seus dados, clicando no botão abaixo";
                    }
                   
                } else {
                    echo "Confira e corrija os seus dados, clicando no botão abaixo";
                }
                ?>

                
            </h4>
        </div>
        <form class='pspPaymentForm' id="datos">
            <div class="form--control-holder">


                <div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>"  id="reintentar"> Voltar a tentar </a>



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