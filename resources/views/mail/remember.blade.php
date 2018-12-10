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
    <header style="background-image: url('{{ asset('images/mail/bk_remember.png') }}'); background-repeat: no-repeat; background-size: cover; height: 210px !important; background-position: center">
        <img src="{{ asset('images/mail/ic_logo.png') }}" alt="" style="height: 200px !important; display: block; margin: 0 auto;">
    </header>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 style="font-size: 20px"><strong>¡Recupera tu contraseña y accede de forma segura a tu cuenta!</strong></h3>
        </div>
        <div class="col-12">
            <label>Estimado/a (nombre del usuario):</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center" style="font-size: 14px">
            <p>Has solicitado reestablecer tu contraseña, para completar el proceso da clic en el siguiente enlace.</p>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#" class="btn btn-primary">Cambio de contraseña</a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <p>Si no realizaste esta modificación o si crees que alguien ha accedido a tu cuenta sin autorización, reestablece tu contraseña inmediatamente para evitar cualquier práctica que atente contra tu seguridad y la de terceros. Recuerda no solicitar muchos cambios de contraseña para evitar que nuestro soporte no detecte una anomalía con tu cuenta.</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 text-left">
            <p>Gracias por utilizar nuestro servicio y seguir confiando en nosotros, un saludo.</p>
        </div>
        <div class="col-md-12 text-left">
            <label>Atentamente:</label>
        </div>
        <div class="col-md-12 text-left">
            <label>Soporte <strong>Dauster</strong></label>
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

