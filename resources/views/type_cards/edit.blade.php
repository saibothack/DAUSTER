{{-- \resources\views\kind_persons\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Tipo de tarjeta')

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
                                            Tipo de tarjeta
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

                                                    {{ Form::model($typeCard, array('route' => array('type-cards.update', $typeCard->id), 'method' => 'PUT', 'files'=>'true', 'class' => 'form-validate form-horizontal well')) }}
                                                    <fieldset>
                                                        <legend>Agregar</legend>
                                                        <div class="control-group field-spacer">
                                                            <div class="control-label" style="width: 100% !important; text-align: left !important;">
                                                                        <span class="spacer">
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
                                                        <br>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                {{Form::label('name', 'Nombre *', array('class' => 'hasPopover required'))}}
                                                            </div>
                                                            <div class="controls">
                                                                {{Form::text('name', null,  array('required' => 'required', 'class' => 'required'))}}
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                {{Form::label('code', 'Código *', array('class' => 'hasPopover required'))}}
                                                            </div>
                                                            <div class="controls">
                                                                {{Form::text('code', null,  array('required' => 'required', 'class' => 'required'))}}
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="control-label">
                                                                {{Form::label('image', 'Icono *', array('class' => 'hasPopover required'))}}
                                                            </div>
                                                            <div class="controls">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        {{ Form::file('image', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <img src="{{ asset('images/' . $typeCard->icon) }}" alt="{{$typeCard->icon}}" width="32px">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button class="button btn-primary validate" type="submit">Modificar
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
