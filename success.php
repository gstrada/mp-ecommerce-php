<!DOCTYPE html>
<html style="font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;"
      lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://www.mercadopago.com/v2/security.js" view=""></script>


    <style>

        .as-footnotes {
            background: #333;
            color: #fff;
            padding: 0px 0px 20px 15px;
        }
    </style>
</head>
<?php
    if (isset($_GET['payment_type'])) {
        $payment_method = $_GET['payment_type'];
    } else {
        $payment_method = null;
    }

    if (isset($_GET['external_reference'])) {
        $external_reference = $_GET['external_reference'];
    } else {
        $external_reference = null;
    }

    if (isset($_GET['collection_id'])) {
        $payment_id = $_GET['collection_id'];
    } else {
        $payment_id = null;
    }


?>
<body style="background-image: url('./assets/music-audio-alp-201709'); background-size: cover; height: auto; overflow: scroll">

<div class="container-fluid">
        <div class="row" style="display: flex; justify-content: center">
            <div style="margin-top: 5%; width: 80%; background-color: #a2bd90; height: 100px; border-radius: 15px;display: flex;justify-content: center
                    ; align-items: center; color: #006400">
                <h1>Tu compra fué realizada exitosamente!</h1>
            </div>
        </div>
    <br>
    <div class="row" style="display: flex; justify-content: center">
        <div class="row d-flex justify-content-center" style="width: 80%; background-color: #eaeaea; height: auto; border-radius: 15px;">
            <div class="col-md-8 d-flex justify-content-center"  style="width: 100%">
                <h3 style="text-decoration: underline">Datos de tu pago</h3>
            </div>
            <div class="col-md-8 d-flex justify-content-center" style="width: 100%">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>payment_method_id</td>
                        <td><?php echo $payment_method ?></td>
                    </tr>
                    <tr>
                        <td>external_reference</td>
                        <td><?php echo $external_reference ?></td>
                    </tr>
                    <tr>
                        <td>payment_id</td>
                        <td><?php echo $payment_id ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row" style="display: flex; justify-content: center">
        <div class="col-md-12 d-flex justify-content-center">
            <a href="/index.php"><button type="button" class="btn btn-primary">Volver al inicio</button></a>
        </div>
    </div>
    <div class="as-footnotes" style="position: absolute; bottom: 0px; width: 100%">
        <div class="as-footnotes-content">
            <div class="as-footnotes-sosumi">
                Todos los derechos reservados Tienda Tecno 2019
            </div>
        </div>
    </div>

</div>
</body>
</html>