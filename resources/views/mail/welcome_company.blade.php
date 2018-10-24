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
    <header style="background-image: url('{{ asset('images/mail/bk_welcome_company.png') }}'); background-repeat: no-repeat; background-size: cover; height: 210px !important; background-position: center">
        <img src="{{ asset('images/mail/ic_logo.png') }}" alt="" style="height: 200px !important; display: block; margin: 0 auto;">
    </header>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 style="font-size: 20px"><strong>¡Bienvenido a la plataforma!</strong></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center" style="font-size: 14px">
            <p>Gracias por permitir que <strong>Dauster</strong> forme parte de su empresa, está a un paso de agilizar entregas a sus clientes en la ciudad. Con nuestro equipo y plataforma podrá realizar entregas personalizadas a las necesidades de su negocio o empresa. El tiempo ya no será un problema.</p>
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
            <h3 style="font-size: 20px"><strong>Funciones que mejorarán tu negocio.</strong></h3>
        </div>
        <div class="col-md-12 text-center">
            <p>Herramientas que ofrece la plataforma online y móviles.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <ul>
                <li>Entregas en el menor tiempo posible.</li>
                <li>Comunicación con el mensajero.</li>
                <li>Compras de cualquier lugar de la ciudad.</li>
                <li>Facturación inmediata.</li>
                <li>Agendar envíos o pedidos.</li>
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
            <h3 style="font-size: 20px"><strong>¡Estamos para apoyar a tu negocio!</strong></h3>
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

