<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif"
        }
    </style>
</head>

<body>
<div class="container">
    <header style="background-image: url('{{ asset('images/mail/bk_welcome_drive.png') }}'); background-repeat: no-repeat; background-size: cover; height: 210px !important; background-position: center">
        <img src="{{ asset('images/mail/ic_logo.png') }}" alt="" style="height: 200px !important; display: block; margin: 0 auto;">
    </header>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 style="font-size: 20px"><strong>¡Bienvenido a la flotilla Dauster!</strong></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center" style="font-size: 14px">
            <p>El equipo <strong>Dauster te da la mas cordial bienvenida para formar parte de nuestra flotilla</strong>, estás a un paso de ayudar a personas y empresas con sus entregas en la ciudad. Con nuestra plataforma podrás realizar entregas y pedidos sin horario de conexión y con la cobertura que te permitirá rodar por la mayor parte de la ciudad. Genera ganancias con cada pedido.</p>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <input type="button" value="Ir a Dauster" class="btn btn-primary">
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 style="font-size: 20px"><strong>Obtén ganancias pedido a pedido.</strong></h3>
        </div>
        <div class="col-md-12 text-center">
            <p>Beneficios de utilizar la plataforma Dauster.</p>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-1 col-md-4">
            <ul>
                <li>Cobertura por la mayor parte de la ciudad.</li>
                <li>Facilidad de aceptación de pedidos.</li>
                <li>Comunicación con el cliente.</li>
                <li>Tarifa dinámica (gana más a mayor distancia).</li>
            </ul>
        </div>
        <div class="offset-md-2 col-md-4">
            <ul>
                <li>Sin horario laboral.</li>
                <li>Ganancias semanales.</li>
                <li>Dispersiones para la compra de productos.</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3"  style="border-width: 1px; border-radius: 25px; border-color: gray; border-style: solid">
            <div class="row" style="margin: 10px">
                <div class="col-md-12 text-center">
                    <div class="row text-left" style="font-size: 11px">
                        <div class="col-md-12">
                            <h4 style="font-size: 11px"><strong>Datos de la cuenta:</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <label>Dirección asociada a tu cuenta: {{ $data['mail']  }}</label>
                        </div>
                        @if (isset($data['url']))
                            <div class="col-md-12">
                                <label>Validar correo: <a href="{{ $data['url']  }}">Confirmar!</a></label>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 style="font-size: 20px"><strong>¡Nos encantaría que formes parte del equipo!</strong></h3>
        </div>
        <div class="col-md-12">
            <p>Después de la validar tu correo, procederemos a ver tu registro en caso de ser aceptado recibirás un nuevo correo con el cual podrás asistir a las oficinas para llevar tu documentación que te permitirá estar dado de alta en la plataforma y empezar a trabajar con nosotros. <strong>Recuerda llevar tu identificación IFE/INE, tarjeta de circulación de tu vehículo, licencia de conducir, hoja que acredite tu RFC y carta de antecedentes no penales.</strong></p>
        </div>
    </div>
    <br>
    <br>
    <div class="row" style="border-width: 1px; border-color: gray; border-style: solid">
        <div class="col-md-12 text-center">
            <h4 style="font-size: 14px"><strong>¡Síguenos en nuestras redes sociales!</strong></h4>
        </div>
        <div class="col-md-12 text-center">
            <div class="row">
                <div class="offset-md-5 col-md-1">
                    <a href="#">
                        <img src="{{ asset('images/ic_facebook.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="#">
                        <img src="{{ asset('images/ic_twitter.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-md-12 text-center" style="font-size: 12px; color: dimgray">
                <label>Por favor no respondas a este email.</label><br>
                <label>Aviso de privacidad: (Liga)</label><br>
                <label>Deliver Dauster de México S. de R. L. de C. V</label><br>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
