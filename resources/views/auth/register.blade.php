@extends('layouts.app')

@section('title', '| Registrarse')

@section('content')


    <div class="g-menu-overlay">
    </div>
    <div class="g-nav-overlay" data-offcanvas-close="">
    </div>
    <div aria-controls="g-offcanvas" aria-expanded="false" class="g-offcanvas-toggle" data-offcanvas-toggle="">
        <i class="fa fa-fw fa-bars">
        </i>
    </div>
    <section id="g-top">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-100 nomarginall nopaddingall">
                    <div class="g-system-messages">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header id="g-header">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-100">
                    <div class="g-content">
                        <div class="moduletable ">
                            <div class="g-infolist g-1cols center g-layercontent noborder">
                                <div class="g-infolist-item ">
                                    <div class="g-infolist-item-text g-infolist-textstyle-header">
                                        <div class="g-infolist-item-title ">
                                            Registro de usuario
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="g-wrapper" id="g-container-4551">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-75">
                    <section id="g-mainbar">
                        <div class="g-grid">
                            <div class="g-block size-100">
                                <div class="g-content">
                                    <div class="platform-content row-fluid">
                                        <div class="span12">
                                            <div class="contact">
                                                <div class="contact-form">
                                                    <fieldset>
                                                        <legend>
                                                            ¿Que tipo de usuario desea registrar?
                                                        </legend>
                                                        <div class="login-social">
                                                            <div>
                                                                <a href="{{ URL::to('register-client') }}" class="button"><i
                                                                        class="fa fa-fw fa-download"></i>Usuario</a>
                                                            </div>
                                                            <div>
                                                                <a href="{{ URL::to('register-driver') }}" class="button"><i
                                                                        class="fa fa-fw fa-download"></i>Conductor</a>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
