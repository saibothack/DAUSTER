{{-- \resources\views\kind_persons\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Servicios  ')

@section('styles')
    <style type="text/css">
        .g-gridcontent .g-gridcontent-2cols .g-gridcontent-item {
            width: 100%;
        }

        .form-horizontal .control-label {
            width: 115px !important;
        }

        .form-horizontal .controls {
            margin-left: 120px !important;
        }


        .back {
            background: #f2f2f2;
        }

        .odometer-inside {
            display: inline-flex !important;
        }

    </style>

@endsection

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
                                            Solicitud de servicios
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

    <section id="g-container-4634" class="g-wrapper">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-100">
                    {{ Form::open(array('url' => 'services', 'class' => 'form-validate form-horizontal well')) }}
                        <section id="g-mainbar">
                            <div class="g-grid">
                                <div class="g-block size-100">
                                    <div id="gridcontent-3925-particle" class="g-content g-particle">
                                        <div class="g-gridcontent">
                                            <div class="g-gridcontent-wrapper g-gridcontent-2cols">
                                                <div class="g-gridcontent-item">
                                                    <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-1">
                                                        <div class="g-gridcontent-item-content">
                                                            <div class="row">
                                                                <div class="col-1">
                                                                    <span class="g-gridcontent-item-text1">Costo</span>
                                                                </div>
                                                                <div class="col-1 text-left">
                                                                    <span class="g-gridcontent-item-text1" style="font-size: 20px;">${{ number_format(\Illuminate\Support\Facades\Session::get('service.total'), 2, '.', '') }}</span>
                                                                </div>
                                                                <div class="col-2 text-right">
                                                                    <span class="g-gridcontent-item-text1">Tiempo {{sprintf('%02d:%02d', (int) \Illuminate\Support\Facades\Session::get('service.time'), fmod(\Illuminate\Support\Facades\Session::get('service.time'), 1) * 60)}} min </span>
                                                                </div>
                                                                <div class="col-2 text-right">
                                                                    <span class="g-gridcontent-item-text1">Distancia {{number_format(\Illuminate\Support\Facades\Session::get('service.distance'), 2, '.', '')}} km </span>
                                                                </div>
                                                                <div class="col-2 text-center">
                                                                    <span class="g-gridcontent-item-text1">{{ $vehicle->name }}</span>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="row">
                                                                        <div class="col-6 text-left">
                                                                            <a href="{{ url('services/create/charges') }}" class="button button-4 btn-danger">Atras</a>
                                                                        </div>
                                                                        <div class="col-6 text-left">
                                                                            <button type="submit" class="btn-success button button-4">
                                                                                Confirmar
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="g-grid">
                                <div class="g-block size-100">
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            @include ('errors.list') {{-- Including error file --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="g-block size-50">
                                    <div class="g-content">
                                        <div class="platform-content row-fluid">
                                            <div class="span12">
                                                <div class="contact">
                                                    <div class="contact-form back">

                                                        <div class="form-validate form-horizontal well">

                                                            <fieldset>
                                                                <legend>Remitente </legend>
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
                                                                        {{Form::label('companyName', 'Empresa', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        {{Form::text('companyName', null,  array('required' => 'required', 'class' => 'required'))}}
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        {{Form::label('name', 'Nombre *', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        {{Form::text('name', \Illuminate\Support\Facades\Auth::user()->name,  array('required' => 'required', 'class' => 'required'))}}
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        {{Form::label('surnames', 'Apellidos *', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        {{Form::text('surnames', \Illuminate\Support\Facades\Auth::user()->surnames,  array('required' => 'required', 'class' => 'required'))}}
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        {{Form::label('phone', 'Teléfono *', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        {{Form::tel('phone', \Illuminate\Support\Facades\Auth::user()->phone,  array('required' => 'required', 'class' => 'required'))}}
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        {{Form::label('packages', 'Paquetes *', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        {{Form::number('packages', null,  array('required' => 'required', 'class' => 'required'))}}
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        {{Form::label('shippingDescription', 'Descripción Envío *', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        {{Form::textarea('shippingDescription', null,  array('required' => 'required', 'class' => 'required', 'rows' => 4, 'cols' => 54))}}
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
                                <div class="g-block size-50">
                                    <div class="g-content">
                                        <div class="platform-content row-fluid">
                                            <div class="span12">
                                                <div class="contact">
                                                    <div class="contact-form back">

                                                        <div class="form-validate form-horizontal well">

                                                        <fieldset>
                                                            <legend>Destinatario</legend>
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
                                                                    {{Form::label('companyNameDelivery', 'Empresa', array('class' => 'hasPopover required'))}}
                                                                </div>
                                                                <div class="controls">
                                                                    {{Form::text('companyNameDelivery', null,  array('required' => 'required', 'class' => 'required'))}}
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    {{Form::label('nameDelivery', 'Nombre *', array('class' => 'hasPopover required'))}}
                                                                </div>
                                                                <div class="controls">
                                                                    {{Form::text('nameDelivery', null,  array('required' => 'required', 'class' => 'required'))}}
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    {{Form::label('surnamesDelivery', 'Apellidos *', array('class' => 'hasPopover required'))}}
                                                                </div>
                                                                <div class="controls">
                                                                    {{Form::text('surnamesDelivery', null,  array('required' => 'required', 'class' => 'required'))}}
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    {{Form::label('phoneDelivery', 'Teléfono *', array('class' => 'hasPopover required'))}}
                                                                </div>
                                                                <div class="controls">
                                                                    {{Form::tel('phoneDelivery', null,  array('required' => 'required', 'class' => 'required'))}}
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    {{Form::label('emailDelivery', 'Email *', array('class' => 'hasPopover required'))}}
                                                                </div>
                                                                <div class="controls">
                                                                    {{Form::email('emailDelivery', null,  array('required' => 'required', 'class' => 'required'))}}
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="control-label">
                                                                    {{Form::label('arrivalDescriptionDelivery', 'Descripción Arribo *', array('class' => 'hasPopover required'))}}
                                                                </div>
                                                                <div class="controls">
                                                                    {{Form::textarea('arrivalDescriptionDelivery', null,  array('required' => 'required', 'class' => 'required', 'rows' => 4, 'cols' => 54))}}
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
                            </div>
                        </section>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/service-step-two.js') }}"></script>
@endsection
