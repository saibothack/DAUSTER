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
                                                Crear un Conductor
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

                                                        {{ Form::open(array('url' => 'register-driver', 'class' => 'row', 'method' => 'POST')) }}

                                                            <h1>Registro de Conductor</h1>
                                                            <div class="offset-md-1 col-md-10">
                                                                <p>Antes de iniciar el proceso de registro debes de estar seguro de cumplir con los siguientes requisitos.</p>
                                                                <ul>
                                                                    <li>Ser autóno y estar dado de alta en hacienda</li>
                                                                    <li>No tener antecedentes penales</li>
                                                                    <li>Contar con una bicicleta urbana o una motocicleta de más de 150CC</li>
                                                                    <li>Contar con un plan de datos celular</li>
                                                                </ul>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <p><strong class="red">*</strong> Campos requeridos</p>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    {{Form::label('name', 'Nombres *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{ Form::text('name', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('surnames', 'Apellidos *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{ Form::text('surnames', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('birthday', 'Nacimiento *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{ Form::date('birthday', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('email', 'Email *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{ Form::email('email', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('phone', 'Teléfono *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{ Form::tel('phone', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('password', 'Contraseña *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{ Form::password('password', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('password_confirmation', 'Confirma *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{ Form::password('password_confirmation', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('vehicles_id', 'Tipo de vehiculo *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{Form::select('vehicles_id', $vehicles)}}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('current_work_id', '¿Trabajo actual? *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{Form::select('current_work_id', $current_work)}}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    {{Form::label('data_plan', '¿Cuentas con plan de datos o estás dispuesto a solicitarlo? *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                    <div class="col-sm-8">
                                                                        {{Form::select('data_plan', $data_plan)}}
                                                                    </div>
                                                                </div>

                                                                <div class="offset-md-1 col-md-10">
                                                                    <p>Para continuar con el reistro en a la mano los siguientes documentos.</p>
                                                                    <ul>
                                                                        <li>Debes de contar con una fotografia donde te distingas perfectamente</li>
                                                                        <li>Tener una imagen de tu vehículo</li>
                                                                    </ul>
                                                                </div>

                                                                <div class="offset-md-2 col-md-2">
                                                                    <button class="button btn-primary validate" type="submit">Modificar</button>
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
