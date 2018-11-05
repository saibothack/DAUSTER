{{-- \resources\views\kind_persons\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Usuarios')

@section('content')

    <div class="g-menu-overlay"></div>
    <div class="g-nav-overlay" data-offcanvas-close=""></div>
    <div class="g-offcanvas-toggle" data-offcanvas-toggle="" aria-controls="g-offcanvas" aria-expanded="false">
        <i class="fa fa-fw fa-bars"></i>
    </div{{----}}>
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
                                            Crear un Usuario
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

    <section id="g-container-4551" class="g-wrapper">
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

                                                    {{ Form::open(array('url' => 'register-client', 'class' => 'form-validate form-horizontal well', 'method' => 'POST')) }}

                                                    <fieldset>
                                                        <legend>
                                                            Iniciar sesión con redes sociales
                                                        </legend>
                                                        <div class="login-social">
                                                            <div>
                                                                <a class="button btn-facebook icon-left" rel="nofollow"
                                                                   style="color: white; background-color: #3B5998 !important; background-image: none !important; width: 209px !important;" value=""
                                                                   href="{{ route('social.auth', 'facebook') }}">
                                                                    <i class="fa fa-facebook fa-fw">
                                                                    </i>
                                                                    {{ __('Facebook') }}
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a class="button btn-block btn-twitter icon-left"
                                                                   rel="nofollow"
                                                                   style="color: white; background-color: #1DA1F2 !important; background-image: none !important; width: 209px !important;"
                                                                   href="{{ route('social.auth', 'twitter') }}">
                                                                    <i class="fa fa-twitter fa-fw">
                                                                    </i>
                                                                    {{ __('Twitter') }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <legend>Agregar</legend>
                                                        <div class="control-group field-spacer">
                                                            <div class="control-label"
                                                                 style="width: 100% !important; text-align: left;">
                                                                        <span class="spacer">
                                                                            <span class="before">
                                                                            </span>
                                                                            <span class="text">
                                                                                <label id="jform_spacer-lbl" class="">
                                                                                    <strong class="red">*</strong> Campos requeridos
                                                                                </label>
                                                                            </span>
                                                                            <span class="after"></span>
                                                                        </span>
                                                            </div>
                                                            <div class="controls"></div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                &nbsp;&nbsp;
                                                            </div>
                                                            <div class="controls">
                                                                &nbsp;&nbsp;&nbsp;
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label for="kindPerson" class="hasPopover required">
                                                                    Tipo de persona
                                                                    <span class="star">&nbsp;*</span>
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <select name="kind_persons_id" id="kind_persons_id"
                                                                        class="required" required="required"
                                                                        style="width: 100%">
                                                                    @foreach ($kindPersons as $kindPerson)
                                                                        @if(old('kindPerson') == $kindPerson->id)
                                                                            <option value="{{ $kindPerson->id }}"
                                                                                    selected="selected">{{ $kindPerson->name }}</option>
                                                                        @else
                                                                            <option
                                                                                value="{{ $kindPerson->id }}">{{ $kindPerson->name }}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label for="name" class="hasPopover required">
                                                                    Nombres
                                                                    <span class="star">&nbsp;*</span>
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <input name="name" id="name" class="required"
                                                                       required="required" type="text"
                                                                       value="{{ old('name') }}">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label for="surnames" class="hasPopover required">
                                                                    Apellidos
                                                                    <span class="star">&nbsp;*</span>
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <input name="surnames" id="surnames" class="required"
                                                                       required="required" type="text"
                                                                       value="{{ old('surnames') }}">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label for="birthday" class="hasPopover required">
                                                                    Nacimiento
                                                                    <span class="star">&nbsp;*</span>
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <input name="birthday" id="birthday" class="required"
                                                                       required="required" type="date"
                                                                       value="{{ old('birthday') }}">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label for="email" class="hasPopover required">
                                                                    Email
                                                                    <span class="star">&nbsp;*</span>
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <input name="email" id="email" class="required"
                                                                       required="required" type="email"
                                                                       value="{{ old('email') }}">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label for="phone" class="hasPopover required">
                                                                    Teléfono
                                                                    <span class="star">&nbsp;*</span>
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <input name="phone" id="phone" class="required"
                                                                       required="required" type="tel"
                                                                       value="{{ old('phone') }}">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label for="password" class="hasPopover required">
                                                                    Contraseña
                                                                    <span class="star">&nbsp;*</span>
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <input name="password" id="password" class="required"
                                                                       required="required" type="password">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                <label for="password_confirmation" class="hasPopover required">
                                                                    Confirmar
                                                                    <span class="star">&nbsp;*</span>
                                                                </label>
                                                            </div>
                                                            <div class="controls">
                                                                <input name="password_confirmation"
                                                                       id="password_confirmation" class="required"
                                                                       required="required" type="password">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button class="button" type="submit">Registrar
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
