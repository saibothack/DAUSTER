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
                                                Cambiar contraseña
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
                                                                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                                                                </div>
                                                            </div>
                                                        @endif

                                                        <div class="row">
                                                            <div class="col-md-8 col-md-offset-2">
                                                                @include ('errors.list') {{-- Including error file --}}
                                                            </div>
                                                        </div>

                                                        <br>

                                                        {{ Form::open(array('url' => 'changePassword', 'class' => 'form-validate form-horizontal well')) }}

                                                            <fieldset>
                                                                <legend>Agregar</legend>
                                                                <div class="control-group field-spacer">
                                                                    <div class="control-label" style="width: 100% !important; text-align: left;">
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
                                                                        <label for="phone" class="hasPopover required">
                                                                            Nueva contraseña
                                                                            <span class="star">&nbsp;*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="controls">
                                                                        <input name="password" id="password" class="required" required="required" type="password">
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        <label for="phone" class="hasPopover required">
                                                                            Confirmar
                                                                            <span class="star">&nbsp;*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="controls">
                                                                        <input name="password_confirmation" id="password_confirmation" class="required" required="required" type="password">
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <button class="button btn-primary validate" type="submit">Cambiar contraseña
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
