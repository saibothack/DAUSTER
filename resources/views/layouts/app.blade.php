{{-- resources/views/layouts/app.blade.php --}}
    <!DOCTYPE html>
<html dir="ltr" lang="{{ config('app.locale') }}">
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta charset="utf-8"/>
    <!-- CSRF Token -->
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <title>
        {{ config('app.name') }} @yield('title')
    </title>
    <link href="/dev/dauster/public/web/media/gantry5/assets/css/font-awesome.min.css?5b90d7ad" rel="stylesheet"/>
    <link href="/dev/dauster/public/web/media/gantry5/engines/nucleus/css-compiled/nucleus.css?5b90d7ad"
          rel="stylesheet"/>
    <link href="/dev/dauster/public/web/templates/rt_kraken/custom/css-compiled/kraken_10.css?5b90d80b"
          rel="stylesheet"/>
    <link href="/dev/dauster/public/web/templates/rt_kraken/custom/css-compiled/kraken-joomla_10.css?5b90d80c"
          rel="stylesheet"/>
    <link href="/dev/dauster/public/web/templates/rt_kraken/custom/css-compiled/custom_10.css?5b90d80c"
          rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/css/swiper.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>
    <style type="text/css">
        @media only all and (min-width: 48rem) {
            .dir-ltr .g-offcanvas-toggle {
                margin-left: 5rem !important
            }

            .dir-rtl .g-offcanvas-toggle {
                margin-right: 5rem !important
            }

            .dir-ltr .g-container {
                padding-left: 12rem !important
            }

            .dir-rtl .g-container {
                padding-right: 12rem !important
            }
        }

        .form-horizontal .control-group {
            margin-bottom: 20px;
            *zoom: 1;
        }

        .form-horizontal .control-label {

            float: left;
            width: 160px;
            padding-top: 5px;
            text-align: right;

        }

        .form-horizontal .controls {
            *display: inline-block;
            *padding-left: 20px;
            margin-left: 180px;
            *margin-left: 0;
        }

        .control-label .hasTooltip, .control-label .hasPopover {
            display: inline-block;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
            color: #272c35;
            background-color: #d9d9d9;
            border: 1px solid rgba(39, 44, 53, .15);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-sizing: border-box !important;
            -webkit-transition: border .2s linear, box-shadow .2s linear;
            -moz-transition: border .2s linear, box-shadow .2s linear;
            transition: border .2s linear, box-shadow .2s linear;
        }

        input[type="color"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"], input:not([type]), textarea {
            padding: .375rem .375rem;
        }

        .btn {
            display: inline-block;
            *display: inline;
            padding: 4px 12px;
            margin-bottom: 0;
            *margin-left: .3em;
            font-size: 14px;
            line-height: 20px;
            color: #333333;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, .75);
            vertical-align: middle;
            cursor: pointer;
            background-color: #f5f5f5;
            *background-color: #e6e6e6;
            background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
            background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
            background-repeat: repeat-x;
            border: 1px solid #cccccc;
            border-top-color: rgb(204, 204, 204);
            border-right-color: rgb(204, 204, 204);
            border-bottom-color: rgb(204, 204, 204);
            border-left-color: rgb(204, 204, 204);
            *border: 0;
            border-color: #e6e6e6 #e6e6e6 #bfbfbf;
            border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
            border-bottom-color: #b3b3b3;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            *zoom: 1;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
        }

        .btn-primary {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .25);
            background-color: #006dcc;
            *background-color: #0044cc;
            background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
            background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
            background-image: -o-linear-gradient(top, #0088cc, #0044cc);
            background-image: linear-gradient(to bottom, #0088cc, #0044cc);
            background-repeat: repeat-x;
            border-color: #0044cc #0044cc #002a80;
            border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        }

        .btn-primary {
            background: #01b2ff;
            color: #fff;
            text-shadow: none;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, .1);
        }

        .button {
            font-size: 10px;
        }

        .button {
            display: inline-block;
            border: 2px solid transparent;
            margin: 0px !important;
            padding: 0.3rem;
            vertical-align: middle;
            text-shadow: none;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            transition: all 0.2s;
            margin-right: 10px !important;
        }

        .button .fa {
            font-size: 1rem;
        }

        .tdOptions {
            width: 120px;
        }

        .pagination {
            margin: 20px 0;
        }

        .pull-left, .pull-right {
            max-width: 100%;
        }

        .pull-right {
            float: right;
        }

        .pagination ul > li {
            display: inline;
        }

        .pagination ul {
            display: inline-block;
            *display: inline;
            margin-top: 0;
            margin-bottom: 0;
            margin-left: 0;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            *zoom: 1;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
        }

        .pagination ul > li:first-child > a, .pagination ul > li:first-child > span {
            border-left-width: 1px;
            -webkit-border-bottom-left-radius: 4px;
            border-bottom-left-radius: 4px;
            -webkit-border-top-left-radius: 4px;
            border-top-left-radius: 4px;
            -moz-border-radius-bottomleft: 4px;
            -moz-border-radius-topleft: 4px;
        }

        .pagination ul > li > a, .pagination ul > li > span {
            float: left;
            padding: 4px 12px;
            line-height: 20px;
            text-decoration: none;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-left-width: 0;
        }

        .pagination ul > li > a, .pagination ul > li > span {
            background: #d9d9d9;
            border: 1px solid #bfbfbf;
            border-left-width: 1px;
        }

        .pagination ul > li > a, .pagination ul > li > span {
            background: #d9d9d9;
            border: 1px solid #bfbfbf;
        }

        td {
            padding: 0.5rem;
            padding-top: 0.2rem;
            padding-right: 0.5rem;
            padding-bottom: 0.2rem;
            padding-left: 0.5rem;
            border: 1px solid #dedede;

        }

        select {
            color: #272c35;
            background-color: #d9d9d9;
            border: 1px solid rgba(39, 44, 53, .15);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-sizing: border-box !important;
            transition: border .2s linear, box-shadow .2s linear;
            font-size: 1rem;
            width: 100%;
            line-height: 1.5;
            padding: .375rem .375rem;
            vertical-align: middle;
            border-radius: 0.1875rem;
            margin-bottom: 0.0rem;
            height: 47px;

        }

        select:hover {
            border-color: #01b2ff;
        }

        .g-menu-item-title {
            color: white;
        }

        .g-menu-item-title:hover {
            color: #01b2ff;
        }

        .button {
            display: inline-block;
            font-family: "kelson_sans", "Helvetica", "Tahoma", "Geneva", "Arial", sans-serif;
            font-weight: 700;
            background: #01b2ff;
            color: #fff !important;
            font-size: 1rem;
            border: 2px solid transparent;
            margin: 0 0 .5rem 0;
            padding: .0rem 1.5rem;
            vertical-align: middle;
            text-shadow: none;
            -webkit-transition: all .2s;
            -moz-transition: all .2s;
            transition: all .2s;
            height: 47px;
            line-height: 40px;  
        }

        /*Social login*/
        .login-social {
            width: 100%;
            display: inline-flex;
        }

        .login-social > div {
            width: 49%;
            text-align: center;
        }

        .map {
            position: absolute !important;
            top: 0px !important;
            bottom: 0px !important;
            right: 0px !important;
            left: 240px !important;
        }

        .divPrincipal {
            position: absolute !important;
            top: 0px !important;
            bottom: 0px !important;
            right: 0px !important;
            left: 240px !important;
        }

        .divSearchAutocomplete{
            position: absolute;
            width: 100% !important;
        }

        .form-search {
            width: 50% !important;
            position: relative;
            margin: 0 auto !important;
            z-index: 1 !important;
        }

        .form-search > div {
            float: left;
        }

        .pnlButtons {
            bottom: 10px !important;
            position: absolute;
            width: 100% !important;
        }

        .form-button {
            display: inline;

        }

        .form-button > div {
            position: relative;
            float: left;
            text-align: center;
            z-index: 1 !important;
        }

        .divImgMarker {
            position: absolute !important;
            top: 0px !important;
            bottom: 0px !important;
            right: 0px !important;
            left: 0px !important;
        }

        .divimg {
            position: absolute;
            top: calc(50% - 32px) !important;
            left: calc(50% - 16px) !important;
            height: 32px !important;
            width: 32px !important;
            z-index: 1 !important;
        }

        @media screen and (max-width: 992px) {
            /*Social login*/
            .login-social {
                width: 100%;
                display: block;
            }

            .login-social > div {
                width: 100%;
                text-align: center;
                margin: 10px;
            }

            /* Formulario */
            .control-label {
                width: 100% !important;
                text-align: left !important;
                float: none !important;
            }

            .controls {
                width: 100% !important;
                float: none !important;
                margin-left: 0px !important;
            }

            .map {
                left: 0px !important;
            }

            .g-offcanvas-toggle {
                left: 65% !important;
            }

            .divPrincipal {
                left: 0px !important;
            }
        }

    </style>
    @yield('styles')
    <script class="joomla-script-options new" type="application/json">
                    {"csrf.token":"a31a9b08f15c2a5158b8a8644b563220","system.paths":{"root":"\/web","base":"\/web"}}

    </script>
    <script src="/dev/dauster/public/web/media/system/js/mootools-core.js?1288e1d32bee104c1e3f27ec77aedf05">
    </script>
    <script src="/dev/dauster/public/web/media/system/js/core.js?1288e1d32bee104c1e3f27ec77aedf05">
    </script>
    <script src="/dev/dauster/public/web/templates/rt_kraken/js/swiper.js?5b90d7c0">
    </script>
    <script src="/dev/dauster/public/web/templates/rt_kraken/js/odometer.js?5b90d7c0">
    </script>
    <script>
        ;((function () {

            var isElementInViewport = function (el, delta) {
                var rect = el.getBoundingClientRect();
                delta = delta || 0;
                return (
                    rect.top >= -delta &&
                    rect.left >= -delta &&
                    rect.bottom <= (delta + (window.innerHeight || document.documentElement.clientHeight)) &&
                    rect.right <= (delta + (window.innerWidth || document.documentElement.clientWidth))
                );
            }

            window.addEvents({
                scroll: function () {
                    var odometers = document.getElements('.odometer'), value, instances = {};
                    odometers.forEach(function (odometer, idx) {
                        odometer = document.id(odometer);
                        if (!instances['o-' + idx] && isElementInViewport(odometer, 100)) {
                            value = odometer.getProperty('data-odometer-value');
                            instances['o-' + idx] = {i: new Odometer({el: odometer}), v: value};
                            setTimeout(function () {
                                instances['o-' + idx].i.update(instances['o-' + idx].v || 0);
                            }, 100);
                        }
                    });
                },
                domready: function () {
                    this.fireEvent('scroll');
                }
            });

        })());
    </script>
    <!--[if (gte IE 8)&(lte IE 9)]>
    <script type="text/javascript"
            src="/dev/dauster/public/web/media/gantry5/assets/js/html5shiv-printshiv.min.js?5b90d7ad"></script>
    <link rel="stylesheet" href="/dev/dauster/public/web/media/gantry5/engines/nucleus/css/nucleus-ie9.css?5b90d7ad"
          type="text/css"/>
    <script type="text/javascript"
            src="/dev/dauster/public/web/media/gantry5/assets/js/matchmedia.polyfill.js?5b90d7ad"></script>
    <![endif]-->
    </meta>
    </meta>
</head>
<body
    class="gantry site com_gantry5 view-custom no-layout no-task dir-ltr itemid-106 outline-10 g-offcanvas-left g-home g-style-preset1">

<div data-g-offcanvas-css3="1" data-g-offcanvas-swipe="1" id="g-offcanvas">
    <div class="g-grid">
        <div class="g-block size-100 nomarginall nopaddingall">
            <div class="g-content g-particle" id="logo-9991-particle">
                <a class="g-offcanvas-logo" href="/dev/dauster/public/web" rel="" title="Kraken">
                    <img alt="Kraken" src="/dev/dauster/public/web/templates/rt_kraken/images/logo/logo.png?5b90d7c0"/>
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

<!-- footer -->
    <footer id="g-footer">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-25">
                    <div class="g-content g-particle" id="logo-9234-particle">
                        <a class="g-logo" href="/dev/dauster/public/web" rel="" title="Kraken">
                            <img alt="Kraken"
                                 src="/dev/dauster/public/web/templates/rt_kraken/images/logo/logo-alt.png?5b90d7c0"/>
                            <span>
                                        Dauster
                                    </span>
                        </a>
                    </div>
                </div>
                <div class="g-block size-50 center g-horizontalmenu-block">
                    <div class="g-content g-particle" id="horizontalmenu-4552-particle">
                        <ul class="g-horizontalmenu ">
                            <li>
                                <a href="http://www.gantry.org/" target="_blank" title="Gantry">
                                    Gantry
                                </a>
                            </li>
                            <li>
                                <a href="http://docs.gantry.org/gantry5/basics/key-features" target="_blank"
                                   title="Features">
                                    Features
                                </a>
                            </li>
                            <li>
                                <a href="http://docs.gantry.org/gantry5/particles" target="_blank" title="Particles">
                                    Particles
                                </a>
                            </li>
                            <li>
                                <a href="http://www.rockettheme.com/join" target="_blank" title="Join">
                                    Join
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="g-block size-25">
                    <div class="g-content g-particle" id="social-5393-particle">
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
        </div>
    </footer>

    <section id="g-copyright">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-25">
                    <div class="g-content g-particle" id="branding-8205-particle">
                        <div class="g-branding branding">
                            Powered by
                            <a class="g-powered-by" href="http://www.gantry.org/" title="Gantry Framework">
                                Gantry
                                <span class="hidden-tablet">
                                            Framework
                                        </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="g-block size-50">
                    <div class="g-content g-particle" id="copyright-7892-particle">
                        <div class="g-copyright ">
                            Copyright © 2007 - 2018
                            <a href="/dev/dauster/public/web/" target="_blank" title="RocketTheme LLC">
                                RocketTheme LLC
                            </a>
                        </div>
                    </div>
                </div>
                <div class="g-block size-25">
                    <div class="g-content g-particle" id="totop-1103-particle">
                        <div class=" g-particle">
                            <div class="g-totop">
                                <a href="#" id="g-totop" rel="nofollow">
                                    <i class="fa fa-arrow-circle-o-up fa-2x">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End footer -->

    <!-- Section menu -->
    <section id="g-fixedside">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-100">
                    <div class="g-content g-particle" id="logo-5288-particle">
                        <a class="g-fixedside-logo" href="/dev/dauster/public/web" rel="" title="Kraken">
                            <img alt="Kraken"
                                 src="/dev/dauster/public/web/templates/rt_kraken/images/logo/logo.png?5b90d7c0"/>
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
                                    @if (!empty(Auth::user()->hasPermissionTo('Alta servicio')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('services.create') }}">
                                                        <span class="g-menu-item-content">
                                                            <span class="g-menu-item-title">
                                                                Alta servicio
                                                            </span>
                                                        </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (!empty(Auth::user()->hasPermissionTo('Administración servicios')))
                                        <li class="g-menu-item g-menu-item-type-component g-menu-item-106 active g-standard ">
                                            <a class="g-menu-item-container" href="{{ route('users.index') }}">
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
<script src="/dev/dauster/public/web/media/gantry5/assets/js/main.js?5b90d7ad" type="text/javascript">
</script>
@yield('scripts')
</body>
</html>
