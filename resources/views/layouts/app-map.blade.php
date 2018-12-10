{{-- resources/views/layouts/app.blade.php --}}
    <!DOCTYPE html>
<html dir="ltr" lang="{{ config('app.locale') }}">
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta charset="utf-8"/>
    <!-- CSRF Token -->
    <meta content="{{ csrf_token() }}" name="csrf-token" />
    <title>
        {{ config('app.name') }} @yield('title')
    </title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{asset('/web/media/gantry5/assets/css/font-awesome.min.css?5b90d7ad')}}"  rel="stylesheet"/>
    <link href="{{asset('/web/media/gantry5/engines/nucleus/css-compiled/nucleus.css?5b90d7ad')}}"  rel="stylesheet"/>
    <link href="{{asset('/web/templates/rt_kraken/custom/css-compiled/kraken_10.css?5b90d80b')}}"  rel="stylesheet"/>
    <link href="{{asset('/web/templates/rt_kraken/custom/css-compiled/kraken-joomla_10.css?5b90d80c')}}"  rel="stylesheet"/>
    <link href="{{asset('/web/templates/rt_kraken/custom/css-compiled/custom_10.css?5b90d80c')}}"  rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/css/swiper.min.css" rel="stylesheet"/>
    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
    <link href="{{asset('css/web.css')}}"  rel="stylesheet"/>
    @yield('styles')

    <script class="joomla-script-options new" type="application/json">
                    {"csrf.token":"a31a9b08f15c2a5158b8a8644b563220","system.paths":{"root":"\/web","base":"\/web"}}

    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{asset('/web/media/system/js/mootools-core.js?1288e1d32bee104c1e3f27ec77aedf05')}}" type="text/javascript"></script>
    <script src="{{asset('/web/media/system/js/core.js?1288e1d32bee104c1e3f27ec77aedf05')}}" type="text/javascript"></script>
    <script src="{{asset('/web/templates/rt_kraken/js/swiper.js?5b90d7c0')}}" type="text/javascript"></script>
    <script src="{{asset('/web/templates/rt_kraken/js/odometer.js?5b90d7c0')}}" type="text/javascript"></script>
    <script src="{{asset('/js/web.js')}}" type="text/javascript"></script>

    <!--[if (gte IE 8)&(lte IE 9)]>
    <script type="text/javascript" src="{{asset('/web/media/gantry5/assets/js/html5shiv-printshiv.min.js?5b90d7ad')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('/web/media/gantry5/engines/nucleus/css/nucleus-ie9.css?5b90d7ad')}}" type="text/css"/>
    <script type="text/javascript" src="{{asset('/web/media/gantry5/assets/js/matchmedia.polyfill.js?5b90d7ad')}}"></script>
    <![endif]-->
</head>
<body
    class="gantry site com_gantry5 view-custom no-layout no-task dir-ltr itemid-106 outline-10 g-offcanvas-left g-home g-style-preset1">

<div data-g-offcanvas-css3="1" data-g-offcanvas-swipe="1" id="g-offcanvas">
    <div class="g-grid">
        <div class="g-block size-100 nomarginall nopaddingall">
            <div class="g-content g-particle" id="logo-9991-particle">
                <a class="g-offcanvas-logo" href="/dauster/public/web" rel="" title="Kraken">
                    <img alt="Kraken" src="{{asset('/web/templates/rt_kraken/images/logo/logo.png?5b90d7c0')}}"/>
                    <span>
                                Dauster
                            </span>
                </a>
            </div>
        </div>
    </div>
    <div class="g-grid">
        <div class="g-block size-100 nomarginall nopaddingall center">
            <div class="g-content g-particle" id="social-9979-particle">
                <div class="g-social social">
                    <a href="http://www.facebook.com/RocketTheme" target="_blank" title="">
                                <span class="fa fa-facebook fa-fw">
                                </span>
                        <span class="g-social-text">
                                </span>
                    </a>
                    <a href="http://www.twitter.com/rockettheme" target="_blank" title="">
                                <span class="fa fa-twitter fa-fw">
                                </span>
                        <span class="g-social-text">
                                </span>
                    </a>
                    <a href="https://plus.google.com/+rockettheme" target="_blank" title="">
                                <span class="fa fa-google-plus fa-fw">
                                </span>
                        <span class="g-social-text">
                                </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="g-grid">
        <div class="g-block size-100">
            <div class="g-content g-particle" id="mobile-menu-1590-particle">
                <div data-g-menu-breakpoint="48rem" id="g-mobilemenu-container">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="g-page-surround">

@yield('content')

    <!-- Section menu -->
    <section id="g-fixedside">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-100">
                    <div class="g-content g-particle" id="logo-5288-particle">
                        <a class="g-fixedside-logo" href="/dauster/public/web" rel="" title="Kraken">
                            <img alt="Kraken"
                                 src="{{asset('/web/templates/rt_kraken/images/logo/logo.png?5b90d7c0')}}"/>
                            <span>
                                        Dauster
                                    </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="g-grid">
                <div class="g-block size-100">
                    <div class="g-content g-particle" id="social-1238-particle">
                        <div class="g-social social">
                            <a href="http://www.facebook.com/RocketTheme" target="_blank" title="">
                                        <span class="fa fa-facebook fa-fw">
                                        </span>
                                <span class="g-social-text">
                                        </span>
                            </a>
                            <a href="http://www.twitter.com/rockettheme" target="_blank" title="">
                                        <span class="fa fa-twitter fa-fw">
                                        </span>
                                <span class="g-social-text">
                                        </span>
                            </a>
                            <a href="https://plus.google.com/+rockettheme" target="_blank" title="">
                                        <span class="fa fa-google-plus fa-fw">
                                        </span>
                                <span class="g-social-text">
                                        </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="g-grid">
                <div class="g-block size-100">
                    <div class="g-content g-particle" id="sidemenu-7152-particle">
                        <nav class="g-main-nav" role="navigation">
                            <ul class="g-toplevel">
                                @if (Auth::guest())
                                    <li class="g-menu-item g-menu-item-101 g-menu-item-type-component g-standard">
                                        <a class="g-menu-item-container" href="{{ route('login') }}">
                                                <span class="g-menu-item-content">
                                                    <span class="g-menu-item-title">
                                                        Ingresar
                                                    </span>
                                                </span>
                                        </a>
                                    </li>
                                    <li class="g-menu-item g-menu-item-type-component g-menu-item-106 g-standard ">
                                        <a class="g-menu-item-container" href="{{ route('register') }}">
                                                <span class="g-menu-item-content">
                                                    <span class="g-menu-item-title">
                                                        Registrar
                                                    </span>
                                                </span>
                                        </a>
                                    </li>
                                @else
                                    @if (!empty(Auth::user()->hasPermissionTo('Mi perfil')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('profilers.index') }}">
                                                        <span class="g-menu-item-content">
                                                            <span class="g-menu-item-title">
                                                                Mi perfil
                                                            </span>
                                                        </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Alta servicio')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ url('services/create/coordinates') }}">
                                                        <span class="g-menu-item-content">
                                                            <span class="g-menu-item-title">
                                                                Alta servicio
                                                            </span>
                                                        </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Servicios')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('services.index') }}">
                                                    <span class="g-menu-item-content">
                                                        <span class="g-menu-item-title">
                                                            Servicios
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Usuarios')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('users.index') }}">
                                                        <span class="g-menu-item-content">
                                                            <span class="g-menu-item-title">
                                                                Usuarios
                                                            </span>
                                                        </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Roles')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('roles.index') }}">
                                                        <span class="g-menu-item-content">
                                                            <span class="g-menu-item-title">
                                                                Roles
                                                            </span>
                                                        </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (!empty(Auth::user()->hasPermissionTo('Permisos')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('permissions.index') }}">
                                                        <span class="g-menu-item-content">
                                                            <span class="g-menu-item-title">
                                                                Permisos
                                                            </span>
                                                        </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (!empty(Auth::user()->hasPermissionTo('Tipo usuarios')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('kind-persons.index') }}">
                                                        <span class="g-menu-item-content">
                                                            <span class="g-menu-item-title">
                                                                Tipo de persona
                                                            </span>
                                                        </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (!empty(Auth::user()->hasPermissionTo('Vehículos')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('vehicles.index') }}">
                                                    <span class="g-menu-item-content">
                                                        <span class="g-menu-item-title">
                                                            Vehículos
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Facturas')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('vehicles.index') }}">
                                                <span class="g-menu-item-content">
                                                    <span class="g-menu-item-title">
                                                        Facturas
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Cargos')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('charges.index') }}">
                                            <span class="g-menu-item-content">
                                                <span class="g-menu-item-title">
                                                    Cargos
                                                </span>
                                            </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Estados')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('states.index') }}">
                                                <span class="g-menu-item-content">
                                                    <span class="g-menu-item-title">
                                                        Estados
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Países')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('countries.index') }}">
                                                    <span class="g-menu-item-content">
                                                        <span class="g-menu-item-title">
                                                            Países
                                                        </span>
                                                    </span>
                                            </a>
                                        </li>
                                    @endif


                                    <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                        <a class="g-menu-item-container" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <span class="g-menu-item-content">
                                                        <span class="g-menu-item-title">
                                                            Cerrar sesión
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                  method="POST" style="display: none;">
                                                                {{ csrf_field() }}
                                                            </form> 
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section menu -->
</div>
<script src="{{asset('/web/media/gantry5/assets/js/main.js?5b90d7ad')}}" type="text/javascript">
</script>
@yield('scripts')
</body>
</html>
