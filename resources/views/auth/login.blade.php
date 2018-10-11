@extends('layouts.app')

@section('title', '| Iniciar sesión')

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
                                            Iniciar sesión
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
                                                    @if(Session::has('flash_message'))
                                                        <div class="container">
                                                            <div class="alert alert-success">
                                                                <em> {!! session('flash_message') !!}</em>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            @include ('errors.list') {{-- Including error file --}}
                                                        </div>
                                                    </div>

                                                    <br>


                                                    <legend>
                                                        Iniciar sesión con redes sociales
                                                    </legend>
                                                    <div class="login-social">
                                                        <div>
                                                            <a class="button btn-facebook icon-left" rel="nofollow"
                                                               style="color: white; background-color: #3B5998 !important; background-image: none !important; width: 209px !important;">
                                                                <i class="fa fa-facebook fa-fw">
                                                                </i>
                                                                {{ __('Facebook') }}
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a class="button btn-block btn-twitter icon-left"
                                                               rel="nofollow"
                                                               style="color: white; background-color: #1DA1F2 !important; background-image: none !important; width: 209px !important;">
                                                                <i class="fa fa-twitter fa-fw">
                                                                </i>
                                                                {{ __('Twitter') }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <form method="POST" action="{{ route('login') }}"
                                                          aria-label="{{ __('Login') }}"
                                                          class="form-validate form-horizontal well">
                                                        @csrf
                                                        <fieldset>
                                                            <legend>
                                                                Iniciar sesión
                                                            </legend>
                                                            <div class="control-group field-spacer">
                                                                <div class="control-label" style="width: 100% !important; text-align: left !important;">
                                                            <span class="spacer">
                                                                <span class="before">
                                                                </span>
                                                                <span class="text" style="width: 100% !important">
                                                                    <label class="" id="jform_spacer-lbl">
                                                                        <strong class="red">
                                                                            *
                                                                        </strong>
                                                                        Campos requeridos
                                                                    </label>
                                                                </span>
                                                                <span class="after">
                                                                </span>
                                                            </span>
                                                                </div>
                                                                <div class="controls">
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="controls">
                                                                    &nbsp;
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    <label class="hasPopover required" for="email">
                                                                        Usuario
                                                                        <span class="star">
                                                                    *
                                                                </span>
                                                                    </label>
                                                                </div>
                                                                <div class="controls">
                                                                    <input id="email" type="email"
                                                                           class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                                           name="email" value="{{ old('email') }}"
                                                                           required autofocus>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    <label class="hasPopover required" for="name">
                                                                        Contraseña
                                                                        <span class="star">
                                                                    *
                                                                </span>
                                                                    </label>
                                                                </div>
                                                                <div class="controls">
                                                                    <input id="password" type="password"
                                                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                                           name="password" required>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    <label class="hasPopover required" for="name">
                                                                        Recordar
                                                                    </label>
                                                                </div>
                                                                <div class="controls">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           name="remember"
                                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <button class="button" type="submit">
                                                                    Ingresar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    {{ Form::close() }}
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
